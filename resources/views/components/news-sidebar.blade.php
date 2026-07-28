<aside class="space-y-8 lg:sticky lg:top-28 self-start">

    {{-- ===================================== --}}
    {{-- Latest News --}}
    {{-- ===================================== --}}
    <div class="relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-6 shadow-sm">

        <i class="ri-fire-line absolute -right-5 -top-5 text-[170px] text-red-500/5">
        </i>

        <div class="relative">

            <h3 class="text-2xl font-bold">

                Berita Terbaru

            </h3>

            <div class="mt-6 divide-y divide-gray-200">

                @foreach (range(1, 5) as $item)
                    <article class="group flex gap-4 py-5">

                        <span class="text-3xl font-black italic text-gray-200 transition group-hover:text-red-500">

                            {{ sprintf('%02d', $item) }}

                        </span>

                        <div>

                            <h4 class="font-semibold leading-7 transition group-hover:text-red-600">

                                Judul Berita Terbaru {{ $item }}

                            </h4>

                            <p class="mt-2 text-sm text-gray-400">

                                18 Juli 2026

                            </p>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>

    </div>

    {{-- ===================================== --}}
    {{-- Podcast --}}
    {{-- ===================================== --}}

    <div
        class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-red-700 via-red-600 to-red-500 p-6 text-white">

        {{-- Decoration --}}
        <i class="ri-mic-2-line absolute -right-6 -top-6 text-[170px] text-white/10 pointer-events-none">
        </i>

        <div class="relative z-10">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold">

                <i class="ri-headphone-line"></i>

                PODCAST

            </span>

            <h3 class="mt-5 text-2xl font-bold">

                Suara Retorika

            </h3>

            <p class="mt-3 leading-7 text-red-100">

                Mengenal Pers Mahasiswa di Era Digital

            </p>

            <div class="mt-6 rounded-xl bg-white p-3 shadow-lg">

                <audio controls preload="metadata" class="w-full">

                    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">

                </audio>

            </div>

        </div>

    </div>

</aside>
