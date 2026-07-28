<x-app-layout>

    <section class="py-12">
        <div class="max-w-screen-xl mx-auto px-4">

            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-sm text-gray-500">

                <a href="{{ route('beranda') }}" class="hover:text-red-600">
                    Beranda
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <a href="#" class="hover:text-red-600">
                    Isu Kampus
                </a>

                <i class="ri-arrow-right-s-line"></i>

                <span class="text-gray-700">
                    Detail Berita
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

                            Isu Kampus

                        </span>

                    </div>

                    {{-- ================================================= --}}
                    {{-- Title --}}
                    {{-- ================================================= --}}
                    <h1 class="mt-6 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-gray-900">

                        Mahasiswa Berhasil Mengembangkan Platform Digital
                        untuk Pers Kampus di Indonesia

                    </h1>

                    {{-- ================================================= --}}
                    {{-- Meta --}}
                    {{-- ================================================= --}}
                    <div class="mt-8 flex flex-wrap items-center gap-5 text-sm text-gray-500">

                        <div class="flex items-center gap-2">

                            <i class="ri-user-3-line"></i>

                            <span>Retorika</span>

                        </div>

                        <div class="flex items-center gap-2">

                            <i class="ri-calendar-line"></i>

                            <span>28 Juli 2026</span>

                        </div>

                        <div class="flex items-center gap-2">

                            <i class="ri-time-line"></i>

                            <span>5 min read</span>

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

                                <button
                                    class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                                    <i class="ri-facebook-fill"></i>
                                </button>

                                <button
                                    class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                                    <i class="ri-twitter-x-line"></i>
                                </button>

                                <button
                                    class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                                    <i class="ri-whatsapp-line"></i>
                                </button>

                                <button
                                    class="h-10 w-10 rounded-full bg-gray-100 hover:bg-red-600 hover:text-white transition">
                                    <i class="ri-link"></i>
                                </button>

                            </div>

                        </div>

                        {{-- Image --}}
                        <div class="mt-10">

                            <img src="https://picsum.photos/1200/700" class="w-full rounded-3xl object-cover shadow-lg">

                        </div>

                        {{-- Caption --}}
                        <p class="mt-3 text-center text-sm italic text-gray-500">

                            Dokumentasi kegiatan mahasiswa di lingkungan kampus.

                        </p>

                        {{-- Article --}}
                        <article class="mt-12">

                            <div :style="`font-size:${fontSize}px`"
                                class="leading-9 text-gray-700 transition-all duration-300">

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Ipsum molestiae, neque quisquam laboriosam asperiores officia dolores doloribus.
                                </p>

                                <p class="mt-7">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Atque ipsam consequatur molestias dignissimos explicabo quisquam eveniet illum
                                    provident.
                                </p>

                                <h2 class="mt-10 text-3xl font-bold">
                                    Awal Pengembangan
                                </h2>

                                <p class="mt-7">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nihil ipsa dicta labore voluptatibus.
                                </p>

                                <blockquote class="my-10 border-l-4 border-red-500 bg-red-50 p-6 italic">

                                    "Pers mahasiswa memiliki peran penting sebagai media
                                    kontrol sosial di lingkungan kampus."

                                </blockquote>

                                <h2 class="mt-10 text-3xl font-bold">
                                    Dampak bagi Mahasiswa
                                </h2>

                                <p class="mt-7">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto aliquid, numquam, perspiciatis illum maxime pariatur.
                                </p>

                            </div>

                        </article>

                    </div>

                </div>

                {{-- ================================================= --}}
                {{-- SIDEBAR --}}
                {{-- ================================================= --}}

                <div class="lg:col-span-4">

                    <x-news-sidebar />

                </div>

            </div>

        </div>

    </section>

</x-app-layout>
