<section class="py-16 lg:py-20">

    <div x-data="{ tab: '{{ $kategoris->first()?->slug ?? '' }}' }">

        {{-- Header --}}
        <div
            class="flex flex-col items-center justify-center text-center lg:flex-row lg:justify-between lg:text-left gap-4 mb-10">
            <div>
                <h2 class="text-2xl lg:text-3xl font-bold uppercase">
                    Publikasi
                </h2>

                <p class="mt-2 text-sm lg:text-base text-gray-500">
                    Majalah, Tabloid, dan Buletin.
                </p>
            </div>
        </div>

        {{-- Tabs --}}
        <div class="flex justify-center lg:justify-start mb-10 overflow-x-auto">
            <div class="inline-flex rounded-full bg-gray-100 p-1 gap-1">
                @foreach ($kategoris as $k)
                    <button @click="tab = '{{ $k->slug }}'"
                        :class="tab === '{{ $k->slug }}' ?
                            'bg-red-600 text-white shadow' :
                            'text-gray-600 hover:bg-white'"
                        class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">
                        {{ $k->nama }}
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Showcase Data Per Kategori --}}
        @foreach ($kategoris as $k)
            @php
                // Ambil 1 publikasi terbaru untuk kategori ini
                $item = $k->publikasis->first();
                $coverUrl = $item?->cover_asset?->getFirstMediaUrl('library');
            @endphp

            <div x-show="tab === '{{ $k->slug }}'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center rounded-3xl bg-white shadow-lg border border-gray-200 p-6 lg:p-10">

                @if ($item)
                    {{-- Cover --}}
                    <div class="group relative flex justify-center">
                        {{-- Glow --}}
                        <div
                            class="absolute w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full bg-red-500/20 blur-3xl transition duration-500 group-hover:scale-110">
                        </div>

                        <img src="{{ $coverUrl }}" alt="{{ $item->judul }}"
                            class="relative z-10 w-56 sm:w-72 lg:w-[360px] h-auto object-cover rounded-3xl shadow-2xl transition duration-500 group-hover:-translate-y-2 group-hover:rotate-1">
                    </div>

                    {{-- Information --}}
                    <div class="text-center lg:text-left">
                        <span
                            class="inline-flex items-center rounded-full bg-red-100 text-red-600 px-4 py-1 text-xs font-semibold capitalize">
                            {{ $k->nama }}
                        </span>

                        <h3 class="mt-5 text-3xl lg:text-5xl font-bold">
                            {{ $item->judul }}
                        </h3>

                        {{-- Metadata --}}
                        <div class="mt-6 flex flex-wrap justify-center lg:justify-start gap-3 text-sm">
                            @if ($item->jumlah_halaman)
                                <span class="rounded-full bg-gray-100 px-4 py-2">
                                    📄 {{ $item->jumlah_halaman }} Halaman
                                </span>
                            @endif

                            <span class="rounded-full bg-gray-100 px-4 py-2 uppercase">
                                {{ $item->doc_asset?->getFirstMedia('library')->extension }}
                            </span>

                            <span class="rounded-full bg-gray-100 px-4 py-2">
                                {{ $item->created_at->translatedFormat('d F Y') }}
                            </span>
                        </div>

                        <p class="mt-8 text-gray-600 leading-8 max-w-xl mx-auto lg:mx-0">
                            {{ Str::limit(strip_tags($item->deskripsi ?? $item->ringkasan), 180) }}
                        </p>

                        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="{{ route('publikasi.show', ['slug' => $item->kategori->slug, 'publikasi' => $item->id]) }}"
                                class="px-7 py-3 text-center rounded-xl bg-red-600 text-white font-medium hover:bg-red-700 transition">
                                Baca Sekarang
                            </a>

                            <a href="{{ route('publikasi.index', ['slug' => $k->slug]) }}"
                                class="px-7 py-3 text-center rounded-xl border border-gray-300 hover:border-red-500 hover:text-red-600 transition">
                                Lihat Arsip
                            </a>
                        </div>
                    </div>
                @else
                    {{-- Tampilan Kosong Jika Belum Ada Data --}}
                    <div class="col-span-2 text-center py-12 text-gray-400">
                        Belum ada publikasi diterbitkan untuk kategori {{ $k->nama }}.
                    </div>
                @endif

            </div>
        @endforeach

    </div>

</section>
