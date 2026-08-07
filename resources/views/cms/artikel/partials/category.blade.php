<div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

    {{-- Header --}}
    <div class="flex items-start justify-between border-b border-gray-100 px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold text-gray-900">

                Category

            </h2>

            <p class="mt-1 text-sm text-gray-500">

                Pilih kategori artikel.

            </p>

        </div>

        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-orange-600">

            <i class="ri-price-tag-3-line text-xl"></i>

        </div>

    </div>

    {{-- Body --}}
    <div class="p-6">

        <div class="space-y-3">

            @php
                $categories = [
                    ['Berita', 'ri-newspaper-line'],
                    ['Isu Kampus', 'ri-building-line'],
                    ['Nasional', 'ri-government-line'],
                    ['Opini', 'ri-chat-quote-line'],
                    ['Majalah', 'ri-book-open-line'],
                    ['Tabloid', 'ri-file-paper-2-line'],
                    ['Buletin', 'ri-file-list-3-line'],
                    ['Podcast', 'ri-mic-line'],
                    ['Mading', 'ri-pushpin-line'],
                ];
            @endphp

            @foreach ($categories as [$category, $icon])
                <label
                    class="group flex cursor-pointer items-center gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-red-300 hover:bg-red-50">

                    <input type="radio" name="category" value="{{ $category }}"
                        class="h-4 w-4 border-gray-300 text-red-600 focus:ring-red-500">

                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-500 transition group-hover:bg-red-100 group-hover:text-red-600">

                        <i class="{{ $icon }}"></i>

                    </div>

                    <span class="font-medium text-gray-700">

                        {{ $category }}

                    </span>

                </label>
            @endforeach

        </div>

    </div>

</div>
