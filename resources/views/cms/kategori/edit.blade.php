<x-cms-layout>
    {{-- ================================================= --}}
    {{-- Kategori --}}
    {{-- ================================================= --}}

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Edit Kategori

                </h1>

                <p class="mt-2 text-gray-500">
                    Edit kategori pada artikel.
                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.kategori.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>

        </div>

        {{-- FORM --}}
        @include('cms.kategori.partials.form', [
            'category' => null,
            'mode' => 'edit',
        ])
    </div>
</x-cms-layout>
