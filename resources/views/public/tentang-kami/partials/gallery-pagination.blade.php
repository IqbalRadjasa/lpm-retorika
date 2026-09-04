@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center gap-2 mt-8">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-400 cursor-not-allowed">
                <i class="ri-arrow-left-s-line"></i>
            </span>
        @else
            <button type="button" @click.prevent="fetchGallery('{{ $paginator->previousPageUrl() }}')"
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white">
                <i class="ri-arrow-left-s-line"></i>
            </button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="flex h-10 w-10 items-center justify-center text-sm font-medium text-gray-400">
                    {{ $element }}
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-red-600 text-sm font-semibold text-white shadow-md">
                            {{ $page }}
                        </span>
                    @else
                        <button type="button" @click.prevent="fetchGallery('{{ $url }}')"
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-sm font-semibold text-gray-700 transition hover:bg-red-50 hover:text-red-600">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button type="button" @click.prevent="fetchGallery('{{ $paginator->nextPageUrl() }}')"
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-700 transition hover:bg-red-600 hover:text-white">
                <i class="ri-arrow-right-s-line"></i>
            </button>
        @else
            <span
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-400 cursor-not-allowed">
                <i class="ri-arrow-right-s-line"></i>
            </span>
        @endif
    </nav>
@endif
