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
                class="ri-government-line
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
                Isu Kampus
            </h1>

        </div>

        {{-- ================================================= --}}
        {{-- Isu Kampus Content --}}
        {{-- ================================================= --}}

        <section class="py-16">

            <div class="grid lg:grid-cols-12 gap-10">

                {{-- ================================================= --}}
                {{-- LEFT CONTENT --}}
                {{-- ================================================= --}}
                <div class="lg:col-span-8 space-y-6">

                    @foreach (range(1, 8) as $item)
                        <article
                            class="group/article overflow-hidden rounded-3xl border border-gray-200 bg-white transition hover:shadow-xl">

                            <div class="grid md:grid-cols-[280px_1fr]">

                                {{-- Thumbnail --}}
                                <div class="overflow-hidden">
                                    <a href="{{ route('berita.detail') }}">
                                        <img src="https://picsum.photos/600/450?random={{ $item }}"
                                            class="h-full w-full object-cover transition duration-700 group-hover/article:scale-105">
                                    </a>
                                </div>

                                {{-- Content --}}
                                <div class="p-6 flex flex-col">

                                    <span
                                        class="inline-flex w-fit rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                                        Isu Kampus

                                    </span>

                                    <a href="{{ route('berita.detail') }}"
                                        class="mt-4 text-2xl font-bold leading-tight transition group-hover/article:text-red-600">

                                        Judul Berita Kampus {{ $item }}

                                    </a>

                                    <p class="mt-4 text-gray-500 leading-7 line-clamp-3">

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Ipsam, nostrum.
                                        Cumque dolorem, quis laborum reprehenderit
                                        molestiae dignissimos recusandae
                                        perferendis cupiditate.

                                    </p>

                                    <div class="mt-auto mb-6 pt-6 flex items-center gap-5 text-sm text-gray-400">

                                        <span class="flex items-center gap-2">

                                            <i class="ri-calendar-line"></i>

                                            18 Juli 2026

                                        </span>

                                        <span>•</span>

                                        <span class="flex items-center gap-2">

                                            <i class="ri-time-line"></i>

                                            5 min read

                                        </span>

                                    </div>

                                    <a href="{{ route('berita.detail') }}"
                                        class="group/button w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                        <span>Lihat Semua</span>

                                        <i
                                            class="ri-arrow-right-line transition-transform duration-300 group-hover/button:translate-x-1"></i>

                                    </a>

                                </div>

                            </div>

                        </article>
                    @endforeach


                    {{-- Pagination --}}
                    <div class="flex justify-center pt-6">

                        <nav class="flex gap-2">

                            <button class="w-11 h-11 rounded-xl border border-gray-200 hover:bg-gray-100">

                                <i class="ri-arrow-left-s-line"></i>

                            </button>

                            <button class="w-11 h-11 rounded-xl bg-red-600 text-white">

                                1

                            </button>

                            <button class="w-11 h-11 rounded-xl border border-gray-200 hover:bg-gray-100">

                                2

                            </button>

                            <button class="w-11 h-11 rounded-xl border border-gray-200 hover:bg-gray-100">

                                3

                            </button>

                            <button class="w-11 h-11 rounded-xl border border-gray-200 hover:bg-gray-100">

                                <i class="ri-arrow-right-s-line"></i>

                            </button>

                        </nav>

                    </div>

                </div>

                {{-- ================================================= --}}
                {{-- SIDEBAR --}}
                {{-- ================================================= --}}

                <div class="lg:col-span-4">

                    <x-news-sidebar />

                </div>

            </div>

        </section>

    </main>

</x-app-layout>
