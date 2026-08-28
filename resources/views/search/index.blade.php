<x-app-layout>
    <main class="
        pt-30
        max-w-screen-xl
        mx-auto
        px-4
        sm:px-6
        lg:px-8">
        <div class="container mx-auto px-4 py-12 max-w-7xl">

            {{-- Header Hasil Pencarian --}}
            <div class="mb-10">
                <h1 class="text-3xl font-bold text-gray-900">
                    Hasil Pencarian: <span class="text-red-600">"{{ $keyword }}"</span>
                </h1>
                <p class="mt-2 text-gray-500">
                    Ditemukan {{ $totalResults }} hasil terkait.
                </p>
            </div>

            @if ($totalResults > 0)

                {{-- Section 1: Artikel / Berita --}}
                @if ($artikels->isNotEmpty())
                    <section class="mb-12">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="ri-newspaper-line text-red-600"></i> Berita & Artikel ({{ $artikels->count() }})
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($artikels as $item)
                                <a href="{{ route('berita.show', ['slug' => $item->kategori->slug, 'artikel' => $item->id]) }}"
                                    class="group block rounded-2xl border border-gray-200 bg-white p-4 hover:shadow-md transition">
                                    <h3 class="font-semibold text-gray-800 group-hover:text-red-600 line-clamp-2">
                                        {{ $item->judul }}
                                    </h3>
                                    <p class="mt-2 text-xs text-gray-400">
                                        {{ $item->created_at->translatedFormat('d F Y') }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- Section 2: Podcast --}}
                @if ($podcasts->isNotEmpty())
                    <section class="mb-12">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="ri-video-line text-red-600"></i> Podcast ({{ $podcasts->count() }})
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($podcasts as $item)
                                <a href="{{ route('podcast.show', $item->id) }}"
                                    class="group block rounded-2xl border border-gray-200 bg-white p-4 hover:shadow-md transition">
                                    <h3 class="font-semibold text-gray-800 group-hover:text-red-600 line-clamp-2">
                                        {{ $item->judul }}
                                    </h3>
                                    <p class="mt-2 text-xs text-gray-400">
                                        {{ $item->created_at->translatedFormat('d F Y') }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- Section 3: Publikasi --}}
                @if ($publikasis->isNotEmpty())
                    <section class="mb-12">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="ri-book-read-line text-red-600"></i> Publikasi ({{ $publikasis->count() }})
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($publikasis as $item)
                                <a href="{{ route('publikasi.show', ['slug' => $item->kategori->slug, 'publikasi' => $item->id]) }}"
                                    class="group block rounded-2xl border border-gray-200 bg-white p-4 hover:shadow-md transition">
                                    <h3 class="font-semibold text-gray-800 group-hover:text-red-600 line-clamp-2">
                                        {{ $item->judul }}
                                    </h3>
                                    <p class="mt-2 text-xs text-gray-400">
                                        Kategori: {{ $item->kategori->nama ?? '-' }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif
            @else
                {{-- State Jika Hasil Tidak Ditemukan --}}
                <div class="text-center py-16 bg-gray-50 rounded-3xl border border-gray-200">
                    <i class="ri-search-2-line text-6xl text-gray-300"></i>
                    <h3 class="mt-4 text-lg font-semibold text-gray-700">Tidak ada hasil ditemukan</h3>
                    <p class="mt-1 text-sm text-gray-500">Coba gunakan kata kunci pencarian yang lain.</p>
                </div>
            @endif

        </div>
    </main>
</x-app-layout>
