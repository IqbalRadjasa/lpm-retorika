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
            <div class="flex items-center justify-between gap-4 border-b border-gray-100 px-6 py-5">

                <div>
                    <h2 class="text-lg font-semibold text-gray-900">
                        Media Library
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Pilih media yang ingin digunakan.
                    </p>
                </div>

                <div class="flex items-center gap-3">

                    <button type="button" @click="openUploadMode()"
                        class="inline-flex items-center gap-2 rounded-xl
                   bg-red-600 px-4 py-2.5
                   text-sm font-medium text-white
                   transition hover:bg-red-700">

                        <i class="ri-upload-2-line"></i>

                        <span class="hidden sm:inline">
                            Upload Media Baru
                        </span>

                        <span class="sm:hidden">
                            Upload
                        </span>

                    </button>

                    <button type="button" @click="closeMediaLibrary()"
                        class="flex h-9 w-9 items-center justify-center
                   rounded-full text-gray-400
                   transition hover:bg-gray-100 hover:text-gray-600">

                        <i class="ri-close-line text-xl"></i>

                    </button>

                </div>

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

                        <input type="text" x-model="mediaSearch" @change="loadMedia(1)" placeholder="Cari media..."
                            class="w-full rounded-xl border-gray-300
                                   py-2.5 pl-10 pr-4 text-sm
                                   focus:border-red-500
                                   focus:ring-red-500">

                    </div>


                    {{-- Filters --}}
                    <div class="flex flex-wrap gap-2">

                        {{-- Filter Sort --}}
                        <select name="sort" x-model="mediaSort" @change="loadMedia(1)"
                            class="w-full rounded-xl border-gray-300 focus:border-red-500 focus:ring-red-500 sm:w-40">
                            <option value="">Terbaru</option>
                            <option value="oldest">Terlama</option>
                            <option value="name">Nama A-Z</option>
                        </select>

                        {{-- <button type="button" @click="mediaFilter = 'all'"
                            :class="mediaFilter === 'all'
                                ?
                                'bg-red-600 text-white border-red-600' :
                                'bg-white text-gray-600 border-gray-300'"
                            class="rounded-lg border px-4 py-2
                                   text-sm font-medium transition">

                            Semua

                        </button>

                        <button type="button" @click="mediaFilter = 'gambar'"
                            :class="mediaFilter === 'gambar'
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

                        </button> --}}
                    </div>

                </div>

            </div>

            <template x-if="uploadMode">

                <div class="p-6">

                    {{-- Header --}}
                    <div class="mb-6 flex items-center gap-3">

                        <button type="button" @click="closeUploadMode()"
                            class="flex h-9 w-9 items-center justify-center
                            rounded-full border border-gray-200
                            text-gray-500 transition
                            hover:bg-gray-100">

                            <i class="ri-arrow-left-line"></i>

                        </button>

                        <div>

                            <h3 class="font-semibold text-gray-900">
                                Upload Media Baru
                            </h3>

                            <p class="text-sm text-gray-500">
                                Tambahkan file ke Media Library.
                            </p>

                        </div>

                    </div>


                    {{-- Upload Input --}}
                    <input x-ref="mediaUploadInput" type="file" class="hidden"
                        accept="image/*,video/*,.pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx" @change="handleUploadFile">


                    {{-- No File --}}
                    <template x-if="!uploadFile">

                        <button type="button" @click="$refs.mediaUploadInput.click()"
                            class="flex w-full flex-col items-center
                       justify-center rounded-2xl
                       border-2 border-dashed
                       border-gray-300
                       bg-gray-50 px-6 py-12
                       text-center transition
                       hover:border-red-400
                       hover:bg-red-50">

                            <div
                                class="flex h-16 w-16 items-center
                           justify-center rounded-2xl
                           bg-white shadow-sm">

                                <i class="ri-upload-cloud-2-line
                              text-3xl text-gray-400">
                                </i>

                            </div>

                            <h4 class="mt-5 font-semibold text-gray-800">

                                Pilih file untuk diupload

                            </h4>

                            <p class="mt-2 text-sm text-gray-500">

                                Klik untuk memilih file dari komputer.

                            </p>

                            <p class="mt-3 text-xs text-gray-400">

                                JPG, PNG, WEBP, PDF

                            </p>

                        </button>

                    </template>


                    {{-- File Selected --}}
                    <template x-if="uploadFile">

                        <div class="rounded-2xl border border-gray-200 bg-white p-5">

                            {{-- Image Preview --}}
                            <template x-if="uploadPreview">

                                <div class="mb-5 overflow-hidden rounded-xl bg-gray-100">

                                    <img :src="uploadPreview" :alt="uploadFile?.name"
                                        class="mx-auto max-h-72
                                        w-full object-contain">

                                </div>

                            </template>


                            {{-- File Information --}}
                            <div class="flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 shrink-0
                                items-center justify-center
                                rounded-xl bg-gray-100">

                                    <i class="ri-file-line text-2xl
                                    text-gray-500">
                                    </i>

                                </div>

                                <div class="min-w-0 flex-1">

                                    <p class="truncate text-sm font-medium
                                    text-gray-800"
                                        x-text="uploadFile?.name">
                                    </p>

                                    <p class="mt-1 text-xs text-gray-400"
                                        x-text="formatFileSize(uploadFile?.size || 0)">
                                    </p>

                                </div>

                                <button type="button" @click="closeUploadMode()"
                                    class="flex h-9 w-9 shrink-0
                                    items-center justify-center
                                    rounded-full text-gray-400
                                    hover:bg-gray-100">

                                    <i class="ri-close-line"></i>

                                </button>

                            </div>


                            {{-- Actions --}}
                            <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

                                <button type="button" @click="$refs.mediaUploadInput.click()"
                                    class="inline-flex items-center
                                    justify-center gap-2
                                    rounded-xl border border-gray-300
                                    px-5 py-2.5 text-sm font-medium
                                    text-gray-700
                                    transition hover:bg-gray-50">

                                    <i class="ri-refresh-line"></i>

                                    Ganti File

                                </button>


                                <button type="button" @click="uploadAndSelect()" :disabled="uploading"
                                    class="inline-flex items-center
                                    justify-center gap-2
                                    rounded-xl bg-red-600
                                    px-5 py-2.5 text-sm font-medium
                                    text-white transition
                                    hover:bg-red-700
                                    disabled:cursor-not-allowed
                                    disabled:opacity-60">

                                    <template x-if="!uploading">

                                        <span class="inline-flex items-center gap-2">

                                            <i class="ri-upload-2-line"></i>

                                            Upload & Pilih

                                        </span>

                                    </template>

                                    <template x-if="uploading">

                                        <span class="inline-flex items-center gap-2">

                                            <i class="ri-loader-4-line animate-spin"></i>

                                            Mengupload...

                                        </span>

                                    </template>

                                </button>

                            </div>

                        </div>

                    </template>


                    {{-- Information --}}
                    <div class="mt-5 rounded-xl border border-blue-100
                    bg-blue-50 p-4">

                        <div class="flex gap-3">

                            <i class="ri-information-line
                          mt-0.5 text-lg text-blue-500">
                            </i>

                            <div>

                                <p class="text-sm font-medium text-blue-900">

                                    File akan disimpan di Media Library

                                </p>

                                <p class="mt-1 text-sm leading-6 text-blue-700">

                                    Setelah berhasil diupload, file akan
                                    otomatis dipilih untuk digunakan pada
                                    artikel.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </template>

            {{-- ================================================= --}}
            {{-- Media Grid --}}
            {{-- ================================================= --}}

            <div class="flex-1 overflow-y-auto p-5 sm:p-6">

                {{-- Media --}}
                <div class="relative min-h-[350px]">

                    {{-- Loading Overlay --}}
                    <div x-show="loading" x-transition.opacity.duration.200ms
                        class="absolute inset-0 z-20 flex flex-col items-center justify-center rounded-2xl bg-white/70 backdrop-blur-[2px]">

                        {{-- Spinner Icon --}}
                        <div
                            class="flex items-center gap-2 rounded-xl bg-white px-4 py-3 shadow-lg border border-gray-100">
                            <i class="ri-loader-4-line animate-spin text-2xl text-red-600"></i>
                            <span class="text-sm font-medium text-gray-700">Memuat media...</span>
                        </div>
                    </div>

                    {{-- Grid Media Utama --}}
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-6 lg:grid-cols-6">
                        <template x-for="item in media" :key="item.id">
                            <button type="button" @click="selectMedia(item)"
                                class="group overflow-hidden rounded-xl border bg-white text-left transition hover:shadow-md"
                                :class="pendingMedia?.id === item.id ? 'border-red-500 ring-2 ring-red-500' : 'border-gray-200'">

                                {{-- Preview Media --}}
                                <div
                                    class="relative aspect-square flex items-center justify-center text-center overflow-hidden bg-gray-100">
                                    <template x-if="item.mime_type && item.mime_type.startsWith('image/')">
                                        <img :src="item.url" :alt="item.alt_text || item.name"
                                            class="h-full w-full object-cover transition group-hover:scale-105">
                                    </template>

                                    <template x-if="item.mime_type === 'application/pdf'">
                                        <div>
                                            <div
                                                class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-red-50 text-red-600">
                                                <i class="ri-file-pdf-2-line text-3xl"></i>
                                            </div>
                                            <p class="mt-3 text-xs font-semibold uppercase text-red-600">PDF</p>
                                        </div>
                                    </template>

                                    <template x-if="item.mime_type && item.mime_type.startsWith('video/')">
                                        <div>
                                            <div
                                                class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-red-50 text-red-600">
                                                <i class="ri-video-line text-3xl"></i>
                                            </div>
                                            <p class="mt-3 text-xs font-semibold uppercase text-red-600">Video</p>
                                        </div>
                                    </template>

                                    {{-- Selected Indicator --}}
                                    <div x-show="pendingMedia?.id === item.id"
                                        class="absolute right-2 top-2 flex h-7 w-7 items-center justify-center rounded-full bg-red-600 text-white">
                                        <i class="ri-check-line"></i>
                                    </div>
                                </div>

                                {{-- Info --}}
                                <div class="p-4">
                                    <p class="truncate text-sm font-medium text-gray-900" x-text="item.name"></p>
                                    <p class="mt-1 text-xs text-gray-400">
                                        <span x-text="item.extension || 'FILE'"></span> · <span
                                            x-text="item.size || 'N/A'"></span>
                                    </p>
                                </div>
                            </button>
                        </template>
                    </div>

                    {{-- Empty State (Jika media tidak ditemukan/kosong) --}}
                    <div x-show="!loading && media.length === 0"
                        class="flex flex-col items-center justify-center py-12 text-center">
                        <i class="ri-folder-unknow-line text-4xl text-gray-300"></i>
                        <p class="mt-2 text-sm text-gray-500">Tidak ada media yang ditemukan.</p>
                    </div>

                </div>

                {{-- Pagination --}}
                <div
                    class="mt-6 flex flex-col items-center justify-between gap-4 border-t border-gray-300 pt-4 sm:flex-row">
                    {{-- Informasi Total & Halaman --}}
                    <div class="text-xs text-gray-500">
                        Menampilkan halaman <span class="font-semibold text-gray-800" x-text="currentPage"></span>
                        dari
                        <span class="font-semibold text-gray-800" x-text="lastPage"></span>
                        (<span x-text="total"></span> total media)
                    </div>

                    {{-- Tombol Navigasi Pagination --}}
                    <div
                        class="inline-flex items-center gap-1 rounded-xl border border-gray-200 bg-white p-1 shadow-sm">

                        {{-- Tombol Previous --}}
                        <button type="button" @click="previousPage()" :disabled="currentPage <= 1 || loading"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:opacity-40">
                            <i class="ri-arrow-left-s-line text-lg"></i>
                        </button>

                        {{-- Nomor Halaman Dinamis --}}
                        <div class="flex items-center px-1">
                            <template x-for="page in getPageRange()" :key="page">
                                <button type="button" @click="page !== '...' && loadMedia(page)"
                                    :disabled="page === '...'"
                                    class="h-8 min-w-[32px] rounded-lg px-2 text-xs font-medium transition"
                                    :class="{
                                        'bg-red-600 text-white font-semibold': page === currentPage,
                                        'text-gray-600 hover:bg-gray-100': page !== currentPage && page !== '...',
                                        'text-gray-400 cursor-default': page === '...'
                                    }"
                                    x-text="page">
                                </button>
                            </template>
                        </div>

                        {{-- Tombol Next --}}
                        <button type="button" @click="nextPage()" :disabled="currentPage >= lastPage || loading"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:opacity-40">
                            <i class="ri-arrow-right-s-line text-lg"></i>
                        </button>

                    </div>
                </div>

                {{-- Empty State --}}
                <div x-show="!media" class="py-16 text-center">

                    <i class="ri-folder-open-line text-4xl text-gray-300">
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
