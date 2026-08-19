{{-- ================================================= --}}
{{-- Create Podcast --}}
{{-- ================================================= --}}

<x-cms-layout>

    <div class="space-y-8" x-data="mediaSelector()">


        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Tambah Podcast

                </h1>

                <p class="mt-2 text-gray-500">
                    Buat dan kelola video podcast untuk ditampilkan kepada pengunjung.
                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.podcast.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}

        @include('cms.podcast.partials.form')


    </div>

</x-cms-layout>
