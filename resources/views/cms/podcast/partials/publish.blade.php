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
    @php
        $initialStatus = old('status_id', $mode === 'edit' && isset($podcast) ? $podcast->status_id : 2);
    @endphp
    <div x-data="{
        status: {{ $initialStatus }}
    }" class="space-y-6 p-6">


        {{-- ================================================= --}}
        {{-- Publication Options --}}
        {{-- ================================================= --}}

        <div>

            <label class="mb-3 block text-sm font-medium text-gray-700">

                Status Publikasi

            </label>


            <div class="space-y-3">

                @foreach ($statuses as $st)
                    <label
                        class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                        :class="status == {{ $st->id }} ? 'border-red-500 bg-red-50' : ''">

                        <input type="radio" name="status_id" value="{{ $st->id }}" x-model="status"
                            class="mt-1 text-red-600 focus:ring-red-500">

                        <div>

                            <p class="font-medium text-gray-900">
                                {{ $st->nama }}
                            </p>

                            <p class="mt-1 text-sm leading-6 text-gray-500">
                                {{ $st->pesan }}
                            </p>

                        </div>

                    </label>
                @endforeach

            </div>

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
            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-5 py-3 font-semibold text-white transition hover:bg-red-700"
            x-cloak>

            <i class="ri-send-plane-fill" x-show="status !== '1'"></i>

            <i class="ri-draft-line" x-show="status === '1'"></i>

            <span x-show="status == '1'">
                Simpan Draft
            </span>

            <span x-show="status == '2'">
                Terbitkan Sekarang
            </span>
        </button>

    </div>

</div>
