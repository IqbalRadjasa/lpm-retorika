<x-cms-layout>

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">

                    Artikel

                </h1>

                <p class="mt-2 text-gray-500">

                    Kelola seluruh artikel yang ditampilkan pada website.

                </p>

            </div>

            <x-link-button.primary-link :href="route('cms.artikel.create')" icon="ri-add-line">

                Tambah Artikel

            </x-link-button.primary-link>

        </div>

        {{-- ================================================= --}}
        {{-- Statistics --}}
        {{-- ================================================= --}}

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Total Artikel

                </p>

                <h2 class="mt-2 text-4xl font-bold">

                    128

                </h2>

            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Published

                </p>

                <h2 class="mt-2 text-4xl font-bold text-green-600">

                    98

                </h2>

            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Draft

                </p>

                <h2 class="mt-2 text-4xl font-bold text-yellow-500">

                    24

                </h2>

            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Archived

                </p>

                <h2 class="mt-2 text-4xl font-bold text-red-500">

                    6

                </h2>

            </div>

        </div>

        {{-- ================================================= --}}
        {{-- Filter --}}
        {{-- ================================================= --}}

        <div class="rounded-2xl bg-white p-6 shadow-sm">

            <form class="grid gap-4 lg:grid-cols-[1fr_220px_220px_auto]">

                <x-form.text-input type="text" name="search" placeholder="Cari artikel..." />

                <x-form.select-input name="category">

                    <option>

                        Semua Kategori

                    </option>

                </x-form.select-input>

                <x-form.select-input name="status">

                    <option>

                        Semua Status

                    </option>

                </x-form.select-input>

                <x-button.primary-button>

                    Filter

                </x-button.primary-button>

            </form>

        </div>

        {{-- ================================================= --}}
        {{-- Article List --}}
        {{-- ================================================= --}}

        <div class="space-y-5">

            @foreach (range(1, 8) as $item)
                <article
                    class="group rounded-3xl border border-gray-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl">

                    <div class="flex flex-col lg:flex-row">

                        {{-- Thumbnail --}}
                        <div class="lg:w-72 shrink-0">

                            <img src="https://picsum.photos/500/350?random={{ $item }}"
                                class="h-64 lg:h-full w-full rounded-t-3xl lg:rounded-l-3xl lg:rounded-tr-none object-cover">

                        </div>

                        {{-- Content --}}
                        <div class="flex flex-1 flex-col p-6">

                            <div class="flex flex-wrap items-start justify-between gap-4">

                                <div>

                                    <span
                                        class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">

                                        Isu Kampus

                                    </span>

                                    <h2 class="mt-4 text-2xl font-bold transition group-hover:text-red-600">

                                        Mahasiswa Berhasil Mengembangkan
                                        Platform Digital Pers Kampus

                                    </h2>

                                </div>

                                {{-- Status --}}
                                <span class="rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-700">

                                    Published

                                </span>

                            </div>

                            <p class="mt-5 max-w-3xl leading-8 text-gray-500">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequuntur harum laudantium molestiae,
                                adipisci ipsum repellendus nemo
                                tempora expedita.

                            </p>

                            {{-- Meta --}}
                            <div class="mt-6 flex flex-wrap items-center gap-5 text-sm text-gray-500">

                                <span class="flex items-center gap-2">

                                    <i class="ri-user-line"></i>

                                    Admin

                                </span>

                                <span class="flex items-center gap-2">

                                    <i class="ri-calendar-line"></i>

                                    18 Juli 2026

                                </span>

                                <span class="flex items-center gap-2">

                                    <i class="ri-time-line"></i>

                                    5 min read

                                </span>

                            </div>

                            {{-- Footer --}}
                            <div
                                class="mt-8 flex flex-col gap-4 border-t pt-5 sm:flex-row sm:items-center sm:justify-between">

                                <div class="text-sm text-gray-400">

                                    Updated 2 hours ago

                                </div>

                                <div class="flex flex-wrap gap-3">

                                    <a  href="{{route('cms.artikel.show')}}"
                                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-gray-200 transition hover:bg-gray-100">

                                        <i class="ri-eye-line"></i>

                                    </a>

                                    <button
                                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-blue-200 text-blue-600 transition hover:bg-blue-50">

                                        <i class="ri-pencil-line"></i>

                                    </button>

                                    <button
                                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-red-200 text-red-600 transition hover:bg-red-50">

                                        <i class="ri-delete-bin-line"></i>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </article>
            @endforeach

        </div>

        {{-- ================================================= --}}
        {{-- Pagination --}}
        {{-- ================================================= --}}

        <div class="rounded-2xl bg-white p-5 shadow-sm">

            {{-- {{ $students->links() }} --}}

        </div>

    </div>

</x-cms-layout>
