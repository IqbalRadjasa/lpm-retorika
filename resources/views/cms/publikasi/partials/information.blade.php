{{-- ================================================= --}}
{{-- Informasi Publikasi --}}
{{-- ================================================= --}}

<div class="overflow-hidden rounded-2xl bg-white shadow-sm">

    {{-- ================================================= --}}
    {{-- Header --}}
    {{-- ================================================= --}}

    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                Informasi Publikasi

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Informasi utama mengenai publikasi.

            </p>

        </div>

        <div
            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-50 text-red-600">

            <i class="ri-booklet-line text-xl"></i>

        </div>

    </div>


    {{-- ================================================= --}}
    {{-- Body --}}
    {{-- ================================================= --}}

    <div class="space-y-6 p-6">

        {{-- ========================================= --}}
        {{-- Judul Publikasi --}}
        {{-- ========================================= --}}

        <div>

            <label
                for="title"
                class="mb-2 block text-sm font-medium text-gray-700">

                Judul Publikasi

            </label>

            <input
                id="title"
                type="text"
                name="title"
                value="{{ old('title') }}"
                placeholder="Contoh: DIKSI VOL.1 2026"
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

            <p class="mt-2 text-xs text-gray-400">

                Masukkan nama atau judul publikasi.

            </p>

        </div>


        {{-- ========================================= --}}
        {{-- Jenis Publikasi --}}
        {{-- ========================================= --}}

        <div>

            <label
                for="type"
                class="mb-2 block text-sm font-medium text-gray-700">

                Jenis Publikasi

            </label>

            <select
                id="type"
                name="type"
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

                <option value="">
                    Pilih jenis publikasi
                </option>

                <option
                    value="majalah"
                    @selected(old('type') === 'majalah')>

                    Majalah

                </option>

                <option
                    value="tabloid"
                    @selected(old('type') === 'tabloid')>

                    Tabloid

                </option>

                <option
                    value="buletin"
                    @selected(old('type') === 'buletin')>

                    Buletin

                </option>

            </select>

            <p class="mt-2 text-xs text-gray-400">

                Pilih jenis publikasi yang akan diterbitkan.

            </p>

        </div>


        {{-- ========================================= --}}
        {{-- Edisi / Volume --}}
        {{-- ========================================= --}}

        <div>

            <label
                for="edition"
                class="mb-2 block text-sm font-medium text-gray-700">

                Edisi / Volume

            </label>

            <input
                id="edition"
                type="text"
                name="edition"
                value="{{ old('edition') }}"
                placeholder="Contoh: Volume 1"
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

            <p class="mt-2 text-xs text-gray-400">

                Masukkan informasi edisi atau volume jika tersedia.

            </p>

        </div>


        {{-- ========================================= --}}
        {{-- Tanggal Terbit --}}
        {{-- ========================================= --}}

        <div>

            <label
                for="publication_date"
                class="mb-2 block text-sm font-medium text-gray-700">

                Tanggal Terbit

            </label>

            <input
                id="publication_date"
                type="date"
                name="publication_date"
                value="{{ old('publication_date') }}"
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

            <p class="mt-2 text-xs text-gray-400">

                Tanggal yang tercantum sebagai tanggal terbit publikasi.

            </p>

        </div>


        {{-- ========================================= --}}
        {{-- Deskripsi --}}
        {{-- ========================================= --}}

        <div>

            <div class="mb-2 flex items-center justify-between">

                <label
                    for="description"
                    class="block text-sm font-medium text-gray-700">

                    Deskripsi Singkat

                </label>

                <span class="text-xs text-gray-400">

                    Maks. 500 karakter

                </span>

            </div>

            <textarea
                id="description"
                name="description"
                rows="5"
                maxlength="500"
                placeholder="Tulis deskripsi singkat mengenai publikasi ini..."
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">{{ old('description') }}</textarea>

            <p class="mt-2 text-xs text-gray-400">

                Deskripsi akan ditampilkan pada halaman daftar publikasi
                dan dapat membantu pembaca memahami isi publikasi.

            </p>

        </div>

    </div>

</div>
