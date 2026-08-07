<x-cms-layout>

    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">

            <div>

                <div class="flex items-center gap-2 text-sm text-gray-500">

                    <a href="{{ route('cms.artikel.index') }}" class="transition hover:text-red-600">

                        Artikel

                    </a>

                    <i class="ri-arrow-right-s-line"></i>

                    <span class="text-gray-700">

                        Detail

                    </span>

                </div>

                <h1 class="mt-2 text-2xl font-bold text-gray-900">

                    Detail Artikel

                </h1>

                <p class="mt-1 text-sm text-gray-500">

                    Lihat informasi lengkap dan isi artikel.

                </p>

            </div>

            {{-- Header Actions --}}
            <div class="flex flex-wrap gap-3">

                <a href="{{ route('cms.artikel.index') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">

                    <i class="ri-arrow-left-line"></i>

                    Kembali

                </a>

                <a href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-red-700">

                    <i class="ri-edit-line"></i>

                    Edit Artikel

                </a>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Main Layout --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 xl:grid-cols-12">


            {{-- ================================================= --}}
            {{-- LEFT --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-8">


                {{-- ================================================= --}}
                {{-- Article Header --}}
                {{-- ================================================= --}}

                <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    {{-- Thumbnail --}}
                    <div class="aspect-[16/8] overflow-hidden bg-gray-100">

                        <img src="https://picsum.photos/1200/600?random=25" alt="Thumbnail artikel"
                            class="h-full w-full object-cover">

                    </div>


                    {{-- Article Information --}}
                    <div class="p-6 md:p-8">

                        {{-- Category --}}
                        <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                            Isu Kampus

                        </span>


                        {{-- Title --}}
                        <h2 class="mt-5 text-3xl font-bold leading-tight text-gray-900 md:text-4xl">

                            Mahasiswa Berhasil Mengembangkan
                            Platform Digital untuk Pers Kampus

                        </h2>


                        {{-- Meta --}}
                        <div class="mt-6 flex flex-wrap gap-x-6 gap-y-3 text-sm text-gray-500">

                            <div class="flex items-center gap-2">

                                <i class="ri-user-3-line"></i>

                                <span>

                                    Retorika

                                </span>

                            </div>

                            <div class="flex items-center gap-2">

                                <i class="ri-calendar-line"></i>

                                <span>

                                    28 Juli 2026

                                </span>

                            </div>

                            <div class="flex items-center gap-2">

                                <i class="ri-time-line"></i>

                                <span>

                                    5 min read

                                </span>

                            </div>

                        </div>


                        {{-- Excerpt --}}
                        <div class="mt-7 rounded-xl border border-gray-100 bg-gray-50 p-5">

                            <p class="text-sm font-medium text-gray-500">

                                Ringkasan

                            </p>

                            <p class="mt-2 leading-7 text-gray-700">

                                Mahasiswa berhasil mengembangkan sebuah platform
                                digital yang dirancang untuk mendukung kegiatan
                                pers mahasiswa dan publikasi informasi kampus.

                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Article Content --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    {{-- Section Header --}}
                    <div class="border-b border-gray-100 px-6 py-5 md:px-8">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                                <i class="ri-file-text-line text-lg"></i>

                            </div>

                            <div>

                                <h3 class="font-semibold text-gray-900">

                                    Isi Artikel

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Konten yang akan ditampilkan kepada pembaca.

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Content --}}
                    <article class="prose prose-gray max-w-none p-6 leading-8 md:p-8">

                        <p>

                            Perkembangan teknologi digital telah memberikan
                            perubahan besar terhadap cara mahasiswa memperoleh
                            dan menyebarkan informasi di lingkungan kampus.

                        </p>

                        <p>

                            Melihat perkembangan tersebut, mahasiswa dari
                            berbagai bidang mulai mengembangkan berbagai
                            platform digital yang dapat membantu kegiatan
                            organisasi dan pers mahasiswa.

                        </p>


                        <h3>

                            Awal Pengembangan

                        </h3>

                        <p>

                            Platform ini dikembangkan sebagai sebuah media
                            yang dapat membantu proses publikasi berita,
                            artikel, dan berbagai informasi kegiatan mahasiswa.

                        </p>


                        <blockquote>

                            Pers mahasiswa memiliki peran penting sebagai
                            media informasi dan kontrol sosial di lingkungan
                            kampus.

                        </blockquote>


                        <h3>

                            Dampak bagi Mahasiswa

                        </h3>

                        <p>

                            Kehadiran platform digital tersebut diharapkan
                            dapat memberikan akses informasi yang lebih mudah
                            sekaligus mendorong mahasiswa untuk lebih aktif
                            dalam kegiatan jurnalistik dan publikasi.

                        </p>

                    </article>

                </div>


                {{-- ================================================= --}}
                {{-- Tags --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white p-6 shadow-sm md:p-8">

                    <div class="flex items-center gap-2">

                        <i class="ri-price-tag-3-line text-gray-400"></i>

                        <h3 class="font-semibold text-gray-900">

                            Tags

                        </h3>

                    </div>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Mahasiswa

                        </span>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Kampus

                        </span>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Teknologi

                        </span>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Pers Mahasiswa

                        </span>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- RIGHT SIDEBAR --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-4">


                {{-- ================================================= --}}
                {{-- Publication Status --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-50 text-green-600">

                                <i class="ri-send-plane-line"></i>

                            </div>

                            <div>

                                <h3 class="font-semibold text-gray-900">

                                    Publikasi

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Status artikel.

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="space-y-5 p-6">

                        {{-- Status --}}
                        <div>

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">

                                Status

                            </p>

                            <div class="mt-2">

                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1.5 text-sm font-semibold text-green-700">

                                    <span class="h-2 w-2 rounded-full bg-green-500"></span>

                                    Published

                                </span>

                            </div>

                        </div>


                        {{-- Published Date --}}
                        <div>

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">

                                Tanggal Terbit

                            </p>

                            <p class="mt-2 text-sm font-medium text-gray-700">

                                28 Juli 2026, 09:30

                            </p>

                        </div>


                        {{-- Updated --}}
                        <div>

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">

                                Terakhir Diperbarui

                            </p>

                            <p class="mt-2 text-sm font-medium text-gray-700">

                                28 Juli 2026, 10:15

                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Author --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <h3 class="font-semibold text-gray-900">

                            Informasi Artikel

                        </h3>

                    </div>

                    <div class="space-y-5 p-6">

                        {{-- Author --}}
                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">

                                <i class="ri-user-3-line text-xl"></i>

                            </div>

                            <div>

                                <p class="text-xs text-gray-400">

                                    Penulis

                                </p>

                                <p class="font-semibold text-gray-800">

                                    Retorika

                                </p>

                            </div>

                        </div>


                        {{-- Category --}}
                        <div class="flex items-center justify-between">

                            <span class="text-sm text-gray-500">

                                Kategori

                            </span>

                            <span class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-600">

                                Isu Kampus

                            </span>

                        </div>


                        {{-- Reading Time --}}
                        <div class="flex items-center justify-between">

                            <span class="text-sm text-gray-500">

                                Waktu Baca

                            </span>

                            <span class="text-sm font-medium text-gray-700">

                                5 menit

                            </span>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- SEO Preview --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

                                <i class="ri-search-eye-line"></i>

                            </div>

                            <div>

                                <h3 class="font-semibold text-gray-900">

                                    SEO Preview

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Tampilan artikel pada mesin pencari.

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="p-6">

                        <p class="text-sm text-blue-600">

                            Mahasiswa Berhasil Mengembangkan
                            Platform Digital

                        </p>

                        <p class="mt-1 text-xs text-green-700">

                            retorika.id/berita/platform-digital

                        </p>

                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500">

                            Mahasiswa berhasil mengembangkan platform
                            digital untuk mendukung kegiatan pers kampus.

                        </p>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Actions --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white p-6 shadow-sm">

                    <h3 class="font-semibold text-gray-900">

                        Aksi

                    </h3>

                    <div class="mt-4 space-y-3">

                        <a href="#"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-5 py-3 font-semibold text-white transition hover:bg-red-700">

                            <i class="ri-edit-line"></i>

                            Edit Artikel

                        </a>

                        <a href="#"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 px-5 py-3 font-medium text-gray-700 transition hover:bg-gray-50">

                            <i class="ri-external-link-line"></i>

                            Lihat di Website

                        </a>

                        <button type="button"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-red-200 bg-red-50 px-5 py-3 font-medium text-red-600 transition hover:bg-red-100">

                            <i class="ri-delete-bin-line"></i>

                            Hapus Artikel

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-cms-layout>
