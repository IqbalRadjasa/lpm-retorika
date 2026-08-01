<x-app-layout>

    <section class="py-12">

        <div class="max-w-7xl mx-auto px-4">

            {{-- ================================================= --}}
            {{-- Breadcrumb --}}
            {{-- ================================================= --}}

            <nav class="flex items-center gap-2 text-sm text-gray-500">

                <a href="{{ route('beranda') }}" class="hover:text-red-600">
                    Beranda
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <a href="#">
                    Publikasi
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <span class="text-gray-800">

                    DIKSI VOL.1 2026

                </span>

            </nav>

            {{-- ================================================= --}}
            {{-- Header --}}
            {{-- ================================================= --}}

            <div class="mt-10 text-center mb-10">

                <span class="inline-flex rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-600">

                    Tabloid

                </span>

                <h1 class="mt-6 text-4xl lg:text-5xl font-bold">

                    Maraknya Kasus Korupsi di Indonesia Tahun ke Tahun

                </h1>

                <div class="mt-5 flex justify-center items-center gap-3 text-gray-500">

                    <i class="ri-calendar-line"></i>

                    Sabtu, 27 Juni 2026

                </div>

                <p class="mt-8 max-w-3xl mx-auto leading-8 text-gray-600">

                    Maraknya Kasus Korupsi di Indonesia Tahun ke Tahun

                </p>

            </div>

            <a href="{{ route('tabloid.index') }}"
                class="gap-2 rounded-xl border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20l">
                <i class="ri-arrow-left-line"></i>
                Kembali
            </a>

            {{-- ================================================= --}}
            {{-- Flipbook --}}
            {{-- ================================================= --}}

            <div class="mt-10">

                <div class="rounded-3xl border border-gray-200 bg-gray-100 p-6">

                    <div id="flipbook" class="mx-auto">

                    </div>

                </div>

            </div>

            {{-- ================================================= --}}
            {{-- Action --}}
            {{-- ================================================= --}}

            <div class="mt-10 flex flex-wrap justify-center gap-4">

                <a href="#"
                    class="inline-flex items-center gap-3 rounded-xl bg-red-600 px-6 py-3 font-semibold text-white hover:bg-red-700">

                    <i class="ri-download-line"></i>

                    Download PDF

                </a>

                <x-dropdown align="right" width="64">

                    <x-slot name="trigger">

                        <button
                            class="inline-flex items-center gap-3 rounded-xl border border-gray-300 px-6 py-3 hover:bg-gray-100">

                            <i class="ri-share-line"></i>

                            Bagikan

                        </button>

                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                            <i class="ri-link"></i>
                            Salin Link
                        </x-dropdown-link>

                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                            <i class="ri-whatsapp-line text-green-600"></i>
                            WhatsApp
                        </x-dropdown-link>

                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                            <i class="ri-twitter-x-line"></i>
                            Twitter / X
                        </x-dropdown-link>

                        <x-dropdown-link href="#" class="flex items-center gap-3 py-3">
                            <i class="ri-facebook-circle-line text-blue-600"></i>
                            Facebook
                        </x-dropdown-link>

                    </x-slot>

                </x-dropdown>

            </div>

        </div>

    </section>

    @vite('resources/js/flipbook.js')

</x-app-layout>
