{{-- ================================================= --}}
{{-- Cover Publikasi --}}
{{-- ================================================= --}}

<div
    x-data="publicationCoverUploader()"
    class="overflow-hidden rounded-2xl bg-white shadow-sm">

    {{-- ================================================= --}}
    {{-- Header --}}
    {{-- ================================================= --}}

    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                Cover Publikasi

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Upload cover utama publikasi.

            </p>

        </div>

        <div
            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

            <i class="ri-image-line text-xl"></i>

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
            name="cover"
            accept="image/jpeg,image/png,image/webp"
            class="hidden"
            @change="previewImage">


        {{-- ========================================= --}}
        {{-- Upload Area --}}
        {{-- ========================================= --}}

        <div
            @click="$refs.input.click()"
            @dragover.prevent
            @drop.prevent="dropImage"
            class="cursor-pointer rounded-2xl border-2 border-dashed border-gray-300
                   p-6 text-center transition
                   hover:border-red-400 hover:bg-red-50">


            {{-- ========================================= --}}
            {{-- Empty State --}}
            {{-- ========================================= --}}

            <template x-if="!image">

                <div>

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-gray-100">

                        <i
                            class="ri-image-add-line text-3xl text-gray-500">
                        </i>

                    </div>


                    <h3 class="mt-5 text-lg font-semibold text-gray-900">

                        Upload Cover

                    </h3>


                    <p class="mt-2 text-sm leading-6 text-gray-500">

                        Drag & drop cover ke sini
                        atau klik untuk memilih.

                    </p>


                    <p class="mt-3 text-xs text-gray-400">

                        JPG, PNG, WEBP • Maks. 2 MB

                    </p>

                </div>

            </template>


            {{-- ========================================= --}}
            {{-- Preview --}}
            {{-- ========================================= --}}

            <template x-if="image">

                <div>

                    <div
                        class="mx-auto overflow-hidden rounded-xl bg-gray-100 shadow-lg"
                        style="max-width: 240px;">

                        <img
                            :src="image"
                            alt="Preview cover publikasi"
                            class="aspect-[3/4] h-auto w-full object-cover">

                    </div>


                    <div class="mt-5">

                        <h4 class="font-semibold text-gray-900">

                            Cover Siap Digunakan

                        </h4>

                        <p class="mt-1 text-sm text-gray-500">

                            Klik area ini untuk mengganti cover.

                        </p>

                    </div>

                </div>

            </template>

        </div>


        {{-- ========================================= --}}
        {{-- Actions --}}
        {{-- ========================================= --}}

        <div
            x-show="image"
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

                Ganti Cover

            </button>


            <button
                type="button"
                @click="removeImage"
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

        <div class="mt-5 rounded-xl bg-gray-50 p-4">

            <div class="flex items-start gap-3">

                <i class="ri-information-line mt-0.5 text-gray-400"></i>

                <div>

                    <p class="text-sm font-medium text-gray-700">

                        Tips Cover

                    </p>

                    <p class="mt-1 text-sm leading-6 text-gray-500">

                        Gunakan gambar dengan orientasi
                        portrait agar tampilan cover lebih optimal.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>
