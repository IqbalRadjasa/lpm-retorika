<x-app-layout>
    <section class="py-20">
        <div class="max-w-screen-xl mx-auto px-4 space-y-28">

            {{-- ================================================= --}}
            {{-- HERO --}}
            {{-- ================================================= --}}
            <section
                class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-red-700 via-red-600 to-red-500 px-8 py-20 text-center">

                {{-- Decoration --}}
                <i
                    class="ri-information-line absolute top-3 left-1/2 -translate-x-1/2 text-[180px] text-white/5 pointer-events-none lg:left-auto lg:right-[-1rem] lg:top-[-2rem] lg:translate-x-0 lg:text-[200px] lg:text-white/10"></i>

                <span class="inline-flex rounded-full bg-white/20 px-5 py-2 text-sm font-semibold text-white">
                    TENTANG KAMI
                </span>

                <h1 class="mt-8 text-4xl font-bold text-white lg:text-6xl">
                    Lembaga Pers Mahasiswa <br> Retorika
                </h1>

                <p class="mx-auto mt-8 max-w-3xl text-md text-red-100 lg:text-lg leading-8">
                    Menyuarakan fakta, membangun literasi, serta menjadi ruang aspirasi bagi civitas akademika.
                </p>
            </section>

            {{-- ================================================= --}}
            {{-- LATAR BELAKANG --}}
            {{-- ================================================= --}}
            <section class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                <div class="space-y-6">
                    <div
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600">
                        <i class="ri-history-line"></i> SEJARAH & PERAN
                    </div>

                    <h2 class="text-3xl font-bold text-gray-900 lg:text-4xl">
                        Menjaga Independensi dan Kritis Sejak Awal Berdiri
                    </h2>

                    <div class="space-y-4 text-base leading-relaxed text-gray-600">
                        <p>
                            LPM Retorika hadir sebagai wadah independen mahasiswa dalam menyalurkan gagasan, pemikiran
                            kritis, serta karya jurnalistik yang berlandaskan pada kode etik jurnalistik.
                        </p>
                        <p>
                            Berdiri dengan semangat transparansi, kami berkomitmen menjadi pilar informasi tepercaya di
                            lingkungan kampus, menjembatani aspirasi mahasiswa, serta secara aktif mengawal isu-isu
                            publik dan akademis.
                        </p>
                    </div>

                    {{-- Poin Keunggulan / Nilai --}}
                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                <i class="ri-shield-check-line text-xl"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-800">Independen & Otonom</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                <i class="ri-newspaper-line text-xl"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-800">Jurnalistik Berkualitas</span>
                        </div>
                    </div>
                </div>

                {{-- Gambar Latar Belakang --}}
                <div class="relative">
                    <div class="aspect-[4/3] overflow-hidden rounded-3xl bg-gray-100 shadow-xl">
                        <img src="https://picsum.photos/800/600?random=background" alt="Latar Belakang LPM Retorika"
                            class="h-full w-full object-cover">
                    </div>
                    {{-- Lencana Jumlah Karya / Pengalaman --}}
                    <div
                        class="absolute -bottom-6 -left-6 hidden rounded-2xl bg-white p-6 shadow-xl lg:block border border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-600 text-white">
                                <i class="ri-article-line text-2xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">100+</p>
                                <p class="text-xs font-medium text-gray-500">Artikel & Buletin Terbit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ================================================= --}}
            {{-- STRUKTUR ORGANISASI (MIND MAPPING STYLE) --}}
            {{-- ================================================= --}}
            <section class="space-y-12 overflow-x-auto pb-6">
                <div class="text-center max-w-2xl mx-auto">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600">
                        <i class="ri-team-line"></i> STRUKTUR ORGANISASI
                    </span>
                    <h2 class="mt-4 text-3xl font-bold text-gray-900 lg:text-4xl">
                        Bagan Kepengurusan LPM Retorika
                    </h2>
                    <p class="mt-3 text-gray-600 text-sm lg:text-base">
                        Sinergi antar pengurus dalam menjaga roda organisasi dan keberlanjutan pers mahasiswa.
                    </p>
                </div>

                {{-- Mind Map Container --}}
                <div class="min-w-[768px] max-w-5xl mx-auto pt-4 px-4">

                    {{-- LEVEL 1: TOP NODE (Pemimpin Redaksi) --}}
                    <div class="flex flex-col items-center">
                        <div
                            class="group relative flex items-center gap-4 rounded-2xl bg-gradient-to-r from-red-600 to-red-700 p-4 shadow-lg ring-4 ring-red-100 transition hover:scale-105">
                            <img src="https://picsum.photos/300/400?random=11" alt="Ahmad Fauzi"
                                class="h-16 w-16 rounded-full object-cover border-2 border-white/80 shadow-md">
                            <div class="pr-4 text-left">
                                <span
                                    class="inline-block rounded-full bg-white/20 px-2.5 py-0.5 text-[10px] font-bold tracking-wider text-white uppercase">
                                    Ketua Umum
                                </span>
                                <h3 class="text-lg font-bold text-white mt-0.5">Ahmad Fauzi</h3>
                                <p class="text-xs text-red-100">Pemimpin Redaksi</p>
                            </div>
                        </div>

                        {{-- Garis Vertikal Utama dari Pimpinan --}}
                        <div class="h-10 w-0.5 bg-red-300"></div>
                    </div>

                    {{-- LEVEL 2: MIDDLE NODES (Sekretaris & Bendahara) --}}
                    <div class="relative flex justify-center items-center gap-16 lg:gap-24">
                        {{-- Garis Horizontal Penghubung Sekretaris & Bendahara --}}
                        <div class="absolute top-0 left-1/4 right-1/4 h-0.5 bg-red-300"></div>

                        {{-- Sekretaris Umum --}}
                        <div class="flex flex-col items-center">
                            <div class="h-6 w-0.5 bg-red-300"></div>
                            <div
                                class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-md ring-1 ring-gray-200 transition hover:border-red-500">
                                <img src="https://picsum.photos/300/400?random=12" alt="Siti Rahma"
                                    class="h-12 w-12 rounded-full object-cover ring-2 ring-red-100">
                                <div class="text-left">
                                    <h4 class="text-sm font-bold text-gray-900">Siti Rahma</h4>
                                    <p class="text-xs font-medium text-red-600">Sekretaris Umum</p>
                                </div>
                            </div>
                        </div>

                        {{-- Bendahara Umum --}}
                        <div class="flex flex-col items-center">
                            <div class="h-6 w-0.5 bg-red-300"></div>
                            <div
                                class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-md ring-1 ring-gray-200 transition hover:border-red-500">
                                <img src="https://picsum.photos/300/400?random=14" alt="Dewi Lestari"
                                    class="h-12 w-12 rounded-full object-cover ring-2 ring-red-100">
                                <div class="text-left">
                                    <h4 class="text-sm font-bold text-gray-900">Dewi Lestari</h4>
                                    <p class="text-xs font-medium text-red-600">Bendahara Umum</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Garis Penghubung ke Level 3 --}}
                    <div class="flex flex-col items-center">
                        <div class="h-10 w-0.5 bg-red-300"></div>
                    </div>

                    {{-- LEVEL 3: DIVISI & REDAKSI (Cabang Bawah) --}}
                    <div class="relative pt-6 border-t-2 border-red-200">
                        {{-- Titik Tengah Garis Atas --}}
                        <div class="absolute -top-6 left-1/2 -translate-x-1/2 h-6 w-0.5 bg-red-300"></div>

                        <div class="grid grid-cols-3 gap-6">
                            {{-- Divisi Redaksi --}}
                            <div class="flex flex-col items-center">
                                <div
                                    class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                    <i class="ri-edit-2-line"></i> Redaksi
                                </div>
                                <div class="w-full space-y-3">
                                    <div
                                        class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-sm ring-1 ring-gray-100 transition hover:shadow-md">
                                        <img src="https://picsum.photos/300/400?random=13" alt="Budi Santoso"
                                            class="h-10 w-10 rounded-full object-cover">
                                        <div class="text-left">
                                            <h5 class="text-xs font-bold text-gray-900">Budi Santoso</h5>
                                            <p class="text-[11px] text-gray-500">Redaktur Pelaksana</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Divisi Perusahaan / Medinfo --}}
                            <div class="flex flex-col items-center">
                                <div
                                    class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                    <i class="ri-global-line"></i> Medinfo & Kreatif
                                </div>
                                <div class="w-full space-y-3">
                                    <div
                                        class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-sm ring-1 ring-gray-100 transition hover:shadow-md">
                                        <img src="https://picsum.photos/300/400?random=15" alt="Rizky Pratama"
                                            class="h-10 w-10 rounded-full object-cover">
                                        <div class="text-left">
                                            <h5 class="text-xs font-bold text-gray-900">Rizky Pratama</h5>
                                            <p class="text-[11px] text-gray-500">Kadiv Medinfo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Divisi Litbang --}}
                            <div class="flex flex-col items-center">
                                <div
                                    class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                    <i class="ri-search-eye-line"></i> Penelitian & Pengembangan
                                </div>
                                <div class="w-full space-y-3">
                                    <div
                                        class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-sm ring-1 ring-gray-100 transition hover:shadow-md">
                                        <img src="https://picsum.photos/300/400?random=16" alt="Anisa Putri"
                                            class="h-10 w-10 rounded-full object-cover">
                                        <div class="text-left">
                                            <h5 class="text-xs font-bold text-gray-900">Anisa Putri</h5>
                                            <p class="text-[11px] text-gray-500">Kadiv Litbang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            {{-- ================================================= --}}
            {{-- GALLERY SECTION --}}
            {{-- ================================================= --}}
            <section class="space-y-10" x-data="{
                loading: false,
                fetchGallery(url) {
                    if (!url || this.loading) return;
                    this.loading = true;
            
                    // Scroll halus kembali ke judul galeri
                    $refs.galleryTitle.scrollIntoView({ behavior: 'smooth', block: 'start' });
            
                    fetch(url, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => res.text())
                        .then(html => {
                            $refs.galleryContainer.innerHTML = html;
                            this.loading = false;
                        })
                        .catch(err => {
                            console.error('Gagal memuat galeri:', err);
                            this.loading = false;
                        });
                }
            }">

                {{-- Judul Section --}}
                <div class="text-center max-w-2xl mx-auto" x-ref="galleryTitle">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600">
                        <i class="ri-gallery-line"></i> DOKUMENTASI
                    </span>
                    <h2 class="mt-4 text-3xl font-bold text-gray-900 lg:text-4xl">
                        Galeri Kegiatan
                    </h2>
                    <p class="mt-3 text-gray-600 text-sm lg:text-base">
                        Merekam jejak liputan, diskusi, dan momen kebersamaan LPM Retorika.
                    </p>
                </div>

                {{-- Container Konten Galeri --}}
                <div class="relative min-h-[300px]">

                    {{-- Loading Skeleton State --}}
                    <div x-show="loading" x-cloak x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute inset-0 z-10 bg-white/80 backdrop-blur-sm rounded-2xl flex flex-col items-center justify-center">

                        {{-- Skeleton Grid --}}
                        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 animate-pulse">
                            @foreach (range(1, 8) as $i)
                                <div class="aspect-square rounded-2xl bg-gray-200"></div>
                            @endforeach
                        </div>

                        {{-- Badge Loading --}}
                        <div
                            class="absolute inline-flex items-center gap-3 rounded-full bg-white px-5 py-2.5 text-xs font-medium text-red-600 shadow-xl">
                            <svg class="h-4 w-4 animate-spin text-red-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Memuat gambar...</span>
                        </div>
                    </div>

                    {{-- Dynamic Content --}}
                    <div x-ref="galleryContainer">
                        @include('public.tentang-kami.partials.gallery-list')
                    </div>

                </div>
            </section>

        </div>
    </section>
</x-app-layout>
