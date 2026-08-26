import { PageFlip } from "page-flip";
import { getDocument, GlobalWorkerOptions } from "pdfjs-dist";

GlobalWorkerOptions.workerSrc = new URL(
    "pdfjs-dist/build/pdf.worker.min.mjs",
    import.meta.url
).href;

/**
 * Meng-inisialisasi Flipbook dari URL PDF
 * @param {string|HTMLElement} elementOrSelector - ID/Class container (contoh: '#flipbook') atau elemen DOM
 * @param {string} pdfUrl - URL file PDF yang ingin dimuat
 */
export async function initFlipbook(elementOrSelector, pdfUrl) {
    const container =
        typeof elementOrSelector === "string"
            ? document.querySelector(elementOrSelector)
            : elementOrSelector;

    if (!container || !pdfUrl) return;

    try {
        // Kosongkan container dari sisa render sebelumnya (jika ada)
        container.innerHTML = "";

        const loadingTask = getDocument({ url: pdfUrl });
        const pdf = await loadingTask.promise;
        const pages = [];

        for (let i = 1; i <= pdf.numPages; i++) {
            const page = await pdf.getPage(i);
            const viewport = page.getViewport({ scale: 2 });

            const canvas = document.createElement("canvas");
            const context = canvas.getContext("2d");

            canvas.width = viewport.width;
            canvas.height = viewport.height;

            await page.render({
                canvasContext: context,
                viewport,
            }).promise;

            const wrapper = document.createElement("div");
            wrapper.classList.add("page");
            wrapper.appendChild(canvas);

            pages.push(wrapper);
        }

        const pageFlip = new PageFlip(container, {
            width: 450,
            height: 620,
            size: "stretch",
            minWidth: 280,
            maxWidth: 650,
            minHeight: 400,
            maxHeight: 900,
            showCover: true,
            mobileScrollSupport: false,
            maxShadowOpacity: 0.4,
        });

        pageFlip.loadFromHTML(pages);
        return pageFlip;
    } catch (err) {
        console.error("Gagal memuat Flipbook PDF:", err);
    }
}

// Otomatis jalankan jika menemukan elemen dengan attribute `data-pdf-url`
document.addEventListener("DOMContentLoaded", () => {
    const defaultContainer = document.getElementById("flipbook");
    if (defaultContainer && defaultContainer.dataset.pdfUrl) {
        initFlipbook(defaultContainer, defaultContainer.dataset.pdfUrl);
    }
});
