<x-cms-layout>

    @php
        $media = $publikasi->doc_asset?->getFirstMedia('library');
    @endphp
    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Page Header --}}
        {{-- ================================================= --}}

        <div class="mb-8 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Detail Publikasi
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Informasi lengkap mengenai publikasi.
                </p>
            </div>


            {{-- Actions --}}
            <div class="flex flex-col lg:flex-row gap-3">
                <x-link-button.secondary-link :href="route('cms.publikasi.index')" icon="ri-arrow-left-line">
                    Kembali
                </x-link-button.secondary-link>

                <x-link-button.secondary-link :href="route('cms.publikasi.edit', $publikasi->id)" icon="ri-edit-line">
                    Edit
                </x-link-button.secondary-link>

                <form action="{{ route('cms.publikasi.destroy', $publikasi->id) }}" method="POST"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus publikasi ini?')">
                    @csrf
                    @method('DELETE')

                    <x-button.danger-button icon="ri-delete-bin-line">
                        Hapus
                    </x-button.danger-button>

                </form>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Publication Overview --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 lg:grid-cols-12">


            {{-- ================================================= --}}
            {{-- Cover --}}
            {{-- ================================================= --}}

            <div class="lg:col-span-5">

                <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    {{-- Cover --}}
                    <div class="bg-gray-100 p-6">

                        <div class="mx-auto max-w-sm overflow-hidden rounded-xl bg-white shadow-xl">

                            <img src="{{ $publikasi->cover_asset->getFirstMedia('library')->original_url }}"
                                alt="{{ $publikasi->cover_asset->alt_text ?? $publikasi->cover_asset->name }}"
                                class="aspect-[3/4] w-full object-cover">

                        </div>

                    </div>


                    {{-- Cover Actions --}}
                    <div class="border-t border-gray-100 p-5">
                        <div class="flex flex-col gap-3 sm:flex-row">
                            <x-link-button.primary-link :href="route('cms.publikasi.index')" icon="ri-eye-line"
                                class="flex-1 rounded-xl py-3">
                                Buka Preview
                            </x-link-button.primary-link>


                            <x-link-button.secondary-link :href="route('media.download', $media->id)" icon="ri-download-line"
                                class="flex-1 rounded-xl py-3">
                                Download
                            </x-link-button.secondary-link>
                        </div>
                    </div>
                </div>
            </div>


            {{-- ================================================= --}}
            {{-- Publication Information --}}
            {{-- ================================================= --}}

            <div class="lg:col-span-7">

                <div class="rounded-2xl bg-white shadow-sm">

                    {{-- Header --}}
                    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">
                        <div>
                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                                {{ $publikasi->kategori->nama }}
                            </span>

                            <h2 class="mt-4 text-2xl font-bold text-gray-900">
                                {{ $publikasi->judul }}
                            </h2>

                            <p class="mt-1 text-gray-500">
                                {{ $publikasi->edisi }} · {{ $publikasi->volume }}
                            </p>
                        </div>


                        {{-- Status --}}
                        <span
                            class="inline-flex capitalize items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold"
                            :class="{
                                'bg-yellow-100 text-yellow-700': {{ $publikasi->status_id }} == 1,
                                'bg-green-100 text-green-700': {{ $publikasi->status_id }} == 2
                            }">

                            <span class="h-2 w-2 rounded-full"
                                :class="{
                                    'bg-yellow-500': {{ $publikasi->status_id }} == 1,
                                    'bg-green-500': {{ $publikasi->status_id }} == 2,
                                }"></span>

                            {{ $publikasi->status->slug }}
                        </span>

                    </div>


                    {{-- Body --}}
                    <div class="p-6">

                        {{-- Description --}}
                        <div>
                            <h3 class="text-sm font-semibold uppercase tracking-wide text-gray-400">
                                Deskripsi
                            </h3>

                            <p class="mt-3 leading-7 text-gray-600">
                                {{ $publikasi->deskripsi }}
                            </p>
                        </div>


                        {{-- Metadata --}}
                        <div class="mt-8 grid gap-6 sm:grid-cols-2">


                            {{-- Publication Date --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-calendar-line"></i>

                                    Tanggal Terbit

                                </div>

                                <p class="mt-2 font-medium text-gray-900">
                                    {{ $publikasi->created_at->translatedFormat('d F Y') }}
                                </p>

                            </div>


                            {{-- Author --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-user-3-line"></i>

                                    Diterbitkan Oleh

                                </div>

                                <p class="mt-2 font-medium text-gray-900">
                                    Admin Retorika
                                </p>

                            </div>


                            {{-- Edition --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-bookmark-line"></i>
                                    Edisi
                                </div>

                                <p class="mt-2 font-medium text-gray-900">
                                    {{ $publikasi->edisi }}
                                </p>

                            </div>


                            {{-- Volume --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-stack-line"></i>

                                    Volume
                                </div>

                                <p class="mt-2 font-medium text-gray-900">
                                    {{ $publikasi->volume }}
                                </p>

                            </div>

                        </div>


                        {{-- File Information --}}
                        <div class="mt-8 rounded-xl border border-gray-200 bg-gray-50 p-4">

                            <div class="flex items-start gap-4">

                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">

                                    <i class="ri-file-pdf-2-line text-xl"></i>

                                </div>

                                <div class="min-w-0 flex-1">
                                    @if ($media)
                                        <p class="font-medium text-gray-900">
                                            {{ $media->file_name }}
                                        </p>

                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ strtoupper($media->extension) }}

                                            @if ($media->getCustomProperty('page_count'))
                                                · {{ $media->getCustomProperty('page_count') }} halaman
                                            @endif

                                            · {{ $media->human_readable_size }}
                                        </p>
                                    @endif

                                </div>

                                <a href="{{ route('media.download', $media->id) }}"
                                    class="hidden shrink-0 text-sm font-medium text-red-600 hover:underline sm:block">
                                    Download
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- PDF Preview --}}
        {{-- ================================================= --}}

        <div class="mt-8 rounded-2xl bg-white shadow-sm">

            {{-- Header --}}
            <div
                class="flex flex-col gap-3 border-b border-gray-100 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

                <div>

                    <h2 class="text-lg font-semibold text-gray-900">

                        Preview Publikasi

                    </h2>

                    <p class="mt-1 text-sm text-gray-500">

                        Lihat isi publikasi tanpa harus mengunduh file.

                    </p>

                </div>

                <span class="text-sm text-gray-400">

                    24 halaman

                </span>

            </div>


            {{-- Preview Placeholder --}}
            <div class="p-6 flex min-h-[500px] items-center justify-center rounded-2xl bg-gray-50">

                <div id="flipbook" data-pdf-url="{{ parse_url($media->original_url, PHP_URL_PATH) }}" class="">
                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Additional Information --}}
        {{-- ================================================= --}}

        <div class="mt-8 grid grid-cols-1">
            {{-- Created Information --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                        <i class="ri-information-line"></i>

                    </div>

                    <div>

                        <h3 class="font-semibold text-gray-900">

                            Informasi Sistem

                        </h3>

                        <p class="text-sm text-gray-500">

                            Informasi pengelolaan publikasi.

                        </p>

                    </div>

                </div>


                <div class="mt-6 space-y-4 text-sm">

                    <div class="flex items-center justify-between gap-4">

                        <span class="text-gray-500">

                            Dibuat

                        </span>

                        <span class="font-medium text-gray-900">
                            {{ $publikasi->created_at->translatedFormat('d F Y, H:i') }}
                        </span>

                    </div>

                    <div class="flex items-center justify-between gap-4">

                        <span class="text-gray-500">

                            Terakhir diperbarui

                        </span>

                        <span class="font-medium text-gray-900">
                            {{ $publikasi->updated_at->translatedFormat('d F Y, H:i') }}
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

    @vite('resources/js/flipbook.js')

</x-cms-layout>
