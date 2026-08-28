<section class="py-16 lg:py-20">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Featured Article --}}
        <div
            class="group/beritaUtama lg:col-span-2 h-[360px] md:h-[440px] lg:h-[520px] rounded-3xl overflow-hidden relative bg-gradient-to-br from-gray-900 to-gray-700">

            <img src="{{ $beritaUtama->media_asset?->getFirstMedia('library')?->original_url }}"
                class="absolute inset-0 w-full h-full object-cover opacity-70 transition duration-500 group-hover/beritaUtama:scale-105">

            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

            <div class="absolute bottom-0 py-8 px-4 text-white">

                <span class="inline-flex px-3 py-1 rounded-full bg-red-600 text-sm font-semibold">
                    Berita Utama
                </span>

                <p
                    class="mt-4 sm:text-lg md:text-2xl lg:text-4xl font-bold leading-tight max-w-3xl transition group-hover/beritaUtama:text-red-400">
                    <a
                        href="{{ route('berita.show', ['slug' => $beritaUtama->kategori->slug, 'artikel' => $beritaUtama->id]) }}">
                        {{ $beritaUtama->judul }}
                    </a>
                </p>

                <p class="hidden lg:block mt-4 text-gray-200 max-w-xl leading-7">
                    {{ $beritaUtama->ringkasan }}
                </p>

                <div class="mt-6 flex gap-6 text-sm text-gray-300">

                    <span>{{ $beritaUtama->created_at->translatedFormat('d F Y') }}</span>
                    <span>•</span>
                    <span>
                        Updated {{ $beritaUtama->updated_at?->diffForHumans() ?? 'Never' }}
                    </span>

                </div>

            </div>

        </div>

        {{-- Lainnya --}}
        <div class="h-[460px] md:h-[460px] lg:h-[520px] grid grid-rows-[auto_1fr] gap-5">

            {{-- Heading --}}
            <div>
                <h2 class="text-2xl font-bold text-center lg:text-left uppercase">
                    Lainnya
                </h2>
            </div>

            {{-- Cards --}}
            <div class="grid h-full grid-rows-[1fr_1fr_auto] gap-5">

                @foreach ($beritaLainnya as $bl)
                    <article class="group/beritaLainnya relative overflow-hidden rounded-2xl shadow-sm">

                        <img src="{{ $bl->media_asset?->getFirstMedia('library')?->original_url }}"
                            class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover/beritaLainnya:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent">
                        </div>

                        <span
                            class="absolute
                                    top-3 left-3 px-3 py-1 rounded-full bg-red-600 text-xs font-semibold text-white">
                            {{ $bl->kategori->nama }}
                        </span>

                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="font-bold leading-6 group-hover/beritaLainnya:text-red-400">
                                <a
                                    href="{{ route('berita.show', ['slug' => $bl->kategori->slug, 'artikel' => $bl->id]) }}">
                                    {{ $bl->judul }}
                                </a>
                            </h3>

                            <div class="flex items-center gap-4 mt-2 text-sm text-gray-300">
                                <span class="flex items-center gap-1">
                                    <i class="ri-calendar-line"></i>
                                    {{ $bl->created_at->translatedFormat('d F Y') }}
                                </span>

                                <span>•</span>

                                <span class="flex items-center gap-1">
                                    <i class="ri-time-line"></i>
                                    Updated {{ $beritaUtama->updated_at?->diffForHumans() ?? 'Never' }}
                                </span>
                            </div>

                        </div>

                    </article>
                @endforeach

                {{-- CTA --}}
                <a href="{{ route('berita.index', 'isu-kampus') }}"
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
