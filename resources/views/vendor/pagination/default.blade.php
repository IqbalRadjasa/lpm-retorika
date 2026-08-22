@if ($paginator->hasPages() || $paginator->total() > 0)
    <div class="mt-8 flex flex-col gap-3 border-t border-gray-100 pt-6 sm:flex-row sm:items-center sm:justify-between">

        {{-- Info Jumlah Data --}}
        <p class="text-sm text-gray-500">
            Menampilkan
            <span class="font-medium text-gray-700">
                {{ $paginator->firstItem() ?? 0 }}&nbsp;–&nbsp;{{ $paginator->lastItem() ?? 0 }}
            </span>
            dari
            <span class="font-medium text-gray-700">
                {{ $paginator->total() }}
            </span>
            data
        </p>

        {{-- Navigation Buttons --}}
        <div class="flex items-center gap-2">

            {{-- Tombol Previous --}}
            @if ($paginator->onFirstPage())
                <button type="button" disabled
                    class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed">
                    <i class="ri-arrow-left-s-line"></i>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50">
                    <i class="ri-arrow-left-s-line"></i>
                </a>
            @endif

            {{-- Element Angka Halaman & Dots (...) --}}
            @foreach ($elements as $element)
                {{-- Text "..." jika halaman terlalu banyak --}}
                @if (is_string($element))
                    <span class="inline-flex h-9 w-9 items-center justify-center text-sm text-gray-400">
                        {{ $element }}
                    </span>
                @endif

                {{-- Array URL Halaman --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-red-600 text-sm font-medium text-white">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-sm text-gray-600 hover:bg-gray-50">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Tombol Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50">
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            @else
                <button type="button" disabled
                    class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed">
                    <i class="ri-arrow-right-s-line"></i>
                </button>
            @endif

        </div>
    </div>
@endif
