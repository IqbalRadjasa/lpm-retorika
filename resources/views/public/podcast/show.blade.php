{{-- ================================================= --}}
{{-- Podcast Detail --}}
{{-- ================================================= --}}

<x-app-layout>
    <div class="mx-auto max-w-7xl px-6 pt-30 pb-10 sm:px-8 lg:px-12 lg:pb-14 ">


        {{-- ================================================= --}}
        {{-- Breadcrumb --}}
        {{-- ================================================= --}}

        <nav class="mb-8 flex flex-wrap items-center gap-2 text-sm text-gray-400" aria-label="Breadcrumb">

            <a href="{{ route('beranda') }}" class="transition hover:text-red-600">

                Beranda

            </a>

            <i class="ri-arrow-right-s-line"></i>

            <a href="{{ route('podcast.index') }}" class="transition hover:text-red-600">

                Podcast

            </a>

            <i class="ri-arrow-right-s-line"></i>

            <span class="text-gray-600">

                Mengenal Pers Mahasiswa di Era Digital

            </span>

        </nav>


        {{-- ================================================= --}}
        {{-- Podcast Information --}}
        {{-- ================================================= --}}



        {{-- Category --}}
        <div class="flex flex-wrap items-center gap-3">

            <span
                class="inline-flex items-center gap-2 rounded-full
                               bg-red-50 px-3 py-1.5
                               text-xs font-semibold text-red-600">

                <i class="ri-video-line"></i>

                Podcast

            </span>

            <span class="text-gray-300">
                •
            </span>

            <span class="text-sm text-gray-500">

                Suara Retorika

            </span>

        </div>


        {{-- Title --}}
        <h1
            class="mt-5 text-3xl font-bold leading-tight
                           tracking-tight text-gray-900
                           sm:text-4xl lg:text-5xl">

            Mengenal Pers Mahasiswa
            di Era Digital

        </h1>


        {{-- Meta --}}
        <div class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-3
                           text-sm text-gray-500">

            <span class="inline-flex items-center gap-2">

                <i class="ri-calendar-line text-gray-400"></i>

                20 Juli 2026

            </span>

            <span class="inline-flex items-center gap-2">

                <i class="ri-time-line text-gray-400"></i>

                24 menit

            </span>

        </div>


        {{-- ================================================= --}}
        {{-- Video Player --}}
        {{-- ================================================= --}}

        <div
            class="mt-8 overflow-hidden rounded-2xl
                           bg-black shadow-xl
                           sm:rounded-3xl">

            <video controls preload="metadata" poster="https://picsum.photos/1280/720?random=201"
                class="aspect-video w-full">

                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">

                Browser Anda tidak mendukung
                pemutaran video.

            </video>

        </div>


        {{-- ================================================= --}}
        {{-- Video Caption --}}
        {{-- ================================================= --}}

        <p class="mt-3 text-xs text-gray-400">

            Suara Retorika — Mengenal Pers Mahasiswa
            di Era Digital

        </p>


        {{-- ================================================= --}}
        {{-- Description --}}
        {{-- ================================================= --}}

        <article class="mt-10">


            <h2 class="text-xl font-bold text-gray-900
                               sm:text-2xl">

                Tentang Episode

            </h2>


            <div class="mt-5 space-y-5 text-base leading-8
                               text-gray-600">

                <p>

                    Bagaimana peran pers mahasiswa di tengah
                    perkembangan media digital?

                </p>

                <p>

                    Dalam episode kali ini, Suara Retorika
                    membahas tantangan, peluang, dan peran
                    mahasiswa dalam menjaga keberlanjutan
                    pers kampus.

                </p>

                <p>

                    Bersama narasumber yang memiliki pengalaman
                    di dunia pers mahasiswa, episode ini
                    membicarakan bagaimana media kampus dapat
                    tetap menjadi ruang bagi mahasiswa untuk
                    menyampaikan gagasan, melakukan kritik,
                    dan memberikan informasi yang relevan.

                </p>

            </div>

        </article>


        {{-- ================================================= --}}
        {{-- Share --}}
        {{-- ================================================= --}}

        <div class="mt-10 border-y border-gray-100 py-6">

            <div
                class="flex flex-col gap-4
                               sm:flex-row sm:items-center
                               sm:justify-between">

                <div>

                    <p class="text-sm font-semibold text-gray-900">

                        Bagikan Episode

                    </p>

                    <p class="mt-1 text-sm text-gray-500">

                        Bagikan podcast ini kepada temanmu.

                    </p>

                </div>


                {{-- Share --}}
                <div class="flex items-center gap-3">

                    <span class="text-sm text-gray-500">

                        Bagikan

                    </span>

                    <button class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                        <i class="ri-facebook-fill"></i>
                    </button>

                    <button class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                        <i class="ri-twitter-x-line"></i>
                    </button>

                    <button class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                        <i class="ri-whatsapp-line"></i>
                    </button>

                    <button class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                        <i class="ri-link"></i>
                    </button>

                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- Related Podcasts --}}
        {{-- ================================================= --}}

        <section class="mt-16 border-t border-gray-100 pt-12">


            {{-- Section Header --}}
            <div class="flex items-end justify-between gap-4">

                <div>

                    <p
                        class="text-sm font-semibold uppercase
                                   tracking-wider text-red-600">

                        Lainnya

                    </p>

                    <h2 class="mt-1 text-2xl font-bold text-gray-900
                                   sm:text-3xl">

                        Podcast Lainnya

                    </h2>

                </div>


                <a href="#"
                    class="hidden items-center gap-2 text-sm
                               font-semibold text-red-600
                               transition hover:text-red-700
                               sm:inline-flex">

                    Lihat Semua

                    <i class="ri-arrow-right-line"></i>

                </a>

            </div>


            {{-- ================================================= --}}
            {{-- Related Grid --}}
            {{-- ================================================= --}}

            <div
                class="mt-8 grid gap-6
                           sm:grid-cols-2
                           lg:grid-cols-3">


                {{-- ================================================= --}}
                {{-- Related Card 1 --}}
                {{-- ================================================= --}}

                <article class="group">

                    <a href="#"
                        class="relative block aspect-video
                                   overflow-hidden rounded-xl
                                   bg-gray-900">

                        <img src="https://picsum.photos/800/450?random=202" alt="Media Kampus dan Tantangan Jurnalisme"
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
                                       transition group-hover:opacity-100">

                            <i class="ri-play-fill ml-0.5 text-xl"></i>

                        </span>


                        <span
                            class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                            18:42

                        </span>

                    </a>


                    <div class="mt-4">

                        <p class="text-xs text-gray-400">

                            18 Juli 2026 · Suara Retorika

                        </p>

                        <h3
                            class="mt-2 text-lg font-bold leading-6
                                       text-gray-900
                                       transition group-hover:text-red-600">

                            Media Kampus dan Tantangan
                            Jurnalisme Mahasiswa

                        </h3>

                    </div>

                </article>


                {{-- ================================================= --}}
                {{-- Related Card 2 --}}
                {{-- ================================================= --}}

                <article class="group">

                    <a href="#"
                        class="relative block aspect-video
                                   overflow-hidden rounded-xl
                                   bg-gray-900">

                        <img src="https://picsum.photos/800/450?random=203" alt="Organisasi Mahasiswa di Era Digital"
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
                                       transition group-hover:opacity-100">

                            <i class="ri-play-fill ml-0.5 text-xl"></i>

                        </span>


                        <span
                            class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                            22:15

                        </span>

                    </a>


                    <div class="mt-4">

                        <p class="text-xs text-gray-400">

                            15 Juli 2026 · Suara Retorika

                        </p>

                        <h3
                            class="mt-2 text-lg font-bold leading-6
                                       text-gray-900
                                       transition group-hover:text-red-600">

                            Organisasi Mahasiswa
                            di Era Digital

                        </h3>

                    </div>

                </article>


                {{-- ================================================= --}}
                {{-- Related Card 3 --}}
                {{-- ================================================= --}}

                <article class="group">

                    <a href="#"
                        class="relative block aspect-video
                                   overflow-hidden rounded-xl
                                   bg-gray-900">

                        <img src="https://picsum.photos/800/450?random=204" alt="Menjadi Mahasiswa yang Kritis"
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
                                       transition group-hover:opacity-100">

                            <i class="ri-play-fill ml-0.5 text-xl"></i>

                        </span>


                        <span
                            class="absolute bottom-3 right-3
                                       rounded-md bg-black/70 px-2 py-1
                                       text-xs font-medium text-white">

                            26:03

                        </span>

                    </a>


                    <div class="mt-4">

                        <p class="text-xs text-gray-400">

                            12 Juli 2026 · Suara Retorika

                        </p>

                        <h3
                            class="mt-2 text-lg font-bold leading-6
                                       text-gray-900
                                       transition group-hover:text-red-600">

                            Menjadi Mahasiswa
                            yang Kritis dan Berdaya

                        </h3>

                    </div>

                </article>

            </div>


            {{-- Mobile See All --}}
            <div class="mt-8 sm:hidden">

                <a href="#"
                    class="inline-flex w-full items-center
                               justify-center gap-2 rounded-xl
                               border border-gray-200 bg-white
                               px-5 py-3 text-sm font-semibold
                               text-gray-700 transition hover:bg-gray-50">

                    Lihat Semua Podcast

                    <i class="ri-arrow-right-line"></i>

                </a>

            </div>

        </section>

    </div>
</x-app-layout>
