<x-cms-layout>
    @php
        $mode = 'edit';
        $media = $mode === 'edit' && isset($artikel) ? $artikel->media_asset?->getFirstMedia('library') : null;

        $initialMedia = $media
            ? [
                'id' => $media->id,
                'name' => $media->name,
                'url' => $media->original_url,
                'mime_type' => $media->mime_type,
                'size' => $media->human_readable_size,
            ]
            : null;

        // dd($initialMedia);

    @endphp
    <div class="space-y-8 py-6" x-data='mediaSelector("gambar", @json($initialMedia))'>

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}


        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Edit Artikel

                </h1>

                <p class="mt-2 text-gray-500">

                    Edit dan simpan perubahan baru artikel.

                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.artikel.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>
        </div>


        @if (session('success'))
            <div
                class="mb-6 rounded-xl border border-green-200
                        bg-green-50 px-4 py-3 text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div
                class="mb-6 rounded-xl border border-red-200
                        bg-red-50 px-4 py-3 text-sm text-red-700">
                <ul class="list-disc space-y-1 pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}
        @include('cms.artikel.partials.form', [
            'mode' => $mode,
            'artikel' => $artikel,
            'kategoris' => $kategoris,
            'statuses' => $statuses,
            'mediaAssets' => $mediaAssets,
        ])


        {{-- Media Picker --}}
        @include('components.cms.media-picker')
    </div>

</x-cms-layout>
