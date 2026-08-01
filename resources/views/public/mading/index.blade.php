<x-app-layout>

    <section class="py-12 lg:py-16">

        <div class="max-w-7xl mx-auto px-4">

            {{-- ================================================= --}}
            {{-- Header --}}
            {{-- ================================================= --}}

            <div
                class="relative mt-8 overflow-hidden rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 px-8 py-12 text-center">

                {{-- Decoration --}}
                <i class="ri-pushpin-2-line absolute -right-6 -top-8 text-[220px] text-white/10"></i>

                <div class="relative z-10">

                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold text-white">

                        <i class="ri-article-line"></i>

                        Mading Kampus

                    </span>

                    <h1 class="mt-6 text-4xl lg:text-6xl font-black text-white">

                        MADING

                    </h1>

                    <p class="mx-auto mt-5 max-w-3xl text-lg leading-8 text-red-100">

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

            <div class="mt-12 rounded-[32px] border-[12px] border-yellow-900 bg-[#D8B47C] p-5 lg:p-8 shadow-2xl">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 auto-rows-[220px] gap-6">

                    {{-- Large --}}
                    <article
                        class="group relative lg:col-span-2 lg:row-span-2 overflow-hidden rounded-xl bg-white shadow-xl transition hover:-rotate-1 hover:scale-[1.02]">

                        <img src="https://picsum.photos/900/700?random=1" class="h-72 lg:h-full w-full object-cover">

                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black via-black/60 to-transparent p-6">

                            <span class="rounded-full bg-red-600 px-3 py-1 text-xs font-semibold text-white">

                                EVENT

                            </span>

                            <h2 class="mt-4 text-2xl font-bold text-white">

                                Open Recruitment
                                LPM Retorika 2026

                            </h2>

                        </div>

                    </article>

                    {{-- Poster --}}
                    <article
                        class="group rotate-1 rounded-xl bg-white p-3 shadow-xl transition hover:rotate-0 hover:scale-105">

                        <img src="https://picsum.photos/500/650?random=2" class="h-40 w-full rounded-lg object-cover">

                        <h3 class="mt-3 font-bold">

                            Seminar Nasional

                        </h3>

                    </article>

                    {{-- Text --}}
                    <article
                        class="-rotate-2 rounded-xl bg-yellow-100 p-6 shadow-xl transition hover:rotate-0 hover:scale-105">

                        <div class="flex items-center gap-2">

                            <i class="ri-megaphone-line text-red-600"></i>

                            <span class="font-bold">

                                Pengumuman

                            </span>

                        </div>

                        <p class="mt-4 leading-7 text-gray-700">

                            Perpanjangan masa pengumpulan karya
                            Majalah DIKSI hingga
                            30 Agustus 2026.

                        </p>

                    </article>

                    {{-- Image --}}
                    <article class="rounded-xl bg-white p-3 shadow-xl transition hover:scale-105">

                        <img src="https://picsum.photos/500/500?random=3" class="h-full w-full rounded-lg object-cover">

                    </article>

                    {{-- Long --}}
                    <article class="lg:col-span-2 rounded-xl bg-white p-6 shadow-xl transition hover:-rotate-1">

                        <div class="flex justify-between">

                            <div>

                                <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                                    LOMBA

                                </span>

                                <h3 class="mt-4 text-2xl font-bold">

                                    Kompetisi Essay Nasional

                                </h3>

                            </div>

                            <i class="ri-trophy-line text-5xl text-red-100">

                            </i>

                        </div>

                        <p class="mt-4 text-gray-500 leading-7">

                            Terbuka untuk seluruh mahasiswa Indonesia.
                            Total hadiah mencapai Rp10.000.000.

                        </p>

                    </article>

                    {{-- Small --}}
                    <article class="rotate-2 rounded-xl bg-blue-100 p-6 shadow-xl transition hover:rotate-0">

                        <i class="ri-book-open-line text-4xl text-blue-600">

                        </i>

                        <h3 class="mt-4 font-bold">

                            Workshop Jurnalistik

                        </h3>

                    </article>

                    {{-- Small --}}
                    <article class="-rotate-1 rounded-xl bg-green-100 p-6 shadow-xl transition hover:rotate-0">

                        <i class="ri-graduation-cap-line text-4xl text-green-600">

                        </i>

                        <h3 class="mt-4 font-bold">

                            Info Beasiswa

                        </h3>

                    </article>

                </div>

            </div>

        </div>

    </section>

</x-app-layout>
