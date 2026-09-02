<section class="py-16 lg:py-20">

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

        <a href="{{ route('berita.index', 'isu-kampus') }}"
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
                class="group lg:col-span-2 relative overflow-hidden rounded-3xl h-[280px] sm:h-[340px] lg:h-[450px] bg-gray-900">

                @if (isset($beritaUtama))
                    <img src="{{ $beritaUtama->media_asset ? $beritaUtama->media_asset->getFirstMedia('library')?->original_url : 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                        class="absolute inset-0 w-full h-full object-cover opacity-70 transition duration-500 group-hover/beritaUtama:scale-105"
                        alt="{{ $beritaUtama->judul ?? 'Belum ada berita' }}">
                @else
                    <img src="{{ 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Berita' }}"
                        class="absolute inset-0 w-full h-full object-cover opacity-70 transition duration-500 group-hover/beritaUtama:scale-105"
                        alt="{{ $beritaUtama->judul ?? 'Belum ada berita' }}">
                @endif

                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                <div class="absolute bottom-0 py-8 px-4 text-white">

                    <span class="inline-flex px-3 py-1 rounded-full bg-red-600 text-sm font-semibold">
                        Berita Utama
                    </span>

                    <p
                        class="mt-4 sm:text-lg md:text-2xl lg:text-4xl font-bold leading-tight max-w-3xl transition group-hover/beritaUtama:text-red-400">
                        @if (isset($beritaUtama))
                            <a
                                href="{{ route('berita.show', ['slug' => $beritaUtama->kategori->slug, 'artikel' => $beritaUtama->id]) }}">
                                {{ $beritaUtama->judul }}
                            </a>
                        @else
                            <span>Belum Ada Berita Utama</span>
                        @endif
                    </p>

                    <p class="hidden lg:block mt-4 text-gray-200 max-w-xl leading-7">
                        {{ isset($beritaUtama) ? $beritaUtama->ringkasan : 'Berita utama terbaru dari LPM Retorika belum tersedia untuk saat ini.' }}
                    </p>

                    <div class="mt-6 flex gap-6 text-sm text-gray-300">

                        <span>{{ isset($beritaUtama) ? $beritaUtama->created_at->translatedFormat('d F Y') : '-' }}</span>
                        <span>•</span>
                        <span>
                            Updated
                            {{ isset($beritaUtama) ? $beritaUtama->updated_at?->diffForHumans() ?? 'Never' : '-' }}
                        </span>

                    </div>

                </div>

            </article>

            {{-- Secondary Articles --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-5">

                @forelse ($secondaryBerita as $sb)
                    <article class="group flex gap-4 rounded-2xl border border-gray-200 p-4 hover:shadow-lg transition">

                        @if ($sb->kategori)
                            <a
                                href="{{ route('berita.show', ['slug' => $sb->kategori->slug, 'artikel' => $sb->id]) }}">
                                <img src="{{ $sb->media_asset?->getFirstMedia('library')?->original_url ?? 'https://placehold.co/400x400/1e293b/94a3b8?text=No+Image' }}"
                                    class="w-28 sm:w-32 lg:w-36 self-stretch rounded-xl object-cover shrink-0"
                                    alt="{{ $sb->judul }}">
                            </a>
                        @else
                            <img src="https://placehold.co/400x400/1e293b/94a3b8?text=No+Image"
                                class="w-28 sm:w-32 lg:w-36 self-stretch rounded-xl object-cover shrink-0">
                        @endif

                        <div class="flex flex-1 flex-col min-w-0">

                            <span class="text-xs font-semibold uppercase text-red-600">
                                {{ $sb->kategori->nama ?? 'Umum' }}
                            </span>

                            <h4
                                class="mt-2 text-base lg:text-lg font-bold leading-6 group-hover:text-red-600 transition">
                                @if ($sb->kategori)
                                    <a
                                        href="{{ route('berita.show', ['slug' => $sb->kategori->slug, 'artikel' => $sb->id]) }}">
                                        {{ $sb->judul }}
                                    </a>
                                @else
                                    <span>{{ $sb->judul }}</span>
                                @endif
                            </h4>

                            <div class="mt-3 flex flex-col gap-2 text-sm text-gray-400">
                                <span>{{ $sb->created_at->translatedFormat('d F Y') }}</span>

                                <span class="flex items-center gap-1">
                                    <i class="ri-time-line"></i>
                                    Updated {{ $sb->updated_at?->diffForHumans() ?? 'Never' }}
                                </span>
                            </div>

                        </div>

                    </article>
                @empty
                    {{-- Empty State Secondary --}}
                    @for ($i = 0; $i < 2; $i++)
                        <article class="flex gap-4 rounded-2xl border border-gray-200 p-4 bg-gray-50 opacity-60">
                            <img src="https://placehold.co/400x400/cbd5e1/64748b?text=Kosong"
                                class="w-28 sm:w-32 lg:w-36 self-stretch rounded-xl object-cover shrink-0">

                            <div class="flex flex-1 flex-col min-w-0">
                                <span class="text-xs font-semibold uppercase text-gray-400">
                                    Informasi
                                </span>

                                <h4 class="mt-2 text-base lg:text-lg font-bold leading-6 text-gray-500">
                                    Belum Ada Berita Tambahan
                                </h4>

                                <div class="mt-3 flex flex-col gap-2 text-sm text-gray-400">
                                    <span>-</span>
                                    <span class="flex items-center gap-1">
                                        <i class="ri-time-line"></i>
                                        Updated -
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endfor
                @endforelse

            </div>

        </div>

        {{-- ============================= --}}
        {{-- Remaining Articles --}}
        {{-- ============================= --}}

        @if (isset($remainingBerita) && count($remainingBerita) > 0)
            <div class="hidden xl:grid xl:grid-cols-3 gap-6">

                @foreach ($remainingBerita as $rb)
                    <article
                        class="group rounded-2xl overflow-hidden border border-gray-200 bg-white hover:-translate-y-1 hover:shadow-xl transition-all duration-300">

                        <div class="overflow-hidden">
                            @if ($rb->kategori)
                                <a
                                    href="{{ route('berita.show', ['slug' => $rb->kategori->slug, 'artikel' => $rb->id]) }}">
                                    <img src="{{ $rb->media_asset?->getFirstMedia('library')?->original_url ?? 'https://placehold.co/600x400/1e293b/94a3b8?text=No+Image' }}"
                                        class="aspect-[16/9] w-full object-cover transition duration-500 group-hover:scale-105"
                                        alt="{{ $rb->judul }}">
                                </a>
                            @else
                                <img src="https://placehold.co/600x400/1e293b/94a3b8?text=No+Image"
                                    class="aspect-[16/9] w-full object-cover">
                            @endif
                        </div>

                        <div class="p-5">

                            <span class="text-xs font-semibold uppercase tracking-wide text-red-600">
                                {{ $rb->kategori->nama ?? 'Berita' }}
                            </span>

                            <h3 class="mt-2 text-lg font-bold leading-7 group-hover:text-red-600 transition">
                                @if ($rb->kategori)
                                    <a
                                        href="{{ route('berita.show', ['slug' => $rb->kategori->slug, 'artikel' => $rb->id]) }}">
                                        {{ $rb->judul }}
                                    </a>
                                @else
                                    <span>{{ $rb->judul }}</span>
                                @endif
                            </h3>

                            <p class="mt-3 text-sm text-gray-500 line-clamp-2">
                                {{ $rb->ringkasan }}
                            </p>

                            <div class="mt-5 flex items-center justify-between text-sm text-gray-400">
                                <span>{{ $rb->created_at->translatedFormat('d F Y') }}</span>

                                <span class="flex items-center gap-1">
                                    <i class="ri-time-line"></i>
                                    Updated {{ $rb->updated_at?->diffForHumans() ?? 'Never' }}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach

            </div>
        @endif

    </div>

</section>
