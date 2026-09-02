<x-app-layout>

    <main class="
        pt-30
        max-w-screen-xl
        mx-auto
        px-4
        sm:px-6
        lg:px-8">

        <div
            class="relative overflow-hidden
            flex flex-col justify-center gap-2
            rounded-3xl
            border-l-[10px] border-red-500
            bg-gradient-to-r from-red-50 via-red-50/70 to-white
            p-10 md:p-12 lg:p-14
            shadow-lg">

            {{-- Background Decoration --}}
            <i
                class="
                absolute
                -right-8
                -bottom-16
                lg:-right-8 lg:-bottom-22
                text-[170px]
                lg:text-[220px]
                text-red-500/10
                pointer-events-none
                @switch($kategori->slug)
                    @case('majalah') ri-newspaper-line @break
                    @case('tabloid') ri-file-paper-line @break
                    @case('buletin') ri-article-line @break
                    @default ri-article-line
                @endswitch">
            </i>

            <p class="relative z-10 text-sm font-semibold uppercase tracking-widest text-red-700">
                Kategori
            </p>

            <h1 class="relative z-10 text-3xl md:text-4xl lg:text-5xl font-extrabold text-red-600">
                {{ $kategori->nama }}
            </h1>

        </div>

        {{-- ================================================= --}}
        {{-- Isu Kampus Content --}}
        {{-- ================================================= --}}

        <section class="py-16">

            <div class="grid lg:grid-cols-12 gap-10">

                {{-- ================================================= --}}
                {{-- LEFT CONTENT --}}
                {{-- ================================================= --}}
                <div class="lg:col-span-8 space-y-6">

                    @forelse ($publikasis as $p)
                        <article
                            class="group overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-sm transition hover:shadow-xl">

                            <div class="grid lg:grid-cols-[420px_1fr]">

                                {{-- ========================================= --}}
                                {{-- Cover --}}
                                {{-- ========================================= --}}
                                <div class="overflow-hidden">
                                    <img src="{{ isset($p->cover_asset) ? $p->cover_asset->getFirstMedia('library')->original_url : 'https://placehold.co/1200x800/1e293b/94a3b8?text=Belum+Ada+Thumbnail' }}"
                                        alt="{{ $p->cover_asset?->alt_text ?? 'Media ini' }}"
                                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                                </div>

                                {{-- ========================================= --}}
                                {{-- Content --}}
                                {{-- ========================================= --}}
                                <div class="flex flex-col p-6 lg:p-10">

                                    <span
                                        class="inline-flex w-fit rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                                        {{ $p->kategori->nama }}
                                    </span>


                                    {{-- Date --}}
                                    <div class="mt-4 flex items-center gap-2 text-sm text-gray-500">

                                        <i class="ri-time-line text-red-600"></i>
                                        {{ $p->created_at->translatedFormat('d F Y') }}
                                    </div>

                                    {{-- Title --}}
                                    <h2
                                        class="mt-5 text-3xl font-extrabold uppercase leading-tight transition group-hover:text-red-600">
                                        {{ $p->judul }}
                                    </h2>

                                    {{-- Description --}}
                                    <p class="mt-6 max-w-2xl text-lg leading-9 text-gray-600 line-clamp-5">
                                        {{ $p->deskripsi }}
                                    </p>

                                    {{-- Spacer --}}
                                    <div class="flex-1"></div>

                                    {{-- CTA --}}

                                    <a href="{{ route('publikasi.show', ['slug' => $p->kategori->slug, 'publikasi' => $p->id]) }}"
                                        class="group/button w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl border border-red-200 bg-red-50 px-5 py-3 text-sm font-medium text-red-600 transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg hover:shadow-red-500/20">

                                        <span>Baca Selengkapnya</span>

                                        <i
                                            class="ri-arrow-right-line transition-transform duration-300 group-hover/button:translate-x-1"></i>

                                    </a>
                                </div>

                            </div>

                        </article>
                    @empty
                        {{-- ========================================= --}}
                        {{-- Empty State --}}
                        {{-- ========================================= --}}
                        <div
                            class="flex flex-col items-center justify-center rounded-3xl border border-dashed border-gray-300 bg-gray-50/50 px-6 py-16 text-center lg:py-24">
                            {{-- Icon Container --}}
                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-2xl bg-red-50 text-red-600 shadow-sm ring-8 ring-red-50/50">
                                <i class="ri-newspaper-line text-4xl"></i>
                            </div>

                            {{-- Text Content --}}
                            <h3 class="mt-6 text-xl font-bold text-gray-900 sm:text-2xl">
                                Belum Ada Publikasi
                            </h3>
                            <p class="mt-2 max-w-md text-base text-gray-500">
                                Saat ini belum ada artikel atau media yang dipublikasikan pada kategori ini. Silakan
                                kembali lagi nanti.
                            </p>

                            {{-- Optional CTA --}}
                            @if (request()->has('search') || request()->has('kategori'))
                                <a href="{{ request()->url() }}"
                                    class="mt-6 inline-flex items-center gap-2 rounded-xl bg-gray-900 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-gray-800">
                                    <i class="ri-refresh-line"></i>
                                    <span>Reset Filter</span>
                                </a>
                            @endif
                        </div>
                    @endforelse


                    {{-- Pagination --}}
                    <div class="pt-6">
                        {{ $publikasis->links('vendor.pagination.default') }}
                    </div>
                </div>

                {{-- ================================================= --}}
                {{-- SIDEBAR --}}
                {{-- ================================================= --}}

                <div class="lg:col-span-4">

                    <x-sidebar-news />

                </div>

            </div>

        </section>

    </main>

</x-app-layout>
