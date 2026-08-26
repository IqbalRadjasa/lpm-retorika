<x-cms-layout>

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

                <x-link-button.secondary-link :href="route('cms.publikasi.index')" icon="ri-edit-line">
                    Edit
                </x-link-button.secondary-link>


                <x-link-button.primary-link :href="route('cms.publikasi.index')" icon="ri-delete-bin-line">
                    Hapus
                </x-link-button.primary-link>

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


                            <x-link-button.secondary-link :href="route('cms.publikasi.index')" icon="ri-download-line"
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
                                DIKSI
                            </h2>

                            <p class="mt-1 text-gray-500">
                                Edisi 12 · Volume 6
                            </p>
                        </div>


                        {{-- Status --}}
                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1.5 text-xs font-semibold text-green-700">

                            <span class="h-2 w-2 rounded-full bg-green-500"></span>

                            Published

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

                                DIKSI merupakan majalah LPM Retorika yang
                                membahas berbagai isu kampus, pendidikan,
                                organisasi mahasiswa, dan perkembangan
                                sosial di lingkungan mahasiswa.

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

                                    15 Agustus 2026

                                </p>

                            </div>


                            {{-- Author --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-user-3-line"></i>

                                    Diterbitkan Oleh

                                </div>

                                <p class="mt-2 font-medium text-gray-900">

                                    LPM Retorika

                                </p>

                            </div>


                            {{-- Edition --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-bookmark-line"></i>

                                    Edisi

                                </div>

                                <p class="mt-2 font-medium text-gray-900">

                                    Edisi 12

                                </p>

                            </div>


                            {{-- Volume --}}
                            <div>

                                <div class="flex items-center gap-2 text-sm text-gray-400">

                                    <i class="ri-stack-line"></i>

                                    Volume

                                </div>

                                <p class="mt-2 font-medium text-gray-900">

                                    Volume 6

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

                                    <p class="font-medium text-gray-900">

                                        DIKSI-Edisi-12.pdf

                                    </p>

                                    <p class="mt-1 text-sm text-gray-500">

                                        PDF · 24 halaman · 8.4 MB

                                    </p>

                                </div>

                                <a href="#"
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
            <div class="p-6">

                <div
                    class="flex min-h-[500px] items-center justify-center rounded-2xl border border-dashed border-gray-300 bg-gray-50">

                    <div class="max-w-md px-6 text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-red-100 text-red-600">

                            <i class="ri-file-pdf-2-line text-3xl"></i>

                        </div>

                        <h3 class="mt-5 text-lg font-semibold text-gray-900">

                            PDF Preview

                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-500">

                            PDF viewer akan ditampilkan di area ini
                            setelah fitur preview publikasi terhubung
                            dengan backend.

                        </p>

                        <a href="#"
                            class="mt-5 inline-flex items-center gap-2 rounded-xl bg-gray-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-gray-800">

                            <i class="ri-external-link-line"></i>

                            Buka PDF

                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Additional Information --}}
        {{-- ================================================= --}}

        <div class="mt-8 grid gap-8 md:grid-cols-2">


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

                            10 Agustus 2026, 14:32

                        </span>

                    </div>

                    <div class="flex items-center justify-between gap-4">

                        <span class="text-gray-500">

                            Terakhir diperbarui

                        </span>

                        <span class="font-medium text-gray-900">

                            15 Agustus 2026, 09:15

                        </span>

                    </div>

                </div>

            </div>


            {{-- Publication Status --}}
            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-50 text-green-600">

                        <i class="ri-checkbox-circle-line"></i>

                    </div>

                    <div>

                        <h3 class="font-semibold text-gray-900">

                            Status Publikasi

                        </h3>

                        <p class="text-sm text-gray-500">

                            Status saat ini.

                        </p>

                    </div>

                </div>


                <div class="mt-6 rounded-xl bg-green-50 p-4">

                    <div class="flex items-center gap-3">

                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-green-100">

                            <i class="ri-check-line text-green-600"></i>

                        </span>

                        <div>

                            <p class="font-medium text-green-900">

                                Publikasi telah diterbitkan

                            </p>

                            <p class="mt-1 text-sm text-green-700">

                                Konten dapat diakses oleh pengunjung website.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-cms-layout>
