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

function thumbnailUploader() {
    return {
        image: null,

        previewImage(event) {
            const file = event.target.files[0];

            if (!file) return;

            this.image = URL.createObjectURL(file);
        },

        dropImage(event) {
            const file = event.dataTransfer.files[0];

            if (!file) return;

            this.$refs.input.files = event.dataTransfer.files;

            this.image = URL.createObjectURL(file);
        },

        removeImage() {
            this.image = null;

            this.$refs.input.value = "";
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

window.seoHelper = seoHelper;
window.tagsInput = tagsInput;
window.thumbnailUploader = thumbnailUploader;
window.publicationFileUploader = publicationFileUploader;
window.publicationCoverUploader = publicationCoverUploader;

Alpine.start();
