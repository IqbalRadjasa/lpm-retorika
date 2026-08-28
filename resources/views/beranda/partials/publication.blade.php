
        <section class="py-16 lg:py-20">

            <div x-data="{ tab: 'majalah' }">

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

                        <button @click="tab='majalah'"
                            :class="tab == 'majalah' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Majalah

                        </button>

                        <button @click="tab='tabloid'"
                            :class="tab == 'tabloid' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Tabloid

                        </button>

                        <button @click="tab='buletin'"
                            :class="tab == 'buletin' ?
                                'bg-red-600 text-white shadow' :
                                'text-gray-600 hover:bg-white'"
                            class="px-4 lg:px-5 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">

                            Buletin

                        </button>

                    </div>

                </div>

                {{-- Showcase --}}
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center rounded-3xl bg-white shadow-lg border border-gray-200 p-6 lg:p-10">

                    {{-- Cover --}}
                    <div class="group relative flex justify-center">

                        {{-- Glow --}}
                        <div
                            class="absolute w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full bg-red-500/20 blur-3xl transition duration-500 group-hover:scale-110">
                        </div>

                        <img src="https://picsum.photos/450/600"
                            class="relative z-10 w-56 sm:w-72 lg:w-[360px] rounded-3xl shadow-2xl transition duration-500 group-hover:-translate-y-2 group-hover:rotate-1">

                    </div>

                    {{-- Information --}}
                    <div class="text-center lg:text-left">

                        <span
                            class="inline-flex items-center rounded-full bg-red-100 text-red-600 px-4 py-1 text-xs font-semibold">

                            Majalah

                        </span>

                        <h3 class="mt-5 text-3xl lg:text-5xl font-bold">

                            Edisi Juli 2026

                        </h3>

                        {{-- Metadata --}}
                        <div class="mt-6 flex flex-wrap justify-center lg:justify-start gap-3 text-sm">

                            <span class="rounded-full bg-gray-100 px-4 py-2">

                                📄 32 Halaman

                            </span>

                            <span class="rounded-full bg-gray-100 px-4 py-2">

                                PDF

                            </span>

                            <span class="rounded-full bg-gray-100 px-4 py-2">

                                18 Juli 2026

                            </span>

                        </div>

                        <p class="mt-8 text-gray-600 leading-8 max-w-xl mx-auto lg:mx-0">

                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eaque repudiandae autem rem magni.
                            Aperiam, tempora. Eligendi unde quae ducimus
                            architecto.

                        </p>

                        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">

                            <button
                                class="px-7 py-3 rounded-xl bg-red-600 text-white font-medium hover:bg-red-700 transition">

                                Baca Sekarang

                            </button>

                            <button
                                class="px-7 py-3 rounded-xl border border-gray-300 hover:border-red-500 hover:text-red-600 transition">

                                Lihat Arsip

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </section>
