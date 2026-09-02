{{-- ================================================= --}}
{{-- Podcast Index --}}
{{-- ================================================= --}}

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
                class="ri-video-line
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
                Podcast
            </h1>

        </div>

        {{-- ================================================= --}}
        {{-- Main Content --}}
        {{-- ================================================= --}}


        <section class="mx-auto max-w-7xl px-6 py-12">
            @if (isset($podcasts) && isset($podcastNewest))
                <section>

                    <div class="mb-6 flex items-end justify-between gap-4">

                        <div>

                            <p
                                class="text-sm font-semibold uppercase
                                  tracking-wider text-red-600">

                                Episode Pilihan

                            </p>

                            <h2
                                class="mt-1 text-2xl font-bold text-gray-900
                                   sm:text-3xl">

                                Podcast Terbaru

                            </h2>

                        </div>

                    </div>

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

                    {{-- Featured Card --}}
                    <div
                        class="overflow-hidden rounded-2xl bg-white shadow-sm
                           lg:rounded-3xl">


                        <div class="grid lg:grid-cols-2">


                            {{-- ================================================= --}}
                            {{-- Video --}}
                            {{-- ================================================= --}}

                            <a href="{{ route('podcast.show', $podcastNewest->id) }}"
                                class="group relative block aspect-video
                                   overflow-hidden bg-gray-900
                                   lg:aspect-auto lg:min-h-[420px]">

                                <img src="{{ $newest_thumbnail_media?->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                                    alt="{{ $podcastNewest->thumbnail_asset->alt_text ?? 'Media Podcast' }}"
                                    class="absolute inset-0 h-full w-full
                                       object-cover transition duration-500
                                       group-hover:scale-105">


                                {{-- Overlay --}}
                                <div
                                    class="absolute inset-0 bg-gradient-to-t
                                       from-black/70 via-black/10 to-transparent">
                                </div>


                                {{-- Play Button --}}
                                <div
                                    class="absolute left-1/2 top-1/2
                                       flex h-16 w-16
                                       -translate-x-1/2 -translate-y-1/2
                                       items-center justify-center
                                       rounded-full bg-white
                                       text-red-600 shadow-xl
                                       transition duration-300
                                       group-hover:scale-110
                                       sm:h-20 sm:w-20">

                                    <i
                                        class="ri-play-fill ml-1 text-3xl
                                           sm:text-4xl">
                                    </i>

                                </div>


                                {{-- Video Badge --}}
                                <span
                                    class="absolute left-5 top-5 inline-flex
                                       items-center gap-2 rounded-full
                                       bg-black/60 px-3 py-1.5
                                       text-xs font-medium text-white
                                       backdrop-blur-sm">

                                    <i class="ri-video-line"></i>

                                    Video Podcast

                                </span>


                                {{-- Duration --}}
                                <span
                                    class="absolute bottom-5 right-5
                                       rounded-md bg-black/70 px-2.5 py-1
                                       text-xs font-medium text-white">

                                    {{ $formattedDuration }}
                                </span>
                            </a>


                            {{-- ================================================= --}}
                            {{-- Information --}}
                            {{-- ================================================= --}}

                            <div
                                class="flex flex-col justify-center p-6
                                   sm:p-8 lg:p-10">


                                {{-- Category --}}
                                <div class="flex items-center gap-3 text-sm">

                                    <span class="font-semibold text-red-600">

                                        Suara Retorika

                                    </span>

                                    <span class="text-gray-300">

                                        •

                                    </span>

                                    <span class="text-gray-400">
                                        {{ $podcastNewest->created_at->translatedFormat('d F Y') }}
                                    </span>

                                </div>


                                {{-- Title --}}
                                <h3
                                    class="mt-4 text-2xl font-bold leading-tight
                                       text-gray-900 sm:text-3xl">
                                    {{ $podcastNewest->judul }}
                                </h3>


                                {{-- Description --}}
                                <p
                                    class="mt-5 text-sm leading-7 text-gray-500
                                       sm:text-base">
                                    {{ $podcastNewest->deskripsi }}
                                </p>


                                {{-- Meta --}}
                                <div
                                    class="mt-6 flex flex-wrap items-center
                                       gap-x-5 gap-y-3 text-sm text-gray-500">

                                    <span class="inline-flex items-center gap-2">

                                        <i class="ri-calendar-line"></i>
                                        {{ $podcastNewest->created_at->translatedFormat('d F Y') }}
                                    </span>

                                    <span class="inline-flex items-center gap-2">

                                        <i class="ri-timer-line"></i>

                                        {{ $formattedDuration }}
                                    </span>

                                </div>


                                {{-- CTA --}}
                                <div class="mt-8">

                                    <a href="{{ route('podcast.show', $podcastNewest->id) }}"
                                        class="inline-flex items-center
                                           justify-center gap-2 rounded-xl
                                           bg-red-600 px-5 py-3
                                           text-sm font-semibold text-white
                                           transition hover:bg-red-700">

                                        Tonton Episode

                                        <i class="ri-play-circle-line text-lg"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <section class="mt-16 lg:mt-20">


                    {{-- Section Header --}}
                    <div
                        class="flex flex-col gap-4
                           sm:flex-row sm:items-end
                           sm:justify-between">

                        <div>

                            <p
                                class="text-sm font-semibold uppercase
                                   tracking-wider text-red-600">

                                Episode

                            </p>

                            <h2
                                class="mt-1 text-2xl font-bold text-gray-900
                                   sm:text-3xl">

                                Podcast Terbaru Lainnya

                            </h2>

                        </div>


                        {{-- Sort --}}
                        <form action="{{ url()->current() }}" method="GET">
                            <x-form.select-input name="sort" onchange="this.form.submit()">
                                <option value="" {{ request('sort') == '' ? 'selected' : '' }}>
                                    Terbaru
                                </option>
                                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                                    Terlama
                                </option>
                                <option value="judul" {{ request('sort') == 'judul' ? 'selected' : '' }}>
                                    Nama A-Z
                                </option>
                            </x-form.select-input>
                        </form>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Podcast Grid --}}
                    {{-- ================================================= --}}

                    <div
                        class="my-8 grid gap-6
                           sm:grid-cols-2
                           lg:grid-cols-3">

                        @foreach ($podcasts as $p)
                            @php
                                $thumbnail_media = $p->thumbnail_asset?->getFirstMedia('library');
                                $video_media = $p->video_asset?->getFirstMedia('library');
                                $durationSeconds = $video_media?->getCustomProperty('duration');

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

                            <article
                                class="group overflow-hidden rounded-2xl bg-white
                                shadow-sm transition duration-300
                                hover:-translate-y-1 hover:shadow-lg">


                                {{-- Thumbnail --}}
                                <a href="{{ route('podcast.show', $p->id) }}"
                                    class="relative block aspect-video
                                    overflow-hidden bg-gray-900">

                                    <img src="{{ $thumbnail_media->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                                        alt="{{ $p->thumbnail_asset->alt_text ?? 'Media Podcast' }}"
                                        class="h-full w-full object-cover
                                        transition duration-500
                                        group-hover:scale-105">


                                    {{-- Overlay --}}
                                    <div
                                        class="absolute inset-0 bg-black/0
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


                                {{-- Content --}}
                                <div class="p-5">

                                    <div
                                        class="flex items-center gap-2 text-xs
                                        text-gray-400">

                                        <span class="font-medium text-red-600">
                                            Suara Retorika
                                        </span>

                                        <span>•</span>

                                        <span>
                                            {{ $p->created_at->translatedFormat('d F Y') }}
                                        </span>
                                    </div>


                                    <h3
                                        class="mt-3 text-lg font-bold leading-6
                                        text-gray-900">
                                        {{ $p->judul }}
                                    </h3>


                                    <p
                                        class="mt-2 line-clamp-2 text-sm
                                        leading-6 text-gray-500">

                                        {{ $p->deskripsi }}
                                    </p>


                                    <a href="{{ route('podcast.show', $p->id) }}"
                                        class="mt-5 inline-flex items-center gap-2
                                        text-sm font-semibold text-red-600
                                        transition hover:text-red-700">

                                        Tonton Episode

                                        <i
                                            class="ri-arrow-right-line
                                            transition group-hover:translate-x-1">
                                        </i>

                                    </a>

                                </div>

                            </article>
                        @endforeach
                    </div>


                    {{-- ================================================= --}}
                    {{-- Pagination --}}
                    {{-- ================================================= --}}

                    <div class="rounded-2xl bg-white p-5 shadow-sm">
                        {{ $podcasts->links('vendor.pagination.default') }}
                    </div>

                </section>
            @else
                <div class="bg-gray-100 p-6">
                    <div
                        class="mx-auto flex max-w-md flex-col items-center justify-center rounded-xl border border-dashed border-gray-300 bg-white p-8 text-center shadow-sm min-h-[400px]">

                        {{-- Icon Container --}}
                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 text-red-600 shadow-sm ring-8 ring-red-50/50">
                            <i class="ri-mic-off-line text-3xl"></i>
                        </div>

                        {{-- Text Content --}}
                        <h3 class="mt-5 text-lg font-bold text-gray-500">
                            Belum Ada Podcast
                        </h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-500">
                            Saat ini belum ada podcast terbaru yang dipublikasikan.
                        </p>
                    </div>
                </div>
            @endif

        </section>

    </main>

</x-app-layout>
