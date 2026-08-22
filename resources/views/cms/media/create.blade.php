<x-cms-layout>

    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Page Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>
                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Upload Media

                </h1>

                <p class="mt-2 text-gray-500">

                    Tambahkan gambar, dokumen atau video ke Media Library.

                </p>
            </div>

            <x-link-button.secondary-link :href="route('cms.media.index')" icon="ri-arrow-left-line">
                Kembali
            </x-link-button.secondary-link>
        </div>


        @if (session('success'))
            <div
                class="mb-6 rounded-xl border border-green-200
                        bg-green-50 px-4 py-3 text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div
                class="mb-6 rounded-xl border border-red-200
                        bg-red-50 px-4 py-3 text-sm text-red-700">
                <ul class="list-disc space-y-1 pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {{-- ================================================= --}}
        {{-- Upload Form --}}
        {{-- ================================================= --}}

        {{-- <form action="{{ route('cms.media.store') }}" method="POST" enctype="multipart/form-data" --}}
        <form x-data="mediaUploader()" @submit.prevent="upload">
            @csrf

            <div class="grid gap-8 xl:grid-cols-12">


                {{-- ================================================= --}}
                {{-- LEFT --}}
                {{-- ================================================= --}}

                <div class="xl:col-span-8">

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">


                        {{-- ================================================= --}}
                        {{-- Header --}}
                        {{-- ================================================= --}}

                        <div class="border-b border-gray-100 px-6 py-5">

                            <h2 class="text-lg font-semibold text-gray-900">
                                Pilih File
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Upload file yang ingin dimasukkan ke media library.
                            </p>

                        </div>


                        {{-- ================================================= --}}
                        {{-- Body --}}
                        {{-- ================================================= --}}

                        <div class="space-y-6 p-6">
                            {{-- Name --}}
                            <div>

                                <label for="name" class="mb-2 block text-sm font-medium text-gray-700">

                                    Nama Media

                                </label>

                                <input id="name" type="text" name="name" value="{{ old('name') }}" required
                                    class="w-full rounded-xl border-gray-300
                                        focus:border-red-500 focus:ring-red-500"
                                    placeholder="Contoh: Kegiatan Mahasiswa">

                            </div>


                            {{-- Alt Text --}}
                            <div>

                                <label for="alt_text" class="mb-2 block text-sm font-medium text-gray-700">

                                    Alt Text

                                </label>

                                <input id="alt_text" type="text" name="alt_text" value="{{ old('alt_text') }}"
                                    class="w-full rounded-xl border-gray-300
                                        focus:border-red-500 focus:ring-red-500"
                                    placeholder="Deskripsi gambar">

                            </div>

                            {{-- ================================================= --}}
                            {{-- Upload Progress --}}
                            {{-- ================================================= --}}

                            <div x-show="uploading" x-cloak class="mt-6">

                                {{-- Header --}}
                                <div class="mb-2 flex items-center justify-between">

                                    <div>
                                        <p class="text-sm font-medium text-gray-900">
                                            Mengupload file...
                                        </p>

                                        <p class="mt-1 text-xs text-gray-400" x-text="uploadStatus">
                                        </p>
                                    </div>

                                    <span class="text-sm font-semibold text-red-600">
                                        <span x-text="uploadProgress"></span>%
                                    </span>

                                </div>


                                {{-- Progress Bar --}}
                                <div class="h-2 w-full overflow-hidden rounded-full bg-gray-200">

                                    <div class="h-full rounded-full bg-red-500 transition-all duration-300"
                                        :style="`width: ${uploadProgress}%`">
                                    </div>

                                </div>


                                {{-- File Size Progress --}}
                                <div class="mt-2 flex justify-between text-xs text-gray-400">

                                    <span x-text="formatSize(uploadedBytes)"></span>

                                    <span x-text="formatSize(totalBytes)"></span>

                                </div>

                            </div>

                            {{-- ================================================= --}}
                            {{-- Hidden Input --}}
                            {{-- ================================================= --}}

                            <input x-ref="fileInput" type="file" name="file"
                                accept="image/jpeg,image/png,image/webp,application/pdf,video/mp4" class="hidden"
                                @change="handleFiles">


                            {{-- ================================================= --}}
                            {{-- Drop Zone --}}
                            {{-- ================================================= --}}

                            <div @click="!uploading && $refs.fileInput.click()"
                                @dragover.prevent="!uploading && (dragging = true)"
                                @dragleave.prevent="dragging = false" @drop.prevent="!uploading && handleDrop($event)"
                                :class="{
                                    'border-red-500 bg-red-50': dragging && !uploading,
                                    'border-gray-300 hover:border-red-400 hover:bg-red-50/50 cursor-pointer': !
                                        uploading,
                                    'border-gray-200 bg-gray-100 opacity-60 cursor-not-allowed': uploading
                                }"
                                class="rounded-2xl border-2 border-dashed p-10 text-center transition">


                                {{-- Icon --}}
                                <div
                                    class="mx-auto flex h-16 w-16 items-center justify-center
                                            rounded-2xl bg-gray-100 text-gray-500">

                                    <i class="ri-upload-cloud-2-line text-3xl"></i>

                                </div>


                                {{-- Title --}}
                                <h3 class="mt-5 text-lg font-semibold text-gray-900">

                                    <span x-show="!dragging">
                                        Drag & drop file di sini
                                    </span>

                                    <span x-show="dragging" x-cloak>
                                        Lepaskan file di sini
                                    </span>

                                </h3>


                                {{-- Description --}}
                                <p class="mt-2 text-sm text-gray-500">

                                    atau
                                    <span class="font-medium text-red-600">
                                        pilih file dari komputer
                                    </span>

                                </p>


                                {{-- Supported Files --}}
                                <div class="mt-5 flex flex-wrap justify-center gap-2">

                                    <span class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-500">

                                        JPG

                                    </span>

                                    <span class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-500">

                                        PNG

                                    </span>

                                    <span class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-500">

                                        WEBP

                                    </span>

                                    <span class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-500">

                                        PDF

                                    </span>

                                    <span class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-500">

                                        MP4

                                    </span>

                                </div>
                            </div>


                            {{-- ================================================= --}}
                            {{-- Selected Files --}}
                            {{-- ================================================= --}}

                            <div x-show="file" x-cloak class="mt-8">
                                {{-- Header --}}
                                <div class="mb-4 flex items-center justify-between">

                                    <div>

                                        <h3 class="font-semibold text-gray-900">
                                            File yang Dipilih
                                        </h3>

                                        <p class="mt-1 text-xs text-gray-400">
                                            File siap diupload
                                        </p>

                                    </div>
                                </div>


                                {{-- File List --}}
                                <div class="space-y-3">
                                    <div
                                        class="flex items-center gap-4 rounded-xl
                                                border border-gray-200 p-4">


                                        {{-- Preview --}}
                                        <div
                                            class="flex h-14 w-14 shrink-0 items-center
                                                    justify-center overflow-hidden
                                                    rounded-xl bg-gray-100">


                                            {{-- Image --}}
                                            <template x-if="file?.type.startsWith('image/')">

                                                <img :src="file.preview" class="h-full w-full object-cover">

                                            </template>

                                            {{-- PDF --}}
                                            <template x-if="file?.type === 'application/pdf'">

                                                <div class="text-center">

                                                    <i class="ri-file-pdf-2-line text-2xl text-red-600">
                                                    </i>

                                                    <p class="text-[9px] font-semibold text-red-600">
                                                        PDF
                                                    </p>

                                                </div>

                                            </template>

                                            {{-- Video Preview --}}
                                            <template x-if="file?.type.startsWith('video/')">
                                                <video :src="file.preview"
                                                    class="h-full w-full object-cover"></video>
                                            </template>

                                        </div>


                                        {{-- Information --}}
                                        <div class="min-w-0 flex-1">

                                            <p class="truncate text-sm font-medium text-gray-900" x-text="file?.name">
                                            </p>

                                            <p class="mt-1 text-xs text-gray-400" x-text="formatSize(file?.size)">
                                            </p>

                                        </div>


                                        {{-- Remove --}}
                                        <button type="button" @click="!uploading && removeFile()"
                                            :class="{
                                                'flex h-9 w-9 shrink-0 items-center justify-center rounded-lg text-gray-400 transition hover:bg-red-50 hover:text-red-600':
                                                    !uploading,
                                                'cursor-not-allowed': uploading
                                            }">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- ================================================= --}}
                {{-- RIGHT --}}
                {{-- ================================================= --}}

                <div class="xl:col-span-4">

                    <div class="space-y-8">


                        {{-- ================================================= --}}
                        {{-- Upload Information --}}
                        {{-- ================================================= --}}

                        <div class="rounded-2xl bg-white shadow-sm">

                            <div class="border-b border-gray-100 px-6 py-5">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center
                                               rounded-xl bg-blue-50 text-blue-600">

                                        <i class="ri-information-line text-lg"></i>

                                    </div>

                                    <div>

                                        <h2 class="font-semibold text-gray-900">
                                            Informasi Upload
                                        </h2>

                                        <p class="mt-1 text-xs text-gray-500">
                                            Ketentuan file.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="space-y-4 p-6">


                                {{-- Images --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <i class="ri-image-line text-gray-400"></i>

                                        <span class="text-sm font-medium text-gray-700">
                                            Gambar
                                        </span>

                                    </div>

                                    <p class="mt-1 pl-6 text-xs leading-5 text-gray-500">

                                        JPG, PNG, dan WEBP dengan ukuran
                                        maksimal 10 MB.

                                    </p>

                                </div>

                                {{-- Documents --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <i class="ri-file-text-line text-gray-400"></i>

                                        <span class="text-sm font-medium text-gray-700">
                                            Dokumen
                                        </span>

                                    </div>

                                    <p class="mt-1 pl-6 text-xs leading-5 text-gray-500">

                                        File PDF dengan ukuran maksimal
                                        10 MB.

                                    </p>

                                </div>

                                {{-- Video --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <i class="ri-video-line text-gray-400"></i>

                                        <span class="text-sm font-medium text-gray-700">
                                            Video
                                        </span>

                                    </div>

                                    <p class="mt-1 pl-6 text-xs leading-5 text-gray-500">
                                        File video dengan ukuran maksimal
                                        500 MB.
                                    </p>

                                </div>

                                {{-- Storage --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <i class="ri-folder-line text-gray-400"></i>

                                        <span class="text-sm font-medium text-gray-700">
                                            Penyimpanan
                                        </span>

                                    </div>

                                    <p class="mt-1 pl-6 text-xs leading-5 text-gray-500">

                                        File yang diupload akan tersedia
                                        di Media Library.

                                    </p>

                                </div>

                            </div>

                        </div>

                        <div x-show="file !== null" x-cloak class="rounded-2xl border border-red-100 bg-red-50 p-6">

                            <div class="flex items-start gap-3">

                                <i class="ri-upload-cloud-2-line mt-0.5 text-lg text-red-600"></i>

                                <div>

                                    <h3 class="font-semibold text-red-900">
                                        Siap diupload
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-red-700">
                                        File telah dipilih dan siap
                                        ditambahkan ke Media Library.
                                    </p>

                                </div>

                            </div>

                        </div>

                        {{-- ================================================= --}}
                        {{-- Actions --}}
                        {{-- ================================================= --}}

                        <div class="space-y-3">


                            <button type="button" @click="upload" :disabled="!file || uploading"
                                :class="!file || uploading ?
                                    'cursor-not-allowed bg-gray-200 text-gray-400' :
                                    'bg-red-600 text-white hover:bg-red-700'"
                                class="inline-flex w-full items-center
                                        justify-center gap-2 rounded-xl
                                        px-5 py-3 font-semibold transition">

                                <i
                                    :class="uploading
                                        ?
                                        'ri-loader-4-line animate-spin' :
                                        'ri-upload-2-line'"></i>

                                <span x-text="uploading ? 'Mengupload...' : 'Upload Media'"></span>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @vite('resources/js/media-uploader.js')
</x-cms-layout>
