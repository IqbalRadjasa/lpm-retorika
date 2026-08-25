<div x-data='mediaSelector("gambar")' class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

    {{-- ================================================= --}}
    {{-- Header --}}
    {{-- ================================================= --}}

    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                Thumbnail

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Pilih gambar utama yang akan mewakili publikasi.

            </p>

        </div>

        <div
            class="flex h-11 w-11 shrink-0 items-center justify-center
                   rounded-xl bg-purple-50 text-purple-600">

            <i class="ri-image-line text-xl"></i>

        </div>

    </div>


    {{-- ================================================= --}}
    {{-- Body --}}
    {{-- ================================================= --}}

    <div class="p-6">

        {{-- ================================================= --}}
        {{-- No Media Selected --}}
        {{-- ================================================= --}}

        <template x-if="!selectedMedia">

            <div
                class="rounded-2xl border-2 border-dashed border-gray-300
                       bg-gray-50 p-8 text-center">

                <div
                    class="mx-auto flex h-16 w-16 items-center
                           justify-center rounded-2xl bg-white shadow-sm">

                    <i class="ri-image-add-line text-3xl text-gray-400"></i>

                </div>

                <h3 class="mt-5 text-lg font-semibold text-gray-900">

                    Belum ada thumbnail

                </h3>

                <p class="mx-auto mt-2 max-w-sm text-sm leading-6 text-gray-500">

                    Pilih gambar dari Media Library untuk digunakan
                    sebagai thumbnail publikasi.

                </p>

                <button type="button" @click="openMediaLibrary"
                    class="mt-6 inline-flex items-center gap-2
                           rounded-xl bg-red-600 px-5 py-3
                           font-medium text-white
                           transition hover:bg-red-700">

                    <i class="ri-image-add-line"></i>

                    Pilih dari Media

                </button>

            </div>

        </template>


        {{-- ================================================= --}}
        {{-- Selected Media --}}
        {{-- ================================================= --}}
        <template x-if="selectedMedia">

            <div>

                {{-- Preview --}}
                <div class="overflow-hidden rounded-2xl border border-gray-200
                           bg-gray-100">

                    <img :src="selectedMedia.url" :alt="selectedMedia.name" class="max-h-80 w-full object-contain">

                </div>


                {{-- Media Information --}}
                <div class="mt-4">

                    <div
                        class="flex flex-col gap-4
                               sm:flex-row sm:items-start
                               sm:justify-between">

                        <div class="min-w-0">

                            <p class="truncate font-semibold text-gray-900" x-text="selectedMedia.name">
                            </p>

                            <p class="mt-1 text-sm text-gray-500">

                                <span x-text="selectedMedia.extension || 'FILE'"></span>

                                <span class="mx-1 text-gray-300">
                                    •
                                </span>

                                <span x-text="selectedMedia.size"></span>

                            </p>

                        </div>

                        <span
                            class="inline-flex shrink-0 items-center gap-2
                                   rounded-full bg-green-50 px-3 py-1.5
                                   text-xs font-medium text-green-700">

                            <i class="ri-checkbox-circle-line"></i>

                            Dipilih

                        </span>

                    </div>

                </div>


                {{-- Actions --}}
                <div class="mt-5 flex flex-col gap-3 sm:flex-row">

                    <button type="button" @click="openMediaLibrary"
                        class="inline-flex items-center justify-center
                               gap-2 rounded-xl border border-gray-300
                               bg-white px-4 py-2.5 text-sm font-medium
                               text-gray-700 transition hover:bg-gray-50">

                        <i class="ri-image-edit-line"></i>

                        Ganti Gambar

                    </button>

                    <button type="button" @click="removeMedia"
                        class="inline-flex items-center justify-center
                               gap-2 rounded-xl border border-red-200
                               bg-red-50 px-4 py-2.5 text-sm font-medium
                               text-red-600 transition hover:bg-red-100">

                        <i class="ri-delete-bin-line"></i>

                        Hapus

                    </button>

                </div>

            </div>

        </template>


        {{-- ================================================= --}}
        {{-- Hidden Input --}}
        {{-- ================================================= --}}

        <input type="hidden" name="thumbnail_id" :value="selectedMedia ? selectedMedia.id : ''">


        {{-- ================================================= --}}
        {{-- Information --}}
        {{-- ================================================= --}}

        <div class="mt-6 flex items-start gap-3 rounded-xl
                   bg-gray-50 p-4">

            <i class="ri-information-line mt-0.5
                       text-gray-400">
            </i>

            <p class="text-sm leading-6 text-gray-500">

                Gunakan gambar yang relevan dengan isi publikasi.
                Disarankan menggunakan gambar dengan rasio
                <strong class="font-medium text-gray-700">
                    16:9
                </strong>
                untuk hasil tampilan yang optimal.

            </p>

        </div>

    </div>


    {{-- Media Picker --}}
    @include('components.cms.media-picker')
</div>
