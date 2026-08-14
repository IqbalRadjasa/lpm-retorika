<x-cms-layout>
    {{-- ================================================= --}}
    {{-- Kategori --}}
    {{-- ================================================= --}}

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Tambah Kategori

                </h1>

                <p class="mt-2 text-gray-500">
                    Tambahkan kategori baru untuk mengelompokkan artikel.
                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.kategori.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}

        <form action="#" method="POST">

            @csrf

            <div class="grid gap-8 lg:grid-cols-12">


                {{-- ================================================= --}}
                {{-- LEFT : Main Information --}}
                {{-- ================================================= --}}

                <div class="space-y-8 lg:col-span-8">


                    {{-- ================================================= --}}
                    {{-- Basic Information --}}
                    {{-- ================================================= --}}

                    <div
                        class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                        {{-- Header --}}
                        <div
                            class="flex items-start justify-between
                               border-b border-gray-100
                               px-6 py-5">

                            <div>

                                <h2 class="text-lg font-semibold text-gray-900">

                                    Informasi Kategori

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Informasi dasar kategori artikel.

                                </p>

                            </div>


                            <div
                                class="flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-xl bg-red-50
                                   text-red-600">

                                <i class="ri-price-tag-3-line text-xl"></i>

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="space-y-6 p-6">


                            {{-- ================================================= --}}
                            {{-- Name --}}
                            {{-- ================================================= --}}

                            <div>

                                <label for="name"
                                    class="mb-2 block text-sm
                                       font-medium text-gray-700">

                                    Nama Kategori

                                </label>


                                <input id="name" type="text" name="name" placeholder="Contoh: Isu Kampus"
                                    class="w-full rounded-xl
                                       border-gray-300
                                       focus:border-red-500
                                       focus:ring-red-500">


                                <p class="mt-2 text-xs text-gray-400">

                                    Gunakan nama yang singkat dan mudah
                                    dipahami oleh pembaca.

                                </p>

                            </div>


                            {{-- ================================================= --}}
                            {{-- Description --}}
                            {{-- ================================================= --}}

                            <div>

                                <label for="description"
                                    class="mb-2 block text-sm
                                       font-medium text-gray-700">

                                    Deskripsi

                                </label>


                                <textarea id="description" name="description" rows="5"
                                    placeholder="Contoh: Berita dan informasi seputar kehidupan kampus."
                                    class="w-full rounded-xl
                                       border-gray-300
                                       focus:border-red-500
                                       focus:ring-red-500"></textarea>


                                <p class="mt-2 text-xs text-gray-400">

                                    Deskripsi singkat untuk menjelaskan
                                    isi atau fokus kategori.

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Preview --}}
                    {{-- ================================================= --}}

                    <div
                        class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                        {{-- Header --}}
                        <div class="border-b border-gray-100
                               px-6 py-5">

                            <h2 class="text-lg font-semibold text-gray-900">

                                Preview

                            </h2>

                            <p class="mt-1 text-sm text-gray-500">

                                Gambaran sederhana bagaimana kategori
                                akan ditampilkan.

                            </p>

                        </div>


                        {{-- Preview --}}
                        <div class="p-6">

                            <div
                                class="rounded-xl border border-gray-200
                                   bg-gray-50 p-5">

                                <div class="flex items-start gap-4">

                                    <div
                                        class="flex h-12 w-12 shrink-0
                                           items-center justify-center
                                           rounded-xl bg-white
                                           text-red-600 shadow-sm">

                                        <i class="ri-price-tag-3-line text-xl"></i>

                                    </div>


                                    <div class="min-w-0">

                                        <h3
                                            class="font-semibold
                                               text-gray-900">

                                            Isu Kampus

                                        </h3>


                                        <p
                                            class="mt-1 text-sm
                                               leading-6
                                               text-gray-500">

                                            Berita dan informasi seputar
                                            kehidupan kampus.

                                        </p>


                                        <div
                                            class="mt-3 flex flex-wrap
                                               items-center gap-2">

                                            <span
                                                class="inline-flex
                                                   items-center
                                                   gap-1.5
                                                   rounded-full
                                                   bg-green-50
                                                   pr-3 py-1
                                                   text-xs font-medium
                                                   text-green-700">

                                                <span
                                                    class="h-1.5 w-1.5
                                                       rounded-full
                                                       bg-green-500">
                                                </span>

                                                Aktif

                                            </span>


                                            <span
                                                class="text-xs
                                                   text-gray-400">

                                                24 artikel

                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- RIGHT : Settings --}}
                {{-- ================================================= --}}

                <div class="space-y-8 lg:col-span-4">


                    {{-- ================================================= --}}
                    {{-- Status --}}
                    {{-- ================================================= --}}

                    <div
                        class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                        {{-- Header --}}
                        <div
                            class="flex items-start justify-between
                               border-b border-gray-100
                               px-6 py-5">

                            <div>

                                <h2 class="text-lg font-semibold
                                       text-gray-900">

                                    Status

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Tentukan apakah kategori
                                    dapat digunakan.

                                </p>

                            </div>


                            <div
                                class="flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-xl bg-green-50
                                   text-green-600">

                                <i class="ri-toggle-line text-xl"></i>

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="p-6">

                            <label
                                class="flex cursor-pointer
                                   items-start gap-4
                                   rounded-xl border
                                   border-green-200
                                   bg-green-50 p-4">

                                <input type="checkbox" name="is_active" value="1" checked
                                    class="mt-1 rounded
                                       border-gray-300
                                       text-red-600
                                       focus:ring-red-500">


                                <div>

                                    <p class="font-medium
                                          text-gray-900">

                                        Aktifkan kategori

                                    </p>

                                    <p
                                        class="mt-1 text-sm
                                          leading-6
                                          text-gray-500">

                                        Kategori dapat dipilih saat
                                        membuat atau mengedit artikel.

                                    </p>

                                </div>

                            </label>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Information --}}
                    {{-- ================================================= --}}

                    <div class="rounded-2xl border border-blue-100
                           bg-blue-50 p-5">

                        <div class="flex items-start gap-3">

                            <i
                                class="ri-information-line
                                   mt-0.5 text-lg
                                   text-blue-500">
                            </i>


                            <div>

                                <h4 class="font-medium
                                       text-blue-900">

                                    Tips Kategori

                                </h4>


                                <p
                                    class="mt-1 text-sm
                                       leading-6
                                       text-blue-700">

                                    Gunakan kategori yang jelas dan
                                    relevan agar pembaca lebih mudah
                                    menemukan artikel.

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Actions --}}
                    {{-- ================================================= --}}

                    <div class="space-y-3">


                        {{-- Save --}}
                        <button type="submit"
                            class="inline-flex w-full
                               items-center
                               justify-center gap-2
                               rounded-xl bg-red-600
                               px-5 py-3
                               font-semibold text-white
                               transition hover:bg-red-700">

                            <i class="ri-save-line"></i>

                            Simpan Kategori

                        </button>


                        {{-- Cancel --}}
                        <a href="{{ route('cms.kategori.index') }}"
                            class="inline-flex w-full
                               items-center
                               justify-center gap-2
                               rounded-xl border
                               border-gray-300
                               bg-white px-5 py-3
                               font-semibold text-gray-700
                               transition hover:bg-gray-50">

                            <i class="ri-close-line"></i>

                            Batal

                        </a>

                    </div>

                </div>

            </div>

        </form>

    </div>
</x-cms-layout>
