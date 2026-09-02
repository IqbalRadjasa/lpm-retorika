@if ($mading)
    <section class="pb-16 lg:pb-20">
        <div
            class="relative overflow-hidden rounded-3xl border border-red-300 bg-gradient-to-r from-red-50 to-white p-6 lg:p-10">

            {{-- Decoration --}}
            <i class="ri-artboard-fill absolute -right-6 -top-6 text-[180px] text-red-500/5"></i>

            <div class="relative grid items-center gap-8 lg:grid-cols-[320px_1fr]">

                {{-- Poster --}}
                <div class="flex justify-center">
                    <a href="{{ route('mading.index') }}"
                        class="group block origin-center rotate-[-2deg] transition hover:rotate-0 hover:scale-105">
                        <img src="{{ $mading->media_asset ? $mading->media_asset->getFirstMediaUrl('library') : 'https://placehold.co/600x400/e2e8f0/475569?text=Tidak+Ada+Gambar' }}"
                            alt="{{ $mading->media_asset?->alt_text ?? $mading->judul }}" class="rounded-2xl shadow-xl">
                    </a>
                </div>

                {{-- Information --}}
                <div>
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-600">
                        Mading Terbaru
                    </span>

                    <h2 class="mt-5 text-3xl lg:text-5xl font-bold">
                        {{ $mading->judul }}
                    </h2>

                    <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-gray-500">
                        <span class="flex items-center gap-2">
                            <i class="ri-artboard-line"></i>
                            {{ $mading->created_at->translatedFormat('d F Y') }}
                        </span>

                        <span class="hidden sm:inline">•</span>

                        <span class="flex items-center gap-2">
                            <i class="ri-user-3-line"></i>
                            Admin Retorika
                        </span>
                    </div>

                    <a href="{{ route('mading.index') }}"
                        class="mt-8 inline-flex items-center gap-3 rounded-xl bg-red-600 px-6 py-4 font-semibold text-white transition hover:bg-red-700">
                        Lihat Mading
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>
@else
    {{-- Empty State Mading (Menggunakan UI & Tema Warna yang Sama) --}}
    <section class="pb-16 lg:pb-20">
        <div
            class="relative overflow-hidden rounded-3xl border border-red-300 bg-gradient-to-r from-red-50 to-white p-6 lg:p-10">

            {{-- Decoration --}}
            <i class="ri-artboard-fill absolute -right-6 -top-6 text-[180px] text-red-500/5"></i>

            <div class="relative grid items-center gap-8 lg:grid-cols-[320px_1fr]">

                {{-- Poster Placeholder --}}
                <div class="flex justify-center">
                    <div class="block origin-center rotate-[-2deg]">
                        <img src="https://placehold.co/600x400/fee2e2/dc2626?text=Belum+Ada+Mading"
                            alt="Belum ada mading" class="rounded-2xl shadow-xl">
                    </div>
                </div>

                {{-- Information --}}
                <div>
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-600">
                        Mading Terbaru
                    </span>

                    <h2 class="mt-5 text-3xl lg:text-4xl font-bold text-gray-800">
                        Belum Ada Mading Diterbitkan
                    </h2>

                    <p class="mt-4 max-w-xl text-gray-600 leading-relaxed">
                        Informasi dan pengumuman mading terbaru dari LPM Retorika belum tersedia untuk saat ini.
                    </p>

                    <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-gray-400">
                        <span class="flex items-center gap-2">
                            <i class="ri-artboard-line"></i>
                            -
                        </span>

                        <span class="hidden sm:inline">•</span>

                        <span class="flex items-center gap-2">
                            <i class="ri-user-3-line"></i>
                            Admin Retorika
                        </span>
                    </div>

                    <a href="{{ route('mading.index') }}"
                        class="mt-8 inline-flex items-center gap-3 rounded-xl bg-gray-400 px-6 py-4 font-semibold text-white cursor-not-allowed">
                        Lihat Mading
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>
@endif
