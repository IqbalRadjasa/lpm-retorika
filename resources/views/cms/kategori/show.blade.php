<x-cms-layout>
    {{-- ================================================= --}}
    {{-- Kategori Detail --}}
    {{-- ================================================= --}}

    <div class="space-y-8 py-6">


        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div>

            <div class="mb-8 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

                <div>
                    <div class="flex items-center gap-3">

                        <h1 class="text-2xl font-bold text-gray-900">

                            Isu Kampus

                        </h1>

                        <span
                            class="inline-flex items-center gap-1.5
                               rounded-full bg-green-50
                               px-3 py-1
                               text-xs font-medium
                               text-green-700">

                            <span class="h-1.5 w-1.5 rounded-full
                                   bg-green-500">
                            </span>

                            Aktif

                        </span>

                    </div>

                    <p class="mt-1 text-sm text-gray-500">
                        Detail dan artikel yang menggunakan
                        kategori ini.
                    </p>
                </div>


                {{-- Actions --}}
                <div class="flex flex-col lg:flex-row gap-3">
                    <x-link-button.secondary-link :href="route('cms.kategori.index')" icon="ri-arrow-left-line">
                        Kembali
                    </x-link-button.secondary-link>

                    <x-link-button.secondary-link :href="'#'" icon="ri-edit-line">
                        Edit
                    </x-link-button.secondary-link>


                    <x-link-button.primary-link :href="'#'" icon="ri-delete-bin-line">
                        Hapus
                    </x-link-button.primary-link>

                </div>

            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Main Grid --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 xl:grid-cols-12">


            {{-- ================================================= --}}
            {{-- LEFT --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-8">


                {{-- ================================================= --}}
                {{-- Category Information --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                       border border-gray-200
                       bg-white shadow-sm">


                    {{-- Header --}}
                    <div
                        class="flex items-start justify-between
                           border-b border-gray-100
                           px-6 py-5">

                        <div>

                            <h2 class="text-lg font-semibold text-gray-900">

                                Informasi Kategori

                            </h2>

                            <p class="mt-1 text-sm text-gray-500">

                                Informasi dasar kategori.

                            </p>

                        </div>


                        <div
                            class="flex h-11 w-11 shrink-0
                               items-center justify-center
                               rounded-xl bg-red-50
                               text-red-600">

                            <i class="ri-price-tag-3-line text-xl"></i>

                        </div>

                    </div>


                    {{-- Body --}}
                    <div class="p-6">


                        {{-- Name --}}
                        <div>

                            <p
                                class="text-xs font-medium
                                  uppercase tracking-wide
                                  text-gray-400">

                                Nama Kategori

                            </p>

                            <p class="mt-2 text-xl
                                  font-semibold text-gray-900">

                                Isu Kampus

                            </p>

                        </div>


                        {{-- Description --}}
                        <div class="mt-6">

                            <p
                                class="text-xs font-medium
                                  uppercase tracking-wide
                                  text-gray-400">

                                Deskripsi

                            </p>

                            <p class="mt-2 text-sm leading-7
                                   text-gray-600">

                                Berita dan informasi seputar
                                kehidupan kampus, kegiatan mahasiswa,
                                organisasi, kebijakan kampus, serta
                                berbagai isu yang berkembang di
                                lingkungan perguruan tinggi.

                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Recent Articles --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                       border border-gray-200
                       bg-white shadow-sm">


                    {{-- Header --}}
                    <div
                        class="flex flex-col gap-3
                           border-b border-gray-100
                           px-6 py-5
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                        <div>

                            <h2 class="text-lg font-semibold
                                   text-gray-900">

                                Artikel dalam Kategori

                            </h2>

                            <p class="mt-1 text-sm text-gray-500">

                                Artikel terbaru yang menggunakan
                                kategori ini.

                            </p>

                        </div>


                        <a href="#"
                            class="inline-flex items-center
                               gap-2 text-sm font-medium
                               text-red-600
                               hover:text-red-700">

                            Lihat Semua

                            <i class="ri-arrow-right-line"></i>

                        </a>

                    </div>


                    {{-- Articles --}}
                    <div class="divide-y divide-gray-100">


                        {{-- Article 1 --}}
                        <a href="#"
                            class="block p-5 transition
                               hover:bg-gray-50 sm:p-6">

                            <div class="flex flex-col gap-4
                                   sm:flex-row">

                                {{-- Thumbnail --}}
                                <div
                                    class="h-24 w-full shrink-0
                                       overflow-hidden rounded-xl
                                       bg-gray-100
                                       sm:w-36">

                                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=500&q=80"
                                        alt="Kegiatan mahasiswa"
                                        class="h-full w-full
                                           object-cover">

                                </div>


                                {{-- Information --}}
                                <div class="min-w-0">

                                    <h3
                                        class="font-semibold
                                           leading-6
                                           text-gray-900">

                                        Mahasiswa Gelar Diskusi
                                        Terbuka Bahas Masa Depan
                                        Pendidikan

                                    </h3>


                                    <p
                                        class="mt-2 line-clamp-2
                                           text-sm leading-6
                                           text-gray-500">

                                        Sejumlah mahasiswa mengadakan
                                        diskusi terbuka untuk membahas
                                        perkembangan pendidikan dan
                                        berbagai isu kampus.

                                    </p>


                                    <div
                                        class="mt-3 flex flex-wrap
                                           items-center gap-x-4
                                           gap-y-2 text-xs
                                           text-gray-400">

                                        <span>
                                            12 Agustus 2026
                                        </span>

                                        <span>
                                            ·
                                        </span>

                                        <span>
                                            Published
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </a>


                        {{-- Article 2 --}}
                        <a href="#"
                            class="block p-5 transition
                               hover:bg-gray-50 sm:p-6">

                            <div class="flex flex-col gap-4
                                   sm:flex-row">

                                <div
                                    class="h-24 w-full shrink-0
                                       overflow-hidden rounded-xl
                                       bg-gray-100
                                       sm:w-36">

                                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=500&q=80"
                                        alt="Mahasiswa"
                                        class="h-full w-full
                                           object-cover">

                                </div>


                                <div class="min-w-0">

                                    <h3
                                        class="font-semibold
                                           leading-6
                                           text-gray-900">

                                        Aktivitas Organisasi Mahasiswa
                                        Kembali Ramai Setelah Masa
                                        Perkuliahan

                                    </h3>


                                    <p
                                        class="mt-2 line-clamp-2
                                           text-sm leading-6
                                           text-gray-500">

                                        Berbagai organisasi mahasiswa
                                        kembali mengadakan kegiatan
                                        setelah dimulainya semester
                                        baru.

                                    </p>


                                    <div
                                        class="mt-3 flex flex-wrap
                                           items-center gap-x-4
                                           gap-y-2 text-xs
                                           text-gray-400">

                                        <span>
                                            8 Agustus 2026
                                        </span>

                                        <span>
                                            ·
                                        </span>

                                        <span>
                                            Published
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </a>


                        {{-- Article 3 --}}
                        <a href="#"
                            class="block p-5 transition
                               hover:bg-gray-50 sm:p-6">

                            <div class="flex flex-col gap-4
                                   sm:flex-row">

                                <div
                                    class="h-24 w-full shrink-0
                                       overflow-hidden rounded-xl
                                       bg-gray-100
                                       sm:w-36">

                                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=500&q=80"
                                        alt="Kegiatan kampus"
                                        class="h-full w-full
                                           object-cover">

                                </div>


                                <div class="min-w-0">

                                    <h3
                                        class="font-semibold
                                           leading-6
                                           text-gray-900">

                                        Kampus Dorong Mahasiswa
                                        Lebih Aktif dalam Kegiatan
                                        Sosial

                                    </h3>


                                    <p
                                        class="mt-2 line-clamp-2
                                           text-sm leading-6
                                           text-gray-500">

                                        Program baru mendorong
                                        mahasiswa untuk berpartisipasi
                                        dalam berbagai kegiatan sosial
                                        di lingkungan kampus.

                                    </p>


                                    <div
                                        class="mt-3 flex flex-wrap
                                           items-center gap-x-4
                                           gap-y-2 text-xs
                                           text-gray-400">

                                        <span>
                                            2 Agustus 2026
                                        </span>

                                        <span>
                                            ·
                                        </span>

                                        <span>
                                            Published
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- RIGHT --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-4">


                {{-- ================================================= --}}
                {{-- Statistics --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                       border border-gray-200
                       bg-white shadow-sm">


                    <div class="border-b border-gray-100
                           px-6 py-5">

                        <h2 class="text-lg font-semibold
                               text-gray-900">

                            Statistik

                        </h2>

                        <p class="mt-1 text-sm text-gray-500">

                            Ringkasan penggunaan kategori.

                        </p>

                    </div>


                    <div class="grid grid-cols-2 gap-px
                            bg-gray-100">

                        {{-- Total Articles --}}
                        <div class="bg-white p-5">

                            <div
                                class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-xl bg-red-50
                                   text-red-600">

                                <i class="ri-article-line text-lg"></i>

                            </div>

                            <p class="mt-4 text-2xl
                                   font-bold text-gray-900">

                                24

                            </p>

                            <p class="mt-1 text-xs text-gray-500">

                                Total Artikel

                            </p>

                        </div>


                        {{-- Published --}}
                        <div class="bg-white p-5">

                            <div
                                class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-xl bg-green-50
                                   text-green-600">

                                <i class="ri-checkbox-circle-line
                                     text-lg">
                                </i>

                            </div>

                            <p class="mt-4 text-2xl
                                   font-bold text-gray-900">

                                20

                            </p>

                            <p class="mt-1 text-xs text-gray-500">

                                Terbit

                            </p>

                        </div>


                        {{-- Draft --}}
                        <div class="bg-white p-5">

                            <div
                                class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-xl bg-yellow-50
                                   text-yellow-600">

                                <i class="ri-draft-line text-lg"></i>

                            </div>

                            <p class="mt-4 text-2xl
                                   font-bold text-gray-900">

                                3

                            </p>

                            <p class="mt-1 text-xs text-gray-500">

                                Draft

                            </p>

                        </div>


                        {{-- Scheduled --}}
                        <div class="bg-white p-5">

                            <div
                                class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-xl bg-blue-50
                                   text-blue-600">

                                <i class="ri-time-line text-lg"></i>

                            </div>

                            <p class="mt-4 text-2xl
                                   font-bold text-gray-900">

                                1

                            </p>

                            <p class="mt-1 text-xs text-gray-500">

                                Terjadwal

                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Category Status --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                       border border-gray-200
                       bg-white shadow-sm">


                    <div class="border-b border-gray-100
                           px-6 py-5">

                        <h2 class="text-lg font-semibold
                               text-gray-900">

                            Status Kategori

                        </h2>

                        <p class="mt-1 text-sm text-gray-500">

                            Status penggunaan kategori saat ini.

                        </p>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-3
                               rounded-xl border
                               border-green-200
                               bg-green-50 p-4">

                            <div
                                class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-full bg-green-100
                                   text-green-600">

                                <i class="ri-check-line"></i>

                            </div>


                            <div>

                                <p class="font-medium
                                       text-green-900">

                                    Kategori Aktif

                                </p>

                                <p class="mt-1 text-sm
                                       text-green-700">

                                    Kategori dapat digunakan
                                    untuk artikel baru.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Metadata --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                       border border-gray-200
                       bg-white shadow-sm">


                    <div class="border-b border-gray-100
                           px-6 py-5">

                        <h2 class="text-lg font-semibold
                               text-gray-900">

                            Informasi Sistem

                        </h2>

                    </div>


                    <div class="divide-y divide-gray-100">


                        <div class="flex justify-between
                                gap-4 px-6 py-4">

                            <span class="text-sm text-gray-500">

                                Dibuat

                            </span>

                            <span
                                class="text-right text-sm
                                   font-medium text-gray-700">

                                20 Juli 2026, 10:32

                            </span>

                        </div>


                        <div class="flex justify-between
                                gap-4 px-6 py-4">

                            <span class="text-sm text-gray-500">

                                Terakhir diperbarui

                            </span>

                            <span
                                class="text-right text-sm
                                   font-medium text-gray-700">

                                14 Agustus 2026, 14:21

                            </span>

                        </div>


                        <div class="flex justify-between
                                gap-4 px-6 py-4">

                            <span class="text-sm text-gray-500">

                                Category ID

                            </span>

                            <span class="font-mono text-sm
                                   text-gray-500">

                                #CAT-001

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</x-cms-layout>
