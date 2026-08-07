import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

const editor = document.querySelector("#editor");

if (editor) {
    ClassicEditor.create(editor)
        .then(() => console.log("CKEditor Loaded"))
        .catch(console.error);
}
