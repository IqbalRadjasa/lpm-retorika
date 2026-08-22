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

function mediaSelector() {
    return {
        mediaPickerOpen: false,
        mediaSearch: "",
        mediaFilter: "all",
        selectedMedia: null, // Hanya menyimpan 1 objek media
        pendingMedia: null, // Hanya menyimpan 1 objek media sementara
        uploadMode: false,
        uploadFile: null, // Hanya menyimpan 1 file unggahan
        uploadPreview: null,
        uploadFileType: "", // Ditambahkan untuk mendeteksi tipe MIME file
        uploading: false,

        media: [
            {
                id: 1,
                name: "kegiatan-mahasiswa.jpg",
                type: "image",
                extension: "JPG",
                size: "1.2 MB",
                url: "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80",
            },
            {
                id: 2,
                name: "rapat-organisasi.jpg",
                type: "image",
                extension: "JPG",
                size: "980 KB",
                url: "https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=800&q=80",
            },
            {
                id: 3,
                name: "mahasiswa-kampus.jpg",
                type: "image",
                extension: "PNG",
                size: "1.5 MB",
                url: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80",
            },
            {
                id: 4,
                name: "seminar-kampus.jpg",
                type: "image",
                extension: "WEBP",
                size: "870 KB",
                url: "https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80",
            },
            {
                id: 5,
                name: "podcast-retorika.mp4",
                type: "video",
                extension: "MP4",
                size: "85 MB",
                url: "",
            },
            {
                id: 6,
                name: "proposal-kegiatan.pdf",
                type: "document",
                extension: "PDF",
                size: "2.4 MB",
                url: "",
            },
        ],

        get filteredMedia() {
            const search = this.mediaSearch.toLowerCase().trim();

            return this.media.filter((media) => {
                const matchesFilter =
                    this.mediaFilter === "all" ||
                    media.type === this.mediaFilter;

                const matchesSearch =
                    !search || media.name.toLowerCase().includes(search);

                return matchesFilter && matchesSearch;
            });
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

        // PERBAIKAN 1: Menangani penentuan preview 1 file (Gambar/Video)
        handleUploadFile(event) {
            const file = event.target.files[0]; // Memastikan hanya mengambil file pertama

            if (!file) return;

            this.uploadFile = file;
            this.uploadFileType = file.type;

            // Membuat preview URL jika berupa Gambar atau Video
            if (
                file.type.startsWith("image/") ||
                file.type.startsWith("video/")
            ) {
                this.uploadPreview = URL.createObjectURL(file);
            } else {
                this.uploadPreview = null;
            }
        },

        // PERBAIKAN 2: Penentuan tipe media yang lebih spesifik (image, video, document)
        async uploadAndSelect() {
            if (!this.uploadFile) return;

            this.uploading = true;

            setTimeout(() => {
                // Menentukan kategori media
                let mediaType = "document";
                if (this.uploadFile.type.startsWith("image/")) {
                    mediaType = "image";
                } else if (this.uploadFile.type.startsWith("video/")) {
                    mediaType = "video";
                }

                const newMedia = {
                    id: Date.now(),
                    name: this.uploadFile.name,
                    type: mediaType,
                    extension: this.uploadFile.name
                        .split(".")
                        .pop()
                        .toUpperCase(),
                    size: this.formatFileSize(this.uploadFile.size),
                    url: this.uploadPreview,
                };

                // Menambahkan data baru ke daftar paling atas
                this.media.unshift(newMedia);

                // Langsung memilih file yang baru saja diunggah ini sebagai file tunggal
                this.pendingMedia = newMedia;

                this.uploading = false;

                this.closeUploadMode();
            }, 800);
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
            this.mediaFilter = "all";
            this.pendingMedia = this.selectedMedia;
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
                console.log("=== TUS UPLOAD SUCCESS ===");
                console.log("File:", file);
                console.log("Response:", response);

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

                console.log("=== UPPY RESULT ===");
                console.log(result);

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
            console.log("=== FINALIZE STARTED ===");
            console.log("TUS response:", response);

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

                console.log("Sending finalize request...");
                console.log({
                    name,
                    altText,
                    tusUploadId,
                });
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

                console.log("Finalize HTTP status:", finalizeResponse.status);

                const data = await finalizeResponse.json();

                console.log("Finalize response:", data);
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
