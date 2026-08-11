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

                <x-link-button.secondary-link :href="'#'" icon="ri-download-2-line">
                    Download
                </x-link-button.secondary-link>


                <x-link-button.primary-link :href="'#'" icon="ri-delete-bin-line">
                    Hapus
                </x-link-button.primary-link>

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

                                    kegiatan-mahasiswa.jpg

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    JPG · 1.2 MB

                                </p>

                            </div>


                            {{-- File Type --}}
                            <span
                                class="shrink-0 rounded-full bg-green-50 px-3 py-1
                           text-xs font-medium text-green-700">

                                Image

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

                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=85"
                            alt="Kegiatan mahasiswa"
                            class="block h-auto max-h-[550px] w-full max-w-full
                       rounded-xl object-contain shadow-lg">

                    </div>


                    {{-- ================================================= --}}
                    {{-- Preview Footer --}}
                    {{-- ================================================= --}}

                    <div class="border-t border-gray-100 p-4 sm:p-6">

                        <div
                            class="flex flex-col gap-4
                       sm:flex-row sm:items-center sm:justify-between">


                            {{-- URL --}}
                            <div class="min-w-0 flex-1">

                                <p class="text-sm font-medium text-gray-700">

                                    URL Media

                                </p>

                                <p class="mt-1 break-all text-sm leading-5 text-gray-400">

                                    https://retorika.example.com/storage/media/kegiatan-mahasiswa.jpg

                                </p>

                            </div>


                            {{-- Copy Button --}}
                            <button type="button"
                                class="inline-flex w-full shrink-0 items-center
                           justify-center gap-2 rounded-xl
                           border border-gray-300 bg-white
                           px-4 py-2.5 text-sm font-medium
                           text-gray-700 transition
                           hover:bg-gray-50
                           sm:w-auto">

                                <i class="ri-file-copy-line"></i>

                                Salin URL

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

                            <div
                                class="flex h-10 w-10 items-center justify-center
                                       rounded-xl bg-blue-50 text-blue-600">

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
                                kegiatan-mahasiswa.jpg
                            </p>

                        </div>


                        {{-- File Type --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Tipe File
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                JPEG Image
                            </p>

                        </div>


                        {{-- File Size --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Ukuran
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                1.2 MB
                            </p>

                        </div>


                        {{-- Dimensions --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Dimensi
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                1200 × 800 px
                            </p>

                        </div>


                        {{-- Uploaded --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Diunggah
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                20 Juli 2026, 14:32
                            </p>

                        </div>


                        {{-- Uploaded By --}}
                        <div class="p-5">

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">
                                Diunggah Oleh
                            </p>

                            <p class="mt-2 text-sm text-gray-700">
                                Admin CMS
                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Usage Information --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl border border-blue-100 bg-blue-50 p-6">

                    <div class="flex items-start gap-3">

                        <i class="ri-links-line mt-0.5 text-lg text-blue-500"></i>

                        <div>

                            <h3 class="font-semibold text-blue-900">
                                Penggunaan Media
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-blue-700">

                                Media ini sedang digunakan oleh

                                <span class="font-semibold">
                                    2 artikel
                                </span>

                                di website.

                            </p>

                            <a href="#"
                                class="mt-3 inline-flex items-center gap-1
                                       text-sm font-medium text-blue-700
                                       hover:underline">

                                Lihat penggunaan

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Danger Zone --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl border border-red-100 bg-white p-6">

                    <div class="flex items-start gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center
                                   rounded-xl bg-red-50 text-red-600">

                            <i class="ri-delete-bin-line text-lg"></i>

                        </div>

                        <div>

                            <h3 class="font-semibold text-gray-900">
                                Hapus Media
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-gray-500">

                                Pastikan file tidak lagi digunakan
                                sebelum menghapusnya.

                            </p>

                            <button type="button" class="mt-4 text-sm font-semibold text-red-600 hover:underline">

                                Hapus File Ini

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-cms-layout>
