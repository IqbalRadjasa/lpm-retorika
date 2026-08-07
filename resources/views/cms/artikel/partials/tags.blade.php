{{-- ================================================= --}}
{{-- Tags --}}
{{-- ================================================= --}}

<div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
    <div x-data="tagsInput()">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

            <div>

                <h2 class="text-lg font-semibold text-gray-900">
                    Tags
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Tambahkan kata kunci untuk membantu mengelompokkan
                    dan menemukan artikel.
                </p>

            </div>

            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-cyan-50 text-cyan-600">

                <i class="ri-hashtag text-xl"></i>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Body --}}
        {{-- ================================================= --}}

        <div class="p-6">

            {{-- Input --}}
            <div class="flex flex-col gap-3 sm:flex-row">

                <input x-model="input" @keydown.enter.prevent="addTag" type="text"
                    placeholder="Ketik tag lalu tekan Enter..."
                    class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

                <button type="button" @click="addTag"
                    class="inline-flex shrink-0 items-center justify-center gap-2
                       rounded-xl bg-red-600 px-5 py-3
                       font-medium text-white
                       transition hover:bg-red-700">

                    <i class="ri-add-line"></i>

                    Tambah

                </button>

            </div>


            {{-- Tag Counter --}}
            <div class="mt-3 flex items-center justify-between">

                <p class="text-xs text-gray-400">

                    Tekan <strong>Enter</strong> untuk menambahkan tag.

                </p>

                <span class="text-xs text-gray-400">

                    <span x-text="tags.length"></span>/10 tag

                </span>

            </div>


            {{-- Tags --}}
            <div x-show="tags.length > 0" x-cloak class="mt-5 flex flex-wrap gap-3">

                <template x-for="(tag, index) in tags" :key="index">

                    <div
                        class="inline-flex items-center gap-2
                           rounded-full bg-red-100
                           px-4 py-2
                           text-sm font-medium text-red-700">

                        <i class="ri-price-tag-3-line text-sm"></i>

                        <span x-text="tag"></span>

                        <button type="button" @click="removeTag(index)"
                            class="ml-1 flex h-5 w-5 items-center justify-center
                               rounded-full
                               text-red-500
                               transition hover:bg-red-200
                               hover:text-red-800">

                            <i class="ri-close-line"></i>

                        </button>

                    </div>

                </template>

            </div>


            {{-- Empty State --}}
            <div x-show="tags.length === 0" x-cloak
                class="mt-5 rounded-xl border border-dashed
                   border-gray-200 bg-gray-50 p-5 text-center">

                <i class="ri-price-tag-3-line text-2xl text-gray-300"></i>

                <p class="mt-2 text-sm text-gray-500">

                    Belum ada tag yang ditambahkan.

                </p>

            </div>


            {{-- Hidden Inputs --}}
            <template x-for="tag in tags">

                <input type="hidden" name="tags[]" :value="tag">

            </template>


            {{-- Tips --}}
            <div class="mt-6 rounded-xl bg-gray-50 p-4">

                <div class="flex items-start gap-3">

                    <i class="ri-information-line mt-0.5 text-gray-400"></i>

                    <div>

                        <p class="text-sm font-medium text-gray-700">
                            Tips
                        </p>

                        <p class="mt-1 text-sm leading-6 text-gray-500">

                            Gunakan kata atau frasa yang relevan dengan
                            isi artikel.

                            Contoh:
                            Mahasiswa, Pendidikan, Organisasi,
                            Pers Mahasiswa.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
