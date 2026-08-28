<x-cms-layout>
    {{-- ================================================= --}}
    {{-- Podcast Management --}}
    {{-- ================================================= --}}

    <div class="space-y-8 py-6">


        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">

                    Podcast

                </h1>

                <p class="mt-2 text-gray-500">

                    Kelola video podcast yang ditampilkan
                    kepada pengunjung website.

                </p>

            </div>

            <x-link-button.primary-link :href="route('cms.podcast.create')" icon="ri-add-line">

                Tambah Podcast

            </x-link-button.primary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Statistics --}}
        {{-- ================================================= --}}

        <div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-3">

            {{-- Total --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">
                            Total Podcast
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalPodcast }}
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">
                        <i class="ri-video-line text-xl"></i>
                    </div>
                </div>
            </div>


            {{-- Published --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">
                            Published
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalPublished }}
                        </p>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600">
                        <i class="ri-checkbox-circle-line text-xl"></i>
                    </div>
                </div>
            </div>


            {{-- Draft --}}
            <div class="rounded-2xl bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">
                            Draft
                        </p>

                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $totalDrafted }}
                        </p>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <i class="ri-draft-line text-xl"></i>
                    </div>
                </div>
            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Podcast List --}}
        {{-- ================================================= --}}
        <div class="rounded-2xl bg-white p-6 shadow-sm">
            <form action="{{ url()->current() }}" method="GET" class="grid gap-4 lg:grid-cols-[1fr_220px_220px_auto]">

                <x-form.text-input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Cari podcast..." />

                <x-form.select-input name="status_id">
                    <option value="">
                        Semua Status
                    </option>
                    @foreach ($statuses as $s)
                        <option value="{{ $s->id }}" {{ request('status_id') == $s->id ? 'selected' : '' }}>
                            {{ ucfirst($s->slug) }}
                        </option>
                    @endforeach
                </x-form.select-input>


                <x-form.select-input name="sort">
                    <option value="">
                        Semua Status
                    </option>
                    <option value="" {{ request('sort') == '' ? 'selected' : '' }}>
                        Terbaru
                    </option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                        Terlama
                    </option>
                    <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>
                        Nama A-Z
                    </option>
                </x-form.select-input>

                <x-button.primary-button>

                    Filter

                </x-button.primary-button>
            </form>
        </div>

        @if ($podcasts->isNotEmpty())
            <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($podcasts as $p)
                    <article
                        class="group overflow-hidden rounded-2xl bg-white shadow-sm
                        ring-1 ring-gray-100 transition
                        hover:-translate-y-1 hover:shadow-lg">

                        @php
                            $thumbnail_media = $p->thumbnail_asset->getFirstMedia('library');
                            $video_media = $p->video_asset->getFirstMedia('library');
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

                        {{-- Cover --}}
                        <div class="relative aspect-video overflow-hidden bg-gray-100">

                            <img src="{{ $thumbnail_media->original_url }}"
                                alt="{{ $p->thumbnail_asset->alt_text ?? $p->thumbnail_asset->name }}"
                                class="h-full w-full object-cover
                                transition duration-500
                                group-hover:scale-105">

                            {{-- Status --}}
                            <div class="absolute right-4 top-4">
                                <span class="rounded-full capitalize px-4 py-2 text-sm font-semibold"
                                    :class="{
                                        'bg-yellow-100 text-yellow-700': {{ $p->status->id }} == 1,
                                        'bg-green-100 text-green-700': {{ $p->status->id }} == 2
                                    }">

                                    {{ $p->status->slug }}

                                </span>
                            </div>
                        </div>


                        {{-- Content --}}
                        <div class="p-5">

                            <h2
                                class="text-lg font-semibold text-gray-900
                                transition group-hover:text-red-600">

                                {{ $p->judul }}
                            </h2>

                            <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">
                                <span>
                                    <i class="ri-user-voice-line"></i>
                                    {{ $p->host }}
                                </span>
                            </div>

                            <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">
                                <span>
                                    <i class="ri-calendar-line"></i>

                                    {{ $p->created_at->translatedFormat('d F Y') }}
                                </span>
                            </div>

                            <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">
                                <span>
                                    <i class="ri-timer-line"></i>

                                    {{ $formattedDuration }}
                                </span>
                            </div>


                            <p class="mt-4 line-clamp-2 text-sm leading-6 text-gray-500">
                                {{ $p->deskripsi }}
                            </p>


                            {{-- Actions --}}
                            <div class="mt-5 flex flex-col gap-2">
                                <x-link-button.secondary-link :href="route('cms.podcast.show', $p->id)" icon="ri-eye-line" class="flex-1">
                                    Detail
                                </x-link-button.secondary-link>

                                <x-link-button.secondary-link :href="route('cms.podcast.edit', $p->id)" icon="ri-pencil-line" class="flex-1">
                                    Edit
                                </x-link-button.secondary-link>

                                <form action="{{ route('cms.podcast.destroy', $p->id) }}" method="POST" class="flex"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus podcast ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <x-button.danger-button icon="ri-delete-bin-line" class="flex-1">
                                        Hapus
                                    </x-button.danger-button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            {{-- ================================================= --}}
            {{-- Empty State --}}
            {{-- ================================================= --}}
            <div class="w-full rounded-2xl bg-white p-12 text-center shadow-sm ring-1 ring-gray-100">

                @if (request()->hasAny(['search', 'status_id', 'sort']))
                    {{-- 1. Tampilan Ketika Hasil Filter/Pencarian Kosong --}}
                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-50 text-amber-500">
                        <i class="ri-search-line text-3xl"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-gray-900">
                        Data tidak ditemukan
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                        Tidak ada podcast yang cocok dengan kriteria pencarian atau filter kamu. Coba kata kunci lain.
                    </p>

                    <div class="mt-6">
                        <a href="{{ request()->url() }}"
                            class="inline-flex items-center gap-2 rounded-xl bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 transition">
                            <i class="ri-refresh-line"></i> Reset Filter
                        </a>
                    </div>
                @else
                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-gray-100 text-gray-400">
                        <i class="ri-book-open-line text-3xl"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-gray-900">
                        Belum ada podcast
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                        Belum ada podcast yang ditambahkan.
                    </p>
                @endif

            </div>
        @endif

        {{-- ================================================= --}}
        {{-- Pagination --}}
        {{-- ================================================= --}}

        <div class="rounded-2xl bg-white p-5 shadow-sm">
            {{ $podcasts->links('vendor.pagination.default') }}
        </div>
    </div>
    </div>
</x-cms-layout>
