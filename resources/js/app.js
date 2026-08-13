import "./bootstrap";
import "flowbite";
import "./ckeditor";

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

        selectedMedia: null,

        pendingMedia: null,

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
                    !search ||
                    media.name.toLowerCase().includes(search);

                return matchesFilter && matchesSearch;
            });
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
// function thumbnailUploader() {
//     return {
//         image: null,

//         previewImage(event) {
//             const file = event.target.files[0];

//             if (!file) return;

//             this.image = URL.createObjectURL(file);
//         },

//         dropImage(event) {
//             const file = event.dataTransfer.files[0];

//             if (!file) return;

//             this.$refs.input.files = event.dataTransfer.files;

//             this.image = URL.createObjectURL(file);
//         },

//         removeImage() {
//             this.image = null;

//             this.$refs.input.value = "";
//         },
//     };
// }

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
        files: [],

        dragging: false,

        handleFiles(event) {
            this.addFiles(event.target.files);
        },

        handleDrop(event) {
            this.dragging = false;

            this.addFiles(event.dataTransfer.files);
        },

        addFiles(fileList) {
            Array.from(fileList).forEach((file) => {
                const allowedTypes = [
                    "image/jpeg",
                    "image/png",
                    "image/webp",
                    "application/pdf",
                ];

                if (!allowedTypes.includes(file.type)) {
                    return;
                }

                if (file.size > 10 * 1024 * 1024) {
                    return;
                }

                const exists = this.files.some(
                    (existing) =>
                        existing.name === file.name &&
                        existing.size === file.size
                );

                if (exists) {
                    return;
                }

                let preview = null;

                if (file.type.startsWith("image/")) {
                    preview = URL.createObjectURL(file);
                }

                this.files.push({
                    file: file,

                    name: file.name,

                    size: file.size,

                    type: file.type,

                    preview: preview,
                });
            });
        },

        removeFile(index) {
            const file = this.files[index];

            if (file.preview) {
                URL.revokeObjectURL(file.preview);
            }

            this.files.splice(index, 1);
        },

        clearFiles() {
            this.files.forEach((file) => {
                if (file.preview) {
                    URL.revokeObjectURL(file.preview);
                }
            });

            this.files = [];

            this.$refs.fileInput.value = "";
        },

        formatSize(bytes) {
            if (bytes < 1024) {
                return bytes + " B";
            }

            if (bytes < 1024 * 1024) {
                return (bytes / 1024).toFixed(1) + " KB";
            }

            return (bytes / (1024 * 1024)).toFixed(1) + " MB";
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
