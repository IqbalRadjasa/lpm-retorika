<x-app-layout>

    <section class="pt-30 pb-12">

        <div class="max-w-7xl mx-auto px-4">

            {{-- ================================================= --}}
            {{-- Breadcrumb --}}
            {{-- ================================================= --}}

            <nav class="flex items-center gap-2 text-sm text-gray-500">

                <a href="{{ route('beranda') }}" class="hover:text-red-600">
                    Beranda
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <a href="{{ route('majalah.index') }}">
                    Majalah
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

                    Majalah

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

            <a href="{{ route('majalah.index') }}"
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

            <div class="mt-10 flex flex-wrap justify-center gap-4" x-data="{ shareOpen: false }">

                <a href="#"
                    class="inline-flex items-center gap-3 rounded-xl bg-red-600 px-6 py-3 font-semibold text-white hover:bg-red-700">

                    <i class="ri-download-line"></i>

                    Download PDF

                </a>

                {{-- Mobile --}}
                <button @click="shareOpen = true"
                    class="lg:hidden inline-flex items-center justify-center gap-3 rounded-xl border border-gray-300 px-6 py-3 hover:bg-gray-100">

                    <i class="ri-share-line"></i>

                    Bagikan

                </button>


                {{-- Desktop --}}
                <div class="hidden lg:block">
                    <x-dropdown align="right" width="64">

                        <x-slot name="trigger">

                            <button
                                class="inline-flex w-full sm:w-autoitems-center justify-center gap-3 rounded-xl border border-gray-300 px-6 py-3 hover:bg-gray-100">

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


                {{-- Mobile Share Sheet --}}
                <div x-show="shareOpen" x-cloak class="fixed inset-0 z-[999]" style="display:none">

                    {{-- Overlay --}}
                    <div @click="shareOpen = false" class="absolute inset-0 bg-black/50">
                    </div>

                    {{-- Bottom Sheet --}}
                    <div x-show="shareOpen" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-y-0"
                        x-transition:leave-end="translate-y-full"
                        class="absolute bottom-0 left-0 right-0 rounded-t-3xl bg-white p-6">

                        {{-- Handle --}}
                        <div class="mx-auto mb-6 h-1.5 w-14 rounded-full bg-gray-300"></div>

                        <h3 class="text-center text-lg font-bold">

                            Bagikan

                        </h3>

                        <div class="mt-6 space-y-2">

                            <a href="#"
                                class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                <i class="ri-link text-xl text-gray-500"></i>

                                <span>Salin Link</span>

                            </a>

                            <a href="#"
                                class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                <i class="ri-whatsapp-line text-xl text-green-600"></i>

                                <span>WhatsApp</span>

                            </a>

                            <a href="#"
                                class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                <i class="ri-twitter-x-line text-xl"></i>

                                <span>Twitter / X</span>

                            </a>

                            <a href="#"
                                class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">

                                <i class="ri-facebook-circle-line text-xl text-blue-600"></i>

                                <span>Facebook</span>

                            </a>

                        </div>

                        <button @click="shareOpen=false"
                            class="mt-6 w-full rounded-xl bg-gray-100 py-4 font-semibold transition hover:bg-gray-200">

                            Batal

                        </button>

                    </div>

                </div>
            </div>

        </div>

    </section>

    @vite('resources/js/flipbook.js')

</x-app-layout>
