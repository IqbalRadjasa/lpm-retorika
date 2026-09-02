<section class="py-16 lg:py-20">
    <div class="grid lg:grid-cols-3 gap-8">
        {{-- ================================================= --}}
        {{-- ISU KAMPUS --}}
        {{-- ================================================= --}}
        @foreach ($beritaPerKategori as $slug => $data)
            @if (isset($data['parent']))
                <div class="space-y-6">
                    <article
                        class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                        <div class="overflow-hidden">
                            <a href="{{ route('berita.show', ['slug' => $slug, 'artikel' => $data['parent']->id]) }}">
                                <img src="{{ $data['parent']->media_asset?->getFirstMedia('library')?->original_url ?? 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                                    alt="{{ $data['parent']->media_asset?->alt_text ?? 'Belum ada Thumbnail' }}"
                                    class="aspect-[16/10] lg:aspect-[16/9] w-full object-cover transition duration-700 group-hover:scale-105">
                            </a>
                        </div>

                        <div class="p-5 lg:p-6">

                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                                {{ $data['parent']->kategori->nama }}
                            </span>

                            <h3
                                class="mt-4 text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-600 transition">
                                <a
                                    href="{{ route('berita.show', ['slug' => $slug, 'artikel' => $data['parent']->id]) }}">
                                    {{ $data['parent']->judul }}
                                </a>
                            </h3>

                            <p class="hidden sm:block mt-4 text-gray-500 leading-7">
                                {{ $data['parent']->ringkasan }}
                            </p>

                            <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-gray-400">

                                <span>{{ $data['parent']->created_at->translatedFormat('d F Y') }}</span>

                                <span class="hidden sm:inline">•</span>

                                <span>
                                    Updated {{ $data['parent']->updated_at?->diffForHumans() ?? 'Never' }}
                                </span>

                            </div>

                        </div>

                    </article>

                    {{-- Editorial List --}}
                    <div
                        class="relative rounded-3xl border border-gray-100 bg-white p-4 lg:p-6 overflow-hidden shadow-sm">

                        {{-- Background Decoration --}}
                        @switch($slug)
                            @case('isu-kampus')
                                <i
                                    class="ri-graduation-cap-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                                </i>
                            @break

                            @case('nasional')
                                <i
                                    class="ri-flag-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                                </i>
                            @break

                            @case('opini')
                                <i
                                    class="ri-user-voice-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                                </i>
                            @break
                        @endswitch

                        <div class="relative divide-y divide-gray-200">
                            @forelse ($data['sub_parent'] as $sub)
                                <a href="{{ route('berita.show', ['slug' => $slug, 'artikel' => $sub->id]) }}">
                                    <article
                                        class="group flex gap-4 lg:gap-5 py-4 lg:py-5 hover:lg:pl-2 transition-all duration-300">

                                        <span
                                            class="text-2xl sm:text-3xl lg:text-4xl font-black italic text-gray-200 group-hover:text-red-500 transition">

                                            {{ sprintf('%02d', $loop->iteration) }}

                                        </span>

                                        <div class="flex-1 min-w-0">

                                            <h4
                                                class="text-base lg:text-lg font-semibold leading-6 lg:leading-7 group-hover:text-red-600 transition">
                                                {{ $sub->judul }}
                                            </h4>

                                            <div class="mt-2 flex items-center gap-2 text-xs lg:text-sm text-gray-500">

                                                <i class="ri-calendar-line"></i>

                                                <span>{{ $sub->created_at->translatedFormat('d F Y') }}</span>

                                            </div>

                                        </div>

                                        <i
                                            class="hidden lg:block ri-arrow-right-up-line text-xl text-gray-300 opacity-0 group-hover:opacity-100 group-hover:text-red-600 transition">
                                        </i>

                                    </article>
                                </a>

                                <div class="pt-5">
                                    <a href="{{ route('berita.index', $slug) }}"
                                        class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                        <span>Lihat Semua</span>

                                        <i
                                            class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1">
                                        </i>

                                    </a>
                                </div>
                            @empty
                                <div class="flex flex-col text-gray-400 justify-center items-center">
                                    <h4
                                        class="text-base lg:text-md font-semibold leading-6 lg:leading-7 group-hover:text-red-600 transition italic">
                                        Belum ada berita lainnya di kategori ini.
                                    </h4>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
            @else
                <div class="space-y-6">
                    <article
                        class="group overflow-hidden rounded-3xl border border-gray-200 bg-white hover:shadow-xl transition">

                        <div class="overflow-hidden">
                            <a href="#">
                                <img src="https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Berita+Di+Kategori+Ini"
                                    alt="Belum ada berita"
                                    class="aspect-[16/10] lg:aspect-[16/9] w-full object-cover transition duration-700 group-hover:scale-105">
                            </a>
                        </div>

                        <div class="p-5 lg:p-6">

                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                                {{ strtoupper($slug) }}
                            </span>

                            <h3
                                class="mt-4 text-2xl lg:text-3xl font-bold leading-tight group-hover:text-red-600 transition">
                                <a href="#">
                                    Belum ada berita di kategori ini
                                </a>
                            </h3>


                            <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-gray-400">

                                <span>-</span>

                                <span class="hidden sm:inline">•</span>

                                <span>
                                    -
                                </span>

                            </div>

                        </div>

                    </article>

                    {{-- Editorial List --}}
                    <div
                        class="relative rounded-3xl border border-gray-100 bg-white p-4 lg:p-6 overflow-hidden shadow-sm">

                        {{-- Background Decoration --}}
                        @switch($slug)
                            @case('isu-kampus')
                                <i
                                    class="ri-graduation-cap-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                                </i>
                            @break

                            @case('nasional')
                                <i
                                    class="ri-flag-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                                </i>
                            @break

                            @case('opini')
                                <i
                                    class="ri-user-voice-line absolute -right-6 bottom-0 text-[170px] lg:text-[220px] text-gray-100/70 pointer-events-none">
                                </i>
                            @break
                        @endswitch

                        <div class="relative divide-y divide-gray-200">
                            <div class="flex flex-col text-gray-400 justify-center items-center">
                                <h4
                                    class="text-base lg:text-md font-semibold leading-6 lg:leading-7 group-hover:text-red-600 transition italic">
                                    Belum ada berita lainnya di kategori ini.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
