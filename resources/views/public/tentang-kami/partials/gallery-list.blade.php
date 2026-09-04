{{-- Grid Galeri --}}
@forelse ($galeri as $item)
    @php
        $media = $item->getFirstMedia('library');
    @endphp

    @if ($loop->first)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @endif

    <div
        class="group relative aspect-square overflow-hidden rounded-2xl bg-gray-100 shadow-sm transition hover:shadow-lg">
        @if ($media && $media->original_url)
            <img src="{{ $media->original_url }}" alt="{{ $item->alt_text ?? $item->name }}"
                class="h-full w-full object-cover transition duration-500 group-hover:scale-110" loading="lazy">
        @else
            <div
                class="flex h-full w-full flex-col items-center justify-center bg-gray-100 text-gray-400 p-4 text-center">
                <i class="ri-image-line text-3xl mb-1 text-gray-300"></i>
                <span class="text-xs font-medium text-gray-400">Tidak ada gambar</span>
            </div>
        @endif

        {{-- Overlay saat di-hover --}}
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 transition duration-300 group-hover:opacity-100 flex items-end p-4">
            <p class="text-xs font-medium text-white">{{ $item->name }}</p>
        </div>
    </div>

    @if ($loop->last)
        </div>
    @endif
@empty
    {{-- Empty State --}}
    <div
        class="flex flex-col items-center justify-center rounded-3xl border border-dashed border-gray-200 bg-gray-50/50 p-12 text-center">
        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-red-50 text-red-600 mb-4">
            <i class="ri-gallery-line text-3xl"></i>
        </div>
        <h3 class="text-base font-semibold text-gray-900">Belum Ada Galeri</h3>
        <p class="mt-1 text-sm text-gray-500 max-w-sm">
            Foto dokumentasi dan kegiatan akan ditampilkan di sini setelah ditambahkan.
        </p>
    </div>
@endforelse

{{-- Link Pagination Menggunakan Template Custom --}}
<div class="mt-8">
    {{ $galeri->links('public.tentang-kami.partials.gallery-pagination') }}
</div>
