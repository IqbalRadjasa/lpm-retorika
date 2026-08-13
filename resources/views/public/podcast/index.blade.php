{{-- ================================================= --}}
{{-- Podcast Index --}}
{{-- ================================================= --}}

<x-app-layout>

    <main class="
        pt-30
        max-w-screen-xl
        mx-auto
        px-4
        sm:px-6
        lg:px-8">


        <div
            class="relative overflow-hidden
            flex flex-col justify-center gap-2
            rounded-3xl
            border-l-[10px] border-red-500
            bg-gradient-to-r from-red-50 via-red-50/70 to-white
            p-10 md:p-12 lg:p-14
            shadow-lg">

            {{-- Background Decoration --}}
            <i
                class="ri-video-line
                absolute
                -right-8
                -bottom-16
                lg:-right-8 lg:-bottom-22
                text-[170px]
                lg:text-[220px]
                text-red-500/10
                pointer-events-none">
            </i>

            <p class="relative z-10 text-sm font-semibold uppercase tracking-widest text-red-700">
                Kategori
            </p>

            <h1 class="relative z-10 text-3xl md:text-4xl lg:text-5xl font-extrabold text-red-600">
                Podcast
            </h1>

        </div>

        {{-- ================================================= --}}
        {{-- Main Content --}}
        {{-- ================================================= --}}


        <section class="mx-auto max-w-7xl px-6 py-12">


            {{-- ================================================= --}}
            {{-- Featured Podcast --}}
            {{-- ================================================= --}}

            <section>

                <div class="mb-6 flex items-end justify-between gap-4">

                    <div>

                        <p
                            class="text-sm font-semibold uppercase
                                  tracking-wider text-red-600">

                            Episode Pilihan

                        </p>

                        <h2 class="mt-1 text-2xl font-bold text-gray-900
                                   sm:text-3xl">

                            Podcast Terbaru

                        </h2>

                    </div>

                </div>


                {{-- Featured Card --}}
                <div class="overflow-hidden rounded-2xl bg-white shadow-sm
                           lg:rounded-3xl">


                    <div class="grid lg:grid-cols-2">


                        {{-- ================================================= --}}
                        {{-- Video --}}
                        {{-- ================================================= --}}

                        <a href="#"
                            class="group relative block aspect-video
                                   overflow-hidden bg-gray-900
                                   lg:aspect-auto lg:min-h-[420px]">

                            <img src="https://picsum.photos/1200/800?random=101"
                                alt="Mengenal Pers Mahasiswa di Era Digital"
                                class="absolute inset-0 h-full w-full
                                       object-cover transition duration-500
                                       group-hover:scale-105">


                            {{-- Overlay --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t
                                       from-black/70 via-black/10 to-transparent">
                            </div>


                            {{-- Play Button --}}
                            <div
                                class="absolute left-1/2 top-1/2
                                       flex h-16 w-16
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 shadow-xl
                                       transition duration-300
                                       group-hover:scale-110
                                       sm:h-20 sm:w-20">

                                <i
                                    class="ri-play-fill ml-1 text-3xl
                                           sm:text-4xl">
                                </i>

                            </div>


                            {{-- Video Badge --}}
                            <span
                                class="absolute left-5 top-5 inline-flex
                                       items-center gap-2 rounded-full
                                       bg-black/60 px-3 py-1.5
                                       text-xs font-medium text-white
                                       backdrop-blur-sm">

                                <i class="ri-video-line"></i>

                                Video Podcast

                            </span>


                            {{-- Duration --}}
                            <span
                                class="absolute bottom-5 right-5
                                       rounded-md bg-black/70 px-2.5 py-1
                                       text-xs font-medium text-white">

                                24:18

                            </span>

                        </a>


                        {{-- ================================================= --}}
                        {{-- Information --}}
                        {{-- ================================================= --}}

                        <div class="flex flex-col justify-center p-6
                                   sm:p-8 lg:p-10">


                            {{-- Category --}}
                            <div class="flex items-center gap-3 text-sm">

                                <span class="font-semibold text-red-600">

                                    Suara Retorika

                                </span>

                                <span class="text-gray-300">

                                    •

                                </span>

                                <span class="text-gray-400">

                                    20 Juli 2026

                                </span>

                            </div>


                            {{-- Title --}}
                            <h3
                                class="mt-4 text-2xl font-bold leading-tight
                                       text-gray-900 sm:text-3xl">

                                Mengenal Pers Mahasiswa
                                di Era Digital

                            </h3>


                            {{-- Description --}}
                            <p
                                class="mt-5 text-sm leading-7 text-gray-500
                                       sm:text-base">

                                Bagaimana peran pers mahasiswa di tengah
                                perkembangan media digital? Dalam episode
                                kali ini, Suara Retorika membahas tantangan,
                                peluang, dan peran mahasiswa dalam menjaga
                                keberlanjutan pers kampus.

                            </p>


                            {{-- Meta --}}
                            <div
                                class="mt-6 flex flex-wrap items-center
                                       gap-x-5 gap-y-3 text-sm text-gray-500">

                                <span class="inline-flex items-center gap-2">

                                    <i class="ri-calendar-line"></i>

                                    20 Juli 2026

                                </span>

                                <span class="inline-flex items-center gap-2">

                                    <i class="ri-time-line"></i>

                                    24 menit

                                </span>

                            </div>


                            {{-- CTA --}}
                            <div class="mt-8">

                                <a href="{{route('podcast.show')}}"
                                    class="inline-flex items-center
                                           justify-center gap-2 rounded-xl
                                           bg-red-600 px-5 py-3
                                           text-sm font-semibold text-white
                                           transition hover:bg-red-700">

                                    Tonton Episode

                                    <i class="ri-play-circle-line text-lg"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- ================================================= --}}
            {{-- Latest Podcasts --}}
            {{-- ================================================= --}}

            <section class="mt-16 lg:mt-20">


                {{-- Section Header --}}
                <div
                    class="flex flex-col gap-4
                           sm:flex-row sm:items-end
                           sm:justify-between">

                    <div>

                        <p
                            class="text-sm font-semibold uppercase
                                   tracking-wider text-red-600">

                            Episode

                        </p>

                        <h2
                            class="mt-1 text-2xl font-bold text-gray-900
                                   sm:text-3xl">

                            Podcast Terbaru Lainnya

                        </h2>

                    </div>


                    {{-- Sort --}}
                    <button type="button"
                        class="inline-flex items-center gap-2 self-start
                               rounded-xl border border-gray-200
                               bg-white px-4 py-2.5 text-sm font-medium
                               text-gray-700 transition
                               hover:bg-gray-50 sm:self-auto">

                        Terbaru

                        <i class="ri-arrow-down-s-line"></i>

                    </button>

                </div>


                {{-- ================================================= --}}
                {{-- Podcast Grid --}}
                {{-- ================================================= --}}

                <div
                    class="mt-8 grid gap-6
                           sm:grid-cols-2
                           lg:grid-cols-3">


                    {{-- ================================================= --}}
                    {{-- Podcast Card 1 --}}
                    {{-- ================================================= --}}

                    <article
                        class="group overflow-hidden rounded-2xl bg-white
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-lg">


                        {{-- Thumbnail --}}
                        <a href="#"
                            class="relative block aspect-video
                                   overflow-hidden bg-gray-900">

                            <img src="https://picsum.photos/800/450?random=102"
                                alt="Media Kampus dan Tantangan Jurnalisme"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">


                            {{-- Overlay --}}
                            <div
                                class="absolute inset-0 bg-black/0
                                       transition group-hover:bg-black/20">
                            </div>


                            {{-- Play --}}
                            <span
                                class="absolute left-1/2 top-1/2
                                       flex h-12 w-12
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 opacity-0 shadow-lg
                                       transition duration-300
                                       group-hover:opacity-100">

                                <i class="ri-play-fill ml-0.5 text-xl"></i>

                            </span>


                            {{-- Duration --}}
                            <span
                                class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                                18:42

                            </span>

                        </a>


                        {{-- Content --}}
                        <div class="p-5">

                            <div
                                class="flex items-center gap-2 text-xs
                                       text-gray-400">

                                <span class="font-medium text-red-600">

                                    Suara Retorika

                                </span>

                                <span>•</span>

                                <span>

                                    18 Juli 2026

                                </span>

                            </div>


                            <h3
                                class="mt-3 text-lg font-bold leading-6
                                       text-gray-900">

                                Media Kampus dan Tantangan
                                Jurnalisme Mahasiswa

                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm
                                       leading-6 text-gray-500">

                                Membahas bagaimana mahasiswa dapat
                                mempertahankan independensi media
                                kampus di tengah perkembangan digital.

                            </p>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2
                                       text-sm font-semibold text-red-600
                                       transition hover:text-red-700">

                                Tonton Episode

                                <i
                                    class="ri-arrow-right-line
                                           transition group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </article>


                    {{-- ================================================= --}}
                    {{-- Podcast Card 2 --}}
                    {{-- ================================================= --}}

                    <article
                        class="group overflow-hidden rounded-2xl bg-white
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-lg">


                        {{-- Thumbnail --}}
                        <a href="#"
                            class="relative block aspect-video
                                   overflow-hidden bg-gray-900">

                            <img src="https://picsum.photos/800/450?random=103"
                                alt="Organisasi Mahasiswa di Era Digital"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">


                            {{-- Overlay --}}
                            <div
                                class="absolute inset-0 bg-black/0
                                       transition group-hover:bg-black/20">
                            </div>


                            {{-- Play --}}
                            <span
                                class="absolute left-1/2 top-1/2
                                       flex h-12 w-12
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 opacity-0 shadow-lg
                                       transition duration-300
                                       group-hover:opacity-100">

                                <i class="ri-play-fill ml-0.5 text-xl"></i>

                            </span>


                            {{-- Duration --}}
                            <span
                                class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                                22:15

                            </span>

                        </a>


                        {{-- Content --}}
                        <div class="p-5">

                            <div
                                class="flex items-center gap-2 text-xs
                                       text-gray-400">

                                <span class="font-medium text-red-600">

                                    Suara Retorika

                                </span>

                                <span>•</span>

                                <span>

                                    15 Juli 2026

                                </span>

                            </div>


                            <h3
                                class="mt-3 text-lg font-bold leading-6
                                       text-gray-900">

                                Organisasi Mahasiswa
                                di Era Digital

                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm
                                       leading-6 text-gray-500">

                                Membahas perubahan pola organisasi
                                mahasiswa dan bagaimana teknologi
                                memengaruhi aktivitas kemahasiswaan.

                            </p>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2
                                       text-sm font-semibold text-red-600
                                       transition hover:text-red-700">

                                Tonton Episode

                                <i
                                    class="ri-arrow-right-line
                                           transition group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </article>


                    {{-- ================================================= --}}
                    {{-- Podcast Card 3 --}}
                    {{-- ================================================= --}}

                    <article
                        class="group overflow-hidden rounded-2xl bg-white
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-lg">


                        {{-- Thumbnail --}}
                        <a href="#"
                            class="relative block aspect-video
                                   overflow-hidden bg-gray-900">

                            <img src="https://picsum.photos/800/450?random=104" alt="Menjadi Mahasiswa yang Kritis"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">


                            {{-- Overlay --}}
                            <div
                                class="absolute inset-0 bg-black/0
                                       transition group-hover:bg-black/20">
                            </div>


                            {{-- Play --}}
                            <span
                                class="absolute left-1/2 top-1/2
                                       flex h-12 w-12
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 opacity-0 shadow-lg
                                       transition duration-300
                                       group-hover:opacity-100">

                                <i class="ri-play-fill ml-0.5 text-xl"></i>

                            </span>


                            {{-- Duration --}}
                            <span
                                class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                                26:03

                            </span>

                        </a>


                        {{-- Content --}}
                        <div class="p-5">

                            <div
                                class="flex items-center gap-2 text-xs
                                       text-gray-400">

                                <span class="font-medium text-red-600">

                                    Suara Retorika

                                </span>

                                <span>•</span>

                                <span>

                                    12 Juli 2026

                                </span>

                            </div>


                            <h3
                                class="mt-3 text-lg font-bold leading-6
                                       text-gray-900">

                                Menjadi Mahasiswa
                                yang Kritis dan Berdaya

                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm
                                       leading-6 text-gray-500">

                                Perbincangan mengenai pentingnya
                                berpikir kritis dan berani menyampaikan
                                pendapat sebagai mahasiswa.

                            </p>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2
                                       text-sm font-semibold text-red-600
                                       transition hover:text-red-700">

                                Tonton Episode

                                <i
                                    class="ri-arrow-right-line
                                           transition group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </article>


                    {{-- ================================================= --}}
                    {{-- Podcast Card 4 --}}
                    {{-- ================================================= --}}

                    <article
                        class="group overflow-hidden rounded-2xl bg-white
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-lg">


                        <a href="#"
                            class="relative block aspect-video
                                   overflow-hidden bg-gray-900">

                            <img src="https://picsum.photos/800/450?random=105"
                                alt="Pendidikan dan Masa Depan Mahasiswa"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">


                            <div
                                class="absolute inset-0 bg-black/0
                                       transition group-hover:bg-black/20">
                            </div>


                            <span
                                class="absolute left-1/2 top-1/2
                                       flex h-12 w-12
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 opacity-0 shadow-lg
                                       transition duration-300
                                       group-hover:opacity-100">

                                <i class="ri-play-fill ml-0.5 text-xl"></i>

                            </span>


                            <span
                                class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                                20:31

                            </span>

                        </a>


                        <div class="p-5">

                            <div
                                class="flex items-center gap-2 text-xs
                                       text-gray-400">

                                <span class="font-medium text-red-600">

                                    Suara Retorika

                                </span>

                                <span>•</span>

                                <span>

                                    8 Juli 2026

                                </span>

                            </div>


                            <h3
                                class="mt-3 text-lg font-bold leading-6
                                       text-gray-900">

                                Pendidikan dan Masa Depan
                                Mahasiswa

                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm
                                       leading-6 text-gray-500">

                                Membicarakan tantangan pendidikan
                                tinggi dan kesiapan mahasiswa
                                menghadapi masa depan.

                            </p>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2
                                       text-sm font-semibold text-red-600
                                       transition hover:text-red-700">

                                Tonton Episode

                                <i
                                    class="ri-arrow-right-line
                                           transition group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </article>


                    {{-- ================================================= --}}
                    {{-- Podcast Card 5 --}}
                    {{-- ================================================= --}}

                    <article
                        class="group overflow-hidden rounded-2xl bg-white
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-lg">


                        <a href="#"
                            class="relative block aspect-video
                                   overflow-hidden bg-gray-900">

                            <img src="https://picsum.photos/800/450?random=106" alt="Suara Mahasiswa untuk Perubahan"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">


                            <div
                                class="absolute inset-0 bg-black/0
                                       transition group-hover:bg-black/20">
                            </div>


                            <span
                                class="absolute left-1/2 top-1/2
                                       flex h-12 w-12
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 opacity-0 shadow-lg
                                       transition duration-300
                                       group-hover:opacity-100">

                                <i class="ri-play-fill ml-0.5 text-xl"></i>

                            </span>


                            <span
                                class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                                17:56

                            </span>

                        </a>


                        <div class="p-5">

                            <div
                                class="flex items-center gap-2 text-xs
                                       text-gray-400">

                                <span class="font-medium text-red-600">

                                    Suara Retorika

                                </span>

                                <span>•</span>

                                <span>

                                    5 Juli 2026

                                </span>

                            </div>


                            <h3
                                class="mt-3 text-lg font-bold leading-6
                                       text-gray-900">

                                Suara Mahasiswa
                                untuk Perubahan

                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm
                                       leading-6 text-gray-500">

                                Bagaimana mahasiswa dapat menggunakan
                                ruang publik untuk menyuarakan gagasan
                                dan menciptakan perubahan.

                            </p>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2
                                       text-sm font-semibold text-red-600
                                       transition hover:text-red-700">

                                Tonton Episode

                                <i
                                    class="ri-arrow-right-line
                                           transition group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </article>


                    {{-- ================================================= --}}
                    {{-- Podcast Card 6 --}}
                    {{-- ================================================= --}}

                    <article
                        class="group overflow-hidden rounded-2xl bg-white
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-lg">


                        <a href="#"
                            class="relative block aspect-video
                                   overflow-hidden bg-gray-900">

                            <img src="https://picsum.photos/800/450?random=107" alt="Kehidupan Mahasiswa di Kampus"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">


                            <div
                                class="absolute inset-0 bg-black/0
                                       transition group-hover:bg-black/20">
                            </div>


                            <span
                                class="absolute left-1/2 top-1/2
                                       flex h-12 w-12
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 opacity-0 shadow-lg
                                       transition duration-300
                                       group-hover:opacity-100">

                                <i class="ri-play-fill ml-0.5 text-xl"></i>

                            </span>


                            <span
                                class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                                21:44

                            </span>

                        </a>


                        <div class="p-5">

                            <div
                                class="flex items-center gap-2 text-xs
                                       text-gray-400">

                                <span class="font-medium text-red-600">

                                    Suara Retorika

                                </span>

                                <span>•</span>

                                <span>

                                    1 Juli 2026

                                </span>

                            </div>


                            <h3
                                class="mt-3 text-lg font-bold leading-6
                                       text-gray-900">

                                Kehidupan Mahasiswa
                                di Kampus

                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm
                                       leading-6 text-gray-500">

                                Cerita dan pengalaman mahasiswa
                                menjalani kehidupan akademik,
                                organisasi, dan kegiatan kampus.

                            </p>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2
                                       text-sm font-semibold text-red-600
                                       transition hover:text-red-700">

                                Tonton Episode

                                <i
                                    class="ri-arrow-right-line
                                           transition group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </article>

                </div>


                {{-- ================================================= --}}
                {{-- Pagination --}}
                {{-- ================================================= --}}

                <div class="mt-12 flex justify-center">

                    <nav class="flex items-center gap-2" aria-label="Pagination">


                        {{-- Previous --}}
                        <button type="button" disabled
                            class="flex h-10 w-10 items-center
                                   justify-center rounded-xl
                                   border border-gray-200
                                   bg-white text-gray-300">

                            <i class="ri-arrow-left-s-line"></i>

                        </button>


                        {{-- Current --}}
                        <button type="button"
                            class="flex h-10 w-10 items-center
                                   justify-center rounded-xl
                                   bg-red-600 text-sm font-semibold
                                   text-white">

                            1

                        </button>


                        {{-- Page 2 --}}
                        <button type="button"
                            class="flex h-10 w-10 items-center
                                   justify-center rounded-xl
                                   border border-gray-200
                                   bg-white text-sm font-medium
                                   text-gray-700 transition
                                   hover:bg-gray-50">

                            2

                        </button>


                        {{-- Page 3 --}}
                        <button type="button"
                            class="flex h-10 w-10 items-center
                                   justify-center rounded-xl
                                   border border-gray-200
                                   bg-white text-sm font-medium
                                   text-gray-700 transition
                                   hover:bg-gray-50">

                            3

                        </button>


                        {{-- Next --}}
                        <button type="button"
                            class="flex h-10 w-10 items-center
                                   justify-center rounded-xl
                                   border border-gray-200
                                   bg-white text-gray-700
                                   transition hover:bg-gray-50">

                            <i class="ri-arrow-right-s-line"></i>

                        </button>

                    </nav>

                </div>

            </section>

        </section>

    </main>

</x-app-layout>
