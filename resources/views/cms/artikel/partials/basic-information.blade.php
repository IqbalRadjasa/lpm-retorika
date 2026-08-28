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
            <x-form.input-label for="judul" :value="__('Judul Artikel')" />
            <x-form.text-input id="judul" type="text" name="judul" :value="old('judul', $mode === 'edit' ? $artikel->judul : '')"
                placeholder="Contoh: Mahasiswa Berhasil Mengembangkan Website Pers" required autofocus />
            <x-form.input-error :messages="$errors->get('judul')" />

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
                <x-form.input-label for="kategori_id" :value="__('Kategori')" />
                <x-form.select-input name="kategori_id" id="kategori_id">
                    <option value="" @selected(old('kategori_id', $artikel->kategori_id ?? null) == '') disabled>
                        Pilih Kategori
                    </option>

                    @foreach ($kategoris as $k)
                        <option value="{{ $k->id }}" @selected(old('kategori_id', $artikel->kategori_id ?? null) == $k->id)>
                            {{ $k->nama }}
                        </option>
                    @endforeach
                </x-form.select-input>
                <x-form.input-error :messages="$errors->get('kategori_id')" />
                <p class="mt-2 text-xs text-gray-400">

                    Pilih kategori yang sesuai dengan artikel.

                </p>

            </div>


            {{-- Author --}}
            <div>
                <x-form.input-label for="penulis" :value="__('Penulis')" />
                <x-form.text-input id="penulis" type="text" name="penulis" value="Admin Retorika" required
                    disabled />
                <x-form.input-error :messages="$errors->get('penulis')" />
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

            <x-form.textarea rows="5" maxlength="500" id="ringkasan" name="ringkasan" :value="old('ringkasan')"
                placeholder="Tulis ringkasan mengenai artikel ini..." required>
                {{ old('ringkasan', $mode === 'edit' ? $artikel->ringkasan : '') }}
            </x-form.textarea>
            <p class="mt-2 text-xs text-gray-400">

                Ringkasan akan ditampilkan pada halaman daftar berita
                dan membantu pembaca memahami isi artikel.

            </p>

        </div>

    </div>

</div>
