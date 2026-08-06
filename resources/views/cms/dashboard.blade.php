<x-cms-layout>

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-2">

            <h1 class="text-3xl font-bold text-gray-800">

                Dashboard

            </h1>

        </div>

        {{-- ================================================= --}}
        {{-- Welcome Card --}}
        {{-- ================================================= --}}

        <div
            class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 p-8 text-white">

            <i class="ri-newspaper-line absolute -right-10 -top-10 text-[180px] text-white/10"></i>

            <div class="relative">

                <p class="text-red-100">

                    Selamat Datang,

                </p>

                <h2 class="mt-2 text-4xl font-bold">

                    Admin Retorika 👋

                </h2>

                <p class="mt-4 max-w-2xl leading-8 text-red-100">

                    Kelola berita, publikasi, podcast, dan seluruh
                    konten website Retorika dengan mudah melalui CMS.

                </p>

            </div>

        </div>

        {{-- ================================================= --}}
        {{-- Statistic --}}
        {{-- ================================================= --}}

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">

            {{-- Berita --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-gray-500">

                            Total Berita

                        </p>

                        <h2 class="mt-2 text-4xl font-bold">

                            128

                        </h2>

                    </div>

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-red-100 text-red-600">

                        <i class="ri-newspaper-line text-3xl"></i>

                    </div>

                </div>

            </div>

            {{-- Publikasi --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-gray-500">

                            Publikasi

                        </p>

                        <h2 class="mt-2 text-4xl font-bold">

                            24

                        </h2>

                    </div>

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">

                        <i class="ri-book-open-line text-3xl"></i>

                    </div>

                </div>

            </div>

            {{-- Podcast --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-gray-500">

                            Podcast

                        </p>

                        <h2 class="mt-2 text-4xl font-bold">

                            15

                        </h2>

                    </div>

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-purple-600">

                        <i class="ri-mic-2-line text-3xl"></i>

                    </div>

                </div>

            </div>

            {{-- Mading --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-gray-500">

                            Mading

                        </p>

                        <h2 class="mt-2 text-4xl font-bold">

                            6

                        </h2>

                    </div>

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 text-green-600">

                        <i class="ri-image-line text-3xl"></i>

                    </div>

                </div>

            </div>

        </div>

        {{-- ================================================= --}}
        {{-- Content --}}
        {{-- ================================================= --}}

        <div class="grid gap-6 xl:grid-cols-3">

            {{-- ============================================== --}}
            {{-- Latest Articles --}}
            {{-- ============================================== --}}

            <div class="xl:col-span-2 rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <h2 class="text-xl font-bold">

                        Artikel Terbaru

                    </h2>

                    <a href="#" class="text-sm font-semibold text-red-600 hover:underline transition">

                        Lihat Semua

                    </a>

                </div>

                <div class="mt-6 divide-y divide-gray-200">

                    @foreach (range(1, 5) as $item)
                        <div class="flex items-center justify-between py-5">

                            <div>

                                <h3 class="font-semibold">

                                    Judul Artikel {{ $item }}

                                </h3>

                                <p class="mt-1 text-sm text-gray-500">

                                    18 Juli 2026

                                </p>

                            </div>

                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">

                                Published

                            </span>

                        </div>
                    @endforeach

                </div>

            </div>

            {{-- ============================================== --}}
            {{-- Quick Action --}}
            {{-- ============================================== --}}

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <h2 class="text-xl font-bold">

                    Quick Action

                </h2>

                <div class="mt-6 space-y-3">

                    <a href="#"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-add-circle-line text-xl text-red-600"></i>

                        Tambah Berita

                    </a>

                    <a href="#"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-book-open-line text-xl text-red-600"></i>

                        Tambah Publikasi

                    </a>

                    <a href="#"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-mic-line text-xl text-red-600"></i>

                        Tambah Podcast

                    </a>

                    <a href="#"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-image-add-line text-xl text-red-600"></i>

                        Tambah Mading

                    </a>

                </div>

            </div>

        </div>

        {{-- ================================================= --}}
        {{-- Bottom Section --}}
        {{-- ================================================= --}}

        <div class="grid gap-6 lg:grid-cols-2">

            {{-- Publication --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <h2 class="text-xl font-bold">

                    Publikasi Terbaru

                </h2>

                <div class="mt-6 space-y-5">

                    @foreach (range(1, 3) as $item)
                        <div class="flex items-center gap-4">

                            <img src="https://picsum.photos/70/90?random={{ $item }}"
                                class="h-20 w-16 rounded-lg object-cover">

                            <div>

                                <h3 class="font-semibold">

                                    DIKSI Vol. {{ $item }}

                                </h3>

                                <p class="mt-1 text-sm text-gray-500">

                                    Majalah

                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

            {{-- Podcast --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <h2 class="text-xl font-bold">

                    Podcast Terbaru

                </h2>

                <div class="mt-6 space-y-5">

                    @foreach (range(1, 3) as $item)
                        <div class="flex items-center gap-4">

                            <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-red-100 text-red-600">

                                <i class="ri-mic-2-line text-2xl"></i>

                            </div>

                            <div class="flex-1">

                                <h3 class="font-semibold">

                                    Podcast Episode {{ $item }}

                                </h3>

                                <p class="mt-1 text-sm text-gray-500">

                                    Suara Retorika

                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</x-cms-layout>
