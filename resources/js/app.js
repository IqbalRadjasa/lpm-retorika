import "./bootstrap";
import "flowbite";

import { PageFlip } from "page-flip";
import * as pdfjsLib from "pdfjs-dist";


import Alpine from "alpinejs";

window.Alpine = Alpine;
window.PageFlip = PageFlip;
window.pdfjsLib = pdfjsLib;

Alpine.start();

pdfjsLib.GlobalWorkerOptions.workerSrc = new URL(
    "pdfjs-dist/build/pdf.worker.min.mjs",
    import.meta.url
).toString();
