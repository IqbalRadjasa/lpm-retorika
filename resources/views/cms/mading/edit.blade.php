<x-cms-layout>

    <div class="py-6">

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

        <form action="#" method="POST" enctype="multipart/form-data">

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
                        <div x-data="{
                            image: 'https://picsum.photos/700/950?random=35',

                            previewImage(event) {
                                const file = event.target.files[0];

                                if (!file) return;

                                this.image = URL.createObjectURL(file);
                            },

                            removeImage() {
                                this.image = null;

                                this.$refs.input.value = '';
                            }
                        }" class="p-6">


                            {{-- File Input --}}
                            <input x-ref="input" type="file" name="poster" accept="image/jpeg,image/png,image/webp"
                                class="hidden" @change="previewImage">


                            {{-- Upload / Preview Area --}}
                            <div @click="$refs.input.click()"
                                class="group cursor-pointer rounded-2xl border-2 border-dashed border-gray-300 bg-gray-50 p-5 transition hover:border-red-400 hover:bg-red-50/30">


                                {{-- Existing / New Image --}}
                                <template x-if="image">

                                    <div>

                                        <div class="mx-auto max-w-md overflow-hidden rounded-xl bg-white shadow-lg">

                                            <img :src="image" alt="Poster Mading"
                                                class="max-h-[650px] w-full object-contain">

                                        </div>


                                        <div class="mt-5 text-center">

                                            <p class="font-medium text-gray-900">

                                                Klik untuk mengganti poster

                                            </p>

                                            <p class="mt-1 text-sm text-gray-500">

                                                JPG, PNG, atau WEBP · Maks. 5 MB

                                            </p>

                                        </div>

                                    </div>

                                </template>


                                {{-- Empty State --}}
                                <template x-if="!image">

                                    <div class="py-16 text-center">

                                        <div
                                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-gray-100">

                                            <i class="ri-upload-cloud-2-line text-3xl text-gray-400"></i>

                                        </div>

                                        <h3 class="mt-5 font-semibold text-gray-900">

                                            Upload Poster

                                        </h3>

                                        <p class="mt-2 text-sm text-gray-500">

                                            Klik untuk memilih gambar poster.

                                        </p>

                                        <p class="mt-3 text-xs text-gray-400">

                                            JPG, PNG, WEBP · Maks. 5 MB

                                        </p>

                                    </div>

                                </template>

                            </div>


                            {{-- Actions --}}
                            <div x-show="image" x-cloak class="mt-5 flex flex-wrap gap-3">

                                <button type="button" @click="$refs.input.click()"
                                    class="inline-flex items-center gap-2 rounded-xl border border-gray-300 px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">

                                    <i class="ri-refresh-line"></i>

                                    Ganti Poster

                                </button>


                                <button type="button" @click="removeImage"
                                    class="inline-flex items-center gap-2 rounded-xl border border-red-200 bg-red-50 px-4 py-2.5 text-sm font-medium text-red-600 transition hover:bg-red-100">

                                    <i class="ri-delete-bin-line"></i>

                                    Hapus

                                </button>

                            </div>


                            {{-- Information --}}
                            <div class="mt-5 rounded-xl bg-blue-50 p-4">

                                <div class="flex items-start gap-3">

                                    <i class="ri-information-line mt-0.5 text-blue-500"></i>

                                    <p class="text-sm leading-6 text-blue-700">

                                        Gunakan poster dengan resolusi yang
                                        baik agar tetap terlihat jelas pada
                                        perangkat desktop maupun mobile.

                                    </p>

                                </div>

                            </div>

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

                                <label for="title" class="mb-2 block text-sm font-medium text-gray-700">

                                    Judul Mading

                                </label>

                                <input id="title" type="text" name="title"
                                    value="Open Recruitment LPM Retorika 2026"
                                    placeholder="Contoh: Open Recruitment LPM Retorika 2026"
                                    class="w-full rounded-xl border-gray-300
                                           focus:border-red-500
                                           focus:ring-red-500">

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

                                <textarea id="description" name="description" rows="5" placeholder="Tulis deskripsi singkat mengenai poster..."
                                    class="w-full rounded-xl border-gray-300
                                           focus:border-red-500
                                           focus:ring-red-500">Bergabunglah bersama keluarga besar LPM Retorika dan kembangkan kemampuanmu di dunia jurnalistik, desain, fotografi, videografi, dan media digital.</textarea>

                                <p class="mt-2 text-xs text-gray-400">

                                    Deskripsi dapat digunakan sebagai
                                    informasi tambahan pada Beranda.

                                </p>

                            </div>


                            {{-- Publication Date --}}
                            <div>

                                <label for="published_at" class="mb-2 block text-sm font-medium text-gray-700">

                                    Tanggal Publikasi

                                </label>

                                <input id="published_at" type="date" name="published_at" value="2026-08-03"
                                    class="w-full rounded-xl border-gray-300
                                           focus:border-red-500
                                           focus:ring-red-500">

                                <p class="mt-2 text-xs text-gray-400">

                                    Tanggal ketika Mading mulai ditampilkan.

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
                        <div x-data="{ status: 'active' }" class="space-y-4 p-6">


                            {{-- Active --}}
                            <label
                                class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                                :class="status === 'active'
                                    ?
                                    'border-red-500 bg-red-50' :
                                    ''">

                                <input type="radio" name="status" value="active" x-model="status"
                                    class="mt-1 text-red-600 focus:ring-red-500">

                                <div>

                                    <p class="font-medium text-gray-900">

                                        Aktif

                                    </p>

                                    <p class="mt-1 text-sm leading-6 text-gray-500">

                                        Poster ditampilkan pada halaman
                                        Beranda.

                                    </p>

                                </div>

                            </label>


                            {{-- Inactive --}}
                            <label
                                class="flex cursor-pointer items-start gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50/50"
                                :class="status === 'inactive'
                                    ?
                                    'border-red-500 bg-red-50' :
                                    ''">

                                <input type="radio" name="status" value="inactive" x-model="status"
                                    class="mt-1 text-red-600 focus:ring-red-500">

                                <div>

                                    <p class="font-medium text-gray-900">

                                        Nonaktif

                                    </p>

                                    <p class="mt-1 text-sm leading-6 text-gray-500">

                                        Poster tidak ditampilkan pada
                                        halaman Beranda.

                                    </p>

                                </div>

                            </label>

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

    </div>

</x-cms-layout>
