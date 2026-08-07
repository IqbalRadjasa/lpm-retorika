<div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

    {{-- ================================================= --}}
    {{-- Header --}}
    {{-- ================================================= --}}

    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">
                Publikasi
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Tentukan kapan artikel akan diterbitkan.
            </p>

        </div>

        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-50 text-green-600">

            <i class="ri-send-plane-line text-xl"></i>

        </div>

    </div>


    {{-- ================================================= --}}
    {{-- Body --}}
    {{-- ================================================= --}}

    <div x-data="{
        status: 'published'
    }" class="space-y-6 p-6">


        {{-- ================================================= --}}
        {{-- Publication Options --}}
        {{-- ================================================= --}}

        <div>

            <label class="mb-3 block text-sm font-medium text-gray-700">

                Status Publikasi

            </label>


            <div class="space-y-3">


                {{-- Draft --}}
                <label
                    class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                    :class="status === 'draft'
                        ?
                        'border-red-500 bg-red-50' :
                        ''">

                    <input type="radio" name="status" value="draft" x-model="status"
                        class="mt-1 text-red-600 focus:ring-red-500">

                    <div>

                        <p class="font-medium text-gray-900">

                            Simpan sebagai Draft

                        </p>

                        <p class="mt-1 text-sm leading-6 text-gray-500">

                            Artikel disimpan dan belum ditampilkan
                            kepada pembaca.

                        </p>

                    </div>

                </label>


                {{-- Published --}}
                <label
                    class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                    :class="status === 'published'
                        ?
                        'border-red-500 bg-red-50' :
                        ''">

                    <input type="radio" name="status" value="published" x-model="status"
                        class="mt-1 text-red-600 focus:ring-red-500">

                    <div>

                        <p class="font-medium text-gray-900">

                            Terbitkan Sekarang

                        </p>

                        <p class="mt-1 text-sm leading-6 text-gray-500">

                            Artikel langsung dapat dibaca oleh
                            pengunjung website.

                        </p>

                    </div>

                </label>


                {{-- Scheduled --}}
                <label
                    class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                    :class="status === 'scheduled'
                        ?
                        'border-red-500 bg-red-50' :
                        ''">

                    <input type="radio" name="status" value="scheduled" x-model="status"
                        class="mt-1 text-red-600 focus:ring-red-500">

                    <div>

                        <p class="font-medium text-gray-900">

                            Jadwalkan

                        </p>

                        <p class="mt-1 text-sm leading-6 text-gray-500">

                            Artikel akan diterbitkan secara otomatis
                            pada waktu yang ditentukan.

                        </p>

                    </div>

                </label>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Scheduled Date --}}
        {{-- ================================================= --}}

        <div x-show="status === 'scheduled'" x-transition x-cloak>

            <label for="published_at" class="mb-2 block text-sm font-medium text-gray-700">

                Waktu Terbit

            </label>

            <input id="published_at" type="datetime-local" name="published_at" :required="status === 'scheduled'"
                class="w-full rounded-xl border-gray-300
                   focus:border-red-500
                   focus:ring-red-500">

            <p class="mt-2 text-xs text-gray-400">

                Tentukan tanggal dan waktu artikel mulai
                ditampilkan kepada pembaca.

            </p>

        </div>


        {{-- ================================================= --}}
        {{-- Information --}}
        {{-- ================================================= --}}

        <div class="rounded-xl border border-blue-100 bg-blue-50 p-4">

            <div class="flex gap-3">

                <i class="ri-information-line mt-0.5 text-lg text-blue-500"></i>

                <div>

                    <h4 class="font-medium text-blue-900">

                        Sebelum menerbitkan

                    </h4>

                    <p class="mt-1 text-sm leading-6 text-blue-700">

                        Pastikan judul, kategori, thumbnail,
                        dan isi artikel sudah diperiksa.

                    </p>

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Action --}}
        {{-- ================================================= --}}

        <button type="submit"
            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-5 py-3 font-semibold text-white transition hover:bg-red-700">

            <i class="ri-send-plane-fill" x-show="status !== 'draft'"></i>

            <i class="ri-draft-line" x-show="status === 'draft'"></i>

            <span x-show="status === 'draft'">
                Simpan Draft
            </span>

            <span x-show="status === 'published'">
                Terbitkan Sekarang
            </span>

            <span x-show="status === 'scheduled'">
                Jadwalkan Artikel
            </span>

        </button>

    </div>

</div>
