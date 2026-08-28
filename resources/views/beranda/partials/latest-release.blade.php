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
                class="group lg:col-span-2 relative overflow-hidden rounded-3xl h-[280px] sm:h-[340px] lg:h-[450px]">

                <img src="{{ $beritaTerbaru->media_asset?->getFirstMedia('library')?->original_url }}"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                <div class="absolute bottom-0 p-5 sm:p-6 lg:p-8 text-white">

                    <span class="inline-flex items-center rounded-full bg-red-600 px-3 py-1 text-xs font-semibold">

                        Baru

                    </span>

                    <h3
                        class="mt-4 text-xl sm:text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-400 transition">

                        <a
                            href="{{ route('berita.show', ['slug' => $beritaUtama->kategori->slug, 'artikel' => $beritaUtama->id]) }}">
                            {{ $beritaTerbaru->judul }}
                        </a>

                    </h3>

                    <p class="hidden lg:block mt-4 max-w-xl text-gray-200">
                        {{ $beritaTerbaru->ringkasan }}
                    </p>

                    <div class="mt-5 flex flex-wrap gap-3 text-sm text-gray-300">

                        <span>{{ $beritaTerbaru->created_at->translatedFormat('d F Y') }}</span>
                        <span>•</span>
                        <span>
                            Updated {{ $beritaTerbaru->updated_at?->diffForHumans() ?? 'Never' }}
                        </span>

                    </div>

                </div>

            </article>

            {{-- Secondary Articles --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-5">

                @foreach ($secondaryBerita as $sb)
                    <article class="group flex gap-4 rounded-2xl border border-gray-200 p-4 hover:shadow-lg transition">

                        <a href="{{ route('berita.show', ['slug' => $sb->kategori->slug, 'artikel' => $sb->id]) }}">
                            <img src="{{ $sb->media_asset?->getFirstMedia('library')?->original_url }}"
                                class="w-28 sm:w-32 lg:w-36 self-stretch rounded-xl object-cover shrink-0">
                        </a>

                        <div class="flex flex-1 flex-col min-w-0">

                            <span class="text-xs font-semibold uppercase text-red-600">
                                {{ $sb->kategori->nama }}
                            </span>

                            <h4
                                class="mt-2 text-base lg:text-lg font-bold leading-6 group-hover:text-red-600 transition">

                                <a
                                    href="{{ route('berita.show', ['slug' => $sb->kategori->slug, 'artikel' => $sb->id]) }}">
                                    {{ $sb->judul }}
                                </a>

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
                @endforeach

            </div>

        </div>

        {{-- ============================= --}}
        {{-- Remaining Articles --}}
        {{-- ============================= --}}

        <div class="hidden xl:grid xl:grid-cols-3 gap-6">

            @foreach ($remainingBerita as $rb)
                <article
                    class="group rounded-2xl overflow-hidden border border-gray-200 bg-white hover:-translate-y-1 hover:shadow-xl transition-all duration-300">

                    <div class="overflow-hidden">
                        <a href="{{ route('berita.show', ['slug' => $rb->kategori->slug, 'artikel' => $rb->id]) }}">
                            <img src="{{ $rb->media_asset?->getFirstMedia('library')?->original_url }}"
                                class="aspect-[16/9] w-full object-cover transition duration-500 group-hover:scale-105">
                        </a>
                    </div>

                    <div class="p-5">

                        <span class="text-xs font-semibold uppercase tracking-wide text-red-600">
                            Berita
                        </span>

                        <h3 class="mt-2 text-lg font-bold leading-7 group-hover:text-red-600 transition">
                            <a
                                href="{{ route('berita.show', ['slug' => $rb->kategori->slug, 'artikel' => $rb->id]) }}">
                                {{ $rb->judul }}
                            </a>
                        </h3>

                        <p class="mt-3 text-sm text-gray-500 line-clamp-2">
                            {{ $rb->ringkasan }}
                        </p>

                        <div class="mt-5 flex items-center justify-between text-sm text-gray-400">
                            <span>{{ $sb->created_at->translatedFormat('d F Y') }}</span>

                            <span class="flex items-center gap-1">
                                <i class="ri-time-line"></i>
                                Updated {{ $sb->updated_at?->diffForHumans() ?? 'Never' }}
                            </span>
                        </div>
                    </div>
                </article>
            @endforeach

        </div>

    </div>

</section>
