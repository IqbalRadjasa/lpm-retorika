{{-- ================================================= --}}
{{-- Basic Information --}}
{{-- ================================================= --}}

<div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">

    {{-- Header --}}
    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">
                Informasi Artikel
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Informasi utama yang akan ditampilkan pada artikel.
            </p>

        </div>

        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-50 text-red-600">

            <i class="ri-article-line text-xl"></i>

        </div>

    </div>


    {{-- Body --}}
    <div class="space-y-6 p-6">

        {{-- ========================================= --}}
        {{-- Title --}}
        {{-- ========================================= --}}

        <div>

            <label for="title" class="mb-2 block text-sm font-medium text-gray-700">

                Judul Artikel

            </label>

            <input id="title" type="text" name="title" value="{{ old('title') }}"
                placeholder="Contoh: Mahasiswa Berhasil Mengembangkan Website Pers"
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

            <p class="mt-2 text-xs text-gray-400">

                Gunakan judul yang jelas, singkat, dan menarik.

            </p>

        </div>


        {{-- ========================================= --}}
        {{-- Category + Author --}}
        {{-- ========================================= --}}

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

            {{-- Category --}}
            <div>

                <label for="category" class="mb-2 block text-sm font-medium text-gray-700">

                    Kategori

                </label>

                <select id="category" name="category"
                    class="w-full rounded-xl border-gray-300
                           focus:border-red-500
                           focus:ring-red-500">

                    <option value="">
                        Pilih kategori
                    </option>

                    <option value="isu-kampus">
                        Isu Kampus
                    </option>

                    <option value="nasional">
                        Nasional
                    </option>

                    <option value="opini">
                        Opini
                    </option>

                    <option value="majalah">
                        Majalah
                    </option>

                    <option value="tabloid">
                        Tabloid
                    </option>

                    <option value="buletin">
                        Buletin
                    </option>

                </select>

                <p class="mt-2 text-xs text-gray-400">

                    Pilih kategori yang sesuai dengan artikel.

                </p>

            </div>


            {{-- Author --}}
            <div>

                <label for="author" class="mb-2 block text-sm font-medium text-gray-700">

                    Penulis

                </label>

                <input id="author" type="text" name="author" value="{{ old('author') }}"
                    placeholder="Contoh: Muhammad Iqbal"
                    class="w-full rounded-xl border-gray-300
                           focus:border-red-500
                           focus:ring-red-500">

                <p class="mt-2 text-xs text-gray-400">

                    Nama yang akan ditampilkan sebagai penulis artikel.

                </p>

            </div>

        </div>


        {{-- ========================================= --}}
        {{-- Excerpt --}}
        {{-- ========================================= --}}

        <div>

            <div class="mb-2 flex items-center justify-between gap-4">

                <label for="excerpt" class="block text-sm font-medium text-gray-700">

                    Ringkasan Artikel

                </label>

                <span class="shrink-0 text-xs text-gray-400">

                    Maks. 250 karakter

                </span>

            </div>

            <textarea id="excerpt" rows="5" name="excerpt" maxlength="250" placeholder="Tulis ringkasan singkat artikel..."
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">{{ old('excerpt') }}</textarea>

            <p class="mt-2 text-xs text-gray-400">

                Ringkasan akan ditampilkan pada halaman daftar berita
                dan membantu pembaca memahami isi artikel.

            </p>

        </div>

    </div>

</div>
