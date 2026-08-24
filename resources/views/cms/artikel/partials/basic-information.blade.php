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

            <label for="judul" class="mb-2 block text-sm font-medium text-gray-700">

                Judul Artikel

            </label>

            <input id="judul" type="text" name="judul"
                value="{{ old('judul', $mode === 'edit' ? $artikel->judul : '') }}"
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

                <label for="kategori_id" class="mb-2 block text-sm font-medium text-gray-700">

                    Kategori

                </label>

                <select id="kategori_id" name="kategori_id"
                    class="w-full rounded-xl border-gray-300
                           focus:border-red-500
                           focus:ring-red-500">

                    <option value="">
                        Pilih kategori
                    </option>
                    @foreach ($kategoris as $k)
                        @if ($mode === 'edit')
                            <option value="{{ $k->id }}" {{ $artikel->kategori_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama }}
                            </option>
                        @else
                            <option value="{{ $k->id }}">
                                {{ $k->nama }}
                            </option>
                        @endif
                    @endforeach

                </select>

                <p class="mt-2 text-xs text-gray-400">

                    Pilih kategori yang sesuai dengan artikel.

                </p>

            </div>


            {{-- Author --}}
            <div>

                <label for="penulis" class="mb-2 block text-sm font-medium text-gray-700">

                    Penulis

                </label>

                <input id="penulis" type="text" name="penulis" value="Admin Retorika" disabled
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

                <label for="ringkasan" class="block text-sm font-medium text-gray-700">

                    Ringkasan Artikel

                </label>

                <span class="shrink-0 text-xs text-gray-400">

                    Maks. 250 karakter

                </span>

            </div>

            <textarea id="ringkasan" rows="5" name="ringkasan" maxlength="250"
                placeholder="Tulis ringkasan singkat artikel..."
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">{{ old('ringkasan', $mode === 'edit' ? $artikel->ringkasan : '') }}</textarea>

            <p class="mt-2 text-xs text-gray-400">

                Ringkasan akan ditampilkan pada halaman daftar berita
                dan membantu pembaca memahami isi artikel.

            </p>

        </div>

    </div>

</div>
