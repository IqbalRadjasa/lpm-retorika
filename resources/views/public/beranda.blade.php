<x-app-layout>

    <main class="
        pt-30
        max-w-screen-xl
        mx-auto
        px-4
        sm:px-6
        lg:px-8">

        {{-- Hero --}}
        <section class="pb-20">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- Featured Article --}}
                <div
                    class="lg:col-span-2 h-[360px] md:h-[440px] lg:h-[520px] rounded-3xl overflow-hidden relative bg-gradient-to-br from-gray-900 to-gray-700">

                    <img src="https://picsum.photos/1200/700"
                        class="absolute inset-0 w-full h-full object-cover opacity-70">

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                    <div class="absolute bottom-0 py-8 px-4 text-white">

                        <span class="inline-flex px-3 py-1 rounded-full bg-red-600 text-sm font-semibold">
                            Berita Utama
                        </span>

                        <h1 class="mt-4 sm:text-lg md:text-2xl lg:text-4xl font-bold leading-tight max-w-3xl">

                            Mahasiswa Berhasil Mengembangkan Platform Digital Untuk Pers Kampus

                        </h1>

                        <p class="hidden lg:block mt-4 text-gray-200 max-w-xl leading-7">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloremque eaque fugit aspernatur quos.
                        </p>

                        <div class="mt-6 flex gap-6 text-sm text-gray-300">

                            <span>14 Juli 2026</span>

                            <span>•</span>

                            <span>5 min read</span>

                        </div>

                    </div>

                </div>

                {{-- Trending --}}
                <div class="h-[460px] md:h-[460px] lg:h-[520px] grid grid-rows-[auto_1fr] gap-5">

                    {{-- Heading --}}
                    <div>
                        <h2 class="text-2xl font-bold text-center lg:text-left uppercase">
                            Trending
                        </h2>
                    </div>

                    {{-- Cards --}}
                    <div class="grid h-full grid-rows-[1fr_1fr_auto] gap-5">

                        @foreach (range(1, 2) as $item)
                            <article class="group relative overflow-hidden rounded-2xl shadow-sm">

                                <img src="https://picsum.photos/500/300?random={{ $item }}"
                                    class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">

                                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent">
                                </div>

                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-red-600 text-xs font-semibold text-white">

                                    Kampus

                                </span>

                                <div class="absolute bottom-4 left-4 right-4 text-white">

                                    <h3 class="font-bold leading-6">

                                        Judul artikel trending ke {{ $item }}

                                    </h3>

                                    <div class="flex items-center gap-4 mt-2 text-sm text-gray-300">
                                        <span class="flex items-center gap-1">
                                            <i class="ri-calendar-line"></i>
                                            18 Jul 2026
                                        </span>

                                        <span>•</span>

                                        <span class="flex items-center gap-1">
                                            <i class="ri-time-line"></i>
                                            5 min
                                        </span>
                                    </div>

                                </div>

                            </article>
                        @endforeach

                        {{-- CTA --}}
                        <a href="#"
                            class="group
                                    h-14
                                    rounded-2xl
                                    bg-red-500
                                    flex items-center justify-center gap-2
                                    text-white
                                    font-semibold
                                    transition-all duration-300
                                    hover:bg-red-600
                                    hover:shadow-lg
                                    hover:shadow-red-500/30">

                            <span class=" text-sm md:text-lg lg:text-lg font-semibold">
                                Lihat Semua
                            </span>

                            <i class="ri-arrow-right-line text-xl transition group-hover:translate-x-1">
                            </i>

                        </a>

                    </div>

                </div>
            </div>
        </section>

        {{-- Podcast --}}
        <section class="pb-20">

            <div
                class="relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500">

                {{-- Background Decoration --}}
                <i
                    class="ri-mic-2-line
                        absolute
                        top-3
                        left-1/2
                        -translate-x-1/2
                        text-[140px]
                        text-[170px]
                        lg:text-[220px]
                        text-white/5
                        text-white/10
                        lg:text-white/10
                        pointer-events-none
                        lg:left-auto
                        lg:right-[-2rem]
                        lg:top-[-2rem]
                        lg:translate-x-0">
                </i>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-10 items-center p-6 md:p-8 lg:p-12">

                    {{-- ========================= --}}
                    {{-- Left --}}
                    {{-- ========================= --}}
                    <div class="text-center md:text-left">

                        <span
                            class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-4 py-2 text-sm font-semibold text-white">

                            <i class="ri-headphone-line"></i>

                            Podcast

                        </span>

                        <h2
                            class="mt-5
                        text-3xl
                        md:text-4xl
                        lg:text-5xl
                        font-bold
                        leading-tight
                        text-white">

                            Podcast
                            <br>

                            Suara Retorika

                        </h2>

                        <p
                            class="mt-5
                        max-w-md
                        mx-auto
                        md:mx-0
                        text-red-100
                        leading-7">

                            Perbincangan seputar isu kampus,
                            pendidikan, organisasi mahasiswa,
                            serta berbagai topik menarik lainnya.

                        </p>

                        <a href="#"
                            class="mt-8 inline-flex w-full md:w-auto justify-center items-center gap-3 rounded-xl bg-white px-6 py-4 font-semibold text-red-600 transition hover:shadow-xl">

                            Dengarkan Sekarang

                            <i class="ri-arrow-right-line"></i>

                        </a>

                    </div>

                    {{-- ========================= --}}
                    {{-- Right --}}
                    {{-- ========================= --}}
                    <div class="rounded-2xl bg-white p-4 md:p-5 shadow-2xl" x-data="{ shareOpen: false }">

                        {{-- Podcast Info --}}
                        <div
                            class="flex flex-col sm:flex-row gap-4 items-center sm:items-start text-center sm:text-left">

                            <img src="https://picsum.photos/120/120?random=88"
                                class="h-20 w-20 rounded-xl object-cover shrink-0">

                            <div class="flex-1">

                                <h3 class="text-lg font-bold leading-7">

                                    Mengenal Pers Mahasiswa
                                    di Era Digital

                                </h3>

                                <p class="mt-1 text-sm text-gray-500">

                                    Suara Retorika

                                </p>

                            </div>

                            {{-- Mobile --}}
                            <button @click="shareOpen = true"
                                class="flex md:hidden h-10 w-10 items-center justify-center rounded-full hover:bg-gray-100">

                                <i class="ri-share-line text-lg"></i>

                            </button>

                            {{-- Desktop --}}
                            <div class="hidden md:block">

                                <x-dropdown align="right" width="64">

                                    <x-slot name="trigger">

                                        <button
                                            class="flex h-10 w-10 items-center justify-center rounded-full hover:bg-gray-100">

                                            <i class="ri-share-line text-lg"></i>

                                        </button>

                                    </x-slot>

                                    <x-slot name="content">

                                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                                            <i class="ri-link"></i>
                                            Salin Link
                                        </x-dropdown-link>

                                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                                            <i class="ri-whatsapp-line text-green-600"></i>
                                            WhatsApp
                                        </x-dropdown-link>

                                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                                            <i class="ri-twitter-x-line"></i>
                                            Twitter / X
                                        </x-dropdown-link>

                                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                                            <i class="ri-facebook-circle-line text-blue-600"></i>
                                            Facebook
                                        </x-dropdown-link>

                                    </x-slot>

                                </x-dropdown>

                            </div>

                            {{-- Mobile Share Sheet --}}
                            <div x-show="shareOpen" x-cloak class="fixed inset-0 z-[999]" style="display:none">

                                {{-- Overlay --}}
                                <div @click="shareOpen = false" class="absolute inset-0 bg-black/50">
                                </div>

                                {{-- Bottom Sheet --}}
                                <div x-show="shareOpen" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
                                    class="absolute bottom-0 left-0 right-0 rounded-t-3xl bg-white p-6">

                                    {{-- Handle --}}
                                    <div class="mx-auto mb-6 h-1.5 w-14 rounded-full bg-gray-300"></div>

                                    <h3 class="text-center text-lg font-bold">

                                        Bagikan

                                    </h3>

                                    <div class="mt-6 space-y-2">

                                        <a href="#"
                                            class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                            <i class="ri-link text-xl text-gray-500"></i>

                                            <span>Salin Link</span>

                                        </a>

                                        <a href="#"
                                            class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                            <i class="ri-whatsapp-line text-xl text-green-600"></i>

                                            <span>WhatsApp</span>

                                        </a>

                                        <a href="#"
                                            class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                            <i class="ri-twitter-x-line text-xl"></i>

                                            <span>Twitter / X</span>

                                        </a>

                                        <a href="#"
                                            class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                            <i class="ri-facebook-circle-line text-xl text-blue-600"></i>

                                            <span>Facebook</span>

                                        </a>

                                    </div>

                                    <button @click="shareOpen=false"
                                        class="mt-6 w-full rounded-xl bg-gray-100 py-4 font-semibold transition hover:bg-gray-200">

                                        Batal

                                    </button>

                                </div>

                            </div>

                        </div>

                        {{-- Audio --}}
                        <div class="mt-6 rounded-xl bg-gray-100 p-3">

                            <audio controls preload="metadata" class="w-full">

                                <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"
                                    type="audio/mpeg">

                                Browser Anda tidak mendukung audio.

                            </audio>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Latest Release --}}
        <section class="py-12 md:py-16 lg:py-20">

            {{-- Header --}}
            <div
                class="relative overflow-hidden
                flex flex-col items-center justify-center
                lg:flex-row lg:justify-between
                gap-3
                bg-gradient-to-r from-red-700 via-red-600 to-red-500
                px-5 lg:px-6
                py-6
                rounded-t-xl">

                {{-- Decorative Icon --}}
                <i
                    class="ri-bell-line
                    absolute
                    left-1/2 top-1/2
                    -translate-x-1/2 -translate-y-1/2
                    lg:left-auto lg:right-0 lg:top-0
                    lg:translate-x-1/4 lg:-translate-y-1/4
                    text-[170px]
                    text-white/10
                    pointer-events-none">
                </i>

                <div class="relative z-10 text-center lg:text-left">

                    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold uppercase text-white">

                        Rilisan Terbaru

                    </h2>

                </div>

                <a href="#"
                    class="relative z-10
                    group inline-flex items-center gap-2
                    rounded-full
                    bg-white/20
                    px-5 py-2.5
                    text-sm font-medium
                    text-white
                    backdrop-blur-sm
                    transition-all duration-300
                    hover:bg-white/30
                    hover:scale-105">

                    Lihat Semua

                    <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>

                </a>

            </div>

            {{-- Content --}}
            <div class="bg-white rounded-b-xl shadow-lg p-5 lg:p-6 space-y-8">

                {{-- ============================= --}}
                {{-- Editorial Block --}}
                {{-- ============================= --}}

                <div class="grid lg:grid-cols-3 gap-6">

                    {{-- Featured --}}
                    <article
                        class="group lg:col-span-2 relative overflow-hidden rounded-3xl h-[280px] sm:h-[340px] lg:h-[450px]">

                        <img src="https://picsum.photos/900/600?random=1"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                        <div class="absolute bottom-0 p-5 sm:p-6 lg:p-8 text-white">

                            <span
                                class="inline-flex items-center rounded-full bg-red-600 px-3 py-1 text-xs font-semibold">

                                Baru

                            </span>

                            <h3
                                class="mt-4 text-xl sm:text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-300 transition">

                                Judul artikel terbaru paling utama

                            </h3>

                            <p class="hidden lg:block mt-4 max-w-xl text-gray-200">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolore, asperiores. Quasi magni sapiente aspernatur.

                            </p>

                            <div class="mt-5 flex flex-wrap gap-3 text-sm text-gray-300">

                                <span>14 Juli 2026</span>

                                <span>•</span>

                                <span>5 min read</span>

                            </div>

                        </div>

                    </article>

                    {{-- Secondary Articles --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-5">

                        @foreach (range(2, 3) as $item)
                            <article
                                class="group flex gap-4 rounded-2xl border border-gray-200 p-4 hover:shadow-lg transition">

                                <img src="https://picsum.photos/240/180?random={{ $item }}"
                                    class="w-28 sm:w-32 lg:w-36 self-stretch rounded-xl object-cover shrink-0">

                                <div class="flex flex-1 flex-col min-w-0">

                                    <span class="text-xs font-semibold uppercase text-red-600">
                                        Berita
                                    </span>

                                    <h4
                                        class="mt-2 text-base lg:text-lg font-bold leading-6 group-hover:text-red-600 transition">

                                        Judul artikel terbaru ke {{ $item }}

                                    </h4>

                                    <div
                                        class="mt-3 flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-4 text-sm text-gray-400">

                                        <span>14 Jul 2026</span>

                                        <span class="flex items-center gap-1">
                                            <i class="ri-time-line"></i>
                                            5 min
                                        </span>

                                    </div>

                                </div>

                            </article>
                        @endforeach

                    </div>

                </div>

                {{-- ============================= --}}
                {{-- Remaining Articles --}}
                {{-- ============================= --}}

                <div class="hidden xl:grid xl:grid-cols-3 gap-6">

                    @foreach (range(4, 6) as $item)
                        <article
                            class="group rounded-2xl overflow-hidden border border-gray-200 bg-white hover:-translate-y-1 hover:shadow-xl transition-all duration-300">

                            <div class="overflow-hidden">

                                <img src="https://picsum.photos/500/350?random={{ $item }}"
                                    class="aspect-[16/9] w-full object-cover transition duration-500 group-hover:scale-105">

                            </div>

                            <div class="p-5">

                                <span class="text-xs font-semibold uppercase tracking-wide text-red-600">
                                    Berita
                                </span>

                                <h3 class="mt-2 text-lg font-bold leading-7 group-hover:text-red-600 transition">
                                    Judul artikel terbaru ke {{ $item }}
                                </h3>

                                <p class="mt-3 text-sm text-gray-500 line-clamp-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem, magni.
                                </p>

                                <div class="mt-5 flex items-center justify-between text-sm text-gray-400">

                                    <span>14 Jul 2026</span>

                                    <span class="flex items-center gap-1">
                                        <i class="ri-time-line"></i>
                                        5 min
                                    </span>

                                </div>

                            </div>

                        </article>
                    @endforeach

                </div>

            </div>

        </section>

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Campus, National & Opinion --}}
        <section class="py-16 lg:py-20">
            <div class="grid lg:grid-cols-3 gap-8">
                {{-- ================================================= --}}
                {{-- ISU KAMPUS --}}
                {{-- ================================================= --}}
                <div class="space-y-6">

                    {{-- Featured Campus News --}}
                    <article
                        class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                        <div class="overflow-hidden">

                            <img src="https://picsum.photos/700/450?random=100"
                                class="aspect-[16/10] lg:aspect-[16/9] w-full object-cover transition duration-700 group-hover:scale-105">

                        </div>

                        <div class="p-5 lg:p-6">

                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                                Isu Kampus

                            </span>

                            <h3
                                class="mt-4 text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-600 transition">

                                Mahasiswa Menggelar Aksi Lingkungan Hidup di Kampus

                            </h3>

                            <p class="hidden sm:block mt-4 text-gray-500 leading-7">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem molestiae laboriosam expedita asperiores.

                            </p>

                            <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-gray-400">

                                <span>18 Juli 2026</span>

                                <span class="hidden sm:inline">•</span>

                                <span>5 min read</span>

                            </div>

                        </div>

                    </article>

                    {{-- Editorial List --}}
                    <div
                        class="relative rounded-3xl border border-gray-100 bg-white p-4 lg:p-6 overflow-hidden shadow-sm">

                        {{-- Background Decoration --}}
                        <i
                            class="ri-graduation-cap-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                        </i>

                        <div class="relative divide-y divide-gray-200">

                            @foreach (range(1, 4) as $item)
                                <article
                                    class="group flex gap-4 lg:gap-5 py-4 lg:py-5 hover:lg:pl-2 transition-all duration-300">

                                    <span
                                        class="text-2xl sm:text-3xl lg:text-4xl font-black italic text-gray-200 group-hover:text-red-500 transition">

                                        {{ sprintf('%02d', $item) }}

                                    </span>

                                    <div class="flex-1 min-w-0">

                                        <h4
                                            class="text-base lg:text-lg font-semibold leading-6 lg:leading-7 group-hover:text-red-600 transition">

                                            Judul berita kampus {{ $item }}

                                        </h4>

                                        <div class="mt-2 flex items-center gap-2 text-xs lg:text-sm text-gray-500">

                                            <i class="ri-calendar-line"></i>

                                            <span>18 Juli 2026</span>

                                        </div>

                                    </div>

                                    <i
                                        class="hidden lg:block ri-arrow-right-up-line text-xl text-gray-300 opacity-0 group-hover:opacity-100 group-hover:text-red-600 transition">
                                    </i>

                                </article>
                            @endforeach

                            <div class="pt-5">

                                <a href="#"
                                    class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                    <span>Lihat Semua</span>

                                    <i
                                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1">
                                    </i>

                                </a>

                            </div>

                        </div>

                    </div>
                </div>

                {{-- ================================================= --}}
                {{-- NASIONAL --}}
                {{-- ================================================= --}}
                <div class="space-y-6">

                    {{-- Featured National News --}}
                    <article
                        class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                        <div class="overflow-hidden">

                            <img src="https://picsum.photos/700/450?random=200"
                                class="aspect-[16/10] lg:aspect-[16/9] w-full object-cover transition duration-700 group-hover:scale-105">

                        </div>

                        <div class="p-5 lg:p-6">

                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                                Nasional

                            </span>

                            <h3
                                class="mt-4 text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-600 transition">

                                Pemerintah Umumkan Kebijakan Pendidikan Baru

                            </h3>

                            <p class="hidden sm:block mt-4 text-gray-500 leading-7">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem molestiae laboriosam expedita asperiores.

                            </p>

                            <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-gray-400">

                                <span>18 Juli 2026</span>

                                <span class="hidden sm:inline">•</span>

                                <span>5 min read</span>

                            </div>

                        </div>

                    </article>

                    {{-- Editorial List --}}
                    <div
                        class="relative rounded-3xl border border-gray-100 bg-white p-4 lg:p-6 overflow-hidden shadow-sm">

                        {{-- Background Decoration --}}
                        <i
                            class="ri-flag-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                        </i>

                        <div class="relative divide-y divide-gray-200">

                            @foreach (range(1, 4) as $item)
                                <article
                                    class="group flex gap-4 lg:gap-5 py-4 lg:py-5 hover:lg:pl-2 transition-all duration-300">

                                    <span
                                        class="text-2xl sm:text-3xl lg:text-4xl font-black italic text-gray-200 group-hover:text-red-500 transition">

                                        {{ sprintf('%02d', $item) }}

                                    </span>

                                    <div class="flex-1 min-w-0">

                                        <h4
                                            class="text-base lg:text-lg font-semibold leading-6 lg:leading-7 group-hover:text-red-600 transition">

                                            Judul berita nasional {{ $item }}

                                        </h4>

                                        <div class="mt-2 flex items-center gap-2 text-xs lg:text-sm text-gray-500">

                                            <i class="ri-calendar-line"></i>

                                            <span>18 Juli 2026</span>

                                        </div>

                                    </div>

                                    <i
                                        class="hidden lg:block ri-arrow-right-up-line text-xl text-gray-300 opacity-0 group-hover:opacity-100 group-hover:text-red-600 transition">
                                    </i>

                                </article>
                            @endforeach

                            <div class="pt-5">

                                <a href="#"
                                    class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                    <span>Lihat Semua</span>

                                    <i
                                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1">
                                    </i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Opini --}}
                {{-- ================================================= --}}
                <div class="space-y-6">

                    {{-- Featured Opini News --}}
                    <article
                        class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                        <div class="overflow-hidden">

                            <img src="https://picsum.photos/700/450?random=200"
                                class="aspect-[16/10] lg:aspect-[16/9] w-full object-cover transition duration-700 group-hover:scale-105">

                        </div>

                        <div class="p-5 lg:p-6">

                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                                Opini

                            </span>

                            <h3
                                class="mt-4 text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-600 transition">

                                Opini Pemerintah

                            </h3>

                            <p class="hidden sm:block mt-4 text-gray-500 leading-7">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem molestiae laboriosam expedita asperiores.

                            </p>

                            <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-gray-400">

                                <span>18 Juli 2026</span>

                                <span class="hidden sm:inline">•</span>

                                <span>5 min read</span>

                            </div>

                        </div>

                    </article>

                    {{-- Editorial List --}}
                    <div
                        class="relative rounded-3xl border border-gray-100 bg-white p-4 lg:p-6 overflow-hidden shadow-sm">

                        {{-- Background Decoration --}}
                        <i
                            class="ri-user-voice-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                        </i>

                        <div class="relative divide-y divide-gray-200">

                            @foreach (range(1, 4) as $item)
                                <article
                                    class="group flex gap-4 lg:gap-5 py-4 lg:py-5 hover:lg:pl-2 transition-all duration-300">

                                    <span
                                        class="text-2xl sm:text-3xl lg:text-4xl font-black italic text-gray-200 group-hover:text-red-500 transition">

                                        {{ sprintf('%02d', $item) }}

                                    </span>

                                    <div class="flex-1 min-w-0">

                                        <h4
                                            class="text-base lg:text-lg font-semibold leading-6 lg:leading-7 group-hover:text-red-600 transition">

                                            Judul berita opini {{ $item }}

                                        </h4>

                                        <div class="mt-2 flex items-center gap-2 text-xs lg:text-sm text-gray-500">

                                            <i class="ri-calendar-line"></i>

                                            <span>18 Juli 2026</span>

                                        </div>

                                    </div>

                                    <i
                                        class="hidden lg:block ri-arrow-right-up-line text-xl text-gray-300 opacity-0 group-hover:opacity-100 group-hover:text-red-600 transition">
                                    </i>

                                </article>
                            @endforeach

                            <div class="pt-5">

                                <a href="#"
                                    class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                    <span>Lihat Semua</span>

                                    <i
                                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1">
                                    </i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Publications --}}
        <section class="py-16 lg:py-20">

            <div x-data="{ tab: 'Berita' }">

                {{-- Header --}}
                <div
                    class="flex flex-col items-center justify-center text-center lg:flex-row lg:justify-between lg:text-left gap-4 mb-10">

                    <div>

                        <h2 class="text-2xl lg:text-3xl font-bold uppercase">
                            Publikasi
                        </h2>

                        <p class="mt-2 text-sm lg:text-base text-gray-500">
                            Berita, Majalah, Tabloid, dan Buletin.
                        </p>

                    </div>

                </div>

                {{-- Tabs --}}
                <div class="flex justify-center lg:justify-start mb-10 overflow-x-auto">

                    <div class="inline-flex rounded-full bg-gray-100 p-1 gap-1">

                        <button @click="tab='Berita'"
                            :class="tab == 'Berita' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Berita

                        </button>

                        <button @click="tab='majalah'"
                            :class="tab == 'majalah' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Majalah

                        </button>

                        <button @click="tab='tabloid'"
                            :class="tab == 'tabloid' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Tabloid

                        </button>

                        <button @click="tab='buletin'"
                            :class="tab == 'buletin' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Buletin

                        </button>

                    </div>

                </div>

                {{-- Showcase --}}
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center rounded-3xl bg-white shadow-lg border border-gray-200 p-6 lg:p-10">

                    {{-- Cover --}}
                    <div class="group relative flex justify-center">

                        {{-- Glow --}}
                        <div
                            class="absolute w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full bg-red-500/20 blur-3xl transition duration-500 group-hover:scale-110">
                        </div>

                        <img src="https://picsum.photos/450/600"
                            class="relative z-10 w-56 sm:w-72 lg:w-[360px] rounded-3xl shadow-2xl transition duration-500 group-hover:-translate-y-2 group-hover:rotate-1">

                    </div>

                    {{-- Information --}}
                    <div class="text-center lg:text-left">

                        <span
                            class="inline-flex items-center rounded-full bg-red-100 text-red-600 px-4 py-1 text-xs font-semibold">

                            Majalah

                        </span>

                        <h3 class="mt-5 text-3xl lg:text-5xl font-bold">

                            Edisi Juli 2026

                        </h3>

                        {{-- Metadata --}}
                        <div class="mt-6 flex flex-wrap justify-center lg:justify-start gap-3 text-sm">

                            <span class="rounded-full bg-gray-100 px-4 py-2">

                                📄 32 Halaman

                            </span>

                            <span class="rounded-full bg-gray-100 px-4 py-2">

                                PDF

                            </span>

                            <span class="rounded-full bg-gray-100 px-4 py-2">

                                18 Juli 2026

                            </span>

                        </div>

                        <p class="mt-8 text-gray-600 leading-8 max-w-xl mx-auto lg:mx-0">

                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eaque repudiandae autem rem magni.
                            Aperiam, tempora. Eligendi unde quae ducimus
                            architecto.

                        </p>

                        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">

                            <button
                                class="px-7 py-3 rounded-xl bg-red-600 text-white font-medium hover:bg-red-700 transition">

                                Baca Sekarang

                            </button>

                            <button
                                class="px-7 py-3 rounded-xl border border-gray-300 hover:border-red-500 hover:text-red-600 transition">

                                Lihat Arsip

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    </main>

</x-app-layout>
