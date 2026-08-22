<x-cms-layout>

    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Page Header --}}
        {{-- ================================================= --}}


        <div class="mb-8 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Detail Media
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Informasi dan pengelolaan file media.
                </p>
            </div>


            {{-- Actions --}}
            <div class="flex flex-col lg:flex-row gap-3">
                <x-link-button.secondary-link :href="route('cms.media.index')" icon="ri-arrow-left-line">
                    Kembali
                </x-link-button.secondary-link>

                <x-link-button.secondary-link :href="$media?->original_url" icon="ri-download-2-line" download>
                    Download
                </x-link-button.secondary-link>
                <form action="{{ route('cms.media.destroy', $asset->id) }}" method="POST"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus media ini?')">
                    @csrf
                    @method('DELETE')

                    <x-button.danger-button icon="ri-delete-bin-line">
                        Hapus
                    </x-button.danger-button>

                </form>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Main Content --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 xl:grid-cols-12">


            {{-- ================================================= --}}
            {{-- LEFT : Preview --}}
            {{-- ================================================= --}}

            <div class="min-w-0 xl:col-span-8">

                <div class="min-w-0 overflow-hidden rounded-2xl bg-white shadow-sm">


                    {{-- ================================================= --}}
                    {{-- Preview Header --}}
                    {{-- ================================================= --}}

                    <div class="border-b border-gray-100 px-4 py-5 sm:px-6">

                        <div class="flex min-w-0 items-start justify-between gap-3">

                            {{-- File Information --}}
                            <div class="min-w-0 flex-1">

                                <h2 class="break-all text-base font-semibold text-gray-900 sm:text-lg">

                                    {{ $asset->name }}

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">
                                    {{ strtoupper(pathinfo($media->file_name, PATHINFO_EXTENSION)) }}
                                    ·
                                    {{ $media->human_readable_size }}
                                </p>

                            </div>


                            {{-- File Type --}}
                            <span
                                class="shrink-0 rounded-full bg-green-50 px-3 py-1
                                text-xs font-medium text-green-700">
                                @if (str_starts_with($media->mime_type, 'image/'))
                                    Image
                                @elseif ($media->mime_type == 'application/pdf')
                                    Dokumen
                                @elseif (str_starts_with($media->mime_type, 'video/'))
                                    Video
                                @else
                                    -
                                @endif
                            </span>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Image Preview --}}
                    {{-- ================================================= --}}

                    <div
                        class="flex min-h-[240px] w-full items-center justify-center
                        overflow-hidden bg-gray-100 p-4
                        sm:min-h-[320px] sm:p-8">


                        @if (str_starts_with($media->mime_type, 'image/'))
                            <img src="{{ $media->original_url }}" alt="{{ $asset->alt_text }}"
                                class="block h-auto max-h-[550px] w-full max-w-full rounded-xl object-contain shadow-lg">
                        @elseif ($media->mime_type == 'application/pdf')
                            <div
                                class="flex flex-col
                                        items-center justify-center
                                        text-center">

                                <div
                                    class="flex h-20 w-20
                                            items-center justify-center
                                            rounded-2xl bg-white
                                            shadow-sm">

                                    <i
                                        class="ri-file-text-line
                                                text-4xl text-gray-400"></i>

                                </div>

                                <h3
                                    class="mt-5 font-semibold
                                            text-gray-900">

                                    {{ $media->file_name }}

                                </h3>

                                <p class="mt-1 text-sm text-gray-500">

                                    {{ strtoupper($media->mime_type) }}

                                </p>

                                <x-link-button.primary-link href="{{ $media->original_url }}" target="_blank"
                                    icon="ri-external-link-line" class="mt-5">

                                    Buka Dokumen

                                </x-link-button.primary-link>

                            </div>
                        @elseif (str_starts_with($media->mime_type, 'video/'))
                            <video controls preload="metadata"
                                class="max-h-[650px] max-w-full
                                        rounded-xl shadow-lg">

                                <source src="{{ $media->original_url }}" type="{{ $media->mime_type }}">

                                Browser Anda tidak mendukung
                                pemutaran video.

                            </video>
                        @else
                            -
                        @endif

                    </div>


                    {{-- ================================================= --}}
                    {{-- Preview Footer --}}
                    {{-- ================================================= --}}

                    <div class="border-t border-gray-100 p-4 sm:p-6" x-data="{ copied: false }">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            {{-- URL --}}
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-700">
                                    URL Media
                                </p>

                                <p class="mt-1 break-all text-sm leading-5 text-gray-400">
                                    {{ $media->original_url }}
                                </p>
                            </div>

                            {{-- Copy Button --}}
                            <button type="button"
                                @click="navigator.clipboard.writeText('{{ $media->original_url }}'); copied = true; setTimeout(() => copied = false, 2000)"
                                class="inline-flex w-full shrink-0 items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50 sm:w-auto">

                                <template x-if="!copied">
                                    <span class="inline-flex items-center gap-2">
                                        <i class="ri-file-copy-line"></i>
                                        Salin URL
                                    </span>
                                </template>

                                <template x-if="copied">
                                    <span class="inline-flex items-center gap-2 text-green-600">
                                        <i class="ri-check-line"></i>
                                        Tersalin!
                                    </span>
                                </template>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ================================================= --}}
            {{-- RIGHT : Information --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-4">


                {{-- ================================================= --}}
                {{-- File Information --}}
                {{-- ================================================= --}}

                <div class="overflow-hidden rounded-2xl bg-white shadow-sm">
                    <div class="border-b border-gray-100 px-6 py-5">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <i class="ri-information-line text-lg"></i>
                            </div>
                            <div>

                                <h2 class="font-semibold text-gray-900">
                                    Informasi File
                                </h2>

                                <p class="mt-1 text-xs text-gray-500">
                                    Detail media.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="divide-y divide-gray-100">


                        {{-- Filename --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Nama File
                            </p>

                            <p class="mt-2 break-all text-sm font-medium text-gray-900">
                                {{ $media->file_name }}
                            </p>

                        </div>


                        {{-- File Type --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Tipe File
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                {{ strtoupper(pathinfo($media->file_name, PATHINFO_EXTENSION)) }}
                            </p>

                        </div>


                        {{-- File Size --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Ukuran
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                {{ $media->human_readable_size }}
                            </p>

                        </div>


                        {{-- Dimensions --}}
                        @if (str_starts_with($media->mime_type, 'image/') && str_starts_with($media->mime_type, 'video/'))
                            <div class="p-5">
                                <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                    Dimensi
                                </p>

                                <p class="mt-2 text-sm text-gray-700">
                                    @php
                                        $dimensions = null;
                                        if (
                                            $media &&
                                            str_starts_with($media->mime_type, 'image/') &&
                                            file_exists($media->getPath())
                                        ) {
                                            $size = getimagesize($media->getPath());
                                            if ($size) {
                                                $dimensions = $size[0] . ' × ' . $size[1] . ' px';
                                            }
                                        }
                                    @endphp

                                    {{ $dimensions ?? '-' }}
                                </p>
                            </div>
                        @endif


                        {{-- Uploaded --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Diunggah
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                {{ $asset->created_at->translatedFormat('d F Y, H:i') }}
                            </p>

                        </div>


                        {{-- Uploaded By --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Diunggah Oleh
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                Admin Retorika
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-cms-layout>
