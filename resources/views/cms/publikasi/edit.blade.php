<x-cms-layout>
    @php
        $mode = 'edit';
        $cover = $mode === 'edit' && isset($publikasi) ? $publikasi->cover_asset?->getFirstMedia('library') : null;
        $doc = $mode === 'edit' && isset($publikasi) ? $publikasi->doc_asset?->getFirstMedia('library') : null;

        $initialCover = $cover
            ? [
                'id' => $cover->id,
                'name' => $cover->name,
                'url' => $cover->original_url,
                'mime_type' => $cover->mime_type,
                'size' => $cover->human_readable_size,
            ]
            : null;

        $initialDoc = $doc
            ? [
                'id' => $doc->id,
                'name' => $doc->name,
                'url' => $doc->original_url,
                'mime_type' => $doc->mime_type,
                'size' => $doc->human_readable_size,
            ]
            : null;

        // dd($initialMedia);

    @endphp
    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Edit Publikasi

                </h1>

                <p class="mt-2 text-gray-500">

                    Edit dan simpan perubahan baru majalah, tabloid, atau buletin.

                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.publikasi.index')" icon="ri-arrow-left-line">
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
        @include('cms.publikasi.partials.form', [
            'mode' => $mode,
            'publikasi' => $publikasi,
            'kategoris' => $kategoris,
            'statuses' => $statuses,
            'initialCover' => $initialCover,
            'initialDoc' => $initialDoc,
        ])

    </div>

</x-cms-layout>
