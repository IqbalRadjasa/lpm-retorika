<section class="py-16 lg:py-20">
    <div class="relative rounded-2xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 lg:rounded-3xl">

        {{-- Background Decoration --}}
        <i
            class="ri-video-line pointer-events-none absolute left-1/2 top-3
                    -translate-x-1/2 text-[140px] text-white/5
                    lg:left-auto lg:right-[-2rem] lg:top-[-2rem]
                    lg:translate-x-0 lg:text-[220px] lg:text-white/10">
        </i>

        <div class="grid items-center gap-8 p-6 md:p-8 lg:grid-cols-2 lg:gap-10 lg:p-12">
            {{-- LEFT --}}
            <div class="text-center md:text-left">

                {{-- Badge --}}
                <span
                    class="inline-flex items-center gap-2 rounded-full
                            border border-white/30 bg-white/10
                            px-4 py-2 text-sm font-semibold text-white">
                    <i class="ri-video-line"></i>
                    Podcast
                </span>

                {{-- Title --}}
                <h2
                    class="mt-5 text-3xl font-bold leading-tight text-white
                            md:text-4xl lg:text-5xl">
                    Podcast
                    <br>
                    Suara Retorika
                </h2>

                {{-- Description --}}
                <p class="mx-auto mt-5 max-w-md leading-7 text-red-100 md:mx-0">
                    Perbincangan seputar isu kampus,
                    pendidikan, organisasi mahasiswa,
                    serta berbagai topik menarik lainnya.
                </p>

                {{-- CTA --}}
                <a href="{{ route('podcast.index') }}"
                    class="mt-8 inline-flex w-full items-center justify-center
                            gap-3 rounded-xl bg-white px-6 py-4
                            font-semibold text-red-600 transition
                            hover:shadow-xl md:w-auto">
                    Tonton Podcast
                    <i class="ri-arrow-right-line"></i>
                </a>

            </div>

            @php
                $hasPodcast = isset($podcastNewest) && $podcastNewest;

                $newest_thumbnail_media = $hasPodcast
                    ? $podcastNewest->thumbnail_asset?->getFirstMedia('library')
                    : null;
                $newest_video_media = $hasPodcast ? $podcastNewest->video_asset?->getFirstMedia('library') : null;
                $durationSeconds = $newest_video_media?->getCustomProperty('duration');

                $formattedDuration = '--:--';
                if ($durationSeconds) {
                    $formattedDuration =
                        $durationSeconds >= 3600 ? gmdate('H:i:s', $durationSeconds) : gmdate('i:s', $durationSeconds);
                }

                $shareUrl = $hasPodcast ? urlencode(route('podcast.show', $podcastNewest->id)) : '';
                $shareText = $hasPodcast ? urlencode($podcastNewest->judul) : '';
            @endphp

            {{-- RIGHT --}}
            <div x-data="{ shareOpen: false }" class="relative rounded-2xl bg-white p-4 shadow-2xl md:p-5">

                {{-- Video Preview --}}
                <div class="group relative aspect-video overflow-hidden rounded-xl bg-gray-900">

                    {{-- Video Thumbnail --}}
                    <img src="{{ $newest_thumbnail_media?->original_url ?? 'https://placehold.co/1280x720/1e293b/94a3b8?text=Belum+Ada+Thumbnail+Atau+Podcast' }}"
                        alt="{{ $podcastNewest->thumbnail_asset->alt_text ?? 'Belum ada thumbnail atau podcast' }}"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-black/20 transition group-hover:bg-black/30"></div>

                    {{-- Play Button --}}
                    @if ($hasPodcast)
                        <a href="{{ route('podcast.show', $podcastNewest->id) }}" aria-label="Tonton podcast"
                            class="absolute left-1/2 top-1/2 flex h-16 w-16
                                    -translate-x-1/2 -translate-y-1/2
                                    items-center justify-center rounded-full
                                    bg-white text-red-600 shadow-xl
                                    transition duration-300
                                    hover:scale-110 md:h-20 md:w-20">
                            <i class="ri-play-fill ml-1 text-3xl md:text-4xl"></i>
                        </a>
                    @else
                        <div
                            class="absolute left-1/2 top-1/2 flex h-16 w-16
                                    -translate-x-1/2 -translate-y-1/2
                                    items-center justify-center rounded-full
                                    bg-white/50 text-gray-400 shadow-xl md:h-20 md:w-20 cursor-not-allowed">
                            <i class="ri-play-fill ml-1 text-3xl md:text-4xl"></i>
                        </div>
                    @endif

                    {{-- Video Badge --}}
                    <div
                        class="absolute left-4 top-4 inline-flex items-center
                                gap-2 rounded-full bg-black/60 px-3 py-1.5
                                text-xs font-medium text-white backdrop-blur-sm">
                        <i class="ri-video-line"></i>
                        Podcast
                    </div>
                </div>

                {{-- Podcast Information --}}
                <div class="mt-5">
                    <div class="flex items-start justify-between gap-4">

                        {{-- Information --}}
                        <div class="min-w-0 flex-1">
                            <h3 class="text-lg font-bold leading-7 text-gray-900">
                                {{ $hasPodcast ? $podcastNewest->judul : 'Belum Ada Podcast Terbaru' }}
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Suara Retorika
                            </p>
                        </div>

                        {{-- Share Button --}}
                        @if ($hasPodcast)
                            {{-- Mobile --}}
                            <button type="button" @click="shareOpen = true"
                                class="flex h-10 w-10 shrink-0 items-center
                                       justify-center rounded-full
                                       transition hover:bg-gray-100
                                       md:hidden">
                                <i class="ri-share-line text-lg"></i>
                            </button>

                            {{-- Desktop --}}
                            <div class="relative z-100 hidden md:block">
                                <x-dropdown align="right" width="64">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="flex h-10 w-10 items-center
                                                    justify-center rounded-full
                                                    transition hover:bg-gray-100">
                                            <i class="ri-share-line text-lg"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link href="javascript:void(0)" x-data="{ copied: false }"
                                            @click.prevent="
                                                navigator.clipboard.writeText('{{ route('podcast.show', $podcastNewest->id) }}');
                                                copied = true;
                                                setTimeout(() => copied = false, 2000);
                                            "
                                            class="flex items-center gap-3 py-3 cursor-pointer">
                                            <i :class="copied ? 'ri-check-line text-green-600' : 'ri-link'"></i>
                                            <span x-text="copied ? 'Link Tersalin!' : 'Salin Link'"></span>
                                        </x-dropdown-link>

                                        <x-dropdown-link
                                            href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
                                            class="flex items-center gap-3 py-3">
                                            <i class="ri-whatsapp-line text-green-600"></i>
                                            WhatsApp
                                        </x-dropdown-link>

                                        <x-dropdown-link
                                            href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                                            class="flex items-center gap-3 py-3">
                                            <i class="ri-twitter-x-line"></i>
                                            Twitter / X
                                        </x-dropdown-link>

                                        <x-dropdown-link
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                                            class="flex items-center gap-3 py-3">
                                            <i class="ri-facebook-circle-line text-blue-600"></i>
                                            Facebook
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @endif

                    </div>

                    {{-- Podcast Meta --}}
                    <div class="mt-4 flex items-center gap-4 text-sm text-gray-500">
                        <div class="flex items-center gap-1.5">
                            <i class="ri-calendar-line"></i>
                            {{ $hasPodcast ? $podcastNewest->created_at->translatedFormat('d F Y') : '-' }}
                        </div>

                        <span class="text-gray-300">•</span>

                        <div class="flex items-center gap-1.5">
                            <i class="ri-timer-line"></i>
                            {{ $formattedDuration }}
                        </div>
                    </div>
                </div>

                {{-- Mobile Share Sheet --}}
                @if ($hasPodcast)
                    <div x-show="shareOpen" x-cloak class="fixed inset-0 z-[999]" style="display:none">
                        <div @click="shareOpen = false" class="absolute inset-0 bg-black/50"></div>
                        <div x-show="shareOpen" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
                            class="absolute bottom-0 left-0 right-0 rounded-t-3xl bg-white p-6">
                            <div class="mx-auto mb-6 h-1.5 w-14 rounded-full bg-gray-300"></div>
                            <h3 class="text-center text-lg font-bold">Bagikan</h3>

                            <div class="mt-6 space-y-2">
                                <a href="#" x-data="{ copied: false }"
                                    @click.prevent="
                                        navigator.clipboard.writeText('{{ route('podcast.show', $podcastNewest->id) }}');
                                        copied = true;
                                        setTimeout(() => copied = false, 2000);
                                    "
                                    class="flex items-center gap-4 p-4">
                                    <i :class="copied ? 'ri-check-line text-green-600' : 'ri-link'"></i>
                                    <span x-text="copied ? 'Link Tersalin!' : 'Salin Link'"></span>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
                                    class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">
                                    <i class="ri-whatsapp-line text-xl text-green-600"></i>
                                    <span>WhatsApp</span>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                                    class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">
                                    <i class="ri-twitter-x-line text-xl"></i>
                                    <span>Twitter / X</span>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                                    class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">
                                    <i class="ri-facebook-circle-line text-xl text-blue-600"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>

                            <button @click="shareOpen=false"
                                class="mt-6 w-full rounded-xl bg-gray-100 py-4 font-semibold transition hover:bg-gray-200">
                                Batal
                            </button>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
