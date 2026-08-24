{{-- ================================================= --}}
{{-- Article Content --}}
{{-- ================================================= --}}

<div class="overflow-hidden rounded-2xl bg-white shadow-sm">

    {{-- Header --}}
    <div class="flex items-start justify-between border-b border-gray-100 px-4 py-5 sm:px-6">

        <div class="min-w-0">

            <h2 class="text-lg font-semibold text-gray-900">
                Isi Artikel
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Tulis dan format isi artikel menggunakan editor.
            </p>

        </div>

        <div class="ml-4 flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

            <i class="ri-file-text-line text-xl"></i>

        </div>

    </div>


    {{-- Toolbar Information --}}
    <div class="border-b border-gray-100 bg-gray-50 px-4 py-4 sm:px-6">

        <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-500">

            <div class="flex items-center gap-2">
                <i class="ri-h-1"></i>
                Heading
            </div>

            <div class="flex items-center gap-2">
                <i class="ri-image-line"></i>
                Image
            </div>

            <div class="flex items-center gap-2">
                <i class="ri-double-quotes-l"></i>
                Quote
            </div>

            <div class="flex items-center gap-2">
                <i class="ri-list-check-2"></i>
                List
            </div>

            <div class="flex items-center gap-2">
                <i class="ri-table-line"></i>
                Table
            </div>

            <div class="flex items-center gap-2">
                <i class="ri-link"></i>
                Link
            </div>

        </div>

    </div>


    {{-- Editor --}}
    <div class="min-w-0 p-4 sm:p-6">

        <div class="min-w-0 max-w-full">

            <textarea id="editor" name="isi_artikel">
                {!! old('isi_artikel', $mode === 'edit' ? $artikel->isi_artikel : '') !!}
            </textarea>
        </div>
    </div>
</div>
