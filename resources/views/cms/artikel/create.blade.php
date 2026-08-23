<x-cms-layout>

    <div class="space-y-8 py-6" x-data="mediaSelector('gambar')">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}


        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Tambah Artikel

                </h1>

                <p class="mt-2 text-gray-500">

                    Tulis dan publikasikan artikel baru.

                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.artikel.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>
        </div>

        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}
        @include('cms.artikel.partials.form')


        {{-- Media Picker --}}
        @include('components.cms.media-picker')
    </div>

</x-cms-layout>
