import Uppy from "@uppy/core";
import Tus from "@uppy/tus";

const uppy = new Uppy({
    autoProceed: false,

    restrictions: {
        maxNumberOfFiles: 1,

        allowedFileTypes: [".jpg", ".jpeg", ".png", ".webp", ".mp4", ".pdf"],
    },
});

uppy.use(Tus, {
    endpoint: "/tus",
    limit: 1,
    chunkSize: 10 * 1024 * 1024,
});

uppy.on("upload-progress", (file, progress) => {
    if (!file || !progress.bytesTotal) {
        return;
    }

    const percentage = Math.round(
        (progress.bytesUploaded / progress.bytesTotal) * 100
    );

    window.dispatchEvent(
        new CustomEvent("media-upload-progress", {
            detail: {
                percentage,
                bytesUploaded: progress.bytesUploaded,
                bytesTotal: progress.bytesTotal,
            },
        })
    );
});

uppy.on("upload-success", (file, response) => {
    window.dispatchEvent(
        new CustomEvent("media-upload-success", {
            detail: {
                file,
                response,
            },
        })
    );
});

uppy.on("upload-error", (file, error) => {
    window.dispatchEvent(
        new CustomEvent("media-upload-error", {
            detail: {
                file,
                error,
            },
        })
    );
});

window.mediaUppy = uppy;
