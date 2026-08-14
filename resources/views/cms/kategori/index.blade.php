<x-cms-layout>
    {{-- ================================================= --}}
    {{-- Kategori Management --}}
    {{-- ================================================= --}}

    <div class="py-6 space-y-8">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">

                    Kategori

                </h1>

                <p class="mt-2 text-gray-500">

                    Kelola kategori yang digunakan untuk mengelompokkan artikel.

                </p>

            </div>

            <x-link-button.primary-link :href="route('cms.kategori.create')" icon="ri-add-line">

                Tambah Kategori

            </x-link-button.primary-link>

        </div>

        {{-- ================================================= --}}
        {{-- Main Card --}}
        {{-- ================================================= --}}

        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">


            {{-- ================================================= --}}
            {{-- Toolbar --}}
            {{-- ================================================= --}}

            <div class="border-b border-gray-100 p-5">

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">


                    {{-- Search --}}
                    <div class="relative w-full lg:max-w-md">

                        <i
                            class="ri-search-line absolute left-4 top-1/2
                               -translate-y-1/2 text-gray-400">
                        </i>

                        <input type="text" placeholder="Cari kategori..."
                            class="w-full rounded-xl border-gray-300
                               py-3 pl-11 pr-4 text-sm
                               focus:border-red-500
                               focus:ring-red-500">

                    </div>


                    {{-- Filters --}}
                    <div class="flex flex-col gap-3 sm:flex-row">


                        {{-- Status --}}
                        <select
                            class="rounded-xl border-gray-300
                               px-4 py-3 text-sm
                               focus:border-red-500
                               focus:ring-red-500">

                            <option value="">
                                Semua Status
                            </option>

                            <option value="active">
                                Aktif
                            </option>

                            <option value="inactive">
                                Nonaktif
                            </option>

                        </select>


                        {{-- Sort --}}
                        <select
                            class="rounded-xl border-gray-300
                               px-4 py-3 text-sm
                               focus:border-red-500
                               focus:ring-red-500">

                            <option value="latest">
                                Terbaru
                            </option>

                            <option value="name">
                                Nama A-Z
                            </option>

                            <option value="articles">
                                Jumlah Artikel
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- Table --}}
            {{-- ================================================= --}}

            <div class="overflow-x-auto">

                <table class="w-full min-w-[720px] text-left text-sm">


                    {{-- Table Header --}}
                    <thead class="bg-gray-50 text-xs uppercase text-gray-500">

                        <tr>

                            <th class="px-6 py-4 font-semibold">
                                Kategori
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Slug
                            </th>

                            <th class="px-6 py-4 text-center font-semibold">
                                Artikel
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Status
                            </th>

                            <th class="px-6 py-4 text-right font-semibold">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    {{-- Table Body --}}
                    <tbody class="divide-y divide-gray-100">


                        {{-- ================================================= --}}
                        {{-- Category 1 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            {{-- Category --}}
                            <td class="px-6 py-5">

                                <div>

                                    <p class="font-semibold text-gray-900">
                                        Isu Kampus
                                    </p>

                                    <p class="mt-1 max-w-sm text-xs text-gray-400">
                                        Berita dan informasi seputar kehidupan kampus.
                                    </p>

                                </div>

                            </td>


                            {{-- Slug --}}
                            <td class="px-6 py-5">

                                <span class="text-gray-500">
                                    isu-kampus
                                </span>

                            </td>


                            {{-- Article Count --}}
                            <td class="px-6 py-5 text-center">

                                <span
                                    class="inline-flex min-w-10 items-center
                                       justify-center rounded-full
                                       bg-gray-100 px-3 py-1
                                       text-xs font-semibold text-gray-700">

                                    24

                                </span>

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center gap-2
                                       rounded-full bg-green-50
                                       px-3 py-1.5
                                       text-xs font-medium text-green-700">

                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                    Aktif

                                </span>

                            </td>


                            {{-- Actions --}}
                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100 hover:text-gray-800"
                                        title="Lihat">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="{{ route('cms.kategori.edit') }}"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100 hover:text-gray-800"
                                        title="Edit">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-red-500 transition
                                           hover:bg-red-50"
                                        title="Hapus">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>


                        {{-- ================================================= --}}
                        {{-- Category 2 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            <td class="px-6 py-5">

                                <div>

                                    <p class="font-semibold text-gray-900">
                                        Nasional
                                    </p>

                                    <p class="mt-1 max-w-sm text-xs text-gray-400">
                                        Berita nasional dan isu terkini di Indonesia.
                                    </p>

                                </div>

                            </td>

                            <td class="px-6 py-5">

                                <span class="text-gray-500">
                                    nasional
                                </span>

                            </td>

                            <td class="px-6 py-5 text-center">

                                <span
                                    class="inline-flex min-w-10 items-center
                                       justify-center rounded-full
                                       bg-gray-100 px-3 py-1
                                       text-xs font-semibold text-gray-700">

                                    18

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center gap-2
                                       rounded-full bg-green-50
                                       px-3 py-1.5
                                       text-xs font-medium text-green-700">

                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                    Aktif

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-red-500 transition
                                           hover:bg-red-50">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>


                        {{-- ================================================= --}}
                        {{-- Category 3 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            <td class="px-6 py-5">

                                <div>

                                    <p class="font-semibold text-gray-900">
                                        Opini
                                    </p>

                                    <p class="mt-1 max-w-sm text-xs text-gray-400">
                                        Tulisan opini dan sudut pandang kontributor.
                                    </p>

                                </div>

                            </td>

                            <td class="px-6 py-5">

                                <span class="text-gray-500">
                                    opini
                                </span>

                            </td>

                            <td class="px-6 py-5 text-center">

                                <span
                                    class="inline-flex min-w-10 items-center
                                       justify-center rounded-full
                                       bg-gray-100 px-3 py-1
                                       text-xs font-semibold text-gray-700">

                                    12

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center gap-2
                                       rounded-full bg-green-50
                                       px-3 py-1.5
                                       text-xs font-medium text-green-700">

                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                    Aktif

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-red-500 transition
                                           hover:bg-red-50">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>


                        {{-- ================================================= --}}
                        {{-- Category 4 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            <td class="px-6 py-5">

                                <div>

                                    <p class="font-semibold text-gray-900">
                                        Majalah
                                    </p>

                                    <p class="mt-1 max-w-sm text-xs text-gray-400">
                                        Lorem ipsum dolor sit, amet consectetur.
                                    </p>

                                </div>

                            </td>

                            <td class="px-6 py-5">

                                <span class="text-gray-500">
                                    majalah
                                </span>

                            </td>

                            <td class="px-6 py-5 text-center">

                                <span
                                    class="inline-flex min-w-10 items-center
                                       justify-center rounded-full
                                       bg-gray-100 px-3 py-1
                                       text-xs font-semibold text-gray-700">

                                    8

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center gap-2
                                       rounded-full bg-green-50
                                       px-3 py-1.5
                                       text-xs font-medium text-green-700">

                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                    Aktif

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-red-500 transition
                                           hover:bg-red-50">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>


                        {{-- ================================================= --}}
                        {{-- Category 5 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            <td class="px-6 py-5">

                                <div>

                                    <p class="font-semibold text-gray-900">
                                        Buletin
                                    </p>

                                    <p class="mt-1 max-w-sm text-xs text-gray-400">
                                        Lorem ipsum dolor sit, amet consectetur.
                                    </p>

                                </div>

                            </td>

                            <td class="px-6 py-5">

                                <span class="text-gray-500">
                                    buletin
                                </span>

                            </td>

                            <td class="px-6 py-5 text-center">

                                <span
                                    class="inline-flex min-w-10 items-center
                                       justify-center rounded-full
                                       bg-gray-100 px-3 py-1
                                       text-xs font-semibold text-gray-700">

                                    6

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center gap-2
                                       rounded-full bg-gray-50
                                       px-3 py-1.5
                                       text-xs font-medium text-gray-600">

                                    <span class="h-1.5 w-1.5 rounded-full bg-gray-400"></span>

                                    Nonaktif

                                </span>

                            </td>

                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="#"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-gray-500 transition
                                           hover:bg-gray-100">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button"
                                        class="flex h-9 w-9 items-center
                                           justify-center rounded-lg
                                           text-red-500 transition
                                           hover:bg-red-50">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            {{-- ================================================= --}}
            {{-- Empty State --}}
            {{-- ================================================= --}}
            {{--
        <div class="p-12 text-center">

            <div class="mx-auto flex h-14 w-14 items-center
                        justify-center rounded-2xl bg-gray-100">

                <i class="ri-price-tag-3-line text-2xl text-gray-400"></i>

            </div>

            <h3 class="mt-4 font-semibold text-gray-900">
                Belum ada kategori
            </h3>

            <p class="mt-1 text-sm text-gray-500">
                Tambahkan kategori pertama untuk mulai mengelompokkan artikel.
            </p>

            <a
                href="#"
                class="mt-5 inline-flex items-center gap-2
                       rounded-xl bg-red-600 px-5 py-2.5
                       text-sm font-semibold text-white
                       hover:bg-red-700">

                <i class="ri-add-line"></i>

                Tambah Kategori

            </a>

        </div>
        --}}


            {{-- ================================================= --}}
            {{-- Pagination --}}
            {{-- ================================================= --}}

            <div class="border-t border-gray-100 px-6 py-4">

                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                    <p class="text-sm text-gray-500">

                        Menampilkan
                        <span class="font-medium text-gray-700">1–5</span>
                        dari
                        <span class="font-medium text-gray-700">5</span>
                        kategori

                    </p>


                    <div class="flex items-center gap-2">

                        <button type="button" disabled
                            class="flex h-9 w-9 items-center
                               justify-center rounded-lg
                               border border-gray-200
                               text-gray-300">

                            <i class="ri-arrow-left-s-line"></i>

                        </button>

                        <button type="button"
                            class="flex h-9 w-9 items-center
                               justify-center rounded-lg
                               bg-red-600 text-sm
                               font-medium text-white">

                            1

                        </button>

                        <button type="button" disabled
                            class="flex h-9 w-9 items-center
                               justify-center rounded-lg
                               border border-gray-200
                               text-gray-300">

                            <i class="ri-arrow-right-s-line"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>
</x-cms-layout>
