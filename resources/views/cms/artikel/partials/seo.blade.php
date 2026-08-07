<div x-data="seoHelper()" class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

    {{-- ========================================= --}}
    {{-- Header --}}
    {{-- ========================================= --}}

    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                SEO Settings

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Optimalkan artikel agar mudah ditemukan di mesin pencari.

            </p>

        </div>

        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

            <i class="ri-global-line text-xl"></i>

        </div>

    </div>

    {{-- ========================================= --}}
    {{-- Body --}}
    {{-- ========================================= --}}

    <div class="space-y-7 p-6">

        {{-- SEO Title --}}
        <div>

            <div class="mb-2 flex items-center justify-between">

                <label class="text-sm font-medium text-gray-700">

                    SEO Title

                </label>

                <span
                    :class="seoTitle.length > 60 ?
                        'text-red-600' :
                        'text-gray-400'"
                    class="text-xs">

                    <span x-text="seoTitle.length"></span>/60

                </span>

            </div>

            <input x-model="seoTitle" type="text" name="seo_title" placeholder="Judul SEO..."
                class="w-full rounded-xl border-gray-300
                focus:border-red-500
                focus:ring-red-500">

        </div>

        {{-- Meta Description --}}
        <div>

            <div class="mb-2 flex items-center justify-between">

                <label class="text-sm font-medium text-gray-700">

                    Meta Description

                </label>

                <span
                    :class="metaDescription.length > 160 ?
                        'text-red-600' :
                        'text-gray-400'"
                    class="text-xs">

                    <span x-text="metaDescription.length"></span>/160

                </span>

            </div>

            <textarea x-model="metaDescription" rows="4" name="meta_description" placeholder="Ringkasan artikel..."
                class="w-full rounded-xl border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

            </textarea>

        </div>

        {{-- Slug --}}
        <div>

            <label class="mb-2 block text-sm font-medium text-gray-700">

                URL Slug

            </label>

            <div class="flex overflow-hidden rounded-xl border border-gray-300">

                <span class="flex items-center bg-gray-100 px-4 text-sm text-gray-500">

                    retorika.id/

                </span>

                <input x-model="slug" type="text" name="slug" class="w-full border-0 focus:ring-0"
                    placeholder="judul-artikel">

            </div>

        </div>

        {{-- SEO Preview --}}
        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-5">

            <p class="text-xs uppercase tracking-wider text-gray-400">

                Google Preview

            </p>

            <h3 class="mt-3 text-xl font-semibold text-blue-700">

                <span x-text="seoTitle || 'Judul Artikel SEO'">

                </span>

            </h3>

            <p class="mt-1 text-sm text-green-700">

                https://retorika.id/

                <span x-text="slug || 'judul-artikel'"></span>

            </p>

            <p class="mt-3 text-sm leading-6 text-gray-600">

                <span x-text="metaDescription || 'Meta description akan tampil di sini.'">

                </span>

            </p>

        </div>

        {{-- Tips --}}
        <div class="rounded-xl border border-amber-200 bg-amber-50 p-4">

            <div class="flex gap-3">

                <i class="ri-lightbulb-line mt-0.5 text-xl text-amber-500"></i>

                <div>

                    <h4 class="font-medium text-amber-900">

                        SEO Tips

                    </h4>

                    <ul class="mt-2 space-y-1 text-sm leading-6 text-amber-800">

                        <li>• Gunakan judul maksimal 60 karakter.</li>

                        <li>• Meta description sekitar 150–160 karakter.</li>

                        <li>• Slug gunakan huruf kecil dan tanda minus (-).</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>
