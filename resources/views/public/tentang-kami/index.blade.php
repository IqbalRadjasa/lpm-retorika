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

                    <div class="space-y-4 text-justify text-base leading-relaxed text-gray-600">
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
            {{-- STRUKTUR ORGANISASI (HYBRID: MODERN & SAMA GAMBAR) --}}
            {{-- ================================================= --}}
            <section class="space-y-12 pb-8">
                {{-- Header / Judul --}}
                <div class="text-center max-w-2xl mx-auto px-4">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600 ring-1 ring-red-200">
                        <i class="ri-team-line"></i> STRUKTUR ORGANISASI
                    </span>
                    <h2 class="mt-4 text-3xl font-bold text-gray-900 lg:text-4xl">
                        Bagan Kepengurusan LPM Retorika
                    </h2>
                    <p class="mt-3 text-gray-600 text-sm lg:text-base">
                        Struktural Periode 2025/2026
                    </p>
                </div>

                {{-- Container Overflow Horizontal untuk Layar Kecil --}}
                <div class="w-full overflow-x-auto pb-8">
                    <div class="w-max min-w-full mx-auto px-4">
                        <div class="w-[950px] mx-auto">

                            {{-- 1. PIMPINAN UMUM & GARIS LITBANG --}}
                            <div class="relative flex justify-center items-center">
                                {{-- Node Pimpinan Puncak --}}
                                <div
                                    class="z-10 rounded-full bg-gradient-to-r from-red-600 to-red-700 px-8 py-3 text-white shadow-lg ring-4 ring-red-100 transition hover:scale-105">
                                    <h3 class="text-xs font-extrabold uppercase tracking-widest">Pimpinan Umum</h3>
                                </div>

                                {{-- Garis Putus-Putus Utama ke Penelitian & Pengembangan (Samping Kanan) --}}
                                <div
                                    class="absolute left-1/2 right-[12.5%] top-1/2 h-[125px] border-r-2 border-t-2 border-dashed border-red-400 rounded-tr-2xl pointer-events-none">
                                </div>
                            </div>

                            {{-- Garis Vertikal Turun ke Titik Percabangan --}}
                            <div class="flex flex-col items-center">
                                <div class="h-8 w-0.5 bg-red-400"></div>
                                <div class="h-3.5 w-3.5 rounded-full bg-red-600 ring-4 ring-red-100 z-10 shadow-sm">
                                </div>
                            </div>

                            {{-- 2. BARIS ATAS (Bendahara, Perusahaan, Sekretaris, Litbang) --}}
                            <div class="grid grid-cols-4 gap-4 items-start text-center relative">

                                {{-- Garis Horizontal Utama Penghubung 3 Jabatan --}}
                                <div class="absolute top-0 left-[0%] right-[37.2%] h-0.5 bg-red-400"></div>
                                <div class="absolute top-0 left-[0%] h-[10.6rem] w-0.5 bg-red-400"></div>
                                <div class="absolute bottom-[7px] left-[0%] right-[81.5%] h-0.5 bg-red-400"></div>

                                {{-- BENDAHARA UMUM --}}
                                <div class="flex flex-col items-center">
                                    <div class="h-6 w-0.5 bg-red-400"></div>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>
                                    <div
                                        class="rounded-full bg-white px-5 py-2.5 shadow-md ring-2 ring-red-500 hover:bg-red-50 transition w-full max-w-[190px]">
                                        <p class="text-xs font-bold uppercase text-gray-800">Bendahara Umum</p>
                                    </div>
                                </div>

                                {{-- PIMPINAN PERUSAHAAN --}}
                                <div class="flex flex-col items-center">
                                    <div class="h-6 w-0.5 bg-red-400"></div>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>
                                    <div
                                        class="rounded-full bg-white px-5 py-2.5 shadow-md ring-2 ring-red-500 hover:bg-red-50 transition w-full max-w-[190px]">
                                        <p class="text-xs font-bold uppercase text-gray-800">Pimpinan Perusahaan</p>
                                    </div>

                                    {{-- Garis Turun ke Sirkulasi & Percetakan --}}
                                    <div class="h-6 w-0.5 bg-red-400"></div>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>

                                    {{-- Sub-Cabang Perusahaan --}}
                                    <div class="w-full relative">
                                        <div class="absolute top-0 left-[24%] right-[24%] h-0.5 bg-red-400"></div>
                                        <div class="grid grid-cols-2 gap-2 pt-4">
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-4 w-0.5 bg-red-400"></div>
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>
                                                <div
                                                    class="rounded-full bg-red-50/80 border border-red-300 px-3 py-2 shadow-sm w-full transition hover:bg-red-100">
                                                    <p class="text-[10px] font-bold text-red-900 uppercase">Sirkulasi
                                                        Dana
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-4 w-0.5 bg-red-400"></div>
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>
                                                <div
                                                    class="rounded-full bg-red-50/80 border border-red-300 px-3 py-2 shadow-sm w-full transition hover:bg-red-100">
                                                    <p class="text-[10px] font-bold text-red-900 uppercase">Percetakan
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- SEKRETARIS UMUM --}}
                                <div class="flex flex-col items-center">
                                    <div class="h-6 w-0.5 bg-red-400"></div>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>
                                    <div
                                        class="rounded-full bg-white px-5 py-2.5 shadow-md ring-2 ring-red-500 hover:bg-red-50 transition w-full max-w-[190px]">
                                        <p class="text-xs font-bold uppercase text-gray-800">Sekretaris Umum</p>
                                    </div>
                                </div>

                                {{-- PENELITIAN DAN PENGEMBANGAN (LITBANG) --}}
                                <div class="flex flex-col items-center pt-10">
                                    <div
                                        class="rounded-full bg-white px-4 py-2.5 shadow-md ring-2 ring-dashed ring-red-500 hover:bg-red-50 transition w-full max-w-[210px]">
                                        <p class="text-[11px] font-bold uppercase text-gray-800">Penelitian dan
                                            Pengembangan
                                        </p>
                                    </div>
                                </div>

                            </div>

                            {{-- 3. PIMPINAN REDAKSI & BAWAHANNYA --}}
                            <div class="grid grid-cols-4 gap-4 items-start text-center -mt-2">

                                {{-- Pimpinan Redaksi (Sejajar Di Bawah Bendahara) --}}
                                <div class="flex flex-col items-center col-span-2 pr-[25%]">
                                    <div class="h-6 w-0.5 bg-red-400"></div>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>
                                    <div
                                        class="rounded-full bg-white px-6 py-2.5 shadow-md ring-2 ring-red-500 hover:bg-red-50 transition w-full max-w-[200px]">
                                        <p class="text-xs font-bold uppercase text-gray-800">Pimpinan Redaksi</p>
                                    </div>

                                    {{-- Garis Turun ke Staf Redaksi --}}
                                    <div class="h-6 w-0.5 bg-red-400"></div>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 z-10"></div>

                                    {{-- Sub-Cabang 4 Staf Redaksi --}}
                                    <div class="w-[105%] relative">
                                        <div class="absolute top-0 left-[12%] right-[12%] h-0.5 bg-red-400"></div>

                                        <div class="grid grid-cols-4 gap-2 pt-6">

                                            {{-- Editor --}}
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-6 w-0.5 bg-red-400"></div>
                                                <div class="h-2 w-2 rounded-full bg-red-500 mb-2"></div>
                                                <div
                                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-red-500 to-red-600 text-white shadow-md ring-4 ring-red-100 transition hover:scale-105 p-1">
                                                    <span
                                                        class="text-[9px] font-extrabold uppercase tracking-wider">Editor</span>
                                                </div>
                                            </div>

                                            {{-- Setting Lay Out --}}
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-6 w-0.5 bg-red-400"></div>
                                                <div class="h-2 w-2 rounded-full bg-red-500 mb-2"></div>
                                                <div
                                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-red-500 to-red-600 text-white shadow-md ring-4 ring-red-100 transition hover:scale-105 p-1">
                                                    <span
                                                        class="text-[8px] font-extrabold uppercase leading-tight tracking-wider">Setting
                                                        Lay Out</span>
                                                </div>
                                            </div>

                                            {{-- Fotografer --}}
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-6 w-0.5 bg-red-400"></div>
                                                <div class="h-2 w-2 rounded-full bg-red-500 mb-2"></div>
                                                <div
                                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-red-500 to-red-600 text-white shadow-md ring-4 ring-red-100 transition hover:scale-105 p-1">
                                                    <span
                                                        class="text-[8px] font-extrabold uppercase leading-tight tracking-wider">Fotografer</span>
                                                </div>
                                            </div>

                                            {{-- Koordinator Reporter --}}
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-6 w-0.5 bg-red-400"></div>
                                                <div class="h-2 w-2 rounded-full bg-red-500 mb-2"></div>
                                                <div
                                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-red-500 to-red-600 text-white shadow-md ring-4 ring-red-100 transition hover:scale-105 p-1">
                                                    <span
                                                        class="text-[8px] font-extrabold uppercase leading-tight tracking-wider">Koordinator
                                                        Reporter</span>
                                                </div>
                                            </div>

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
