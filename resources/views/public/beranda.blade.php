<x-app-layout>

    <main class="pt-30">

        {{-- Hero --}}
        <section class="max-w-screen-xl mx-auto px-4 pb-20">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- Featured Article --}}
                <div
                    class="lg:col-span-2 h-[520px] rounded-3xl overflow-hidden relative bg-gradient-to-br from-gray-900 to-gray-700">

                    <img src="https://picsum.photos/1200/700"
                        class="absolute inset-0 w-full h-full object-cover opacity-70">

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                    <div class="absolute bottom-0 p-8 text-white">

                        <span class="inline-flex px-3 py-1 rounded-full bg-red-600 text-sm font-semibold">
                            Berita Utama
                        </span>

                        <h1 class="mt-4 text-4xl font-bold leading-tight max-w-3xl">

                            Mahasiswa Berhasil Mengembangkan Platform Digital Untuk Pers Kampus

                        </h1>

                        <p class="mt-4 text-gray-200 max-w-xl">

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
                <div class="h-[520px] grid grid-rows-[auto_1fr] gap-5">

                    {{-- Heading --}}
                    <div>
                        <h2 class="text-2xl font-bold">
                            Trending
                        </h2>
                    </div>

                    {{-- Cards --}}
                    <div class="grid grid-rows-3 gap-5">

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

                                    <div class="flex items-center gap-2 mt-2 text-sm text-gray-300">

                                        <i class="ri-time-line"></i>

                                        <span>5 min read</span>

                                    </div>

                                </div>

                            </article>
                        @endforeach

                        {{-- CTA --}}
                        <a href="#"
                            class="group rounded-2xl bg-red-500 flex justify-center items-center text-white transition hover:shadow-lg hover:shadow-red-500/30">

                            <span class="text-lg font-semibold">
                                Lihat Semua
                            </span>

                            <i class="ri-arrow-right-line text-xl transition group-hover:translate-x-1">
                            </i>

                        </a>

                    </div>

                </div>
            </div>
        </section>

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Latest Release --}}
        <section class="max-w-screen-xl mx-auto px-4 py-20">

            {{-- Header --}}
            <div class="relative overflow-hidden flex justify-between items-center bg-red-500 px-6 py-5 rounded-t-xl">

                {{-- Decorative Background Icon --}}
                <i class="ri-bell-line absolute -right-5 -top-12 text-[150px] text-black/10 pointer-events-none"></i>

                <div class="relative z-10">
                    <h2 class="text-3xl font-bold text-white uppercase">
                        Rilisan Terbaru
                    </h2>

                </div>

                <a href="#" class="group mt-1 flex items-center gap-2 text-white/90 hover:text-white transition">

                    <span class="text-sm font-medium">
                        Lihat Semua
                    </span>

                    <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>

                </a>
            </div>

            {{-- Content --}}
            <div class="bg-white rounded-b-xl shadow-lg p-6 space-y-6">

                {{-- Top Editorial Layout --}}
                <div class="grid lg:grid-cols-3 gap-6">

                    {{-- Featured Latest --}}
                    <article class="group lg:col-span-2 relative overflow-hidden rounded-3xl h-[450px]">

                        <img src="https://picsum.photos/900/600?random=1"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent">
                        </div>

                        <div class="absolute bottom-0 p-8 text-white">

                            <span
                                class="inline-flex items-center rounded-full bg-red-600 px-3 py-1 text-xs font-semibold">

                                Baru

                            </span>

                            <h3 class="mt-4 text-3xl font-bold leading-tight group-hover:text-red-300 transition">

                                Judul artikel terbaru paling utama

                            </h3>

                            <p class="mt-4 max-w-xl text-gray-200">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolore, asperiores. Quasi magni sapiente aspernatur.

                            </p>

                            <div class="mt-6 flex gap-5 text-sm text-gray-300">

                                <span>14 Juli 2026</span>

                                <span>•</span>

                                <span>5 min read</span>

                            </div>

                        </div>

                    </article>

                    {{-- Secondary Articles --}}
                    <div class="flex flex-col gap-6">

                        @foreach (range(2, 3) as $item)
                            <article
                                class="group flex gap-4 rounded-2xl border border-gray-200 p-3 hover:shadow-lg transition">

                                <img src="https://picsum.photos/240/180?random={{ $item }}"
                                    class="w-36 h-32 rounded-xl object-cover">

                                <div class="flex flex-col justify-between">

                                    <div>

                                        <span class="text-xs font-semibold uppercase text-red-600">

                                            Berita

                                        </span>

                                        <h4 class="mt-2 font-bold leading-6 group-hover:text-red-600 transition">

                                            Judul artikel terbaru ke {{ $item }}

                                        </h4>

                                    </div>

                                    <div class="flex items-center gap-2 text-xs text-gray-500">

                                        <i class="ri-time-line"></i>

                                        <span>5 min read</span>

                                    </div>

                                </div>

                            </article>
                        @endforeach

                    </div>

                </div>

                {{-- Remaining Articles --}}
                <div class="grid md:grid-cols-3 gap-6">

                    @foreach (range(4, 6) as $item)
                        <article
                            class="group rounded-2xl overflow-hidden border border-gray-200 bg-white hover:-translate-y-1 hover:shadow-xl transition-all duration-300">

                            <div class="overflow-hidden">

                                <img src="https://picsum.photos/500/350?random={{ $item }}"
                                    class="aspect-[16/10] w-full object-cover transition duration-500 group-hover:scale-105">

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

        {{-- Campus & National --}}
        <section class="max-w-screen-xl mx-auto px-4 py-20">

            <div class="grid lg:grid-cols-2 gap-12">

                {{-- Featured Campus News --}}
                <article
                    class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                    <div class="overflow-hidden">

                        <img src="https://picsum.photos/700/450?random=100"
                            class="aspect-[16/9] w-full object-cover group-hover:scale-105 transition duration-700">

                    </div>

                    <div class="p-6">

                        <span
                            class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                            Isu Kampus

                        </span>

                        <h3 class="mt-4 text-3xl font-bold leading-tight group-hover:text-red-600 transition">

                            Mahasiswa Menggelar Aksi Lingkungan Hidup di Kampus

                        </h3>

                        <p class="mt-4 text-gray-500 leading-7">

                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolorem molestiae laboriosam expedita asperiores.

                        </p>

                        <div class="mt-5 flex items-center gap-5 text-sm text-gray-400">

                            <span>18 Juli 2026</span>

                            <span>•</span>

                            <span>5 min read</span>

                        </div>

                    </div>

                </article>

                {{-- Editorial List --}}
                <div class="relative mt-8 rounded-3xl border border-gray-100 bg-white p-6 overflow-hidden shadow-sm">

                    {{-- Background Decoration --}}
                    <i
                        class="ri-government-line absolute -right-8 bottom-0 text-[220px] text-gray-100/70 pointer-events-none">
                    </i>
                    <div class="relative divide-y divide-gray-200">

                        @foreach (range(1, 4) as $item)
                            <article class="group flex gap-5 py-5 hover:pl-2 transition-all duration-300">

                                <span
                                    class="text-4xl font-black italic text-gray-200 group-hover:text-red-500 transition">

                                    {{ sprintf('%02d', $item) }}

                                </span>

                                <div class="flex-1">

                                    <h4 class="text-lg font-semibold leading-7 group-hover:text-red-600 transition">

                                        Judul berita kampus {{ $item }}

                                    </h4>

                                    <div class="mt-2 flex items-center gap-3 text-sm text-gray-500">

                                        <i class="ri-calendar-line"></i>

                                        <span>18 Juli 2026</span>

                                    </div>

                                </div>

                                <i
                                    class="ri-arrow-right-up-line text-xl text-gray-300 opacity-0 group-hover:opacity-100 group-hover:text-red-600 transition">
                                </i>

                            </article>
                        @endforeach
                        <div class="relative mt-6 flex justify-end">

                            <a href="#"
                                class="group inline-flex items-center gap-2 rounded-full border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                <span>
                                    Lihat Semua
                                </span>

                                <i
                                    class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>
                    </div>
                </div>

                {{-- Featured National News --}}
                <article
                    class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                    <div class="overflow-hidden">

                        <img src="https://picsum.photos/700/450?random=200"
                            class="aspect-[16/9] w-full object-cover group-hover:scale-105 transition duration-700">

                    </div>

                    <div class="p-6">

                        <span
                            class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                            Nasional

                        </span>

                        <h3 class="mt-4 text-3xl font-bold leading-tight group-hover:text-red-600 transition">

                            Pemerintah Umumkan Kebijakan Pendidikan Baru

                        </h3>

                        <p class="mt-4 text-gray-500 leading-7">

                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolorem molestiae laboriosam expedita asperiores.

                        </p>

                        <div class="mt-5 flex items-center gap-5 text-sm text-gray-400">

                            <span>18 Juli 2026</span>

                            <span>•</span>

                            <span>5 min read</span>

                        </div>

                    </div>

                </article>

                {{-- Editorial List --}}
                <div class="relative mt-8 rounded-3xl border border-gray-100 bg-white p-6 overflow-hidden shadow-sm">

                    {{-- Background Decoration --}}
                    <i
                        class="ri-flag-line absolute -right-8 bottom-2 text-[220px] text-gray-100/70 pointer-events-none">
                    </i>
                    <div class="relative divide-y divide-gray-200">

                        @foreach (range(1, 4) as $item)
                            <article class="group flex gap-5 py-5 hover:pl-2 transition-all duration-300">

                                <span
                                    class="text-4xl font-black italic text-gray-200 group-hover:text-red-500 transition">

                                    {{ sprintf('%02d', $item) }}

                                </span>

                                <div class="flex-1">

                                    <h4 class="text-lg font-semibold leading-7 group-hover:text-red-600 transition">

                                        Judul berita nasional {{ $item }}

                                    </h4>

                                    <div class="mt-2 flex items-center gap-3 text-sm text-gray-500">

                                        <i class="ri-calendar-line"></i>

                                        <span>18 Juli 2026</span>

                                    </div>

                                </div>

                                <i
                                    class="ri-arrow-right-up-line text-xl text-gray-300 opacity-0 group-hover:opacity-100 group-hover:text-red-600 transition">
                                </i>

                            </article>
                        @endforeach
                        <div class="relative mt-6 flex justify-end">

                            <a href="#"
                                class="group inline-flex items-center gap-2 rounded-full border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                <span>
                                    Lihat Semua
                                </span>

                                <i
                                    class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>
                    </div>
                </div>

            </div>

        </section>

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Publications --}}
        <section class="py-20">

            <div class="max-w-screen-xl mx-auto px-4">

                <div class="flex justify-between items-center mb-8">

                    <div>

                        <h2 class="text-3xl font-bold">

                            Publikasi

                        </h2>

                        <p class="text-gray-500 mt-1">

                            Berita, Majalah, dan Tabloid.

                        </p>

                    </div>

                </div>

                <div x-data="{ tab: 'Berita' }">

                    <div class="flex gap-4 mb-10">

                        <button @click="tab='Berita'"
                            :class="tab == 'Berita' ?
                                'bg-red-600 text-white' :
                                'bg-white'"
                            class="px-5 py-2 rounded-full transition">

                            Berita

                        </button>

                        <button @click="tab='majalah'"
                            :class="tab == 'majalah' ?
                                'bg-red-600 text-white' :
                                'bg-white'"
                            class="px-5 py-2 rounded-full transition">

                            Majalah

                        </button>

                        <button @click="tab='tabloid'"
                            :class="tab == 'tabloid' ?
                                'bg-red-600 text-white' :
                                'bg-white'"
                            class="px-5 py-2 rounded-full transition">

                            Tabloid

                        </button>

                    </div>

                    <div class="grid md:grid-cols-2 gap-12 items-center">

                        {{-- Cover --}}
                        <div class="group relative flex justify-center items-center">

                            <div
                                class="absolute w-96 h-96 rounded-full
                                    bg-red-500/60 blur-3xl
                                    transition-all duration-500
                                    group-hover:scale-110
                                    group-hover:bg-red-500/80">
                            </div>

                            <img src="https://picsum.photos/450/600"
                                class="relative z-10 rounded-3xl shadow-2xl
                                    transition duration-500
                                    group-hover:-translate-y-2
                                    group-hover:scale-[1.02]">
                        </div>

                        {{-- Content --}}
                        <div>

                            <h3 class="text-4xl font-bold">
                                Edisi Juli 2026
                            </h3>

                            <p class="mt-6 text-gray-600 leading-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eaque repudiandae autem rem magni.
                            </p>

                            <button
                                class="mt-8 bg-red-600 text-white px-6 py-3 rounded-xl hover:bg-red-700 transition">
                                Baca Sekarang
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    </main>

</x-app-layout>
