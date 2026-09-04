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

        <div class="grid gap-6 md:grid-cols-1 xl:grid-cols-3">
            {{-- Artikel --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-gray-500">

                            Total Artikel

                        </p>

                        <h2 class="mt-2 text-4xl font-bold">
                            {{ $totalArtikel }}
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
                            {{ $totalPublikasi }}
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
                            {{ $totalPodcast }}
                        </h2>

                    </div>

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-purple-600">

                        <i class="ri-video-line text-3xl"></i>

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

                    <a href="{{ route('cms.artikel.index') }}"
                        class="text-sm font-semibold text-red-600 hover:underline transition">
                        Lihat Semua
                    </a>

                </div>

                <div class="mt-6 divide-y divide-gray-200">

                    @foreach ($newestArtikel as $item)
                        <div class="flex items-center justify-between py-5">
                            <div>
                                <h3 class="font-semibold">
                                    {{ $item->judul }}
                                </h3>

                                <p class="mt-1 text-sm text-gray-500">
                                    {{ $item->created_at->translatedFormat('d F Y') }}
                                </p>

                            </div>

                            <span class="rounded-full capitalize px-4 py-2 text-xs font-semibold"
                                :class="{
                                    'bg-yellow-100 text-yellow-700': {{ $item->status->id }} == 1,
                                    'bg-green-100 text-green-700': {{ $item->status->id }} == 2
                                }">

                                {{ $item->status->slug }}

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

                    <a href="{{ route('cms.artikel.create') }}"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-newspaper-line text-xl text-red-600"></i>

                        Tambah Artikel
                    </a>

                    <a href="{{ route('cms.publikasi.create') }}"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-book-open-line text-xl text-red-600"></i>

                        Tambah Publikasi
                    </a>

                    <a href="{{ route('cms.podcast.create') }}"
                        class="flex items-center gap-4 rounded-xl border border-gray-300 p-4 transition hover:border-red-500 hover:bg-red-50">

                        <i class="ri-video-line text-xl text-red-600"></i>

                        Tambah Podcast
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

                <div class="flex items-center justify-between">

                    <h2 class="text-xl font-bold">

                        Publikasi Terbaru

                    </h2>

                    <a href="{{ route('cms.publikasi.index') }}"
                        class="text-sm font-semibold text-red-600 hover:underline transition">
                        Lihat Semua
                    </a>

                </div>

                <div class="mt-6 space-y-5">

                    @foreach ($newestPublikasi as $item)
                        <div class="flex items-center gap-4">

                            <img src="{{ $item->cover_asset?->getFirstMedia('library')->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                                alt="{{ $item->cover_asset?->alt_text ?? 'Media Publikasi' }}"
                                class="h-20 w-16 rounded-lg object-cover">

                            <div>

                                <h3 class="font-semibold">
                                    {{ $item->judul }}
                                </h3>

                                <p class="mt-1 text-sm text-gray-500">
                                    {{ $item->kategori->nama }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

            {{-- Podcast --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <h2 class="text-xl font-bold">

                        Podcast Terbaru

                    </h2>

                    <a href="{{ route('cms.podcast.index') }}"
                        class="text-sm font-semibold text-red-600 hover:underline transition">
                        Lihat Semua
                    </a>

                </div>

                <div class="mt-6 space-y-5">

                    @foreach ($newestPodcast as $item)
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                <i class="ri-video-line text-2xl"></i>
                            </div>

                            <div class="flex-1">
                                <h3 class="font-semibold">
                                    {{ $item->judul }}
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
