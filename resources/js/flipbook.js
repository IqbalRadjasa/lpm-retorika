import { PageFlip } from "page-flip";
import { getDocument, GlobalWorkerOptions } from "pdfjs-dist";

GlobalWorkerOptions.workerSrc = new URL(
    "pdfjs-dist/build/pdf.worker.min.mjs",
    import.meta.url
).href;

const container = document.getElementById("flipbook");

if (container) {
    const pdfUrl = "/storage/majalah/kasus-korupsi.pdf";

    const loadingTask = getDocument({
        url: pdfUrl,
    });

    loadingTask.promise
        .then(async (pdf) => {
            const pages = [];

            for (let i = 1; i <= pdf.numPages; i++) {
                const page = await pdf.getPage(i);

                const viewport = page.getViewport({
                    scale: 2,
                });

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
        })
        .catch((err) => {
            console.error(err);
        });
}
