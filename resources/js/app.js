import "flowbite";
import "./ckeditor";
import "./bootstrap";
import "./media-uploader";

import { PageFlip } from "page-flip";
import * as pdfjsLib from "pdfjs-dist";

import Alpine from "alpinejs";

window.Alpine = Alpine;
window.PageFlip = PageFlip;
window.pdfjsLib = pdfjsLib;

pdfjsLib.GlobalWorkerOptions.workerSrc = new URL(
    "pdfjs-dist/build/pdf.worker.min.mjs",
    import.meta.url
).toString();

function mediaSelector(initialFilter = "all") {
    return {
        initialFilter: initialFilter,
        mediaSearch: "",
        mediaSort: "",
        mediaFilter: initialFilter,

        media: [],
        currentPage: 1,
        lastPage: 1,
        total: 0,
        loading: false,

        mediaPickerOpen: false,
        selectedMedia: null, // Hanya menyimpan 1 objek media
        pendingMedia: null, // Hanya menyimpan 1 objek media sementara
        uploadMode: false,
        uploadFile: null, // Hanya menyimpan 1 file unggahan
        uploadPreview: null,
        uploadFileType: "", // Ditambahkan untuk mendeteksi tipe MIME file
        uploading: false,

        uploadProgress: 0,
        uploadedBytes: 0,
        totalBytes: 0,
        uploadStatus: "",

        async loadMedia(page = 1) {
            this.loading = true;

            try {
                // Buat URLSearchParams agar query otomatis tersusun rapi
                const params = new URLSearchParams({
                    page: page,
                    search: this.mediaSearch || "",
                    filter: this.mediaFilter || "all",
                    sort: this.mediaSort || "",
                });

                const response = await fetch(
                    `/cms/media/selector?${params.toString()}`,
                    {
                        headers: {
                            Accept: "application/json",
                        },
                    }
                );

                if (!response.ok) throw new Error("Gagal mengambil media.");

                const data = await response.json();

                // Menyimpan data dari paginator Laravel
                this.media = data.data;
                this.currentPage = data.current_page;
                this.lastPage = data.last_page;
                this.total = data.total;
            } catch (error) {
                console.error(error);
            } finally {
                this.loading = false;
            }
        },

        // init() {
        //     this.loadMedia();
        // },

        nextPage() {
            if (this.currentPage < this.lastPage) {
                this.loadMedia(this.currentPage + 1);
            }
        },

        previousPage() {
            if (this.currentPage > 1) {
                this.loadMedia(this.currentPage - 1);
            }
        },

        getPageRange() {
            let current = this.currentPage;
            let last = this.lastPage;
            let delta = 1; // Jumlah halaman yang ditampilkan di kiri/kanan halaman aktif
            let range = [];
            let rangeWithDots = [];
            let l;

            for (let i = 1; i <= last; i++) {
                if (
                    i === 1 ||
                    i === last ||
                    (i >= current - delta && i <= current + delta)
                ) {
                    range.push(i);
                }
            }

            for (let i of range) {
                if (l) {
                    if (i - l === 2) {
                        rangeWithDots.push(l + 1);
                    } else if (i - l !== 1) {
                        rangeWithDots.push("...");
                    }
                }
                rangeWithDots.push(i);
                l = i;
            }

            return rangeWithDots;
        },

        openUploadMode() {
            this.uploadMode = true;
            this.uploadFile = null;
            this.uploadPreview = null;
            this.uploadFileType = "";
        },

        closeUploadMode() {
            this.uploadMode = false;
            this.uploadFile = null;
            this.uploadPreview = null;
            this.uploadFileType = "";

            if (this.$refs.mediaUploadInput) {
                this.$refs.mediaUploadInput.value = "";
            }
        },

        handleUploadFile(event) {
            const file = event.target.files[0];

            if (!file) return;

            const allowedTypes = [
                "image/jpeg",
                "image/png",
                "image/webp",
                "application/pdf",
                "video/mp4",
            ];

            if (!allowedTypes.includes(file.type)) {
                alert("Jenis file tidak diperbolehkan.");
                event.target.value = "";
                return;
            }

            const maxSize =
                file.type === "video/mp4"
                    ? 500 * 1024 * 1024
                    : 10 * 1024 * 1024;

            if (file.size > maxSize) {
                alert(
                    file.type === "video/mp4"
                        ? "Ukuran video maksimal 500 MB."
                        : "Ukuran file maksimal 10 MB."
                );

                event.target.value = "";
                return;
            }

            // Revoke previous preview
            if (this.uploadPreview) {
                URL.revokeObjectURL(this.uploadPreview);
            }

            this.uploadFile = file;
            this.uploadFileType = file.type;

            if (
                file.type.startsWith("image/") ||
                file.type.startsWith("video/")
            ) {
                this.uploadPreview = URL.createObjectURL(file);
            } else {
                this.uploadPreview = null;
            }

            // Reset progress
            this.uploadProgress = 0;
            this.uploadedBytes = 0;
            this.totalBytes = file.size;
            this.uploadStatus = "";
        },

        async uploadAndSelect() {
            if (!this.uploadFile) {
                return;
            }

            const uppy = window.mediaUppy;

            if (!uppy) {
                alert("Uploader tidak tersedia.");
                return;
            }

            this.uploading = true;

            this.uploadProgress = 0;
            this.uploadedBytes = 0;
            this.totalBytes = this.uploadFile.size;
            this.uploadStatus = "Memulai upload...";

            try {
                /*
                 * Remove previous Uppy files
                 */
                uppy.cancelAll();

                uppy.getFiles().forEach((file) => {
                    uppy.removeFile(file.id);
                });

                /*
                 * Add selected file to Uppy
                 */
                uppy.addFile({
                    name: this.uploadFile.name,
                    type: this.uploadFile.type,
                    data: this.uploadFile,
                });

                /*
                 * Upload using TUS
                 */
                const result = await uppy.upload();

                /*
                 * Check whether upload actually succeeded
                 */
                if (!result || result.failed?.length > 0) {
                    throw new Error("Upload file gagal.");
                }

                const uploadedFile = result.successful?.[0];

                if (!uploadedFile) {
                    throw new Error(
                        "File berhasil diupload tetapi response tidak ditemukan."
                    );
                }

                /*
                 * TUS upload URL
                 */
                const uploadUrl =
                    uploadedFile.response?.uploadURL ||
                    uploadedFile.response?.uploadUrl ||
                    uploadedFile.uploadURL;

                if (!uploadUrl) {
                    throw new Error("TUS upload URL tidak ditemukan.");
                }

                /*
                 * Extract TUS ID
                 *
                 * Example:
                 *
                 * /tus/abc123
                 *
                 * becomes:
                 *
                 * abc123
                 */
                const tusUploadId = uploadUrl.split("/").filter(Boolean).pop();

                if (!tusUploadId) {
                    throw new Error("TUS upload ID tidak ditemukan.");
                }

                this.uploadProgress = 100;
                this.uploadedBytes = this.totalBytes;

                this.uploadStatus =
                    "Upload selesai. Menyimpan ke Media Library...";

                /*
                 * CSRF
                 */
                const csrfToken = document
                    .querySelector('meta[name="csrf-token"]')
                    ?.getAttribute("content");

                /*
                 * Finalize
                 */
                const finalizeResponse = await fetch("/cms/media/finalize", {
                    method: "POST",

                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },

                    body: JSON.stringify({
                        name: this.uploadFile.name,
                        alt_text: null,
                        tus_upload_id: tusUploadId,
                    }),
                });

                const data = await finalizeResponse.json();
                console.log("wlawaer");
                console.log(data);

                if (!finalizeResponse.ok) {
                    throw new Error(
                        data.message || "Gagal menyimpan Media Library."
                    );
                }

                /*
                 * Build media object
                 */
                const newMedia = {
                    id: data.media.id,
                    name: data.media.name,
                    url: data.media.original_url,
                    mime_type: data.media.mime_type,
                };

                /*
                 * Automatically select uploaded media
                 */
                this.pendingMedia = newMedia;

                /*
                 * Add to current media list
                 */
                this.media.unshift(newMedia);

                this.uploadStatus = "Media berhasil disimpan.";

                /*
                 * Close upload mode
                 */
                setTimeout(() => {
                    this.closeUploadMode();
                    /*
                     * Automatically confirm selection
                     */

                    console.log(newMedia);
                    this.selectedMedia = newMedia;
                    this.mediaPickerOpen = false;
                    this.pendingMedia = null;
                }, 500);
            } catch (error) {
                console.error("Media selector upload error:", error);

                this.uploadStatus = "Upload gagal.";

                alert(error.message || "Upload media gagal.");
            } finally {
                this.uploading = false;
            }
        },

        formatFileSize(bytes) {
            if (bytes === 0) return "0 Bytes";

            const units = ["Bytes", "KB", "MB", "GB"];
            const index = Math.floor(Math.log(bytes) / Math.log(1024));

            return (
                parseFloat((bytes / Math.pow(1024, index)).toFixed(2)) +
                " " +
                units[index]
            );
        },

        openMediaLibrary() {
            this.mediaPickerOpen = true;
            this.mediaSearch = "";
            this.mediaSort = "";
            this.mediaFilter = this.initialFilter;
            this.pendingMedia = this.selectedMedia;

            this.loadMedia(1);
        },

        closeMediaLibrary() {
            this.mediaPickerOpen = false;
            this.pendingMedia = null;
        },

        // Mengatur pilihan single item
        selectMedia(media) {
            this.pendingMedia = media;
        },

        confirmMediaSelection() {
            if (!this.pendingMedia) return;

            this.selectedMedia = this.pendingMedia;
            this.mediaPickerOpen = false;
            this.pendingMedia = null;
        },

        removeMedia() {
            this.selectedMedia = null;
        },
    };
}

function seoHelper() {
    return {
        seoTitle: "",

        metaDescription: "",

        slug: "",
    };
}

function tagsInput() {
    return {
        input: "",

        tags: [],

        maxTags: 10,

        addTag() {
            const value = this.input.trim();

            if (!value) return;

            if (this.tags.length >= this.maxTags) {
                this.input = "";

                return;
            }

            const exists = this.tags.some(
                (tag) => tag.toLowerCase() === value.toLowerCase()
            );

            if (exists) {
                this.input = "";

                return;
            }

            this.tags.push(value);

            this.input = "";
        },

        removeTag(index) {
            this.tags.splice(index, 1);
        },
    };
}

function publicationCoverUploader() {
    return {
        image: null,

        previewImage(event) {
            const file = event.target.files[0];

            if (!file) return;

            this.image = URL.createObjectURL(file);
        },

        dropImage(event) {
            const files = event.dataTransfer.files;

            if (!files.length) return;

            const file = files[0];

            if (!file.type.startsWith("image/")) return;

            this.$refs.input.files = files;

            this.image = URL.createObjectURL(file);
        },

        removeImage() {
            this.image = null;

            this.$refs.input.value = "";
        },
    };
}

function publicationFileUploader() {
    return {
        file: null,

        selectFile(event) {
            const selectedFile = event.target.files[0];

            if (!selectedFile) return;

            if (selectedFile.type !== "application/pdf") {
                this.file = null;
                this.$refs.input.value = "";

                alert("File yang dipilih harus berupa PDF.");

                return;
            }

            this.file = selectedFile;
        },

        dropFile(event) {
            const files = event.dataTransfer.files;

            if (!files.length) return;

            const selectedFile = files[0];

            if (selectedFile.type !== "application/pdf") {
                alert("File yang dipilih harus berupa PDF.");

                return;
            }

            this.$refs.input.files = files;

            this.file = selectedFile;
        },

        removeFile() {
            this.file = null;

            this.$refs.input.value = "";
        },

        formatSize(bytes) {
            if (bytes < 1024) {
                return `${bytes} B`;
            }

            if (bytes < 1024 * 1024) {
                return `${(bytes / 1024).toFixed(1)} KB`;
            }

            return `${(bytes / (1024 * 1024)).toFixed(1)} MB`;
        },
    };
}

function mediaUploader() {
    return {
        file: null,
        dragging: false,

        uploading: false,
        uploadProgress: 0,
        uploadedBytes: 0,
        totalBytes: 0,
        uploadStatus: "",

        init() {
            this.setupUppyEvents();
        },

        setupUppyEvents() {
            const uppy = window.mediaUppy;

            if (!uppy) {
                console.error("Uppy instance tidak ditemukan.");
                return;
            }

            // Upload progress
            uppy.on("upload-progress", (file, progress) => {
                if (!file) return;

                this.uploadedBytes = progress.bytesUploaded ?? 0;
                this.totalBytes = progress.bytesTotal ?? file.size ?? 0;

                if (this.totalBytes > 0) {
                    this.uploadProgress = Math.round(
                        (this.uploadedBytes / this.totalBytes) * 100
                    );
                }

                this.uploadStatus = "Mengupload file...";
            });

            // Upload success
            uppy.on("upload-success", (file, response) => {
                this.uploadProgress = 100;
                this.uploadedBytes = this.totalBytes;
                this.uploadStatus =
                    "Upload selesai. Menyimpan ke Media Library...";

                this.finalizeUpload(response);
            });

            // Upload error
            uppy.on("upload-error", (file, error) => {
                console.error("Upload error:", error);

                this.uploading = false;
                this.uploadStatus = "Upload gagal.";

                alert("Upload file gagal.");
            });
        },

        handleFiles(event) {
            const selectedFile = event.target.files[0];

            if (!selectedFile) {
                return;
            }

            this.addFile(selectedFile);
        },

        handleDrop(event) {
            this.dragging = false;

            const droppedFile = event.dataTransfer.files[0];

            if (!droppedFile) {
                return;
            }

            this.addFile(droppedFile);
        },

        addFile(file) {
            const allowedTypes = [
                "image/jpeg",
                "image/png",
                "image/webp",
                "application/pdf",
                "video/mp4",
            ];

            if (!allowedTypes.includes(file.type)) {
                alert("Jenis file tidak diperbolehkan.");
                return;
            }

            /*
             * Size validation.
             *
             * Images/PDF: 10 MB
             * MP4: 500 MB
             */
            const maxSize =
                file.type === "video/mp4"
                    ? 500 * 1024 * 1024
                    : 10 * 1024 * 1024;

            if (file.size > maxSize) {
                alert(
                    file.type === "video/mp4"
                        ? "Ukuran video maksimal 500 MB."
                        : "Ukuran file maksimal 10 MB."
                );

                return;
            }

            // Remove previous file from Uppy
            window.mediaUppy.cancelAll();

            window.mediaUppy.getFiles().forEach((uppyFile) => {
                window.mediaUppy.removeFile(uppyFile.id);
            });

            // Revoke old preview
            if (this.file?.preview) {
                URL.revokeObjectURL(this.file.preview);
            }

            let preview = null;

            if (
                file.type.startsWith("image/") ||
                file.type.startsWith("video/")
            ) {
                preview = URL.createObjectURL(file);
            }

            this.file = {
                name: file.name,
                size: file.size,
                type: file.type,
                raw: file,
                preview: preview,
            };

            this.uploadProgress = 0;
            this.uploadedBytes = 0;
            this.totalBytes = file.size;
            this.uploadStatus = "";

            window.mediaUppy.addFile({
                name: file.name,
                type: file.type,
                data: file,
            });
        },

        removeFile() {
            if (this.file?.preview) {
                URL.revokeObjectURL(this.file.preview);
            }

            window.mediaUppy.cancelAll();

            window.mediaUppy.getFiles().forEach((uppyFile) => {
                window.mediaUppy.removeFile(uppyFile.id);
            });

            this.file = null;

            this.uploading = false;
            this.uploadProgress = 0;
            this.uploadedBytes = 0;
            this.totalBytes = 0;
            this.uploadStatus = "";

            if (this.$refs.fileInput) {
                this.$refs.fileInput.value = "";
            }
        },

        clearFiles() {
            this.removeFile();
        },

        async upload() {
            if (!this.file) {
                return;
            }

            const name = document.getElementById("name")?.value;

            if (!name) {
                alert("Nama Media wajib diisi.");
                return;
            }

            this.uploading = true;
            this.uploadProgress = 0;
            this.uploadedBytes = 0;
            this.totalBytes = this.file.size;
            this.uploadStatus = "Memulai upload...";

            try {
                const result = await window.mediaUppy.upload();

                if (result.failed.length > 0) {
                    throw new Error(
                        result.failed[0]?.error || "Upload file gagal."
                    );
                }

                if (result.successful.length === 0) {
                    throw new Error("Tidak ada file yang berhasil diupload.");
                }
            } catch (error) {
                console.error("Uppy upload error:", error);

                this.uploading = false;
                this.uploadStatus = "Upload gagal.";

                alert(error.message);
            }
        },

        async finalizeUpload(response) {
            try {
                /*
                 * TUS returns the upload URL in the Location header.
                 */
                const uploadUrl =
                    response?.uploadURL ||
                    response?.uploadUrl ||
                    response?.location;

                if (!uploadUrl) {
                    throw new Error(
                        "Upload berhasil tetapi TUS upload URL tidak ditemukan."
                    );
                }

                /*
                 * Example:
                 *
                 * /tus/abc123
                 *
                 * We only need:
                 *
                 * abc123
                 */
                const tusUploadId = uploadUrl.split("/").filter(Boolean).pop();

                if (!tusUploadId) {
                    throw new Error("TUS upload ID tidak ditemukan.");
                }

                this.uploadStatus =
                    "Upload selesai. Menyimpan ke Media Library...";

                const name = document.getElementById("name")?.value;
                const altText = document.getElementById("alt_text")?.value;

                const csrfToken = document.querySelector(
                    'input[name="_token"]'
                )?.value;

                const finalizeResponse = await fetch("/cms/media/finalize", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    body: JSON.stringify({
                        name: name,
                        alt_text: altText || null,
                        tus_upload_id: tusUploadId,
                    }),
                });

                const data = await finalizeResponse.json();

                if (!finalizeResponse.ok) {
                    throw new Error(
                        data.message || "Gagal menyimpan Media Library."
                    );
                }

                this.uploadProgress = 100;
                this.uploadStatus = "Media berhasil disimpan ke Media Library.";

                /*
                 * Give the user a moment to see 100%.
                 */
                setTimeout(() => {
                    window.location.href = "/cms/media";
                }, 700);
            } catch (error) {
                console.error("Finalize error:", error);

                this.uploading = false;

                this.uploadStatus =
                    "Upload selesai, tetapi gagal menyimpan Media Library.";

                alert(error.message);
            }
        },

        formatSize(bytes) {
            if (!bytes) {
                return "0 B";
            }

            if (bytes < 1024) {
                return `${bytes} B`;
            }

            if (bytes < 1024 * 1024) {
                return `${(bytes / 1024).toFixed(1)} KB`;
            }

            if (bytes < 1024 * 1024 * 1024) {
                return `${(bytes / (1024 * 1024)).toFixed(1)} MB`;
            }

            return `${(bytes / (1024 * 1024 * 1024)).toFixed(2)} GB`;
        },
    };
}

window.seoHelper = seoHelper;
window.tagsInput = tagsInput;
window.mediaSelector = mediaSelector;
window.mediaUploader = mediaUploader;
// window.thumbnailUploader = thumbnailUploader;
window.publicationFileUploader = publicationFileUploader;
window.publicationCoverUploader = publicationCoverUploader;

Alpine.start();
