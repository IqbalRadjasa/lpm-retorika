<x-app-layout>

    <section class="py-26">
        <div class="max-w-screen-xl mx-auto px-4">

            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-sm text-gray-500">

                <a href="{{ route('beranda') }}" class="hover:text-red-600">
                    Beranda
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <a href="{{ route('berita.index', $slug) }}" class="hover:text-red-600">
                    {{ $artikel->kategori->nama }}
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <span class="text-gray-700">
                    {{ $artikel->judul }}
                </span>

            </nav>

            <div class="mt-10 grid lg:grid-cols-12 gap-10">

                {{-- ================================================= --}}
                {{-- MAIN ARTICLE --}}
                {{-- ================================================= --}}
                <div class="lg:col-span-8">

                    {{-- ================================================= --}}
                    {{-- Category --}}
                    {{-- ================================================= --}}
                    <div>
                        <span
                            class="inline-flex items-center rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-600">
                            {{ $artikel->kategori->nama }}
                        </span>
                    </div>

                    {{-- ================================================= --}}
                    {{-- Title --}}
                    {{-- ================================================= --}}
                    <h1 class="mt-6 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-gray-900">
                        {{ $artikel->judul }}
                    </h1>

                    {{-- ================================================= --}}
                    {{-- Meta --}}
                    {{-- ================================================= --}}
                    <div class="mt-8 flex flex-wrap items-center gap-5 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i class="ri-user-3-line"></i>
                            <span>
                                {{ $artikel->penulis }}
                            </span>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="ri-calendar-line"></i>
                            <span>
                                {{ $artikel->created_at->translatedFormat('d F Y') }}
                            </span>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="ri-time-line"></i>
                            <span>
                                Updated {{ $artikel->updated_at?->diffForHumans() ?? 'Never' }}
                            </span>
                        </div>
                    </div>

                    {{-- ================================================= --}}
                    {{-- Font Size + Share --}}
                    {{-- ================================================= --}}
                    <div x-data="{
                    
                        fontSize: Number(localStorage.getItem('articleFontSize')) || 18,
                        min: 16,
                        max: 24,
                        increase() {
                    
                            if (this.fontSize < this.max) {
                                this.fontSize++;
                                localStorage.setItem('articleFontSize', this.fontSize)
                            }
                        },
                    
                        decrease() {
                            if (this.fontSize > this.min) {
                                this.fontSize--;
                                localStorage.setItem('articleFontSize', this.fontSize)
                            }
                        },
                    
                        reset() {
                            this.fontSize = 18;
                            localStorage.setItem('articleFontSize', 18)
                        }
                    }">

                        <div class="mt-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                            {{-- Font Size --}}
                            <div class="flex items-center gap-3">

                                <span class="text-sm font-semibold text-gray-500">
                                    Ukuran Teks
                                </span>

                                <button @click="decrease"
                                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white hover:bg-gray-100">

                                    A-

                                </button>

                                <button @click="reset"
                                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white hover:bg-gray-100">

                                    A

                                </button>

                                <button @click="increase"
                                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white hover:bg-gray-100">

                                    A+

                                </button>

                            </div>

                            {{-- Share --}}
                            <div class="flex items-center gap-3">

                                <span class="text-sm text-gray-500">

                                    Bagikan

                                </span>

                                @php
                                    $shareUrl = urlencode(url()->current());
                                    $shareText = urlencode($artikel->judul);
                                @endphp

                                <div class="flex items-center gap-2" x-data="{ copied: false }">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                                        target="_blank" rel="noopener noreferrer"
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                                        title="Bagikan ke Facebook">
                                        <i class="ri-facebook-fill"></i>
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                                        target="_blank" rel="noopener noreferrer"
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                                        title="Bagikan ke X">
                                        <i class="ri-twitter-x-line"></i>
                                    </a>

                                    <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
                                        target="_blank" rel="noopener noreferrer"
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                                        title="Bagikan ke WhatsApp">
                                        <i class="ri-whatsapp-line"></i>
                                    </a>

                                    <button type="button"
                                        @click="navigator.clipboard.writeText(window.location.href); copied = true; setTimeout(() => copied = false, 2000)"
                                        class="relative flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white"
                                        :class="{ 'bg-green-600 text-white hover:bg-green-700': copied }"
                                        title="Salin Tautan">
                                        <i :class="copied ? 'ri-check-line' : 'ri-link'"></i>
                                    </button>
                                </div>

                            </div>

                        </div>

                        {{-- Image --}}
                        <div class="mt-10">

                            <img src="{{ $artikel->media_asset?->getFirstMedia('library')?->original_url }}"
                                class="w-full rounded-3xl object-cover shadow-lg max-h-[500px]">

                        </div>

                        {{-- Article --}}
                        <article class="mt-12">
                            <div :style="`font-size:${fontSize}px`"
                                class="leading-9 text-gray-700 transition-all duration-300">
                                {!! $artikel->isi_artikel !!}
                            </div>
                        </article>

                    </div>

                </div>

                {{-- ================================================= --}}
                {{-- SIDEBAR --}}
                {{-- ================================================= --}}

                <div class="lg:col-span-4">

                    <x-sidebar-news />

                </div>

            </div>

        </div>

    </section>

</x-app-layout>
