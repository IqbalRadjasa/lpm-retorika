{{-- ================================================= --}}
{{-- Actions --}}
{{-- ================================================= --}}

<div class="space-y-3">


    {{-- Save --}}
    <button type="submit"
        class="inline-flex w-full
        items-center
        justify-center gap-2
        rounded-xl bg-red-600
        px-5 py-3
        font-semibold text-white
        transition hover:bg-red-700">

        <i class="ri-save-line"></i>

        @if ($mode === 'edit')
            Simpan Perubahan
        @else
            Simpan Kategori
        @endif

    </button>


    {{-- Cancel --}}
    <a href="{{ route('cms.kategori.index') }}"
        class="inline-flex w-full
        items-center
        justify-center gap-2
        rounded-xl border
        border-gray-300
        bg-white px-5 py-3
        font-semibold text-gray-700
        transition hover:bg-gray-50">

        <i class="ri-close-line"></i>

        Batal

    </a>

</div>
