<x-app-layout>

    <section class="py-16 lg:py-20">

        <div class="max-w-screen-xl mx-auto px-4 space-y-24">

            {{-- ================================================= --}}
            {{-- HERO --}}
            {{-- ================================================= --}}

            <section
                class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 px-8 py-20 text-center">

                {{-- Decoration --}}
                <i
                    class="ri-newspaper-line absolute left-0 top-1/2 -translate-y-1/2 text-[280px] text-white/5">
                </i>

                <i
                    class="ri-quill-pen-line absolute right-0 top-0 text-[220px] text-white/5">
                </i>

                <span
                    class="inline-flex rounded-full bg-white/20 px-5 py-2 text-sm font-semibold text-white">

                    TENTANG KAMI

                </span>

                <h1 class="mt-8 text-4xl lg:text-6xl font-bold text-white">

                    Lembaga Pers Mahasiswa
                    <br>

                    Retorika

                </h1>

                <p
                    class="mx-auto mt-8 max-w-3xl text-lg leading-9 text-red-100">

                    Menyuarakan fakta,
                    membangun literasi,
                    serta menjadi ruang aspirasi bagi civitas akademika.

                </p>

            </section>

            {{-- ================================================= --}}
            {{-- ABOUT --}}
            {{-- ================================================= --}}

            <section class="grid lg:grid-cols-2 gap-16 items-center">

                <img
                    src="https://picsum.photos/900/700"
                    class="rounded-3xl shadow-xl">

                <div>

                    <span
                        class="inline-flex rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-600">

                        Tentang Retorika

                    </span>

                    <h2 class="mt-6 text-4xl font-bold">

                        Media Mahasiswa
                        yang Tumbuh Bersama Kampus

                    </h2>

                    <p class="mt-8 leading-8 text-gray-600">

                        LPM Retorika merupakan lembaga pers mahasiswa yang
                        berkomitmen menyampaikan informasi, mengawal isu kampus,
                        serta menjadi ruang diskusi yang sehat.

                    </p>

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- VISION MISSION --}}
            {{-- ================================================= --}}

            <section class="grid lg:grid-cols-2 gap-8">

                <div class="rounded-3xl bg-white p-8 shadow">

                    <h3 class="text-3xl font-bold">

                        Visi

                    </h3>

                    <p class="mt-6 leading-8 text-gray-600">

                        Menjadi media mahasiswa terpercaya yang
                        independen dan berintegritas.

                    </p>

                </div>

                <div class="rounded-3xl bg-white p-8 shadow">

                    <h3 class="text-3xl font-bold">

                        Misi

                    </h3>

                    <ul class="mt-6 space-y-4 text-gray-600">

                        <li>✓ Menyampaikan informasi berdasarkan fakta.</li>

                        <li>✓ Mengembangkan budaya literasi.</li>

                        <li>✓ Menjadi ruang aspirasi mahasiswa.</li>

                        <li>✓ Menjunjung etika jurnalistik.</li>

                    </ul>

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- VALUES --}}
            {{-- ================================================= --}}

            <section>

                <div class="text-center">

                    <h2 class="text-4xl font-bold">

                        Nilai-Nilai Retorika

                    </h2>

                </div>

                <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                    @foreach([
                        ['ri-scales-3-line','Integritas'],
                        ['ri-book-open-line','Literasi'],
                        ['ri-chat-3-line','Kolaboratif'],
                        ['ri-shield-check-line','Profesional']
                    ] as $value)

                    <div
                        class="rounded-3xl bg-white p-8 text-center shadow hover:-translate-y-2 transition">

                        <i class="{{ $value[0] }} text-5xl text-red-500"></i>

                        <h3 class="mt-6 text-xl font-bold">

                            {{ $value[1] }}

                        </h3>

                    </div>

                    @endforeach

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- TIMELINE --}}
            {{-- ================================================= --}}

            <section>

                <h2 class="text-center text-4xl font-bold">

                    Perjalanan Kami

                </h2>

                <div class="mt-16 space-y-12">

                    @foreach([
                        ['2005','Retorika berdiri'],
                        ['2012','Majalah pertama'],
                        ['2018','Website pertama'],
                        ['2024','Podcast Retorika']
                    ] as $item)

                    <div class="flex gap-8">

                        <div class="text-red-600 font-bold text-3xl w-28">

                            {{ $item[0] }}

                        </div>

                        <div class="flex-1">

                            <div
                                class="rounded-2xl bg-white p-6 shadow">

                                {{ $item[1] }}

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- PUBLICATIONS --}}
            {{-- ================================================= --}}

            <section>

                <div class="text-center">

                    <h2 class="text-4xl font-bold">

                        Apa yang Kami Produksi

                    </h2>

                </div>

                <div
                    class="mt-12 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">

                    @foreach([
                        ['ri-newspaper-line','Berita'],
                        ['ri-booklet-line','Majalah'],
                        ['ri-file-paper-2-line','Tabloid'],
                        ['ri-file-list-3-line','Buletin'],
                        ['ri-headphone-line','Podcast'],
                        ['ri-layout-grid-line','Mading']
                    ] as $item)

                    <div
                        class="rounded-3xl bg-white p-8 text-center shadow hover:-translate-y-2 transition">

                        <i class="{{ $item[0] }} text-5xl text-red-500"></i>

                        <p class="mt-5 font-semibold">

                            {{ $item[1] }}

                        </p>

                    </div>

                    @endforeach

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- TEAM --}}
            {{-- ================================================= --}}

            <section>

                <div class="text-center">

                    <h2 class="text-4xl font-bold">

                        Tim Redaksi

                    </h2>

                </div>

                <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    @foreach(range(1,4) as $item)

                    <div
                        class="rounded-3xl bg-white p-6 text-center shadow">

                        <img
                            src="https://picsum.photos/300?random={{ $item }}"
                            class="mx-auto h-40 w-40 rounded-full object-cover">

                        <h3 class="mt-6 text-xl font-bold">

                            Nama Anggota

                        </h3>

                        <p class="mt-2 text-red-500">

                            Editor

                        </p>

                    </div>

                    @endforeach

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- STATS --}}
            {{-- ================================================= --}}

            <section
                class="rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 p-12">

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 text-center">

                    @foreach([
                        ['20+','Tahun'],
                        ['500+','Artikel'],
                        ['50+','Publikasi'],
                        ['100+','Anggota']
                    ] as $stat)

                    <div>

                        <h2 class="text-5xl font-bold text-white">

                            {{ $stat[0] }}

                        </h2>

                        <p class="mt-3 text-red-100">

                            {{ $stat[1] }}

                        </p>

                    </div>

                    @endforeach

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- GALLERY --}}
            {{-- ================================================= --}}

            <section>

                <div class="text-center">

                    <h2 class="text-4xl font-bold">

                        Galeri

                    </h2>

                </div>

                <div class="mt-12 grid grid-cols-2 lg:grid-cols-4 gap-6">

                    @foreach(range(1,8) as $item)

                    <img
                        src="https://picsum.photos/500/500?random={{ $item }}"
                        class="rounded-3xl object-cover hover:scale-105 transition">

                    @endforeach

                </div>

            </section>

            {{-- ================================================= --}}
            {{-- CTA --}}
            {{-- ================================================= --}}

            <section
                class="rounded-3xl bg-red-600 px-10 py-20 text-center">

                <h2 class="text-5xl font-bold text-white">

                    Bergabung Bersama Kami

                </h2>

                <p class="mx-auto mt-6 max-w-2xl text-red-100">

                    Kami selalu membuka kesempatan bagi mahasiswa
                    yang memiliki semangat jurnalistik.

                </p>

                <a href="#"
                    class="mt-10 inline-flex rounded-xl bg-white px-8 py-4 font-semibold text-red-600">

                    Hubungi Kami

                </a>

            </section>

        </div>

    </section>

</x-app-layout>
