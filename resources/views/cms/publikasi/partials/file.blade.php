{{-- ================================================= --}}
{{-- File Publikasi --}}
{{-- ================================================= --}}
@php
    $media = $mode === 'edit' && isset($publikasi) ? $publikasi->doc_asset?->getFirstMedia('library') : null;

    $initialMedia = $media
        ? [
            'id' => $media->id,
            'name' => $media->name,
            'url' => $media->original_url,
            'mime_type' => $media->mime_type,
            'size' => $media->human_readable_size,
        ]
        : null;
@endphp
<div x-data='mediaSelector("document", @json($initialMedia))'
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

        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

            <i class="ri-file-pdf-2-line text-xl"></i>

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

                    <i class="ri-file-pdf-2-line text-3xl text-red-500">
                    </i>

                </div>

                <h3 class="mt-5 text-lg font-semibold text-gray-900">
                    Upload File Publikasi
                </h3>

                <p class="mx-auto mt-2 max-w-sm text-sm leading-6 text-gray-500">
                    Drag & drop file PDF ke sini
                    atau klik untuk memilih.
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
                <div class="text-center">

                    <i class="ri-file-pdf-2-line text-[50px] text-red-600">
                    </i>

                    <p class="text-sm font-semibold text-red-600">
                        PDF
                    </p>

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

                                <span
                                    x-text="selectedMedia.extension || formatMimeType(selectedMedia.mime_type) || 'FILE'"></span>

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

                        Ganti Dokumen

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

        <input type="hidden" name="doc_id" :value="selectedMedia ? selectedMedia.id : ''">
    </div>


    {{-- Media Picker --}}
    @include('components.cms.media-picker')
</div>
