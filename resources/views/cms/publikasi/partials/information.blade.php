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

        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-50 text-red-600">

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
            <x-form.input-label for="judul" :value="__('Judul')" />
            <x-form.text-input id="judul" type="text" name="judul" :value="old('judul')"
                placeholder="Contoh: DIKSI VOL.1 2026" required autofocus />
            <x-form.input-error :messages="$errors->get('judul')" />
        </div>


        {{-- ========================================= --}}
        {{-- Kategori Publikasi --}}
        {{-- ========================================= --}}

        <div>
            <x-form.input-label for="kategori_id" :value="__('Kategori')" />
            <x-form.select-input name="kategori_id" id="kategori_id">
                <option value="">Select Major</option>

                @foreach ($kategoris as $k)
                    <option value="{{ $k->id }}">
                        {{ $k->nama }}
                    </option>
                @endforeach
            </x-form.select-input>
            <x-form.input-error :messages="$errors->get('kategori_id')" />

            <p class="mt-2 text-xs text-gray-400">

                Pilih jenis publikasi yang akan diterbitkan.

            </p>
        </div>


        {{-- ========================================= --}}
        {{-- Edisi / Volume --}}
        {{-- ========================================= --}}
        <div class="grid gap-2 grid-cols-2">
            <div>
                <x-form.input-label for="edisi" :value="__('Edisi')" />
                <x-form.text-input id="edisi" type="text" name="edisi" :value="old('edisi')"
                    placeholder="Contoh: Edisi 1" required />
                <x-form.input-error :messages="$errors->get('edisi')" />
                <p class="mt-2 text-xs text-gray-400">

                    Masukkan informasi edisi jika tersedia.

                </p>
            </div>

            <div>
                <x-form.input-label for="volume" :value="__('Volume')" />
                <x-form.text-input id="volume" type="text" name="volume" :value="old('volume')"
                    placeholder="Contoh: Volume 1" required />
                <x-form.input-error :messages="$errors->get('volume')" />
                <p class="mt-2 text-xs text-gray-400">

                    Masukkan informasi volume jika tersedia.

                </p>
            </div>
        </div>
        {{-- ========================================= --}}
        {{-- Ringkasan --}}
        {{-- ========================================= --}}

        <div>

            <div class="mb-2 flex items-center justify-between">
                <label for="ringkasan" class="block text-sm font-medium text-gray-700">
                    Deskripsi
                </label>

                <span class="text-xs text-gray-400">

                    Maks. 500 karakter

                </span>

            </div>

            <x-form.textarea rows="5" maxlength="500" id="deskripsi" name="deskripsi" :value="old('deskripsi')"
                placeholder="Tulis deskripsi singkat mengenai publikasi ini..." required>
                {{ old('deskripsi') }}
            </x-form.textarea>

            <p class="mt-2 text-xs text-gray-400">

                Deskripsi akan ditampilkan pada halaman daftar publikasi
                dan dapat membantu pembaca memahami isi publikasi.

            </p>

        </div>

    </div>

</div>
