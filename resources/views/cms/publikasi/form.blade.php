<x-cms-layout>

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Tambah Publikasi

                </h1>

                <p class="mt-2 text-gray-500">

                    Tambahkan majalah, tabloid, atau buletin baru.

                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.publikasi.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>
        </div>

        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}

        <form action="#" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="grid gap-8 xl:grid-cols-12">

                {{-- ============================================= --}}
                {{-- LEFT --}}
                {{-- ============================================= --}}

                <div class="space-y-8 xl:col-span-8">

                    @include('cms.publikasi.partials.information')

                    @include('cms.publikasi.partials.file')

                </div>

                {{-- ============================================= --}}
                {{-- RIGHT --}}
                {{-- ============================================= --}}
                <div class="space-y-8 xl:col-span-4">

                    <div class="sticky top-24 space-y-8">

                        @include('cms.publikasi.partials.cover')

                        @include('cms.publikasi.partials.publish')

                    </div>

                </div>

            </div>

        </form>

    </div>

</x-cms-layout>
