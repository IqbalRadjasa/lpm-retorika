<x-cms-layout>
    {{-- ================================================= --}}
    {{-- Podcast Management --}}
    {{-- ================================================= --}}

    <div class="space-y-8 py-6">


        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">

                    Podcast

                </h1>

                <p class="mt-2 text-gray-500">

                    Kelola video podcast yang ditampilkan
                    kepada pengunjung website.

                </p>

            </div>

            <x-link-button.primary-link :href="route('cms.podcast.create')" icon="ri-add-line">

                Tambah Podcast

            </x-link-button.primary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Statistics --}}
        {{-- ================================================= --}}

        <div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-3">

            {{-- Total --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Total Podcast
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            48
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">

                        <i class="ri-video-line text-xl"></i>

                    </div>

                </div>

            </div>


            {{-- Published --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Terbit
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            42
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

                        <i class="ri-checkbox-circle-line text-xl"></i>

                    </div>

                </div>

            </div>


            {{-- Draft --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Draft
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            6
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                        <i class="ri-draft-line text-xl"></i>

                    </div>

                </div>

            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Podcast List --}}
        {{-- ================================================= --}}

        <div
            class="overflow-hidden rounded-2xl
               border border-gray-200
               bg-white shadow-sm">


            {{-- Table Header --}}
            <div class="border-b border-gray-100
                   px-6 py-5">

                <div class="flex flex-col gap-4
                   lg:flex-row lg:items-center lg:justify-between">


                    {{-- Search --}}
                    <div class="relative w-full lg:max-w-md">

                        <i
                            class="ri-search-line
                           pointer-events-none
                           absolute left-4 top-1/2
                           -translate-y-1/2
                           text-gray-400">
                        </i>

                        <input type="text" placeholder="Cari podcast..."
                            class="w-full rounded-xl
                           border-gray-300
                           py-3 pl-11 pr-4
                           text-sm
                           focus:border-red-500
                           focus:ring-red-500">

                    </div>


                    {{-- Filters --}}
                    <div class="flex flex-col gap-3 sm:flex-row">


                        {{-- Status --}}
                        <select
                            class="rounded-xl border-gray-300
                           px-4 py-3 text-sm
                           text-gray-700
                           focus:border-red-500
                           focus:ring-red-500">

                            <option value="">
                                Semua Status
                            </option>

                            <option value="published">
                                Terbit
                            </option>

                            <option value="draft">
                                Draft
                            </option>

                        </select>


                        {{-- Sort --}}
                        <select
                            class="rounded-xl border-gray-300
                           px-4 py-3 text-sm
                           text-gray-700
                           focus:border-red-500
                           focus:ring-red-500">

                            <option>
                                Terbaru
                            </option>

                            <option>
                                Terlama
                            </option>

                            <option>
                                Judul A-Z
                            </option>

                            <option>
                                Judul Z-A
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- Desktop Table --}}
            {{-- ================================================= --}}

            <div class="hidden overflow-x-auto md:block">

                <table class="w-full text-left">


                    {{-- Head --}}
                    <thead class="border-b border-gray-100
                           bg-gray-50">

                        <tr>

                            <th
                                class="px-6 py-4 text-xs
                                   font-semibold uppercase
                                   tracking-wide text-gray-500">

                                Podcast

                            </th>

                            <th
                                class="px-6 py-4 text-xs
                                   font-semibold uppercase
                                   tracking-wide text-gray-500">

                                Host

                            </th>

                            <th
                                class="px-6 py-4 text-xs
                                   font-semibold uppercase
                                   tracking-wide text-gray-500">

                                Status

                            </th>

                            <th
                                class="px-6 py-4 text-xs
                                   font-semibold uppercase
                                   tracking-wide text-gray-500">

                                Terbit

                            </th>

                            <th
                                class="px-6 py-4 text-right
                                   text-xs font-semibold
                                   uppercase tracking-wide
                                   text-gray-500">

                                Aksi

                            </th>

                        </tr>

                    </thead>


                    {{-- Body --}}
                    <tbody class="divide-y divide-gray-100">


                        {{-- ================================================= --}}
                        {{-- Podcast 1 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">


                            {{-- Podcast --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center
                                       gap-4">

                                    <div
                                        class="h-16 w-24
                                           shrink-0
                                           overflow-hidden
                                           rounded-xl
                                           bg-gray-100">

                                        <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&w=400&q=80"
                                            alt="Podcast Retorika #01"
                                            class="h-full w-full
                                               object-cover">

                                    </div>


                                    <div class="min-w-0">

                                        <p
                                            class="truncate
                                               font-semibold
                                               text-gray-900">

                                            Retorika Podcast #01

                                        </p>

                                        <p
                                            class="mt-1 text-sm
                                               text-gray-500">

                                            Membahas Kehidupan
                                            Mahasiswa Hari Ini

                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- Host --}}
                            <td class="whitespace-nowrap
                                   px-6 py-5">

                                <p
                                    class="text-sm
                                       font-medium
                                       text-gray-700">

                                    Andi Pratama

                                </p>

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center
                                       gap-1.5 rounded-full
                                       bg-green-50 px-3 py-1
                                       text-xs font-medium
                                       text-green-700">

                                    <span
                                        class="h-1.5 w-1.5
                                           rounded-full
                                           bg-green-500">
                                    </span>

                                    Terbit

                                </span>

                            </td>


                            {{-- Date --}}
                            <td class="whitespace-nowrap
                                   px-6 py-5">

                                <p class="text-sm
                                       text-gray-600">

                                    12 Agustus 2026

                                </p>

                            </td>


                            {{-- Actions --}}
                            <td class="px-6 py-5">

                                <div class="flex justify-end
                                       gap-2">

                                    <a href="#" title="Lihat"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-gray-500
                                           transition
                                           hover:bg-gray-100
                                           hover:text-gray-800">

                                        <i class="ri-eye-line"></i>

                                    </a>


                                    <a href="#" title="Edit"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-gray-500
                                           transition
                                           hover:bg-gray-100
                                           hover:text-gray-800">

                                        <i class="ri-edit-line"></i>

                                    </a>


                                    <button type="button" title="Hapus"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-red-500
                                           transition
                                           hover:bg-red-50
                                           hover:text-red-600">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>


                        {{-- ================================================= --}}
                        {{-- Podcast 2 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            <td class="px-6 py-5">

                                <div class="flex items-center
                                       gap-4">

                                    <div
                                        class="h-16 w-24
                                           shrink-0
                                           overflow-hidden
                                           rounded-xl
                                           bg-gray-100">

                                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=400&q=80"
                                            alt="Podcast Retorika #02"
                                            class="h-full w-full
                                               object-cover">

                                    </div>


                                    <div class="min-w-0">

                                        <p
                                            class="truncate
                                               font-semibold
                                               text-gray-900">

                                            Retorika Podcast #02

                                        </p>

                                        <p
                                            class="mt-1 text-sm
                                               text-gray-500">

                                            Organisasi Mahasiswa
                                            dan Perannya di Kampus

                                        </p>

                                    </div>

                                </div>

                            </td>


                            <td class="whitespace-nowrap
                                   px-6 py-5">

                                <p
                                    class="text-sm
                                       font-medium
                                       text-gray-700">

                                    Siti Rahma

                                </p>

                            </td>


                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center
                                       gap-1.5 rounded-full
                                       bg-yellow-50 px-3 py-1
                                       text-xs font-medium
                                       text-yellow-700">

                                    <span
                                        class="h-1.5 w-1.5
                                           rounded-full
                                           bg-yellow-500">
                                    </span>

                                    Draft

                                </span>

                            </td>


                            <td class="whitespace-nowrap
                                   px-6 py-5">

                                <span class="text-sm text-gray-400">

                                    —

                                </span>

                            </td>


                            <td class="px-6 py-5">

                                <div class="flex justify-end
                                       gap-2">

                                    <a href="#" title="Lihat"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-gray-500
                                           transition
                                           hover:bg-gray-100
                                           hover:text-gray-800">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="#" title="Edit"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-gray-500
                                           transition
                                           hover:bg-gray-100
                                           hover:text-gray-800">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button" title="Hapus"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-red-500
                                           transition
                                           hover:bg-red-50
                                           hover:text-red-600">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        {{-- ================================================= --}}
                        {{-- Podcast 2 --}}
                        {{-- ================================================= --}}

                        <tr class="transition hover:bg-gray-50">

                            <td class="px-6 py-5">

                                <div class="flex items-center
                                       gap-4">

                                    <div
                                        class="h-16 w-24
                                           shrink-0
                                           overflow-hidden
                                           rounded-xl
                                           bg-gray-100">

                                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=400&q=80"
                                            alt="Podcast Retorika #02"
                                            class="h-full w-full
                                               object-cover">

                                    </div>


                                    <div class="min-w-0">

                                        <p
                                            class="truncate
                                               font-semibold
                                               text-gray-900">

                                            Retorika Podcast #02

                                        </p>

                                        <p
                                            class="mt-1 text-sm
                                               text-gray-500">

                                            Organisasi Mahasiswa
                                            dan Perannya di Kampus

                                        </p>

                                    </div>

                                </div>

                            </td>


                            <td class="whitespace-nowrap
                                   px-6 py-5">

                                <p
                                    class="text-sm
                                       font-medium
                                       text-gray-700">

                                    Siti Rahma

                                </p>

                            </td>


                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex items-center
                                       gap-1.5 rounded-full
                                       bg-yellow-50 px-3 py-1
                                       text-xs font-medium
                                       text-yellow-700">

                                    <span
                                        class="h-1.5 w-1.5
                                           rounded-full
                                           bg-yellow-500">
                                    </span>

                                    Draft

                                </span>

                            </td>


                            <td class="whitespace-nowrap
                                   px-6 py-5">

                                <span class="text-sm text-gray-400">

                                    —

                                </span>

                            </td>


                            <td class="px-6 py-5">

                                <div class="flex justify-end
                                       gap-2">

                                    <a href="#" title="Lihat"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-gray-500
                                           transition
                                           hover:bg-gray-100
                                           hover:text-gray-800">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <a href="#" title="Edit"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-gray-500
                                           transition
                                           hover:bg-gray-100
                                           hover:text-gray-800">

                                        <i class="ri-edit-line"></i>

                                    </a>

                                    <button type="button" title="Hapus"
                                        class="flex h-9 w-9
                                           items-center
                                           justify-center
                                           rounded-lg
                                           text-red-500
                                           transition
                                           hover:bg-red-50
                                           hover:text-red-600">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>
                    </tbody>

                </table>

            </div>


            {{-- ================================================= --}}
            {{-- Mobile Cards --}}
            {{-- ================================================= --}}

            <div class="divide-y divide-gray-100 md:hidden">


                {{-- Mobile Podcast 1 --}}
                <div class="p-5">

                    <div class="flex gap-4">

                        <div
                            class="h-20 w-28 shrink-0
                               overflow-hidden rounded-xl
                               bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&w=400&q=80"
                                alt="Podcast Retorika #01" class="h-full w-full object-cover">

                        </div>


                        <div class="min-w-0 flex-1">

                            <div class="flex items-start
                                   justify-between gap-3">

                                <h3
                                    class="font-semibold
                                       leading-5 text-gray-900">

                                    Retorika Podcast #01

                                </h3>

                                <span
                                    class="shrink-0 rounded-full
                                       bg-green-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-green-700">

                                    Terbit

                                </span>

                            </div>


                            <p class="mt-1 line-clamp-2
                                   text-sm text-gray-500">

                                Membahas Kehidupan
                                Mahasiswa Hari Ini

                            </p>


                            <p class="mt-2 text-xs
                                   text-gray-400">

                                Andi Pratama ·
                                12 Agustus 2026

                            </p>

                        </div>

                    </div>


                    {{-- Actions --}}
                    <div
                        class="mt-4 flex gap-2
                           border-t border-gray-100
                           pt-4">

                        <a href="#"
                            class="flex-1 inline-flex
                               items-center justify-center
                               gap-2 rounded-lg
                               border border-gray-200
                               px-3 py-2
                               text-sm font-medium
                               text-gray-600
                               hover:bg-gray-50">

                            <i class="ri-eye-line"></i>

                            Lihat

                        </a>


                        <a href="#"
                            class="flex-1 inline-flex
                               items-center justify-center
                               gap-2 rounded-lg
                               border border-gray-200
                               px-3 py-2
                               text-sm font-medium
                               text-gray-600
                               hover:bg-gray-50">

                            <i class="ri-edit-line"></i>

                            Edit

                        </a>


                        <button type="button"
                            class="flex h-9 w-9
                               shrink-0 items-center
                               justify-center
                               rounded-lg
                               border border-red-200
                               text-red-600
                               hover:bg-red-50">

                            <i class="ri-delete-bin-line"></i>

                        </button>

                    </div>

                </div>


                {{-- Mobile Podcast 2 --}}
                <div class="p-5">

                    <div class="flex gap-4">

                        <div
                            class="h-20 w-28 shrink-0
                               overflow-hidden rounded-xl
                               bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=400&q=80"
                                alt="Podcast Retorika #02" class="h-full w-full object-cover">

                        </div>


                        <div class="min-w-0 flex-1">

                            <div class="flex items-start
                                   justify-between gap-3">

                                <h3
                                    class="font-semibold
                                       leading-5 text-gray-900">

                                    Retorika Podcast #02

                                </h3>

                                <span
                                    class="shrink-0 rounded-full
                                       bg-yellow-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-yellow-700">

                                    Draft

                                </span>

                            </div>


                            <p class="mt-1 line-clamp-2
                                   text-sm text-gray-500">

                                Organisasi Mahasiswa
                                dan Perannya di Kampus

                            </p>


                            <p class="mt-2 text-xs
                                   text-gray-400">

                                Siti Rahma ·
                                Belum diterbitkan

                            </p>

                        </div>

                    </div>


                    <div
                        class="mt-4 flex gap-2
                           border-t border-gray-100
                           pt-4">

                        <a href="#"
                            class="flex-1 inline-flex
                               items-center justify-center
                               gap-2 rounded-lg
                               border border-gray-200
                               px-3 py-2
                               text-sm font-medium
                               text-gray-600
                               hover:bg-gray-50">

                            <i class="ri-eye-line"></i>

                            Lihat

                        </a>


                        <a href="#"
                            class="flex-1 inline-flex
                               items-center justify-center
                               gap-2 rounded-lg
                               border border-gray-200
                               px-3 py-2
                               text-sm font-medium
                               text-gray-600
                               hover:bg-gray-50">

                            <i class="ri-edit-line"></i>

                            Edit

                        </a>


                        <button type="button"
                            class="flex h-9 w-9
                               shrink-0 items-center
                               justify-center
                               rounded-lg
                               border border-red-200
                               text-red-600
                               hover:bg-red-50">

                            <i class="ri-delete-bin-line"></i>

                        </button>

                    </div>

                </div>

                {{-- Mobile Podcast 2 --}}
                <div class="p-5">

                    <div class="flex gap-4">

                        <div
                            class="h-20 w-28 shrink-0
                               overflow-hidden rounded-xl
                               bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=400&q=80"
                                alt="Podcast Retorika #02" class="h-full w-full object-cover">

                        </div>


                        <div class="min-w-0 flex-1">

                            <div class="flex items-start
                                   justify-between gap-3">

                                <h3
                                    class="font-semibold
                                       leading-5 text-gray-900">

                                    Retorika Podcast #02

                                </h3>

                                <span
                                    class="shrink-0 rounded-full
                                       bg-yellow-50 px-2.5 py-1
                                       text-xs font-medium
                                       text-yellow-700">

                                    Draft

                                </span>

                            </div>


                            <p class="mt-1 line-clamp-2
                                   text-sm text-gray-500">

                                Organisasi Mahasiswa
                                dan Perannya di Kampus

                            </p>


                            <p class="mt-2 text-xs
                                   text-gray-400">

                                Siti Rahma ·
                                Belum diterbitkan

                            </p>

                        </div>

                    </div>


                    <div
                        class="mt-4 flex gap-2
                           border-t border-gray-100
                           pt-4">

                        <a href="#"
                            class="flex-1 inline-flex
                               items-center justify-center
                               gap-2 rounded-lg
                               border border-gray-200
                               px-3 py-2
                               text-sm font-medium
                               text-gray-600
                               hover:bg-gray-50">

                            <i class="ri-eye-line"></i>

                            Lihat

                        </a>


                        <a href="#"
                            class="flex-1 inline-flex
                               items-center justify-center
                               gap-2 rounded-lg
                               border border-gray-200
                               px-3 py-2
                               text-sm font-medium
                               text-gray-600
                               hover:bg-gray-50">

                            <i class="ri-edit-line"></i>

                            Edit

                        </a>


                        <button type="button"
                            class="flex h-9 w-9
                               shrink-0 items-center
                               justify-center
                               rounded-lg
                               border border-red-200
                               text-red-600
                               hover:bg-red-50">

                            <i class="ri-delete-bin-line"></i>

                        </button>

                    </div>

                </div>
            </div>


            {{-- ================================================= --}}
            {{-- Pagination --}}
            {{-- ================================================= --}}

            <div
                class="flex flex-col gap-3
                   border-t border-gray-100
                   px-6 py-5
                   sm:flex-row sm:items-center
                   sm:justify-between">

                <p class="text-sm text-gray-500">

                    Menampilkan
                    <span class="font-medium text-gray-700">
                        1–3
                    </span>
                    dari
                    <span class="font-medium text-gray-700">
                        18
                    </span>
                    podcast.

                </p>


                <div class="flex items-center gap-2">

                    <button type="button" disabled
                        class="flex h-9 w-9
                           items-center justify-center
                           rounded-lg border
                           border-gray-200
                           text-gray-300">

                        <i class="ri-arrow-left-s-line"></i>

                    </button>


                    <button type="button"
                        class="flex h-9 w-9
                           items-center justify-center
                           rounded-lg
                           bg-red-600
                           text-sm font-medium
                           text-white">

                        1

                    </button>


                    <button type="button"
                        class="flex h-9 w-9
                           items-center justify-center
                           rounded-lg
                           border border-gray-200
                           text-sm font-medium
                           text-gray-600
                           hover:bg-gray-50">

                        2

                    </button>


                    <button type="button"
                        class="flex h-9 w-9
                           items-center justify-center
                           rounded-lg
                           border border-gray-200
                           text-sm font-medium
                           text-gray-600
                           hover:bg-gray-50">

                        3

                    </button>


                    <button type="button"
                        class="flex h-9 w-9
                           items-center justify-center
                           rounded-lg
                           border border-gray-200
                           text-gray-600
                           hover:bg-gray-50">

                        <i class="ri-arrow-right-s-line"></i>

                    </button>

                </div>

            </div>

        </div>

    </div>
</x-cms-layout>
