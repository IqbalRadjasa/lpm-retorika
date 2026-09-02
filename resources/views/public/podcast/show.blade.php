{{-- ================================================= --}}
{{-- Podcast Detail --}}
{{-- ================================================= --}}

<x-app-layout>

    @php
        $thumbnail_media = $podcast->thumbnail_asset?->getFirstMedia('library');
        $video_media = $podcast->video_asset?->getFirstMedia('library');
        $durationSeconds = $video_media?->getCustomProperty('duration');

        // Konversi detik ke format 00:00 (menit:detik)
        // Jika durasi lebih dari 1 jam (>= 3600 detik), tampilkan format H:i:s
        $formattedDuration = '--:--';
        if ($durationSeconds) {
            $formattedDuration =
                $durationSeconds >= 3600 ? gmdate('H:i:s', $durationSeconds) : gmdate('i:s', $durationSeconds);
        }
    @endphp

    <div class="mx-auto max-w-7xl px-6 pt-30 pb-10 sm:px-8 lg:px-12 lg:pb-14 ">


        {{-- ================================================= --}}
        {{-- Breadcrumb --}}
        {{-- ================================================= --}}

        <nav class="mb-8 flex flex-wrap items-center gap-2 text-sm text-gray-400" aria-label="Breadcrumb">

            <a href="{{ route('beranda') }}" class="transition hover:text-red-600">

                Beranda

            </a>

            <i class="ri-arrow-right-s-line"></i>

            <a href="{{ route('podcast.index') }}" class="transition hover:text-red-600">

                Podcast

            </a>

            <i class="ri-arrow-right-s-line"></i>

            <span class="text-gray-600">
                {{ $podcast->judul }}
            </span>
        </nav>


        {{-- ================================================= --}}
        {{-- Podcast Information --}}
        {{-- ================================================= --}}



        {{-- Category --}}
        <div class="flex flex-wrap items-center gap-3">

            <span
                class="inline-flex items-center gap-2 rounded-full
                               bg-red-50 px-3 py-1.5
                               text-xs font-semibold text-red-600">

                <i class="ri-video-line"></i>

                Podcast

            </span>

            <span class="text-gray-300">
                •
            </span>

            <span class="text-sm text-gray-500">

                Suara Retorika

            </span>

        </div>


        {{-- Title --}}
        <h1
            class="mt-5 text-3xl font-bold leading-tight
                    tracking-tight text-gray-900
                    sm:text-4xl lg:text-5xl">

            {{ $podcast->judul }}
        </h1>


        {{-- Meta --}}
        <div class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-3
                    text-sm text-gray-500">

            <span class="inline-flex items-center gap-2">

                <i class="ri-calendar-line text-gray-400"></i>
                {{ $podcast->created_at->translatedFormat('d F Y') }}
            </span>

            <span class="inline-flex items-center gap-2">

                <i class="ri-timer-line text-gray-400"></i>

                {{ $formattedDuration }}
            </span>

        </div>


        {{-- ================================================= --}}
        {{-- Video Player --}}
        {{-- ================================================= --}}

        <div
            class="mt-8 overflow-hidden rounded-2xl
                    bg-black shadow-xl
                    sm:rounded-3xl">

            @if ($video_media)
                <video controls preload="metadata"
                    poster="{{ $thumbnail_media->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                    class="aspect-video w-full">

                    <source src="{{ $video_media->original_url }}" type="video/mp4">

                    Browser Anda tidak mendukung
                    pemutaran video.

                </video>
            @else
                <img src="https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Video" alt="Belum ada video">
            @endif

        </div>


        {{-- ================================================= --}}
        {{-- Video Caption --}}
        {{-- ================================================= --}}

        <p class="mt-3 text-xs text-gray-400">
            Suara Retorika — {{ $podcast->judul }}
        </p>


        {{-- ================================================= --}}
        {{-- Description --}}
        {{-- ================================================= --}}

        <article class="mt-10">


            <h2 class="text-xl font-bold text-gray-900
                               sm:text-2xl">

                Tentang Episode

            </h2>


            <div class="mt-5 space-y-5 text-base leading-8
                               text-gray-600">

                <p>
                    {{ $podcast->deskripsi }}
                </p>
            </div>

        </article>


        {{-- ================================================= --}}
        {{-- Share --}}
        {{-- ================================================= --}}

        <div class="mt-10 border-y border-gray-100 py-6">

            <div
                class="flex flex-col gap-4
                        sm:flex-row sm:items-center
                        sm:justify-between">

                <div>

                    <p class="text-sm font-semibold text-gray-900">

                        Bagikan Episode

                    </p>

                    <p class="mt-1 text-sm text-gray-500">

                        Bagikan podcast ini kepada temanmu.

                    </p>

                </div>


                @php
                    $shareUrl = urlencode(url()->current());
                    $shareText = urlencode($podcast->judul);
                @endphp
                {{-- Share --}}
                <div class="flex items-center gap-3" x-data="{ copied: false }">

                    <span class="text-sm text-gray-500">

                        Bagikan

                    </span>

                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank"
                        rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                        title="Bagikan ke Facebook">
                        <i class="ri-facebook-fill"></i>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                        target="_blank" rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                        title="Bagikan ke X">
                        <i class="ri-twitter-x-line"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
                        target="_blank" rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                        title="Bagikan ke WhatsApp">
                        <i class="ri-whatsapp-line"></i>
                    </a>

                    <button type="button"
                        @click="navigator.clipboard.writeText(window.location.href); copied = true; setTimeout(() => copied = false, 2000)"
                        class="relative flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                        :class="{ 'bg-green-600 text-white hover:bg-green-700': copied }" title="Salin Tautan">
                        <i :class="copied ? 'ri-check-line' : 'ri-link'"></i>
                    </button>
                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- Related Podcasts --}}
        {{-- ================================================= --}}
        @if ($podcastOthers->isNotEmpty())
            <section class="mt-16 border-t border-gray-100 pt-12">


                {{-- Section Header --}}
                <div class="flex items-end justify-between gap-4">

                    <div>

                        <p
                            class="text-sm font-semibold uppercase
                                   tracking-wider text-red-600">

                            Lainnya

                        </p>

                        <h2
                            class="mt-1 text-2xl font-bold text-gray-900
                                   sm:text-3xl">

                            Podcast Lainnya

                        </h2>

                    </div>


                    <a href="{{ route('podcast.index') }}"
                        class="hidden items-center gap-2 text-sm
                               font-semibold text-red-600
                               transition hover:text-red-700
                               sm:inline-flex">

                        Lihat Semua

                        <i class="ri-arrow-right-line"></i>

                    </a>

                </div>


                {{-- ================================================= --}}
                {{-- Related Grid --}}
                {{-- ================================================= --}}

                <div
                    class="mt-8 grid gap-6
                           sm:grid-cols-2
                           lg:grid-cols-3">

                    @foreach ($podcastOthers as $p)
                        <article class="group">
                            @php
                                $other_thumbnail_media = $p->thumbnail_asset?->getFirstMedia('library');
                                $other_video_media = $p->video_asset?->getFirstMedia('library');
                                $durationSeconds = $other_video_media?->getCustomProperty('duration');

                                // Konversi detik ke format 00:00 (menit:detik)
                                // Jika durasi lebih dari 1 jam (>= 3600 detik), tampilkan format H:i:s
                                $otherFormattedDuration = '--:--';
                                if ($durationSeconds) {
                                    $otherFormattedDuration =
                                        $durationSeconds >= 3600
                                            ? gmdate('H:i:s', $durationSeconds)
                                            : gmdate('i:s', $durationSeconds);
                                }
                            @endphp
                            <a href="{{ route('podcast.show', $p->id) }}"
                                class="relative block aspect-video
                                   overflow-hidden rounded-xl
                                   bg-gray-900">

                                <img src="{{ $other_thumbnail_media->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                                    alt="{{ $p->thumbnail_asset->alt_text ?? 'Media Podcast' }}"
                                    class="h-full w-full object-cover
                                transition duration-500
                                group-hover:scale-105">


                                <div class="absolute inset-0 bg-black/0 transition group-hover:bg-black/20">
                                </div>


                                <span
                                    class="absolute left-1/2 top-1/2
                                    flex h-12 w-12
                                    -translate-x-1/2 -translate-y-1/2
                                    items-center justify-center
                                    rounded-full bg-white
                                    text-red-600 opacity-0 shadow-lg
                                    transition group-hover:opacity-100">

                                    <i class="ri-play-fill ml-0.5 text-xl"></i>

                                </span>


                                <span
                                    class="absolute bottom-3 right-3
                                    rounded-md bg-black/70 px-2 py-1
                                    text-xs font-medium text-white">

                                    {{ $otherFormattedDuration }}
                                </span>

                            </a>


                            <div class="mt-4">

                                <p class="text-xs text-gray-400">
                                    {{ $p->created_at->translatedFormat('d F Y') }} · Suara Retorika
                                </p>

                                <h3
                                    class="mt-2 text-lg font-bold leading-6
                                    text-gray-900
                                    transition group-hover:text-red-600">
                                    {{ $p->judul }}
                                </h3>

                            </div>

                        </article>
                    @endforeach
                </div>


                {{-- Mobile See All --}}
                <div class="mt-8 sm:hidden">

                    <a href="{{ route('podcast.index') }}"
                        class="inline-flex w-full items-center
                               justify-center gap-2 rounded-xl
                               border border-gray-200 bg-white
                               px-5 py-3 text-sm font-semibold
                               text-gray-700 transition hover:bg-gray-50">

                        Lihat Semua Podcast

                        <i class="ri-arrow-right-line"></i>

                    </a>

                </div>

            </section>
        @endif

    </div>
</x-app-layout>
