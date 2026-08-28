<section class="pb-16 lg:pb-20">
    <div
        class="relative overflow-hidden rounded-3xl border border-red-300 bg-gradient-to-r from-red-50 to-white p-6 lg:p-10">

        {{-- Decoration --}}
        <i
            class="ri-artboard-fill
                    absolute -right-6 -top-6
                    text-[180px]
                    text-red-500/5">
        </i>

        <div class="relative grid items-center gap-8 lg:grid-cols-[320px_1fr]">

            {{-- Poster --}}
            <div class="flex justify-center">

                <a href="{{ route('mading.index') }}"
                    class="group block origin-center rotate-[-2deg] transition hover:rotate-0 hover:scale-105">

                    <img src="{{ $mading->media_asset->getFirstMedia('library')->original_url }}"
                        class="rounded-2xl shadow-xl">

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

                {{-- <p class="mt-6 max-w-2xl leading-8 text-gray-600">

                            Bergabunglah menjadi bagian dari keluarga besar
                            LPM Retorika.
                            Kami membuka kesempatan bagi mahasiswa yang tertarik
                            pada jurnalistik, fotografi, videografi,
                            desain grafis, dan media digital.

                        </p> --}}

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
