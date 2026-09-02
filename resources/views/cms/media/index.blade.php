<x-cms-layout>

    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Page Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">

            <div>

                <h1 class="text-xl font-semibold text-gray-900">
                    Media
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola gambar dan dokumen yang digunakan pada website.
                </p>

            </div>


            <x-link-button.primary-link :href="route('cms.media.create')" icon="ri-upload-2-line">

                Upload Media

            </x-link-button.primary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Media Summary --}}
        {{-- ================================================= --}}

        <div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-4">

            {{-- Total Media --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Total Media
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalMedia }}
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">

                        <i class="ri-folder-3-line text-xl"></i>

                    </div>

                </div>

            </div>

            {{-- Images --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Gambar
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalMediaGambar }}
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

                        <i class="ri-image-line text-xl"></i>

                    </div>

                </div>

            </div>

            {{-- Documents --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Dokumen
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalMediaDok }}
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                        <i class="ri-file-text-line text-xl"></i>

                    </div>

                </div>

            </div>

            {{-- Video --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Video
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalMediaVid }}
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                        <i class="ri-video-line text-xl"></i>

                    </div>

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Media Library --}}
        {{-- ================================================= --}}

        <div class="rounded-2xl bg-white shadow-sm">

            {{-- ================================================= --}}
            {{-- Filters --}}
            {{-- ================================================= --}}

            <div class="border-b border-gray-100 p-6">
                <form action="{{ url()->current() }}" method="GET"
                    class="grid gap-4 lg:grid-cols-[1fr_220px_220px_220px_auto]">

                    <x-form.text-input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Cari nama file..." />

                    <x-form.select-input name="type">
                        <option value="" {{ request('type') == '' ? 'selected' : '' }}>
                            Semua Media
                        </option>
                        <option value="image" {{ request('type') == 'image' ? 'selected' : '' }}>
                            Gambar
                        </option>
                        <option value="document" {{ request('type') == 'document' ? 'selected' : '' }}>
                            Dokumen
                        </option>
                        <option value="video" {{ request('type') == 'video' ? 'selected' : '' }}>
                            Video
                        </option>
                    </x-form.select-input>

                    <x-form.select-input name="sort">
                        <option value="">
                            Semua Status
                        </option>
                        <option value="" {{ request('sort') == '' ? 'selected' : '' }}>
                            Terbaru
                        </option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                            Terlama
                        </option>
                        <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>
                            Nama A-Z
                        </option>
                    </x-form.select-input>

                    <x-form.select-input name="tipe_media">
                        <option value="">
                            Semua Tipe
                        </option>
                        <option value="" {{ request('tipe_media') == 'umum' ? 'selected' : '' }}>
                            Umum
                        </option>
                        <option value="galeri" {{ request('tipe_media') == 'galeri' ? 'selected' : '' }}>
                            Galeri
                        </option>
                    </x-form.select-input>

                    <x-button.primary-button>
                        Filter
                    </x-button.primary-button>

                </form>
            </div>


            {{-- ================================================= --}}
            {{-- Media Grid --}}
            {{-- ================================================= --}}

            <div class="p-6">

                @if ($mediaAssets->isNotEmpty())

                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                        @foreach ($mediaAssets as $m)
                            <div
                                class="group overflow-hidden rounded-2xl border border-gray-200
                            bg-white transition
                            hover:border-red-200
                            hover:shadow-md">

                                @if (str_starts_with($m->getFirstMedia('library')->mime_type, 'image/'))
                                    <div class="relative aspect-square overflow-hidden bg-gray-100">

                                        <img src="{{ $m->getFirstMedia('library')?->original_url }}"
                                            alt="{{ $m->alt_text }}"
                                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                                        <div
                                            class="absolute inset-0 flex items-center justify-center gap-2
                                            bg-black/40 opacity-0 transition
                                            group-hover:opacity-100">

                                            <a href="{{ route('cms.media.show', $m->id) }}"
                                                class="inline-flex h-10 w-10 items-center justify-center
                                            rounded-full bg-white text-gray-700
                                            shadow-sm transition hover:bg-gray-100">

                                                <i class="ri-eye-line text-lg"></i>

                                            </a>

                                            <form action="{{ route('cms.media.destroy', $m->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus media ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="{{ route('cms.media.show', $m->id) }}"
                                                    class="inline-flex h-10 w-10 items-center justify-center
                                            rounded-full bg-red-500 text-white
                                            shadow-sm transition hover:bg-red-700">

                                                    <i class="ri-delete-bin-line text-lg"></i>

                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @elseif ($m->getFirstMedia('library')->mime_type == 'application/pdf')
                                    <div
                                        class="relative flex aspect-square items-center justify-center
                                   bg-gray-50">

                                        <div class="text-center">
                                            <div
                                                class="mx-auto flex h-16 w-16 items-center justify-center
                                            rounded-2xl bg-red-50 text-red-600">

                                                <i class="ri-file-pdf-2-line text-3xl"></i>

                                            </div>

                                            <p class="mt-3 text-xs font-semibold uppercase text-red-600">
                                                PDF
                                            </p>
                                        </div>

                                        <div
                                            class="absolute inset-0 flex items-center justify-center
                                        bg-black/40 opacity-0 transition
                                        group-hover:opacity-100 gap-2">

                                            <a href="{{ route('cms.media.show', $m->id) }}"
                                                class="inline-flex h-10 w-10 items-center justify-center
                                            rounded-full bg-white text-gray-700">

                                                <i class="ri-eye-line text-lg"></i>

                                            </a>

                                            <form action="{{ route('cms.media.destroy', $m->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus media ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="{{ route('cms.media.show', $m->id) }}"
                                                    class="inline-flex h-10 w-10 items-center justify-center
                                            rounded-full bg-red-500 text-white
                                            shadow-sm transition hover:bg-red-700">

                                                    <i class="ri-delete-bin-line text-lg"></i>

                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @elseif (str_starts_with($m->getFirstMedia('library')->mime_type, 'video/'))
                                    <div
                                        class="relative flex aspect-square items-center justify-center
                                   bg-gray-50">

                                        <div class="text-center">
                                            <div
                                                class="mx-auto flex h-16 w-16 items-center justify-center
                                            rounded-2xl bg-red-50 text-red-600">

                                                <i class="ri-video-line text-3xl"></i>

                                            </div>

                                            <p class="mt-3 text-xs font-semibold uppercase text-red-600">
                                                Video
                                            </p>
                                        </div>

                                        <div
                                            class="absolute inset-0 flex items-center justify-center
                                        bg-black/40 opacity-0 transition
                                        group-hover:opacity-100 gap-2">

                                            <a href="{{ route('cms.media.show', $m->id) }}"
                                                class="inline-flex h-10 w-10 items-center justify-center
                                            rounded-full bg-white text-gray-700">

                                                <i class="ri-eye-line text-lg"></i>

                                            </a>

                                            <form action="{{ route('cms.media.destroy', $m->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus media ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="{{ route('cms.media.show', $m->id) }}"
                                                    class="inline-flex h-10 w-10 items-center justify-center
                                            rounded-full bg-red-500 text-white
                                            shadow-sm transition hover:bg-red-700">

                                                    <i class="ri-delete-bin-line text-lg"></i>

                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endif

                                {{-- Information --}}
                                <div class="p-4">
                                    <p class="truncate text-sm font-medium text-gray-900">
                                        {{ $m->name }}
                                    </p>

                                    <p class="mt-1 text-xs text-gray-400">
                                        @if ($m)
                                            {{ strtoupper(pathinfo($m->getFirstMedia('library')->file_name, PATHINFO_EXTENSION)) }}
                                            ·
                                            {{ $m->getFirstMedia('library')->human_readable_size }}
                                        @else
                                            N/A
                                        @endif
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    {{-- ================================================= --}}
                    {{-- Empty State --}}
                    {{-- ================================================= --}}
                    <div class="w-full rounded-2xl bg-white p-12 text-center shadow-sm ring-1 ring-gray-100">

                        @if (request()->hasAny(['search', 'type', 'sort']))
                            {{-- 1. Tampilan Ketika Hasil Filter/Pencarian Kosong --}}
                            <div
                                class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-50 text-amber-500">
                                <i class="ri-search-line text-3xl"></i>
                            </div>

                            <h3 class="mt-5 text-lg font-semibold text-gray-900">
                                Data tidak ditemukan
                            </h3>

                            <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                                Tidak ada file yang cocok dengan kriteria pencarian atau filter kamu. Coba kata kunci
                                lain.
                            </p>

                            <div class="mt-6">
                                <a href="{{ request()->url() }}"
                                    class="inline-flex items-center gap-2 rounded-xl bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 transition">
                                    <i class="ri-refresh-line"></i> Reset Filter
                                </a>
                            </div>
                        @else
                            <div
                                class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-gray-100 text-gray-400">
                                <i class="ri-book-open-line text-3xl"></i>
                            </div>

                            <h3 class="mt-5 text-lg font-semibold text-gray-900">
                                Belum ada file
                            </h3>

                            <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                                Belum ada file yang ditambahkan.
                            </p>
                        @endif

                    </div>
                @endif

                {{ $mediaAssets->links('vendor.pagination.default') }}

            </div>

        </div>

    </div>

</x-cms-layout>
