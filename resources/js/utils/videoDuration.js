export function getVideoDurationSeconds(file) {
    return new Promise((resolve) => {
        if (!file) {
            resolve(null);
            return;
        }

        const isMov = file.name?.toLowerCase().endsWith(".mov");
        const isVideo = file.type?.startsWith("video/") || isMov;

        if (!isVideo) {
            resolve(null);
            return;
        }

        const video = document.createElement("video");
        video.preload = "metadata";

        const cleanup = () => {
            if (video.src) {
                URL.revokeObjectURL(video.src);
            }
            video.removeAttribute("src");
            video.load();
        };

        video.onloadedmetadata = () => {
            const duration =
                Number.isFinite(video.duration) && video.duration > 0
                    ? Math.round(video.duration)
                    : null;
            cleanup();
            resolve(duration);
        };

        video.onerror = () => {
            cleanup();
            resolve(null);
        };

        video.src = URL.createObjectURL(file);
    });
}