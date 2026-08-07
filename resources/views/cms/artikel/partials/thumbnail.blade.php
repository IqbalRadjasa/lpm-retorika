<div x-data="thumbnailUploader()" class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

    {{-- Header --}}
    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                Featured Image

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Thumbnail utama artikel.

            </p>

        </div>

        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

            <i class="ri-image-line text-xl"></i>

        </div>

    </div>

    {{-- Body --}}
    <div class="p-6">

        <input x-ref="input" type="file" name="thumbnail" accept="image/*" class="hidden" @change="previewImage">

        {{-- Upload Area --}}
        <div @click="$refs.input.click()" @dragover.prevent @drop.prevent="dropImage"
            class="cursor-pointer rounded-2xl border-2 border-dashed border-gray-300 p-8 text-center transition hover:border-red-400 hover:bg-red-50">

            {{-- No Image --}}
            <template x-if="!image">

                <div>

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-gray-100">

                        <i class="ri-upload-cloud-2-line text-3xl text-gray-500"></i>

                    </div>

                    <h3 class="mt-5 text-lg font-semibold">

                        Upload Thumbnail

                    </h3>

                    <p class="mt-2 text-sm text-gray-500">

                        Drag & drop gambar ke sini
                        atau klik untuk memilih.

                    </p>

                    <p class="mt-3 text-xs text-gray-400">

                        JPG, PNG, WEBP • Maks. 2 MB • Disarankan 1200 × 700 px

                    </p>

                </div>

            </template>

            {{-- Preview --}}
            <template x-if="image">

                <div>

                    <img :src="image" class="mx-auto rounded-xl shadow-lg max-h-72 object-cover">

                    <div class="mt-5">

                        <h4 class="font-semibold">

                            Thumbnail Ready

                        </h4>

                        <p class="mt-1 text-sm text-gray-500">

                            Klik untuk mengganti gambar.

                        </p>

                    </div>

                </div>

            </template>

        </div>

        {{-- Actions --}}
        <div x-show="image" class="mt-5 flex gap-3">

            <button type="button" @click="$refs.input.click()"
                class="inline-flex items-center gap-2 rounded-xl border border-gray-300 px-4 py-2 text-sm hover:bg-gray-100">

                <i class="ri-refresh-line"></i>

                Replace

            </button>

            <button type="button" @click="removeImage"
                class="inline-flex items-center gap-2 rounded-xl border border-red-200 bg-red-50 px-4 py-2 text-sm text-red-600 hover:bg-red-100">

                <i class="ri-delete-bin-line"></i>

                Remove

            </button>

        </div>

    </div>

</div>
