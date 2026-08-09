<x-cms-layout>

    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-4 pb-6 md:flex-row md:items-center md:justify-between">

            <div>

                <h1 class="text-xl font-semibold text-gray-900">
                    Publikasi
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola majalah, tabloid, dan buletin LPM Retorika.
                </p>

            </div>

            <a href="#"
                class="inline-flex w-full items-center justify-center gap-2
                       rounded-xl bg-red-600 px-5 py-3
                       text-sm font-semibold text-white
                       transition hover:bg-red-700
                       md:w-auto">

                <i class="ri-add-line text-lg"></i>

                Tambah Publikasi

            </a>

        </div>


        {{-- ================================================= --}}
        {{-- Filter --}}
        {{-- ================================================= --}}

        <div class="mb-8 rounded-2xl bg-white p-4 shadow-sm">

            <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">

                {{-- Search --}}
                <div class="relative w-full lg:max-w-md">

                    <i
                        class="ri-search-line absolute left-4 top-1/2
                               -translate-y-1/2 text-gray-400">
                    </i>

                    <input type="text" placeholder="Cari publikasi..."
                        class="w-full rounded-xl border-gray-300
                               py-3 pl-11 pr-4
                               text-sm
                               focus:border-red-500
                               focus:ring-red-500">

                </div>


                {{-- Type Filter --}}
                <div class="flex flex-wrap gap-2">

                    <button type="button"
                        class="rounded-xl bg-red-600 px-4 py-2.5
                               text-sm font-medium text-white">

                        Semua

                    </button>

                    <button type="button"
                        class="rounded-xl bg-gray-100 px-4 py-2.5
                               text-sm font-medium text-gray-600
                               transition hover:bg-gray-200">

                        Majalah

                    </button>

                    <button type="button"
                        class="rounded-xl bg-gray-100 px-4 py-2.5
                               text-sm font-medium text-gray-600
                               transition hover:bg-gray-200">

                        Tabloid

                    </button>

                    <button type="button"
                        class="rounded-xl bg-gray-100 px-4 py-2.5
                               text-sm font-medium text-gray-600
                               transition hover:bg-gray-200">

                        Buletin

                    </button>

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Publication Grid --}}
        {{-- ================================================= --}}

        <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">


            {{-- ================================================= --}}
            {{-- Publication Card 1 --}}
            {{-- ================================================= --}}

            <article
                class="group overflow-hidden rounded-2xl bg-white shadow-sm
                       ring-1 ring-gray-100 transition
                       hover:-translate-y-1 hover:shadow-lg">

                {{-- Cover --}}
                <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">

                    <img src="https://picsum.photos/600/750?random=21" alt="DIKSI Vol. 1 2026"
                        class="h-full w-full object-cover
                               transition duration-500
                               group-hover:scale-105">


                    {{-- Type --}}
                    <div class="absolute left-4 top-4">

                        <span
                            class="inline-flex items-center gap-1.5
                                   rounded-full bg-white/95
                                   px-3 py-1.5
                                   text-xs font-semibold text-red-600
                                   shadow-sm">

                            <i class="ri-book-open-line"></i>

                            Majalah

                        </span>

                    </div>


                    {{-- Status --}}
                    <div class="absolute right-4 top-4">

                        <span
                            class="rounded-full bg-green-100
                                   px-3 py-1.5
                                   text-xs font-semibold text-green-700">

                            Terbit

                        </span>

                    </div>

                </div>


                {{-- Content --}}
                <div class="p-5">

                    <h2
                        class="text-lg font-semibold text-gray-900
                               transition group-hover:text-red-600">

                        DIKSI Vol. 1 2026

                    </h2>

                    <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">

                        <i class="ri-calendar-line"></i>

                        27 Juni 2026

                    </div>


                    <p class="mt-4 line-clamp-2 text-sm leading-6 text-gray-500">

                        Publikasi majalah LPM Retorika yang membahas
                        berbagai isu mahasiswa dan masyarakat.

                    </p>


                    {{-- Actions --}}
                    <div class="mt-5 flex gap-2">

                        <a href="#"
                            class="inline-flex flex-1 items-center
                                   justify-center gap-2
                                   rounded-xl border border-gray-200
                                   px-4 py-2.5
                                   text-sm font-medium text-gray-700
                                   transition hover:bg-gray-50">

                            <i class="ri-eye-line"></i>

                            Detail

                        </a>

                        <a href="#"
                            class="inline-flex flex-1 items-center
                                   justify-center gap-2
                                   rounded-xl bg-red-600
                                   px-4 py-2.5
                                   text-sm font-medium text-white
                                   transition hover:bg-red-700">

                            <i class="ri-edit-line"></i>

                            Edit

                        </a>

                    </div>

                </div>

            </article>


            {{-- ================================================= --}}
            {{-- Publication Card 2 --}}
            {{-- ================================================= --}}

            <article
                class="group overflow-hidden rounded-2xl bg-white shadow-sm
                       ring-1 ring-gray-100 transition
                       hover:-translate-y-1 hover:shadow-lg">

                {{-- Cover --}}
                <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">

                    <img src="https://picsum.photos/600/750?random=22" alt="Suara Mahasiswa Edisi 02"
                        class="h-full w-full object-cover
                               transition duration-500
                               group-hover:scale-105">


                    {{-- Type --}}
                    <div class="absolute left-4 top-4">

                        <span
                            class="inline-flex items-center gap-1.5
                                   rounded-full bg-white/95
                                   px-3 py-1.5
                                   text-xs font-semibold text-orange-600
                                   shadow-sm">

                            <i class="ri-newspaper-line"></i>

                            Tabloid

                        </span>

                    </div>


                    {{-- Status --}}
                    <div class="absolute right-4 top-4">

                        <span
                            class="rounded-full bg-yellow-100
                                   px-3 py-1.5
                                   text-xs font-semibold text-yellow-700">

                            Draft

                        </span>

                    </div>

                </div>


                {{-- Content --}}
                <div class="p-5">

                    <h2
                        class="text-lg font-semibold text-gray-900
                               transition group-hover:text-red-600">

                        Suara Mahasiswa Edisi 02

                    </h2>

                    <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">

                        <i class="ri-calendar-line"></i>

                        15 Juli 2026

                    </div>

                    <p class="mt-4 line-clamp-2 text-sm leading-6 text-gray-500">

                        Tabloid mahasiswa yang berisi berita,
                        opini, dan informasi seputar kehidupan kampus.

                    </p>


                    {{-- Actions --}}
                    <div class="mt-5 flex gap-2">

                        <a href="#"
                            class="inline-flex flex-1 items-center
                                   justify-center gap-2
                                   rounded-xl border border-gray-200
                                   px-4 py-2.5
                                   text-sm font-medium text-gray-700
                                   transition hover:bg-gray-50">

                            <i class="ri-eye-line"></i>

                            Detail

                        </a>

                        <a href="#"
                            class="inline-flex flex-1 items-center
                                   justify-center gap-2
                                   rounded-xl bg-red-600
                                   px-4 py-2.5
                                   text-sm font-medium text-white
                                   transition hover:bg-red-700">

                            <i class="ri-edit-line"></i>

                            Edit

                        </a>

                    </div>

                </div>

            </article>


            {{-- ================================================= --}}
            {{-- Publication Card 3 --}}
            {{-- ================================================= --}}

            <article
                class="group overflow-hidden rounded-2xl bg-white shadow-sm
                       ring-1 ring-gray-100 transition
                       hover:-translate-y-1 hover:shadow-lg">

                {{-- Cover --}}
                <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">

                    <img src="https://picsum.photos/600/750?random=23" alt="Buletin Kampus Juli 2026"
                        class="h-full w-full object-cover
                               transition duration-500
                               group-hover:scale-105">


                    {{-- Type --}}
                    <div class="absolute left-4 top-4">

                        <span
                            class="inline-flex items-center gap-1.5
                                   rounded-full bg-white/95
                                   px-3 py-1.5
                                   text-xs font-semibold text-blue-600
                                   shadow-sm">

                            <i class="ri-file-list-3-line"></i>

                            Buletin

                        </span>

                    </div>


                    {{-- Status --}}
                    <div class="absolute right-4 top-4">

                        <span
                            class="rounded-full bg-green-100
                                   px-3 py-1.5
                                   text-xs font-semibold text-green-700">

                            Terbit

                        </span>

                    </div>

                </div>


                {{-- Content --}}
                <div class="p-5">

                    <h2
                        class="text-lg font-semibold text-gray-900
                               transition group-hover:text-red-600">

                        Buletin Kampus Juli 2026

                    </h2>

                    <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">

                        <i class="ri-calendar-line"></i>

                        10 Juli 2026

                    </div>

                    <p class="mt-4 line-clamp-2 text-sm leading-6 text-gray-500">

                        Buletin berisi informasi dan kabar terbaru
                        dari lingkungan kampus.

                    </p>


                    {{-- Actions --}}
                    <div class="mt-5 flex gap-2">

                        <a href="#"
                            class="inline-flex flex-1 items-center
                                   justify-center gap-2
                                   rounded-xl border border-gray-200
                                   px-4 py-2.5
                                   text-sm font-medium text-gray-700
                                   transition hover:bg-gray-50">

                            <i class="ri-eye-line"></i>

                            Detail

                        </a>

                        <a href="#"
                            class="inline-flex flex-1 items-center
                                   justify-center gap-2
                                   rounded-xl bg-red-600
                                   px-4 py-2.5
                                   text-sm font-medium text-white
                                   transition hover:bg-red-700">

                            <i class="ri-edit-line"></i>

                            Edit

                        </a>

                    </div>

                </div>

            </article>


        </div>


        {{-- ================================================= --}}
        {{-- Empty State --}}
        {{-- ================================================= --}}

        {{--

        <div class="rounded-2xl bg-white p-12 text-center shadow-sm">

            <div
                class="mx-auto flex h-16 w-16 items-center justify-center
                       rounded-2xl bg-gray-100">

                <i class="ri-book-open-line text-3xl text-gray-400"></i>

            </div>

            <h3 class="mt-5 text-lg font-semibold text-gray-900">

                Belum ada publikasi

            </h3>

            <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">

                Belum ada majalah, tabloid, atau buletin
                yang ditambahkan.

            </p>

            <a
                href="#"
                class="mt-6 inline-flex items-center gap-2
                       rounded-xl bg-red-600 px-5 py-3
                       text-sm font-semibold text-white
                       hover:bg-red-700">

                <i class="ri-add-line"></i>

                Tambah Publikasi

            </a>

        </div>

        --}}


        {{-- ================================================= --}}
        {{-- Pagination --}}
        {{-- ================================================= --}}

        <div class="mt-8 flex justify-center">

            <div class="flex items-center gap-2">

                <button
                    class="flex h-10 w-10 items-center justify-center
                           rounded-xl border border-gray-200
                           text-gray-400">

                    <i class="ri-arrow-left-s-line"></i>

                </button>

                <button
                    class="flex h-10 w-10 items-center justify-center
                           rounded-xl bg-red-600
                           text-sm font-medium text-white">

                    1

                </button>

                <button
                    class="flex h-10 w-10 items-center justify-center
                           rounded-xl border border-gray-200
                           text-sm text-gray-600
                           hover:bg-gray-50">

                    2

                </button>

                <button
                    class="flex h-10 w-10 items-center justify-center
                           rounded-xl border border-gray-200
                           text-sm text-gray-600
                           hover:bg-gray-50">

                    3

                </button>

                <button
                    class="flex h-10 w-10 items-center justify-center
                           rounded-xl border border-gray-200
                           text-gray-600
                           hover:bg-gray-50">

                    <i class="ri-arrow-right-s-line"></i>

                </button>

            </div>

        </div>

    </div>

</x-cms-layout>
