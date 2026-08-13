{{-- ================================================= --}}
{{-- Media Picker --}}
{{-- ================================================= --}}

<div x-show="mediaPickerOpen" x-cloak x-transition.opacity class="fixed inset-0 z-[100] overflow-y-auto"
    @keydown.escape.window="closeMediaLibrary">


    {{-- ================================================= --}}
    {{-- Backdrop --}}
    {{-- ================================================= --}}

    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="closeMediaLibrary">
    </div>


    {{-- ================================================= --}}
    {{-- Modal Wrapper --}}
    {{-- ================================================= --}}

    <div class="relative flex min-h-screen items-center justify-center
               p-4 sm:p-6">


        {{-- ================================================= --}}
        {{-- Modal --}}
        {{-- ================================================= --}}

        <div @click.stop
            class="relative flex w-full max-w-6xl flex-col
                   overflow-hidden rounded-2xl bg-white shadow-2xl"
            style="max-height: calc(100vh - 2rem);">


            {{-- ================================================= --}}
            {{-- Header --}}
            {{-- ================================================= --}}

            <div
                class="flex shrink-0 items-center justify-between
                       border-b border-gray-100 px-5 py-4 sm:px-6">

                <div>

                    <h2 class="text-lg font-semibold text-gray-900">

                        Pilih Media

                    </h2>

                    <p class="mt-1 text-sm text-gray-500">

                        Pilih file dari Media Library.

                    </p>

                </div>


                <button type="button" @click="closeMediaLibrary"
                    class="flex h-9 w-9 items-center justify-center
                           rounded-lg text-gray-400
                           transition hover:bg-gray-100
                           hover:text-gray-700">

                    <i class="ri-close-line text-xl"></i>

                </button>

            </div>


            {{-- ================================================= --}}
            {{-- Toolbar --}}
            {{-- ================================================= --}}

            <div class="shrink-0 border-b border-gray-100
                       bg-gray-50 px-5 py-4 sm:px-6">

                <div
                    class="flex flex-col gap-3
                           lg:flex-row lg:items-center
                           lg:justify-between">


                    {{-- Search --}}
                    <div class="relative w-full lg:max-w-md">

                        <i
                            class="ri-search-line pointer-events-none
                                   absolute left-3 top-1/2
                                   -translate-y-1/2 text-gray-400">
                        </i>

                        <input type="text" x-model="mediaSearch" placeholder="Cari media..."
                            class="w-full rounded-xl border-gray-300
                                   py-2.5 pl-10 pr-4 text-sm
                                   focus:border-red-500
                                   focus:ring-red-500">

                    </div>


                    {{-- Filters --}}
                    <div class="flex flex-wrap gap-2">

                        <button type="button" @click="mediaFilter = 'all'"
                            :class="mediaFilter === 'all'
                                ?
                                'bg-red-600 text-white border-red-600' :
                                'bg-white text-gray-600 border-gray-300'"
                            class="rounded-lg border px-4 py-2
                                   text-sm font-medium transition">

                            Semua

                        </button>

                        <button type="button" @click="mediaFilter = 'image'"
                            :class="mediaFilter === 'image'
                                ?
                                'bg-red-600 text-white border-red-600' :
                                'bg-white text-gray-600 border-gray-300'"
                            class="rounded-lg border px-4 py-2
                                   text-sm font-medium transition">

                            Gambar

                        </button>

                        <button type="button" @click="mediaFilter = 'video'"
                            :class="mediaFilter === 'video'
                                ?
                                'bg-red-600 text-white border-red-600' :
                                'bg-white text-gray-600 border-gray-300'"
                            class="rounded-lg border px-4 py-2
                                   text-sm font-medium transition">

                            Video

                        </button>

                        <button type="button" @click="mediaFilter = 'document'"
                            :class="mediaFilter === 'document'
                                ?
                                'bg-red-600 text-white border-red-600' :
                                'bg-white text-gray-600 border-gray-300'"
                            class="rounded-lg border px-4 py-2
                                   text-sm font-medium transition">

                            Dokumen

                        </button>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- Media Grid --}}
            {{-- ================================================= --}}

            <div class="flex-1 overflow-y-auto p-5 sm:p-6">

                <div
                    class="grid grid-cols-2 gap-4
                           sm:grid-cols-3
                           md:grid-cols-4
                           lg:grid-cols-5">


                    <template x-for="media in filteredMedia" :key="media.id">


                        <button type="button" @click="selectMedia(media)"
                            class="group overflow-hidden rounded-xl
                                   border bg-white text-left
                                   transition hover:shadow-md"
                            :class="pendingMedia?.id === media.id ?
                                'border-red-500 ring-2 ring-red-500' :
                                'border-gray-200'">


                            {{-- Preview --}}
                            <div
                                class="relative aspect-square
                                       overflow-hidden bg-gray-100">


                                {{-- Image --}}
                                <template x-if="media.type === 'image'">

                                    <img :src="media.url" :alt="media.name"
                                        class="h-full w-full object-cover
                                               transition
                                               group-hover:scale-105">

                                </template>


                                {{-- Video --}}
                                <template x-if="media.type === 'video'">

                                    <div
                                        class="flex h-full w-full
                                               items-center justify-center
                                               bg-gray-900">

                                        <i
                                            class="ri-video-line text-4xl
                                                   text-white/80">
                                        </i>

                                    </div>

                                </template>


                                {{-- Document --}}
                                <template x-if="media.type === 'document'">

                                    <div
                                        class="flex h-full w-full
                                               flex-col items-center
                                               justify-center">

                                        <i
                                            class="ri-file-text-line
                                                   text-4xl text-gray-400">
                                        </i>

                                        <span
                                            class="mt-2 text-xs
                                                   font-medium
                                                   uppercase text-gray-400"
                                            x-text="media.extension">
                                        </span>

                                    </div>

                                </template>


                                {{-- Selected Indicator --}}
                                <div x-show="pendingMedia?.id === media.id"
                                    class="absolute right-2 top-2
                                           flex h-7 w-7 items-center
                                           justify-center rounded-full
                                           bg-red-600 text-white">

                                    <i class="ri-check-line"></i>

                                </div>

                            </div>


                            {{-- Information --}}
                            <div class="p-3">

                                <p class="truncate text-sm
                                           font-medium text-gray-800"
                                    x-text="media.name">
                                </p>

                                <p class="mt-1 text-xs text-gray-400" x-text="media.size">
                                </p>

                            </div>

                        </button>

                    </template>

                </div>


                {{-- Empty State --}}
                <div x-show="filteredMedia.length === 0" class="py-16 text-center">

                    <i class="ri-folder-open-line
                               text-4xl text-gray-300">
                    </i>

                    <p class="mt-3 font-medium text-gray-600">

                        Media tidak ditemukan.

                    </p>

                    <p class="mt-1 text-sm text-gray-400">

                        Coba gunakan kata kunci atau filter lain.

                    </p>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- Footer --}}
            {{-- ================================================= --}}

            <div
                class="flex shrink-0 flex-col gap-3
                       border-t border-gray-100
                       bg-white px-5 py-4
                       sm:flex-row sm:items-center
                       sm:justify-between sm:px-6">


                {{-- Selection Information --}}
                <div class="text-sm text-gray-500">

                    <template x-if="pendingMedia">

                        <span>

                            Dipilih:

                            <strong class="font-medium text-gray-700" x-text="pendingMedia.name">
                            </strong>

                        </span>

                    </template>

                    <template x-if="!pendingMedia">

                        <span>

                            Belum ada media yang dipilih.

                        </span>

                    </template>

                </div>


                {{-- Actions --}}
                <div class="flex gap-3">

                    <button type="button" @click="closeMediaLibrary"
                        class="flex-1 rounded-xl border
                               border-gray-300 bg-white
                               px-5 py-2.5 text-sm
                               font-medium text-gray-700
                               transition hover:bg-gray-50
                               sm:flex-none">

                        Batal

                    </button>

                    <button type="button" @click="confirmMediaSelection" :disabled="!pendingMedia"
                        :class="pendingMedia
                            ?
                            'bg-red-600 hover:bg-red-700' :
                            'cursor-not-allowed bg-gray-300'"
                        class="flex-1 rounded-xl px-5 py-2.5
                               text-sm font-medium text-white
                               transition sm:flex-none">

                        Pilih Media

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>
