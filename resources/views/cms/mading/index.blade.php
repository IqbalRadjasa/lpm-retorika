<x-cms-layout>

    <div class="py-6">

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
        {{-- Page Header --}}
        {{-- ================================================= --}}

        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            <div>

                <h1 class="text-2xl font-bold text-gray-900">

                    Mading

                </h1>

                <p class="mt-1 text-sm text-gray-500">

                    Kelola poster yang ditampilkan pada Mading website.

                </p>

            </div>


            {{-- Edit Button --}}
            <x-link-button.primary-link :href="route('cms.mading.edit', $mading->id)" icon="ri-edit-line">
                Edit Mading
            </x-link-button.primary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Main Content --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 lg:grid-cols-12">


            {{-- ================================================= --}}
            {{-- Poster Preview --}}
            {{-- ================================================= --}}

            <div class="lg:col-span-7">

                <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    {{-- Header --}}
                    <div class="flex items-center justify-between border-b border-gray-100 px-6 py-5">

                        <div>

                            <h2 class="font-semibold text-gray-900">

                                Preview Poster

                            </h2>

                            <p class="mt-1 text-sm text-gray-500">

                                Poster yang sedang ditampilkan pada website.

                            </p>

                        </div>


                        {{-- Status --}}
                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1.5 text-xs font-semibold text-green-700">

                            <span class="h-2 w-2 rounded-full bg-green-500"></span>

                            Aktif

                        </span>

                    </div>

                    {{-- Poster --}}
                    @if ($mading)
                        <div class="bg-gray-100 p-6">
                            <div class="mx-auto max-w-md overflow-hidden rounded-xl bg-white shadow-xl">
                                <img src="{{ $mading->media_asset?->getFirstMedia('library')?->original_url ?? 'https://picsum.photos/700/950?random=35' }}"
                                    alt="{{ $mading->judul ?? 'Poster Mading' }}" class="w-full object-cover">
                            </div>
                        </div>
                    @else
                        {{-- Empty State Mading --}}
                        <div class="bg-gray-100 p-6">
                            <div
                                class="mx-auto flex max-w-md flex-col items-center justify-center rounded-xl border border-dashed border-gray-300 bg-white p-8 text-center shadow-sm min-h-[400px]">

                                {{-- Icon Container --}}
                                <div
                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 text-red-600 shadow-sm ring-8 ring-red-50/50">
                                    <i class="ri-image-line text-3xl"></i>
                                </div>

                                {{-- Text Content --}}
                                <h3 class="mt-5 text-lg font-bold text-gray-500">
                                    Belum Ada Poster
                                </h3>
                                {{-- <p class="mt-2 text-sm leading-relaxed text-gray-500">
                                    Saat ini belum ada poster atau mading terbaru yang dipublikasikan.
                                </p> --}}
                            </div>
                        </div>
                    @endif


                    {{-- Preview Footer --}}
                    <div class="border-t border-gray-100 p-5">

                        <div class="flex flex-col gap-3 sm:flex-row">
                            <x-link-button.secondary-link :href="'#'" icon="ri-eye-line"
                                class="flex-1 rounded-xl py-3">
                                Lihat di Website
                            </x-link-button.secondary-link>

                            <x-link-button.primary-link :href="route('cms.mading.edit', $mading->id)" icon="ri-edit-line"
                                class="flex-1 rounded-xl py-3">
                                Edit Mading
                            </x-link-button.primary-link>
                        </div>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- Information --}}
            {{-- ================================================= --}}

            <div class="space-y-8 lg:col-span-5">


                {{-- ================================================= --}}
                {{-- Mading Information --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    {{-- Header --}}
                    <div class="border-b border-gray-100 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">

                                <i class="ri-layout-masonry-line text-xl"></i>

                            </div>

                            <div>

                                <h2 class="font-semibold text-gray-900">

                                    Informasi Mading

                                </h2>

                                <p class="text-sm text-gray-500">

                                    Informasi poster saat ini.

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Body --}}
                    <div class="space-y-5 p-6">
                        {{-- Title --}}
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Judul
                            </p>

                            <p class="mt-2 font-semibold text-gray-900">
                                {{ $mading->judul ?? '-' }}
                            </p>
                        </div>


                        {{-- Description --}}
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Deskripsi
                            </p>

                            <p class="mt-2 text-sm leading-6 text-gray-600">
                                {{ $mading->deskripsi ?? '-' }}
                            </p>
                        </div>


                        {{-- Date --}}
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Tanggal Publikasi
                            </p>

                            <div class="mt-2 flex items-center gap-2 text-sm text-gray-700">
                                <i class="ri-calendar-line text-gray-400"></i>
                                {{ $mading?->created_at->translatedFormat('d F Y') ?? '-' }}
                            </div>
                        </div>


                        {{-- Updated --}}
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Terakhir Diperbarui
                            </p>

                            <div class="mt-2 flex items-center gap-2 text-sm text-gray-700">
                                <i class="ri-time-line text-gray-400"></i>
                                {{ $mading?->updated_at->translatedFormat('d F Y') ?? '-' }}
                            </div>
                        </div>
                    </div>
                </div>


                {{-- ================================================= --}}
                {{-- Status Information --}}
                {{-- ================================================= --}}
                @if ($mading?->status_mading_id == 1)
                    {{-- Status Aktif --}}
                    <div class="rounded-2xl border border-green-100 bg-green-50 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-100">
                                <i class="ri-checkbox-circle-line text-lg text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-green-900">
                                    Mading sedang aktif
                                </h3>
                                <p class="mt-1 text-sm leading-6 text-green-700">
                                    Poster ini sedang ditampilkan.
                                </p>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- Status Tidak Aktif --}}
                    <div class="rounded-2xl border border-amber-100 bg-amber-50 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-100">
                                <i class="ri-error-warning-line text-lg text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-amber-900">
                                    Mading tidak aktif
                                </h3>
                                <p class="mt-1 text-sm leading-6 text-amber-700">
                                    Poster ini sedang disembunyikan dan tidak ditampilkan di website publik.
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Website Placement --}}
        {{-- ================================================= --}}

        {{-- <div class="mt-8 rounded-2xl bg-white shadow-sm">

            <div class="border-b border-gray-100 px-6 py-5">

                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                        <i class="ri-home-5-line text-xl"></i>

                    </div>

                    <div>

                        <h2 class="font-semibold text-gray-900">

                            Penempatan Mading

                        </h2>

                        <p class="text-sm text-gray-500">

                            Informasi mengenai lokasi Mading pada website.

                        </p>

                    </div>

                </div>

            </div>


            <div class="p-6">

                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <p class="font-medium text-gray-900">

                            Beranda

                        </p>

                        <p class="mt-1 text-sm text-gray-500">

                            Mading ditampilkan pada bagian atas
                            halaman Beranda.

                        </p>

                    </div>

                    <div>

                        <p class="font-medium text-gray-900">
                            Mading
                        </p>

                        <p class="mt-1 text-sm text-gray-500">

                            Mading ditampilkan pada bagian atas
                            halaman Beranda.

                        </p>

                    </div>


                    <span
                        class="inline-flex w-fit items-center gap-2 rounded-full bg-green-100 px-3 py-1.5 text-xs font-semibold text-green-700">

                        <i class="ri-check-line"></i>

                        Aktif

                    </span>

                </div>

            </div>

        </div> --}}

    </div>

</x-cms-layout>
