<x-app-layout>

    <section class="py-16">

        <div class="max-w-7xl mx-auto px-4">

            {{-- ================================================= --}}
            {{-- Header --}}
            {{-- ================================================= --}}

            <div
                class="relative mt-8 overflow-hidden rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 px-8 py-12 text-center">

                {{-- Decoration --}}
                <i
                    class="ri-artboard-line
                        absolute
                        top-3
                        left-1/2
                        -translate-x-1/2
                        text-[200px]
                        lg:text-[220px]
                        text-white/5
                        text-white/10
                        lg:text-white/10
                        pointer-events-none
                        lg:left-auto
                        lg:right-[-1rem]
                        lg:top-[-2rem]
                        lg:translate-x-0"></i>

                <div class="relative z-10">

                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold text-white">
                        Mading Kampus
                    </span>

                    <h1 class="mt-6 text-4xl lg:text-6xl font-black text-white">

                        MADING

                    </h1>

                    <p class="mx-auto mt-5 max-w-3xl text-md lg:text-lg leading-8 text-red-100">

                        Tempat berbagai informasi, poster kegiatan,
                        pengumuman organisasi, lomba,
                        beasiswa, seminar, hingga berbagai informasi menarik
                        yang dipasang layaknya papan mading kampus.

                    </p>

                </div>

            </div>

            {{-- ================================================= --}}
            {{-- Bulletin Board --}}
            {{-- ================================================= --}}

            @if (isset($mading) && isset($mading->media_asset))
                {{-- ========================= --}}
                {{-- Tampilan Ada Data Mading --}}
                {{-- ========================= --}}
                <div
                    class="mt-12 rounded-[36px] border border-red-100 bg-gradient-to-r from-red-50 to-white p-6 shadow-xl lg:p-10">

                    {{-- Board --}}
                    <div class="relative mx-auto max-w-4xl">

                        {{-- Shadow Paper --}}
                        <div class="absolute inset-0 rotate-2 rounded-2xl bg-[#f4e8c8]/60 shadow-lg">
                        </div>

                        {{-- Poster --}}
                        <div
                            class="relative rotate-1 overflow-hidden rounded-2xl bg-white shadow-2xl transition duration-500 hover:rotate-0 hover:scale-[1.01]">

                            {{-- Pins --}}
                            <span
                                class="absolute left-8 top-6 z-20 h-5 w-5 rounded-full bg-red-600 shadow ring-4 ring-red-300">
                            </span>

                            <span
                                class="absolute right-8 top-6 z-20 h-5 w-5 rounded-full bg-red-600 shadow ring-4 ring-red-300">
                            </span>

                            {{-- Badge --}}
                            <div class="absolute left-6 top-14 z-20">
                                <span
                                    class="rounded-full bg-red-600 px-4 py-2 text-xs font-bold uppercase tracking-wide text-white">
                                    Mading Bulan Ini
                                </span>
                            </div>

                            {{-- Poster Image --}}
                            <img src="{{ $mading->media_asset->getFirstMedia('library')->original_url }}"
                                class="w-full object-cover">

                        </div>

                    </div>

                    {{-- Information --}}
                    <div class="mx-auto mt-8 max-w-3xl rounded-3xl bg-white p-5 shadow-xl sm:p-6 lg:p-8">

                        <div class="flex flex-col gap-8">

                            {{-- Content --}}
                            <div>
                                <span
                                    class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                                    Mading
                                </span>

                                <h2 class="mt-4 text-2xl font-bold leading-tight sm:text-3xl">
                                    {{ $mading->judul }}
                                </h2>

                                {{-- Meta --}}
                                <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-2">
                                        <i class="ri-calendar-line"></i>
                                        {{ $mading->created_at->translatedFormat('d F Y') }}
                                    </span>

                                    <span class="flex items-center gap-2">
                                        <i class="ri-user-3-line"></i>
                                        Admin Retorika
                                    </span>
                                </div>
                            </div>

                            {{-- CTA --}}
                            <div class="flex flex-col gap-3 sm:flex-row sm:justify-end" x-data="{ shareOpen: false }">

                                <a href="{{ route('media.download', $mading->media_id) }}"
                                    class="inline-flex w-full items-center justify-center gap-3 rounded-xl bg-red-600 px-6 py-3 font-semibold text-white transition hover:bg-red-700 sm:w-auto">
                                    <i class="ri-download-line"></i>
                                    Download
                                </a>

                                @php
                                    $shareUrl = urlencode(url()->current());
                                    $shareText = urlencode($mading->judul);
                                @endphp

                                {{-- Mobile Share Button --}}
                                <button @click="shareOpen = true"
                                    class="inline-flex items-center justify-center gap-3 rounded-xl border border-gray-300 px-6 py-3 hover:bg-gray-100 lg:hidden">
                                    <i class="ri-share-line"></i>
                                    Bagikan
                                </button>

                                {{-- Desktop Share Dropdown --}}
                                <div class="hidden lg:block">
                                    <x-dropdown align="right" width="64">
                                        <x-slot name="trigger">
                                            <button
                                                class="inline-flex w-full items-center justify-center gap-3 rounded-xl border border-gray-300 px-6 py-3 hover:bg-gray-100 sm:w-auto">
                                                <i class="ri-share-line"></i>
                                                Bagikan
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link href="#" x-data="{ copied: false }"
                                                @click.prevent="
                                                    navigator.clipboard.writeText(window.location.href);
                                                    copied = true;
                                                    setTimeout(() => copied = false, 2000);
                                                "
                                                class="flex items-center gap-3 py-3">
                                                <i :class="copied ? 'ri-check-line text-green-600' : 'ri-link'"></i>
                                                <span x-text="copied ? 'Link Tersalin!' : 'Salin Link'"></span>
                                            </x-dropdown-link>

                                            <x-dropdown-link
                                                href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
                                                class="flex items-center gap-3 py-3">
                                                <i class="ri-whatsapp-line text-green-600"></i>
                                                WhatsApp
                                            </x-dropdown-link>

                                            <x-dropdown-link
                                                href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                                                class="flex items-center gap-3 py-3">
                                                <i class="ri-twitter-x-line"></i>
                                                Twitter / X
                                            </x-dropdown-link>

                                            <x-dropdown-link
                                                href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                                                class="flex items-center gap-3 py-3">
                                                <i class="ri-facebook-circle-line text-blue-600"></i>
                                                Facebook
                                            </x-dropdown-link>
                                        </x-slot>
                                    </x-dropdown>
                                </div>

                                {{-- Mobile Share Sheet --}}
                                <div x-show="shareOpen" x-cloak class="fixed inset-0 z-[999]" style="display:none">
                                    <div @click="shareOpen = false" class="absolute inset-0 bg-black/50"></div>
                                    <div x-show="shareOpen" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="translate-y-full"
                                        x-transition:enter-end="translate-y-0"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="translate-y-0"
                                        x-transition:leave-end="translate-y-full"
                                        class="absolute bottom-0 left-0 right-0 rounded-t-3xl bg-white p-6">
                                        <div class="mx-auto mb-6 h-1.5 w-14 rounded-full bg-gray-300"></div>
                                        <h3 class="text-center text-lg font-bold">Bagikan</h3>

                                        <div class="mt-6 space-y-2">
                                            <a href="#" x-data="{ copied: false }"
                                                @click.prevent="
                                        navigator.clipboard.writeText(window.location.href);
                                        copied = true;
                                        setTimeout(() => copied = false, 2000);
                                    "
                                                class="flex items-center gap-4 p-4">
                                                <i :class="copied ? 'ri-check-line text-green-600' : 'ri-link'"></i>
                                                <span x-text="copied ? 'Link Tersalin!' : 'Salin Link'"></span>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
                                                class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">
                                                <i class="ri-whatsapp-line text-xl text-green-600"></i>
                                                <span>WhatsApp</span>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                                                class="flex items-center gap-4 rounded-xl p-4 transition hover:bg-gray-100">
                                                <i class="ri-twitter-x-line text-xl"></i>
                                                <span>Twitter / X</span>
                                            </a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
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

                    </div>

                </div>
            @else
                {{-- ========================= --}}
                {{-- Empty State (Belum Ada Data) --}}
                {{-- ========================= --}}
                <div
                    class="mt-12 rounded-[36px] border border-gray-100 bg-gradient-to-r from-gray-50 to-white p-8 text-center shadow-xl lg:p-14">
                    <div class="relative mx-auto max-w-xl">
                        {{-- Decorative Paper Background --}}
                        <div
                            class="mx-auto flex h-32 w-32 items-center justify-center rounded-3xl bg-red-50 text-red-500 shadow-inner">
                            <i class="ri-artboard-line text-6xl"></i>
                        </div>

                        <h3 class="mt-6 text-2xl font-bold text-gray-800">Belum Ada Mading Ditampilkan</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Saat ini belum ada mading yang diterbitkan untuk bulan ini. Silakan periksa kembali di lain
                            waktu.
                        </p>
                    </div>
                </div>
            @endif

        </div>

    </section>

</x-app-layout>
