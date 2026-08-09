{{-- ================================================= --}}
{{-- File Publikasi --}}
{{-- ================================================= --}}

<div
    x-data="publicationFileUploader()"
    class="overflow-hidden rounded-2xl bg-white shadow-sm">

    {{-- ================================================= --}}
    {{-- Header --}}
    {{-- ================================================= --}}

    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                File Publikasi

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Upload file publikasi yang akan dibaca oleh pengunjung.

            </p>

        </div>

        <div
            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

            <i class="ri-file-pdf-2-line text-xl"></i>

        </div>

    </div>


    {{-- ================================================= --}}
    {{-- Body --}}
    {{-- ================================================= --}}

    <div class="p-6">

        {{-- ========================================= --}}
        {{-- File Input --}}
        {{-- ========================================= --}}

        <input
            x-ref="input"
            type="file"
            name="file"
            accept="application/pdf"
            class="hidden"
            @change="selectFile">


        {{-- ========================================= --}}
        {{-- Upload Area --}}
        {{-- ========================================= --}}

        <div
            @click="$refs.input.click()"
            @dragover.prevent
            @drop.prevent="dropFile"
            class="cursor-pointer rounded-2xl border-2 border-dashed border-gray-300
                   p-8 text-center transition
                   hover:border-red-400 hover:bg-red-50">


            {{-- ========================================= --}}
            {{-- Empty State --}}
            {{-- ========================================= --}}

            <template x-if="!file">

                <div>

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center
                               rounded-2xl bg-red-50">

                        <i
                            class="ri-file-pdf-2-line text-3xl text-red-500">
                        </i>

                    </div>


                    <h3 class="mt-5 text-lg font-semibold text-gray-900">

                        Upload File Publikasi

                    </h3>


                    <p class="mt-2 text-sm leading-6 text-gray-500">

                        Drag & drop file PDF ke sini
                        atau klik untuk memilih.

                    </p>


                    <p class="mt-3 text-xs text-gray-400">

                        PDF • Maks. 20 MB

                    </p>

                </div>

            </template>


            {{-- ========================================= --}}
            {{-- File Selected --}}
            {{-- ========================================= --}}

            <template x-if="file">

                <div>

                    <div
                        class="mx-auto flex h-20 w-20 items-center justify-center
                               rounded-2xl bg-red-50">

                        <i
                            class="ri-file-pdf-2-line text-4xl text-red-500">
                        </i>

                    </div>


                    <h4
                        class="mx-auto mt-5 max-w-md truncate
                               font-semibold text-gray-900"
                        x-text="file.name">
                    </h4>


                    <p
                        class="mt-2 text-sm text-gray-500"
                        x-text="formatSize(file.size)">
                    </p>


                    <p class="mt-3 text-xs text-gray-400">

                        Klik untuk mengganti file.

                    </p>

                </div>

            </template>

        </div>


        {{-- ========================================= --}}
        {{-- File Actions --}}
        {{-- ========================================= --}}

        <div
            x-show="file"
            x-cloak
            class="mt-5 flex flex-wrap gap-3">

            <button
                type="button"
                @click="$refs.input.click()"
                class="inline-flex items-center gap-2 rounded-xl
                       border border-gray-300 px-4 py-2
                       text-sm font-medium text-gray-700
                       transition hover:bg-gray-100">

                <i class="ri-refresh-line"></i>

                Ganti File

            </button>


            <button
                type="button"
                @click="removeFile"
                class="inline-flex items-center gap-2 rounded-xl
                       border border-red-200 bg-red-50 px-4 py-2
                       text-sm font-medium text-red-600
                       transition hover:bg-red-100">

                <i class="ri-delete-bin-line"></i>

                Hapus

            </button>

        </div>


        {{-- ========================================= --}}
        {{-- Information --}}
        {{-- ========================================= --}}

        <div class="mt-6 rounded-xl border border-blue-100 bg-blue-50 p-4">

            <div class="flex items-start gap-3">

                <i
                    class="ri-information-line mt-0.5 text-lg text-blue-500">
                </i>

                <div>

                    <p class="text-sm font-medium text-blue-900">

                        Tentang File Publikasi

                    </p>

                    <p class="mt-1 text-sm leading-6 text-blue-700">

                        File PDF ini akan digunakan sebagai sumber
                        untuk menampilkan publikasi dalam bentuk
                        flipbook pada halaman publik.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>
