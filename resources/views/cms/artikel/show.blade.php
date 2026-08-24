<x-cms-layout>

    <div class="py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">

            <div>
                <h1 class="mt-2 text-2xl font-bold text-gray-900">

                    Detail Artikel

                </h1>

                <p class="mt-1 text-sm text-gray-500">

                    Lihat informasi lengkap dan isi artikel.

                </p>
            </div>

            {{-- Header Actions --}}
            <div class="flex flex-col lg:flex-row gap-3">
                <x-link-button.secondary-link :href="route('cms.artikel.index')" icon="ri-arrow-left-line">
                    Kembali
                </x-link-button.secondary-link>

                <x-link-button.secondary-link :href="'#'" icon="ri-pencil-line" download>
                    Edit
                </x-link-button.secondary-link>

                <form action="{{ route('cms.artikel.destroy', $data->id) }}" method="POST"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                    @csrf
                    @method('DELETE')

                    <x-button.danger-button icon="ri-delete-bin-line">
                        Hapus
                    </x-button.danger-button>

                </form>
            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Main Layout --}}
        {{-- ================================================= --}}

        <div class="grid gap-8 xl:grid-cols-12">


            {{-- ================================================= --}}
            {{-- LEFT --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-8">


                {{-- ================================================= --}}
                {{-- Article Header --}}
                {{-- ================================================= --}}

                <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    {{-- Thumbnail --}}
                    <div class="aspect-[16/8] overflow-hidden bg-gray-100">

                        <img src="{{ $data->media_asset->getFirstMedia('library')->original_url }}"
                            alt="Thumbnail artikel" class="h-full w-full object-cover">

                    </div>


                    {{-- Article Information --}}
                    <div class="p-6 md:p-8">

                        {{-- Category --}}
                        <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-600">
                            {{ $data->kategori->nama }}
                        </span>


                        {{-- Title --}}
                        <h2 class="mt-5 text-3xl font-bold leading-tight text-gray-900 md:text-4xl">
                            {{ $data->judul }}
                        </h2>


                        {{-- Meta --}}
                        <div class="mt-6 flex flex-wrap gap-x-6 gap-y-3 text-sm text-gray-500">

                            <div class="flex items-center gap-2">

                                <i class="ri-user-3-line"></i>

                                <span>
                                    {{ $data->penulis }}
                                </span>

                            </div>

                            <div class="flex items-center gap-2">

                                <i class="ri-calendar-line"></i>

                                <span>
                                    {{ $data->created_at->translatedFormat('d F Y') }}
                                </span>

                            </div>
                        </div>


                        {{-- Excerpt --}}
                        <div class="mt-7 rounded-xl border border-gray-100 bg-gray-50 p-5">

                            <p class="text-sm font-medium text-gray-500">
                                Ringkasan
                            </p>

                            <p class="mt-2 leading-7 text-gray-700">
                                {{ $data->ringkasan }}
                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Article Content --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    {{-- Section Header --}}
                    <div class="border-b border-gray-100 px-6 py-5 md:px-8">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                                <i class="ri-file-text-line text-lg"></i>

                            </div>

                            <div>

                                <h3 class="font-semibold text-gray-900">

                                    Isi Artikel

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Konten yang akan ditampilkan kepada pembaca.

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Content --}}
                    <article class="prose prose-gray max-w-none p-6 leading-8 md:p-8">
                        {!! $data->isi_artikel !!}
                    </article>

                </div>


                {{-- ================================================= --}}
                {{-- Tags --}}
                {{-- ================================================= --}}

                {{-- <div class="rounded-2xl bg-white p-6 shadow-sm md:p-8">

                    <div class="flex items-center gap-2">

                        <i class="ri-price-tag-3-line text-gray-400"></i>

                        <h3 class="font-semibold text-gray-900">

                            Tags

                        </h3>

                    </div>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Mahasiswa

                        </span>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Kampus

                        </span>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Teknologi

                        </span>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600">

                            Pers Mahasiswa

                        </span>

                    </div>

                </div> --}}

            </div>


            {{-- ================================================= --}}
            {{-- RIGHT SIDEBAR --}}
            {{-- ================================================= --}}

            <div class="space-y-8 xl:col-span-4">


                {{-- ================================================= --}}
                {{-- Publication Status --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-50 text-green-600">

                                <i class="ri-send-plane-line"></i>

                            </div>

                            <div>

                                <h3 class="font-semibold text-gray-900">

                                    Publikasi

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Status artikel.

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="space-y-5 p-6">

                        {{-- Status --}}
                        <div>

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">

                                Status

                            </p>

                            <div class="mt-2">

                                <span
                                    class="inline-flex capitalize items-center gap-2 rounded-full  px-3 py-1.5 text-sm font-semibold"
                                    :class="{
                                        'bg-yellow-100 text-yellow-700': {{ $data->status->id }} == 1,
                                        'bg-green-100 text-green-700': {{ $data->status->id }} == 2
                                    }">

                                    <span class="h-2 w-2 rounded-full"
                                        :class="{
                                            'bg-yellow-500': {{ $data->status->id }} == 1,
                                            'bg-green-500': {{ $data->status->id }} == 2,
                                        }"></span>

                                    {{ $data->status->slug }}
                                </span>

                            </div>

                        </div>


                        {{-- Published Date --}}
                        <div>

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">

                                Tanggal Terbit

                            </p>

                            <p class="mt-2 text-sm font-medium text-gray-700">
                                {{ $data->created_at->translatedFormat('d F Y, H:i') }}
                            </p>

                        </div>


                        {{-- Updated --}}
                        <div>

                            <p class="text-xs font-medium uppercase tracking-wide text-gray-400">

                                Terakhir Diperbarui

                            </p>

                            <p class="mt-2 text-sm font-medium text-gray-700">
                                {{ $data->updated_at->translatedFormat('d F Y, H:i') }}
                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Author --}}
                {{-- ================================================= --}}

                <div class="rounded-2xl bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <h3 class="font-semibold text-gray-900">

                            Informasi Artikel

                        </h3>

                    </div>

                    <div class="space-y-5 p-6">

                        {{-- Author --}}
                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">

                                <i class="ri-user-3-line text-xl"></i>

                            </div>

                            <div>

                                <p class="text-xs text-gray-400">

                                    Penulis
                                </p>

                                <p class="font-semibold text-gray-800">
                                    {{ $data->penulis }}
                                </p>

                            </div>

                        </div>


                        {{-- Category --}}
                        <div class="flex items-center justify-between">

                            <span class="text-sm text-gray-500">

                                Kategori

                            </span>

                            <span class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-600">
                                {{ $data->kategori->nama }}
                            </span>
                        </div>
                    </div>
                </div>


                {{-- ================================================= --}}
                {{-- SEO Preview --}}
                {{-- ================================================= --}}

                {{-- <div class="rounded-2xl bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

                                <i class="ri-search-eye-line"></i>

                            </div>

                            <div>

                                <h3 class="font-semibold text-gray-900">

                                    SEO Preview

                                </h3>

                                <p class="text-sm text-gray-500">

                                    Tampilan artikel pada mesin pencari.

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="p-6">

                        <p class="text-sm text-blue-600">

                            Mahasiswa Berhasil Mengembangkan
                            Platform Digital

                        </p>

                        <p class="mt-1 text-xs text-green-700">

                            retorika.id/berita/platform-digital

                        </p>

                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500">

                            Mahasiswa berhasil mengembangkan platform
                            digital untuk mendukung kegiatan pers kampus.

                        </p>

                    </div>

                </div> --}}
            </div>
        </div>
    </div>
</x-cms-layout>
