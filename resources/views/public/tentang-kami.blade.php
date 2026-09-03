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
            {{-- STRUKTUR ORGANISASI --}}
            {{-- ================================================= --}}
            <section class="space-y-12">
                <div class="text-center max-w-2xl mx-auto">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-red-50 px-4 py-1.5 text-xs font-semibold text-red-600">
                        <i class="ri-team-line"></i> STRUKTUR ORGANISASI
                    </span>
                    <h2 class="mt-4 text-3xl font-bold text-gray-900 lg:text-4xl">
                        Tim di Balik Layar LPM Retorika
                    </h2>
                    <p class="mt-3 text-gray-600 text-sm lg:text-base">
                        Sinergi antar pengurus dalam menjaga roda organisasi dan keberlanjutan pers mahasiswa.
                    </p>
                </div>

                {{-- Grid Anggota Tim --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $team = [
                            [
                                'nama' => 'Ahmad Fauzi',
                                'jabatan' => 'Pemimpin Redaksi',
                                'foto' => 'https://picsum.photos/300/400?random=11',
                            ],
                            [
                                'nama' => 'Siti Rahma',
                                'jabatan' => 'Sekretaris Umum',
                                'foto' => 'https://picsum.photos/300/400?random=12',
                            ],
                            [
                                'nama' => 'Budi Santoso',
                                'jabatan' => 'Redaktur Pelaksana',
                                'foto' => 'https://picsum.photos/300/400?random=13',
                            ],
                            [
                                'nama' => 'Dewi Lestari',
                                'jabatan' => 'Bendahara Umum',
                                'foto' => 'https://picsum.photos/300/400?random=14',
                            ],
                        ];
                    @endphp

                    @foreach ($team as $member)
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 transition hover:-translate-y-1 hover:shadow-md">
                            <div class="aspect-[3/4] overflow-hidden rounded-xl bg-gray-100">
                                <img src="{{ $member['foto'] }}" alt="{{ $member['nama'] }}"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="font-bold text-gray-900 text-base">{{ $member['nama'] }}</h3>
                                <p class="text-xs font-medium text-red-600 mt-0.5">{{ $member['jabatan'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- ================================================= --}}
            {{-- GALLERY (Clean Layout dengan Aspect-Ratio) --}}
            {{-- ================================================= --}}
            <section class="space-y-10">
                <div class="text-center max-w-2xl mx-auto">
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

                {{-- Grid Galeri yang Lebih Clean --}}
                @forelse ($galeri as $item)
                    @php
                        $media = $item->getFirstMedia('library');
                    @endphp

                    @if ($loop->first)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @endif

                    <div
                        class="group relative aspect-square overflow-hidden rounded-2xl bg-gray-100 shadow-sm transition hover:shadow-lg">
                        @if ($media && $media->original_url)
                            <img src="{{ $media->original_url }}" alt="{{ $item->alt_text ?? $item->name }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-110">
                        @else
                            <div
                                class="flex h-full w-full flex-col items-center justify-center bg-gray-100 text-gray-400 p-4 text-center">
                                <i class="ri-image-line text-3xl mb-1 text-gray-300"></i>
                                <span class="text-xs font-medium text-gray-400">Tidak ada gambar</span>
                            </div>
                        @endif

                        {{-- Overlay saat di-hover --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 transition duration-300 group-hover:opacity-100 flex items-end p-4">
                            <p class="text-xs font-medium text-white">{{ $item->name }}</p>
                        </div>
                    </div>

                    @if ($loop->last)
        </div>
        @endif
    @empty
        {{-- Empty State saat data galeri kosong --}}
        <div
            class="flex flex-col items-center justify-center rounded-3xl border border-dashed border-gray-200 bg-gray-50/50 p-12 text-center">
            <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-red-50 text-red-600 mb-4">
                <i class="ri-gallery-line text-3xl"></i>
            </div>
            <h3 class="text-base font-semibold text-gray-900">Belum Ada Galeri</h3>
            <p class="mt-1 text-sm text-gray-500 max-w-sm">
                Foto dokumentasi dan kegiatan akan ditampilkan di sini setelah ditambahkan.
            </p>
        </div>
        @endforelse

        {{ $galeri->links('vendor.pagination.default') }}
    </section>

    </div>
    </section>
</x-app-layout>
