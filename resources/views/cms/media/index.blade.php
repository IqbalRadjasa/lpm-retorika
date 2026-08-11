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

        <div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-3">

            {{-- Total Media --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Total Media
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            48
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
                            42
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
                            6
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                        <i class="ri-file-text-line text-xl"></i>

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

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

                    {{-- Search --}}
                    <div class="relative w-full lg:max-w-md">

                        <i
                            class="ri-search-line pointer-events-none absolute left-4 top-1/2
                                   -translate-y-1/2 text-gray-400"></i>

                        <input type="text" placeholder="Cari nama file..."
                            class="w-full rounded-xl border-gray-300 pl-11
                                   focus:border-red-500
                                   focus:ring-red-500">

                    </div>


                    {{-- Filter --}}
                    <div class="flex flex-col gap-3 sm:flex-row">

                        <select
                            class="w-full rounded-xl border-gray-300
                                   focus:border-red-500
                                   focus:ring-red-500 sm:w-40">

                            <option value="">
                                Semua Media
                            </option>

                            <option value="image">
                                Gambar
                            </option>

                            <option value="document">
                                Dokumen
                            </option>

                        </select>


                        <select
                            class="w-full rounded-xl border-gray-300
                                   focus:border-red-500
                                   focus:ring-red-500 sm:w-40">

                            <option value="">
                                Terbaru
                            </option>

                            <option value="oldest">
                                Terlama
                            </option>

                            <option value="name">
                                Nama A-Z
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- Media Grid --}}
            {{-- ================================================= --}}

            <div class="p-6">

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">


                    {{-- ================================================= --}}
                    {{-- Image 1 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        {{-- Preview --}}
                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80"
                                alt="Mahasiswa"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">


                            {{-- Overlay --}}
                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="{{route('cms.media.show')}}"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700
                                           shadow-sm transition hover:bg-gray-100">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>


                        {{-- Information --}}
                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                kegiatan-mahasiswa.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 1.2 MB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image 2 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80"
                                alt="Campus"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700
                                           shadow-sm">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                seminar-kampus.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 856 KB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image 3 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=600&q=80"
                                alt="Event"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                kegiatan-pers.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 2.1 MB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image 4 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=600&q=80"
                                alt="Office"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                ruang-redaksi.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 1.7 MB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- PDF --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

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
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>


                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                majalah-edisi-12.pdf
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                PDF · 8.4 MB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image 5 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=600&q=80"
                                alt="Team"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                tim-redaksi.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 942 KB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image 6 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=600&q=80"
                                alt="Laptop"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                liputan-kampus.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 1.5 MB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- PDF 2 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

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
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                buletin-agustus.pdf
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                PDF · 4.2 MB
                            </p>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image 7 --}}
                    {{-- ================================================= --}}

                    <div
                        class="group overflow-hidden rounded-2xl border border-gray-200
                               bg-white transition
                               hover:border-red-200
                               hover:shadow-md">

                        <div class="relative aspect-square overflow-hidden bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80"
                                alt="Students"
                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/40 opacity-0 transition
                                       group-hover:opacity-100">

                                <a href="#"
                                    class="inline-flex h-10 w-10 items-center justify-center
                                           rounded-full bg-white text-gray-700">

                                    <i class="ri-eye-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                        <div class="p-4">

                            <p class="truncate text-sm font-medium text-gray-900">
                                mahasiswa-baru.jpg
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                JPG · 1.1 MB
                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Empty State --}}
                {{-- ================================================= --}}

                {{--
                <div class="py-20 text-center">

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center
                               rounded-2xl bg-gray-100 text-gray-400">

                        <i class="ri-folder-open-line text-3xl"></i>

                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-gray-900">

                        Belum ada media

                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">

                        Upload gambar atau dokumen pertama
                        untuk mulai menggunakan Media Manager.

                    </p>

                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 rounded-xl
                               bg-red-600 px-5 py-3 text-sm font-semibold
                               text-white hover:bg-red-700">

                        <i class="ri-upload-2-line"></i>

                        Upload Media

                    </a>

                </div>
                --}}


                {{-- ================================================= --}}
                {{-- Pagination --}}
                {{-- ================================================= --}}

                <div
                    class="mt-8 flex flex-col gap-3 border-t border-gray-100 pt-6 sm:flex-row sm:items-center sm:justify-between">

                    <p class="text-sm text-gray-500">

                        Menampilkan
                        <span class="font-medium text-gray-700">
                            1–8
                        </span>
                        dari
                        <span class="font-medium text-gray-700">
                            48
                        </span>
                        media

                    </p>


                    <div class="flex items-center gap-2">

                        <button type="button" disabled
                            class="inline-flex h-9 w-9 items-center justify-center
                                   rounded-lg border border-gray-200
                                   text-gray-300">

                            <i class="ri-arrow-left-s-line"></i>

                        </button>

                        <button type="button"
                            class="inline-flex h-9 w-9 items-center justify-center
                                   rounded-lg bg-red-600
                                   text-sm font-medium text-white">

                            1

                        </button>

                        <button type="button"
                            class="inline-flex h-9 w-9 items-center justify-center
                                   rounded-lg border border-gray-200
                                   text-sm text-gray-600
                                   hover:bg-gray-50">

                            2

                        </button>

                        <button type="button"
                            class="inline-flex h-9 w-9 items-center justify-center
                                   rounded-lg border border-gray-200
                                   text-sm text-gray-600
                                   hover:bg-gray-50">

                            3

                        </button>

                        <button type="button"
                            class="inline-flex h-9 w-9 items-center justify-center
                                   rounded-lg border border-gray-200
                                   text-gray-600
                                   hover:bg-gray-50">

                            <i class="ri-arrow-right-s-line"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-cms-layout>
