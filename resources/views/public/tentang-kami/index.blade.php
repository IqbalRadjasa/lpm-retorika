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
                    Menyuarakan fakta, membangun literasi, serta menjadi ruang aspirasi bagi sivitas akademika.
                </p>
            </section>

            {{-- ================================================= --}}
            {{-- LATAR BELAKANG --}}
            {{-- ================================================= --}}
            <section class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                <div class="space-y-6">
                    <div
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600">
                        <i class="ri-history-line"></i> SEJARAH & LANDASAN HUKUM
                    </div>

                    <h2 class="text-3xl font-bold text-gray-900 lg:text-4xl">
                        Landasan Pemikiran LPM Retorika FHUP
                    </h2>

                    <div class="space-y-4 text-base leading-relaxed text-gray-600">
                        <p>
                            Bahwa sesungguhnya proklamasi kemerdekaan 17 Agustus 1945 telah mengantarkan bangsa
                            Indonesia ke depan pintu gerbang kemerdekaan. Salah satunya adalah kemerdekaan berserikat,
                            berkumpul, dan berpendapat yang merupakan hak setiap warga negara sebagaimana tercermin
                            dalam <strong>Pasal 28 Undang-Undang Dasar 1945</strong>. Segala pengingkaran terhadap
                            kemerdekaan tersebut bertentangan dengan UUD 1945 dan Pancasila sebagai hukum tertinggi
                            serta falsafah negara dalam kehidupan berdemokrasi.
                        </p>
                        <p>
                            Berlandaskan asas kekeluargaan sivitas akademika Universitas Pancasila serta bertumpu pada
                            <strong>Tri Dharma Perguruan Tinggi</strong>, pembinaan kemahasiswaan diarahkan menuju
                            manusia yang berjiwa Pancasila, cakap, kreatif, dan berintelektual tinggi.
                        </p>
                        <p>
                            Pers mahasiswa merupakan bagian dari masyarakat yang mempunyai tanggung jawab moral untuk
                            menegakkan nilai-nilai kebenaran dan keadilan secara hakiki dan konsisten. Berdasarkan
                            kesadaran nurani dan fungsinya sebagai alat perjuangan pilar demokrasi, kami dari pers
                            mahasiswa di Fakultas Hukum Universitas Pancasila menyatakan diri dalam satu organisasi
                            bernama <strong>Lembaga Pers Mahasiswa (LPM) Retorika</strong>.
                        </p>
                    </div>

                    {{-- Poin Keunggulan / Nilai --}}
                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                <i class="ri-scales-3-line text-xl"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-800">Pasal 28 UUD 1945 & Pancasila</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                <i class="ri-book-open-line text-xl"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-800">Tri Dharma Perguruan Tinggi</span>
                        </div>
                    </div>
                </div>

                {{-- Gambar Latar Belakang --}}
                <div class="relative">
                    <div class="aspect-[4/3] overflow-hidden rounded-3xl bg-gray-100 shadow-xl">
                        <img src="https://picsum.photos/800/600?random=background"
                            alt="Latar Belakang LPM Retorika FHUP" class="h-full w-full object-cover">
                    </div>
                    {{-- Lencana Pilar Demokrasi --}}
                    <div
                        class="absolute -bottom-6 -left-6 hidden rounded-2xl bg-white p-6 shadow-xl lg:block border border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-600 text-white">
                                <i class="ri-government-line text-2xl"></i>
                            </div>
                            <div>
                                <p class="text-lg font-bold text-gray-900">Pilar Demokrasi</p>
                                <p class="text-xs font-medium text-gray-500">Fakultas Hukum Universitas Pancasila</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="max-w-screen-xl mx-auto text-gray-300">

            {{-- ================================================= --}}
            {{-- STRUKTUR ORGANISASI (MIND MAPPING STYLE) --}}
            {{-- ================================================= --}}
            <section class="space-y-12 pb-8">
                {{-- Header / Judul (Tetap di tengah layar & tidak ikut tergeser) --}}
                <div class="text-center max-w-2xl mx-auto px-4">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600">
                        <i class="ri-team-line"></i> STRUKTUR ORGANISASI
                    </span>
                    <h2 class="mt-4 text-3xl font-bold text-gray-900 lg:text-4xl">
                        Bagan Kepengurusan LPM Retorika
                    </h2>
                    <p class="mt-3 text-gray-600 text-sm lg:text-base">
                        Struktural Periode 2025/2026
                    </p>
                </div>

                {{-- Wrapper khusus untuk Overflow Horizontal (Hanya Bagan yang Bisa Digeser) --}}
                <div class="w-full overflow-x-auto pb-4">
                    {{-- Mind Map Container --}}
                    <div class="min-w-[1024px] max-w-6xl mx-auto pt-4 px-4">

                        {{-- LEVEL 1: TOP NODE (Pimpinan Umum) --}}
                        <div class="flex flex-col items-center">
                            <div
                                class="group relative rounded-2xl bg-gradient-to-r from-red-600 to-red-700 px-8 py-4 shadow-lg ring-4 ring-red-100 transition hover:scale-105 text-center">
                                <span
                                    class="inline-block rounded-full bg-white/20 px-3 py-0.5 text-[10px] font-bold tracking-wider text-white uppercase">
                                    Pimpinan Puncak
                                </span>
                                <h3 class="text-xl font-extrabold text-white mt-1">Pimpinan Umum</h3>
                            </div>

                            {{-- Garis Vertikal Utama --}}
                            <div class="h-8 w-0.5 bg-red-300"></div>
                        </div>

                        {{-- LEVEL 2: EXECUTIVE NODES (Pimpinan Redaksi, Pimpinan Perusahaan, Sekretaris Umum, Bendahara Umum) --}}
                        <div class="relative flex justify-center items-center gap-6 lg:gap-8">
                            {{-- Garis Horizontal Penghubung Level 2 --}}
                            <div class="absolute top-0 left-1/12 right-1/12 h-0.5 bg-red-300"></div>

                            {{-- Pimpinan Redaksi --}}
                            <div class="flex flex-col items-center">
                                <div class="h-6 w-0.5 bg-red-300"></div>
                                <div
                                    class="rounded-xl bg-white px-5 py-3 shadow-md ring-1 ring-gray-200 text-center border-t-2 border-red-500">
                                    <p class="text-xs font-bold text-gray-800">Pimpinan Redaksi</p>
                                </div>
                            </div>

                            {{-- Pimpinan Perusahaan --}}
                            <div class="flex flex-col items-center">
                                <div class="h-6 w-0.5 bg-red-300"></div>
                                <div
                                    class="rounded-xl bg-white px-5 py-3 shadow-md ring-1 ring-gray-200 text-center border-t-2 border-red-500">
                                    <p class="text-xs font-bold text-gray-800">Pimpinan Perusahaan</p>
                                </div>
                            </div>

                            {{-- Sekretaris Umum --}}
                            <div class="flex flex-col items-center">
                                <div class="h-6 w-0.5 bg-red-300"></div>
                                <div
                                    class="rounded-xl bg-white px-5 py-3 shadow-md ring-1 ring-gray-200 text-center border-t-2 border-red-500">
                                    <p class="text-xs font-bold text-gray-800">Sekretaris Umum</p>
                                </div>
                            </div>

                            {{-- Bendahara Umum --}}
                            <div class="flex flex-col items-center">
                                <div class="h-6 w-0.5 bg-red-300"></div>
                                <div
                                    class="rounded-xl bg-white px-5 py-3 shadow-md ring-1 ring-gray-200 text-center border-t-2 border-red-500">
                                    <p class="text-xs font-bold text-gray-800">Bendahara Umum</p>
                                </div>
                            </div>
                        </div>

                        {{-- Garis Penghubung ke Level 3 --}}
                        <div class="flex flex-col items-center">
                            <div class="h-10 w-0.5 bg-red-300"></div>
                        </div>

                        {{-- LEVEL 3: DEPARTEMEN / DIVISI OPERASIONAL --}}
                        <div class="relative pt-6 border-t-2 border-red-200">
                            {{-- Titik Tengah Garis Atas --}}
                            <div class="absolute -top-6 left-1/2 -translate-x-1/2 h-6 w-0.5 bg-red-300"></div>

                            <div class="grid grid-cols-3 gap-6">

                                {{-- CLUSTER 1: REDAKSI & PENERBITAN --}}
                                <div
                                    class="flex flex-col items-center bg-red-50/40 p-4 rounded-2xl ring-1 ring-red-100">
                                    <div
                                        class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                        <i class="ri-quill-pen-line"></i> Redaksi & Operasional
                                    </div>
                                    <div class="w-full space-y-2.5">
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Koor. Reporter</span>
                                        </div>
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Reporter</span>
                                        </div>
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Editor</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- CLUSTER 2: PRODUKSI & KREATIF --}}
                                <div
                                    class="flex flex-col items-center bg-red-50/40 p-4 rounded-2xl ring-1 ring-red-100">
                                    <div
                                        class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                        <i class="ri-palette-line"></i> Desain & Media
                                    </div>
                                    <div class="w-full space-y-2.5">
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Setting Lay Out</span>
                                        </div>
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Ilustrator</span>
                                        </div>
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Fotografi</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- CLUSTER 3: PERUSAHAAN & LITBANG --}}
                                <div
                                    class="flex flex-col items-center bg-red-50/40 p-4 rounded-2xl ring-1 ring-red-100">
                                    <div
                                        class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                        <i class="ri-briefcase-line"></i> Bisnis & Riset
                                    </div>
                                    <div class="w-full space-y-2.5">
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Litbang</span>
                                        </div>
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Sirkulasi Dana</span>
                                        </div>
                                        <div class="rounded-xl bg-white p-3 text-center shadow-sm ring-1 ring-gray-100">
                                            <span class="text-xs font-semibold text-gray-800">Percetakan</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <hr class="max-w-screen-xl mx-auto text-gray-300">

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
