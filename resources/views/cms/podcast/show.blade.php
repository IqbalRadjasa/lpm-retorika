{{-- ================================================= --}}
{{-- Podcast Detail --}}
{{-- ================================================= --}}

<x-cms-layout>

    @php
        $thumbnail_media = $podcast->thumbnail_asset->getFirstMedia('library');
        $video_media = $podcast->video_asset->getFirstMedia('library');
        $durationSeconds = $video_media?->getCustomProperty('duration');

        // Konversi detik ke format 00:00 (menit:detik)
        // Jika durasi lebih dari 1 jam (>= 3600 detik), tampilkan format H:i:s
        $formattedDuration = '--:--';
        if ($durationSeconds) {
            $formattedDuration =
                $durationSeconds >= 3600 ? gmdate('H:i:s', $durationSeconds) : gmdate('i:s', $durationSeconds);
        }
    @endphp
    <div class="space-y-8 py-6">


        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div>

            <div class="mb-8 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

                <div>
                    <h1 class="text-2xl font-bold text-gray-900">

                        Podcast

                    </h1>

                    <p class="mt-1 text-sm text-gray-500">
                        Detail Podcast
                    </p>
                </div>


                {{-- Actions --}}
                <div class="flex flex-col lg:flex-row gap-3">
                    <x-link-button.secondary-link :href="route('cms.podcast.index')" icon="ri-arrow-left-line">
                        Kembali
                    </x-link-button.secondary-link>

                    <x-link-button.secondary-link :href="route('beranda')" icon="ri-external-link-line">
                        Lihat di Website
                    </x-link-button.secondary-link>

                    <x-link-button.secondary-link :href="route('cms.podcast.edit', $podcast->id)" icon="ri-edit-line">
                        Edit
                    </x-link-button.secondary-link>

                    <x-link-button.primary-link :href="'#'" icon="ri-delete-bin-line">
                        Hapus
                    </x-link-button.primary-link>

                </div>

            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Main Grid --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 xl:grid-cols-12">


            {{-- ================================================= --}}
            {{-- LEFT : Video + Information --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-8">


                {{-- ================================================= --}}
                {{-- Video Player --}}
                {{-- ================================================= --}}

                <div class="overflow-hidden rounded-2xl bg-black shadow-sm">


                    {{-- Video --}}
                    <div class="aspect-video bg-gray-950">

                        <video controls poster="{{ $thumbnail_media->original_url }}"
                            class="h-full w-full object-contain">

                            <source src="{{ $video_media->original_url }}" type="video/mp4">

                            Browser Anda tidak mendukung
                            pemutaran video.

                        </video>

                    </div>


                    {{-- Video Footer --}}
                    <div class="border-t border-white/10 bg-gray-950 px-5 py-4">
                        <div
                            class="flex flex-col gap-2
                                    sm:flex-row
                                    sm:items-center
                                    sm:justify-between">

                            <div class="flex min-w-0 items-center gap-3">

                                <i
                                    class="ri-video-line
                                            shrink-0 text-lg
                                            text-gray-400">
                                </i>

                                <p
                                    class="truncate
                                            text-sm
                                            text-gray-300">

                                    {{ $video_media->file_name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- ================================================= --}}
                {{-- Podcast Information --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                            border border-gray-200
                            bg-white shadow-sm">


                    {{-- Header --}}
                    <div
                        class="border-b
                                border-gray-100
                                px-6 py-5">

                        <div
                            class="flex flex-col gap-4
                                    sm:flex-row
                                    sm:items-start
                                    sm:justify-between">


                            <div class="min-w-0">

                                <div
                                    class="mb-3 flex flex-wrap
                                            items-center gap-2">


                                    {{-- Status --}}
                                    <span
                                        class="inline-flex capitalize items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold"
                                        :class="{
                                            'bg-yellow-100 text-yellow-700': {{ $podcast->status_id }} == 1,
                                            'bg-green-100 text-green-700': {{ $podcast->status_id }} == 2
                                        }">

                                        <span class="h-2 w-2 rounded-full"
                                            :class="{
                                                'bg-yellow-500': {{ $podcast->status_id }} == 1,
                                                'bg-green-500': {{ $podcast->status_id }} == 2,
                                            }"></span>

                                        {{ $podcast->status->slug }}
                                    </span>


                                    {{-- Episode --}}
                                    <span
                                        class="rounded-full
                                                bg-gray-100 px-3 py-1
                                                text-xs font-medium
                                                text-gray-600">
                                        {{ $podcast->episode }}
                                    </span>
                                </div>


                                <h2 class="text-2xl font-bold leading-tight text-gray-900">
                                    {{ $podcast->judul }}
                                </h2>


                                <p class="mt-3 text-sm
                                        text-gray-500">
                                    Dibuat pada tanggal
                                    {{ $podcast->created_at->translatedFormat('d F Y') }}
                                </p>
                                <p class="mt-3 text-sm
                                        text-gray-500">
                                    Diperbarui pada tanggal
                                    {{ $podcast->updated_at->translatedFormat('d F Y') }}
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Body --}}
                    <div class="space-y-6 p-6">


                        {{-- Host --}}
                        <div class="flex items-start gap-4 rounded-xl bg-gray-50 p-4">

                            <div
                                class="flex h-11 w-11
                                        shrink-0
                                        items-center
                                        justify-center
                                        rounded-full
                                        bg-red-100
                                        text-red-600">

                                <i class="ri-user-voice-line text-xl">
                                </i>

                            </div>


                            <div>
                                <p
                                    class="text-xs
                                            font-medium
                                            uppercase
                                            tracking-wide
                                            text-gray-400">
                                    Host
                                </p>

                                <p class="mt-1 font-semibold text-gray-900">
                                    {{ $podcast->host }}
                                </p>
                            </div>
                        </div>


                        {{-- Description --}}
                        <div>

                            <h3
                                class="text-sm
                                        font-semibold
                                        text-gray-900">

                                Deskripsi

                            </h3>

                            <p
                                class="mt-3 text-sm
                                        leading-7
                                        text-gray-600">
                                {{ $podcast->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- ================================================= --}}
            {{-- RIGHT : Sidebar --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-4">


                {{-- ================================================= --}}
                {{-- Thumbnail --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                    <div
                        class="border-b
                               border-gray-100
                               px-6 py-5">

                        <h2 class="text-lg font-semibold
                                   text-gray-900">

                            Thumbnail

                        </h2>

                        <p class="mt-1 text-sm
                                   text-gray-500">

                            Gambar sampul podcast.

                        </p>

                    </div>

                    <div class="p-6">
                        <div class="overflow-hidden
                                    rounded-xl bg-gray-100">

                            <img src="{{ $thumbnail_media->original_url }}"
                                alt="{{ $podcast->thumbnail_asset->alt_text }}"
                                class="aspect-video w-full object-cover">
                        </div>

                        <div class="mt-4">

                            <p
                                class="truncate text-sm
                                        font-medium
                                        text-gray-800">
                                {{ $thumbnail_media->file_name }}
                            </p>

                            <div class="mt-1 flex">
                                <p class="text-xs text-gray-400">
                                    {{ strtoupper($thumbnail_media->extension) }}&nbsp;
                                </p>
                                <p class="text-xs text-gray-400">
                                    ·&nbsp;{{ $thumbnail_media->human_readable_size }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- ================================================= --}}
                {{-- Podcast Information --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                    <div
                        class="border-b
                               border-gray-100
                               px-6 py-5">

                        <h2 class="text-lg font-semibold
                                   text-gray-900">

                            Informasi Media

                        </h2>

                        <p class="mt-1 text-sm
                                   text-gray-500">

                            Informasi file video.

                        </p>

                    </div>


                    <div class="divide-y divide-gray-100">


                        {{-- File --}}
                        <div
                            class="flex items-start
                                   justify-between gap-4
                                   px-6 py-4">
                            <div class="min-w-0 flex-1">
                                <p class="text-xs text-gray-400">
                                    File
                                </p>

                                <p class="mt-1 text-sm font-medium text-gray-800 break-all">
                                    {{ $video_media->file_name }}
                                </p>
                            </div>
                        </div>


                        {{-- Type --}}
                        <div
                            class="flex items-center
                                   justify-between
                                   px-6 py-4">

                            <span class="text-sm
                                        text-gray-500">

                                Format

                            </span>

                            <span
                                class="text-sm
                                        font-medium
                                        text-gray-800">
                                {{ strtoupper($video_media->extension) }}
                            </span>

                        </div>


                        {{-- Size --}}
                        <div
                            class="flex items-center
                                    justify-between
                                    px-6 py-4">

                            <span class="text-sm
                                        text-gray-500">

                                Ukuran

                            </span>

                            <span
                                class="text-sm
                                        font-medium
                                        text-gray-800">

                                {{ $video_media->human_readable_size }}
                            </span>

                        </div>


                        {{-- Duration --}}
                        <div
                            class="flex items-center
                                    justify-between
                                    px-6 py-4">

                            <span class="text-sm
                                        text-gray-500">

                                Durasi

                            </span>

                            <span
                                class="text-sm
                                        font-medium
                                        text-gray-800">

                                {{ $formattedDuration }}

                            </span>

                        </div>


                    </div>

                </div>
            </div>

        </div>

    </div>

</x-cms-layout>
