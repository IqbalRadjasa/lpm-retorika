<aside class="space-y-8 lg:sticky lg:top-28 self-start">

    {{-- ===================================== --}}
    {{-- Latest News --}}
    {{-- ===================================== --}}
    <div class="relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-6 shadow-sm">

        <i class="ri-fire-line absolute -right-5 -top-5 text-[170px] text-red-500/5 pointer-events-none">
        </i>

        <div class="relative">

            <h3 class="text-2xl font-bold">
                Berita Terbaru
            </h3>

            <div class="mt-6 divide-y divide-gray-200">
                @forelse ($sidebarNews ?? [] as $item)
                    <article class="group flex gap-4 py-5">
                        <span class="text-3xl font-black italic text-gray-200 transition group-hover:text-red-500">
                            {{ sprintf('%02d', $loop->iteration) }}
                        </span>

                        <div>
                            @if ($item->kategori)
                                <a
                                    href="{{ route('berita.show', ['slug' => $item->kategori->slug, 'artikel' => $item->id]) }}">
                                    <h4 class="font-semibold leading-7 transition group-hover:text-red-600">
                                        {{ $item->judul }}
                                    </h4>
                                </a>
                            @else
                                <h4 class="font-semibold leading-7">
                                    {{ $item->judul }}
                                </h4>
                            @endif

                            <p class="mt-2 text-sm text-gray-400">
                                {{ $item->created_at?->translatedFormat('d F Y') ?? '-' }}
                            </p>
                        </div>
                    </article>
                @empty
                    {{-- Empty State --}}
                    <div class="flex flex-col items-center justify-center py-8 text-center">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-500 mb-3">
                            <i class="ri-newspaper-line text-2xl"></i>
                        </div>
                        <p class="text-sm font-medium text-gray-700">
                            Belum ada berita terbaru
                        </p>
                        <p class="text-xs text-gray-400 mt-1">
                            Informasi dan artikel terbaru akan tampil di sini.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    {{-- ===================================== --}}
    {{-- Podcast --}}
    {{-- ===================================== --}}
    @if ($podcastNewest)
        <div
            class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-red-700 via-red-600 to-red-500 p-6 text-white">

            {{-- Decoration --}}
            <i class="ri-video-line absolute -right-6 -top-6 text-[170px] text-white/10 pointer-events-none">
            </i>

            <div class="relative z-10">

                <span
                    class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold">

                    <i class="ri-video-line"></i>

                    PODCAST

                </span>

                <h3 class="mt-5 text-2xl font-bold">
                    Suara Retorika
                </h3>

                <p class="mt-3 leading-7 text-red-100">
                    {{ $podcastNewest->judul }}
                </p>

                @php
                    $newest_thumbnail_media = $podcastNewest->thumbnail_asset?->getFirstMedia('library');
                    $newest_video_media = $podcastNewest->video_asset?->getFirstMedia('library');
                    $durationSeconds = $newest_video_media?->getCustomProperty('duration');

                    // Konversi detik ke format 00:00 (menit:detik)
                    // Jika durasi lebih dari 1 jam (>= 3600 detik), tampilkan format H:i:s
                    $formattedDuration = '--:--';
                    if ($durationSeconds) {
                        $formattedDuration =
                            $durationSeconds >= 3600
                                ? gmdate('H:i:s', $durationSeconds)
                                : gmdate('i:s', $durationSeconds);
                    }
                @endphp

                @if (isset($podcastNewest))
                    <a href="{{ route('podcast.show', $podcastNewest->id) }}"
                        class="group relative block aspect-video
                    overflow-hidden
                    mt-6  p-3
                    rounded-xl bg-white
                    shadow-lg">

                        <img src="{{ $newest_thumbnail_media->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                            alt="{{ $podcastNewest->thumbnail_asset->alt_text ?? 'Media Podcast' }}"
                            class="h-full w-full object-cover rounded-lg
                            transition duration-500
                            group-hover:scale-105">


                        {{-- Overlay --}}
                        <div class="absolute inset-0 bg-black/0
                    transition group-hover:bg-black/20">
                        </div>


                        {{-- Play --}}
                        <span
                            class="absolute left-1/2 top-1/2
                            flex h-12 w-12
                            -translate-x-1/2 -translate-y-1/2
                            items-center justify-center
                            rounded-full bg-white
                            text-red-600 opacity-0 shadow-lg
                            transition duration-300
                            group-hover:opacity-100">

                            <i class="ri-play-fill ml-0.5 text-xl"></i>

                        </span>


                        {{-- Duration --}}
                        <span
                            class="absolute bottom-3 right-3
                    rounded-md bg-black/70 px-2 py-1
                    text-xs font-medium text-white">

                            {{ $formattedDuration }}
                        </span>

                    </a>
                @endif
            </div>

        </div>
    @else
        {{-- Empty State --}}
        <div
            class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-red-700 via-red-600 to-red-500 p-6 text-white">

            {{-- Decoration --}}
            <i class="ri-video-line absolute -right-6 -top-6 text-[170px] text-white/10 pointer-events-none">
            </i>

            <div class="relative z-10">

                <span
                    class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold">

                    <i class="ri-video-line"></i>

                    PODCAST

                </span>

                <h3 class="mt-5 text-2xl font-bold">
                    Suara Retorika
                </h3>

                <p class="mt-3 leading-7 text-red-100">
                    Belum ada episode podcast terbaru yang dipublikasikan.
                </p>

                <div
                    class="relative flex aspect-video flex-col items-center justify-center overflow-hidden mt-6 p-6 rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 text-center shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white/20 text-white mb-3">
                        <i class="ri-mic-off-line text-2xl"></i>
                    </div>

                    <p class="text-sm font-medium text-white/90">
                        Episode Belum Tersedia
                    </p>
                    <p class="text-xs text-red-200 mt-1">
                        Nantikan konten podcast terbaru dari kami segera.
                    </p>

                </div>

            </div>

        </div>
    @endif

</aside>
