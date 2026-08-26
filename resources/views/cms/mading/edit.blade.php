<x-cms-layout>
    @php
        $media = isset($mading) ? $mading->media_asset?->getFirstMedia('library') : null;

        $initialMedia = $media
            ? [
                'id' => $media->id,
                'name' => $media->name,
                'url' => $media->original_url,
                'mime_type' => $media->mime_type,
                'size' => $media->human_readable_size,
            ]
            : null;

        // dd($initialMedia);

    @endphp
    <div class="py-6" x-data='mediaSelector("gambar", @json($initialMedia))'>

        {{-- ================================================= --}}
        {{-- Page Header --}}
        {{-- ================================================= --}}


        <div class="mb-8 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-2xl font-bold text-gray-900">

                    Edit Mading

                </h1>

                <p class="mt-2 text-gray-500">

                    Perbarui poster dan informasi Mading yang ditampilkan
                    pada halaman Beranda.

                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.mading.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>
        </div>


        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}

        <form action="{{ route('cms.mading.update', $mading->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid gap-8 lg:grid-cols-12">


                {{-- ================================================= --}}
                {{-- LEFT --}}
                {{-- ================================================= --}}

                <div class="space-y-8 lg:col-span-8">


                    {{-- ================================================= --}}
                    {{-- Poster --}}
                    {{-- ================================================= --}}

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                        {{-- Header --}}
                        <div class="flex items-start gap-4 border-b border-gray-100 px-6 py-5">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

                                <i class="ri-image-line text-xl"></i>

                            </div>

                            <div>

                                <h2 class="text-lg font-semibold text-gray-900">

                                    Poster Mading

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Upload poster yang akan ditampilkan
                                    pada halaman Beranda.

                                </p>

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="p-6">

                            {{-- ================================================= --}}
                            {{-- No Media Selected --}}
                            {{-- ================================================= --}}

                            <template x-if="!selectedMedia">

                                <div
                                    class="rounded-2xl border-2 border-dashed border-gray-300
                                        bg-gray-50 p-8 text-center">

                                    <div
                                        class="mx-auto flex h-16 w-16 items-center
                                        justify-center rounded-2xl bg-white shadow-sm">

                                        <i class="ri-file-pdf-2-line text-3xl text-red-500">
                                        </i>

                                    </div>

                                    <h3 class="mt-5 text-lg font-semibold text-gray-900">
                                        Upload File Publikasi
                                    </h3>

                                    <p class="mx-auto mt-2 max-w-sm text-sm leading-6 text-gray-500">
                                        Drag & drop file PDF ke sini
                                        atau klik untuk memilih.
                                    </p>

                                    <button type="button" @click="openMediaLibrary"
                                        class="mt-6 inline-flex items-center gap-2
                                rounded-xl bg-red-600 px-5 py-3
                                font-medium text-white
                                transition hover:bg-red-700">

                                        <i class="ri-image-add-line"></i>

                                        Pilih dari Media

                                    </button>

                                </div>

                            </template>


                            {{-- ================================================= --}}
                            {{-- Selected Media --}}
                            {{-- ================================================= --}}
                            <template x-if="selectedMedia">

                                <div>

                                    {{-- Preview --}}
                                    <div class="overflow-hidden rounded-2xl border border-gray-200 bg-gray-100">

                                        <img :src="selectedMedia.url" :alt="selectedMedia.name"
                                            class="max-h-80 w-full object-contain">

                                    </div>


                                    {{-- Media Information --}}
                                    <div class="mt-4">

                                        <div
                                            class="flex flex-col gap-4
                                            sm:flex-row sm:items-start
                                            sm:justify-between">

                                            <div class="min-w-0">

                                                <p class="truncate font-semibold text-gray-900"
                                                    x-text="selectedMedia.name">
                                                </p>

                                                <p class="mt-1 text-sm text-gray-500">

                                                    <span
                                                        x-text="selectedMedia.extension || formatMimeType(selectedMedia.mime_type) || 'FILE'"></span>

                                                    <span class="mx-1 text-gray-300">
                                                        •
                                                    </span>

                                                    <span x-text="selectedMedia.size"></span>

                                                </p>

                                            </div>

                                            <span
                                                class="inline-flex shrink-0 items-center gap-2
                                            rounded-full bg-green-50 px-3 py-1.5
                                            text-xs font-medium text-green-700">

                                                <i class="ri-checkbox-circle-line"></i>

                                                Dipilih

                                            </span>

                                        </div>

                                    </div>


                                    {{-- Actions --}}
                                    <div class="mt-5 flex flex-col gap-3 sm:flex-row">

                                        <button type="button" @click="openMediaLibrary"
                                            class="inline-flex items-center justify-center
                                            gap-2 rounded-xl border border-gray-300
                                            bg-white px-4 py-2.5 text-sm font-medium
                                            text-gray-700 transition hover:bg-gray-50">

                                            <i class="ri-image-edit-line"></i>

                                            Ganti Gambar

                                        </button>

                                        <button type="button" @click="removeMedia"
                                            class="inline-flex items-center justify-center
                                            gap-2 rounded-xl border border-red-200
                                            bg-red-50 px-4 py-2.5 text-sm font-medium
                                            text-red-600 transition hover:bg-red-100">

                                            <i class="ri-delete-bin-line"></i>

                                            Hapus

                                        </button>

                                    </div>

                                </div>

                            </template>


                            {{-- ================================================= --}}
                            {{-- Hidden Input --}}
                            {{-- ================================================= --}}

                            <input type="hidden" name="media_id" :value="selectedMedia ? selectedMedia.id : ''">
                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Information --}}
                    {{-- ================================================= --}}

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                        {{-- Header --}}
                        <div class="flex items-start gap-4 border-b border-gray-100 px-6 py-5">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-50 text-red-600">

                                <i class="ri-information-line text-xl"></i>

                            </div>

                            <div>

                                <h2 class="text-lg font-semibold text-gray-900">

                                    Informasi Mading

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Informasi tambahan mengenai poster.

                                </p>

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="space-y-6 p-6">


                            {{-- Title --}}
                            <div>


                                <x-form.input-label for="judul" :value="__('Judul Mading')" />
                                <x-form.text-input id="judul" type="text" name="judul" :value="old('judul', isset($mading) ? $mading->judul : '')"
                                    placeholder="Contoh: Open Recruitment LPM Retorika 2026" required autofocus />
                                <x-form.input-error :messages="$errors->get('judul')" />

                                <p class="mt-2 text-xs text-gray-400">

                                    Judul digunakan sebagai informasi
                                    pendukung poster.

                                </p>

                            </div>


                            {{-- Description --}}
                            <div>

                                <label for="description" class="mb-2 block text-sm font-medium text-gray-700">

                                    Deskripsi

                                </label>

                                <x-form.textarea rows="5" maxlength="500" id="deskripsi" name="deskripsi"
                                    :value="old('deskripsi')" placeholder="Tulis deskripsi singkat mengenai poster..." required>
                                    {{ old('deskripsi', isset($mading) ? $mading->deskripsi : '') }}
                                </x-form.textarea>

                                <p class="mt-2 text-xs text-gray-400">

                                    Deskripsi dapat digunakan sebagai
                                    informasi tambahan pada Beranda.

                                </p>

                            </div>
                        </div>
                    </div>
                </div>


                {{-- ================================================= --}}
                {{-- RIGHT --}}
                {{-- ================================================= --}}

                <div class="space-y-8 lg:col-span-4">


                    {{-- ================================================= --}}
                    {{-- Status --}}
                    {{-- ================================================= --}}

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                        {{-- Header --}}
                        <div class="flex items-start gap-4 border-b border-gray-100 px-6 py-5">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-50 text-green-600">

                                <i class="ri-toggle-line text-xl"></i>

                            </div>

                            <div>

                                <h2 class="text-lg font-semibold text-gray-900">

                                    Status Mading

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Tentukan apakah Mading ditampilkan
                                    pada website.

                                </p>

                            </div>

                        </div>


                        {{-- Body --}}
                        @php
                            $initialStatus = old('status_mading_id', isset($mading) ? $mading->status_mading_id : 2);
                        @endphp
                        <div x-data="{ status: {{ $initialStatus }} }" class="space-y-4 p-6">

                            @foreach ($statusMadings as $sm)
                                <label
                                    class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                                    :class="status === {{ $sm->id }} ?
                                        'border-red-500 bg-red-50' :
                                        ''">

                                    <input type="radio" name="status_mading_id" value="{{ $sm->id }}"
                                        x-model="status" class="mt-1 text-red-600 focus:ring-red-500">

                                    <div>
                                        <p class="font-medium text-gray-900">
                                            {{ $sm->nama }}
                                        </p>

                                        <p class="mt-1 text-sm leading-6 text-gray-500">
                                            {{ $sm->pesan }}
                                        </p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>


                    {{-- ================================================= --}}
                    {{-- Placement --}}
                    {{-- ================================================= --}}

                    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-6">

                        <div class="flex items-start gap-3">

                            <i class="ri-home-5-line mt-0.5 text-lg text-blue-500"></i>

                            <div>

                                <h3 class="font-medium text-blue-900">

                                    Penempatan Mading

                                </h3>

                                <p class="mt-1 text-sm leading-6 text-blue-700">

                                    Mading ini akan ditampilkan pada bagian
                                    atas halaman Beranda.

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Actions --}}
                    {{-- ================================================= --}}

                    <div class="space-y-3">

                        <button type="submit"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-5 py-3 font-semibold text-white transition hover:bg-red-700">

                            <i class="ri-save-line"></i>

                            Simpan Perubahan

                        </button>


                        <a href="{{ route('cms.mading.index') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-5 py-3 font-semibold text-gray-700 transition hover:bg-gray-50">

                            <i class="ri-close-line"></i>

                            Batal

                        </a>

                    </div>

                </div>

            </div>

        </form>

        @include('components.cms.media-picker')
    </div>

</x-cms-layout>
