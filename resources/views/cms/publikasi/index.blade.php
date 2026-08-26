<x-cms-layout>

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}
        @if (session('success'))
            <div
                class="mb-6 rounded-xl border border-green-200
                        bg-green-50 px-4 py-3 text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div
                class="mb-6 rounded-xl border border-red-200
                        bg-red-50 px-4 py-3 text-sm text-red-700">
                <ul class="list-disc space-y-1 pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex flex-col gap-4 pb-6 md:flex-row md:items-center md:justify-between">

            <div>

                <h1 class="text-xl font-semibold text-gray-900">
                    Publikasi
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola majalah, tabloid, dan buletin LPM Retorika.
                </p>

            </div>

            <x-link-button.primary-link :href="route('cms.publikasi.create')" icon="ri-add-line">

                Tambah Publikasi

            </x-link-button.primary-link>

        </div>


        {{-- ================================================= --}}
        {{-- Statistics --}}
        {{-- ================================================= --}}

        <div class="grid gap-5 md:grid-cols-1 xl:grid-cols-3">

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Total Publikasi

                </p>

                <h2 class="mt-2 text-4xl font-bold">
                    {{ $totalPublikasi }}
                </h2>

            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Published

                </p>

                <h2 class="mt-2 text-4xl font-bold text-green-600">
                    {{ $totalPublished }}
                </h2>

            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">

                <p class="text-gray-500">

                    Draft

                </p>

                <h2 class="mt-2 text-4xl font-bold text-yellow-500">
                    {{ $totalDrafted }}
                </h2>

            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Filter --}}
        {{-- ================================================= --}}

        <div class="rounded-2xl bg-white p-6 shadow-sm">

            <form action="{{ url()->current() }}" method="GET" class="grid gap-4 lg:grid-cols-[1fr_220px_220px_auto]">

                <x-form.text-input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Cari publikasi..." />

                <x-form.select-input name="kategori_id">
                    <option value="">
                        Semua Kategori
                    </option>
                    @foreach ($kategoris as $k)
                        <option value="{{ $k->id }}" {{ request('kategori_id') == $k->id ? 'selected' : '' }}>
                            {{ $k->nama }}
                        </option>
                    @endforeach
                </x-form.select-input>

                <x-form.select-input name="status_id">
                    <option value="">
                        Semua Status
                    </option>
                    @foreach ($statuses as $s)
                        <option value="{{ $s->id }}" {{ request('status_id') == $s->id ? 'selected' : '' }}>
                            {{ ucfirst($s->slug) }}
                        </option>
                    @endforeach
                </x-form.select-input>

                <x-button.primary-button>

                    Filter

                </x-button.primary-button>

            </form>

        </div>


        {{-- ================================================= --}}
        {{-- Publication Grid --}}
        {{-- ================================================= --}}

        <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
            @forelse ($publikasis as $p)
                <article
                    class="group overflow-hidden rounded-2xl bg-white shadow-sm
                        ring-1 ring-gray-100 transition
                        hover:-translate-y-1 hover:shadow-lg">

                    {{-- Cover --}}
                    <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">

                        <img src="{{ $p->cover_asset->getFirstMedia('library')->original_url }}"
                            alt="{{ $p->cover_asset->alt_text ?? $p->cover_asset->name }}"
                            class="h-full w-full object-cover
                                transition duration-500
                                group-hover:scale-105">


                        {{-- Category --}}
                        <div class="absolute left-4 top-4">

                            <span
                                class="inline-flex items-center gap-1.5
                                    rounded-full bg-red-100
                                    px-3 py-1.5
                                    text-xs font-semibold text-red-600
                                    shadow-sm">

                                @switch($p->kategori->slug)
                                    @case('majalah')
                                        <i class="ri-book-open-line"></i>
                                    @break

                                    @case('tabloid')
                                        <i class="ri-newspaper-line"></i>
                                    @break

                                    @case('buletin')
                                        <i class="ri-file-list-3-line"></i>
                                    @break

                                    @default
                                @endswitch

                                {{ $p->kategori->nama }}
                            </span>
                        </div>


                        {{-- Status --}}
                        <div class="absolute right-4 top-4">
                            <span class="rounded-full capitalize px-4 py-2 text-sm font-semibold"
                                :class="{
                                    'bg-yellow-100 text-yellow-700': {{ $p->status->id }} == 1,
                                    'bg-green-100 text-green-700': {{ $p->status->id }} == 2
                                }">

                                {{ $p->status->slug }}

                            </span>
                        </div>
                    </div>


                    {{-- Content --}}
                    <div class="p-5">

                        <h2
                            class="text-lg font-semibold text-gray-900
                                transition group-hover:text-red-600">

                            {{ $p->judul }}
                        </h2>

                        <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">
                            <span>
                                <i class="ri-bookmark-line mr-1"></i>{{ $p->edisi }}
                            </span>
                            ·
                            <span>
                                <i class="ri-stack-line"></i>
                                {{ $p->volume }}
                            </span>
                        </div>

                        <div class="mt-3 flex items-center gap-2 text-sm text-gray-500">
                            <i class="ri-calendar-line"></i>

                            {{ $p->created_at->translatedFormat('d F Y') }}
                        </div>


                        <p class="mt-4 line-clamp-2 text-sm leading-6 text-gray-500">
                            {{ $p->deskripsi }}
                        </p>


                        {{-- Actions --}}
                        <div class="mt-5 flex gap-2">
                            <x-link-button.secondary-link :href="route('cms.publikasi.show', $p->id)" icon="ri-eye-line" class="flex-1">
                                Detail
                            </x-link-button.secondary-link>

                            <x-link-button.primary-link :href="'#'" icon="ri-edit-line" class="flex-1">
                                Edit
                            </x-link-button.primary-link>
                        </div>
                    </div>
                </article>

                @empty
                    {{-- ================================================= --}}
                    {{-- Empty State --}}
                    {{-- ================================================= --}}

                    <div class="rounded-2xl bg-white p-12 text-center shadow-sm">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center
                            rounded-2xl bg-gray-100">

                            <i class="ri-book-open-line text-3xl text-gray-400"></i>

                        </div>

                        <h3 class="mt-5 text-lg font-semibold text-gray-900">
                            Belum ada publikasi
                        </h3>

                        <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                            Belum ada majalah, tabloid, atau buletin
                            yang ditambahkan.
                        </p>
                    </div>
                @endforelse

            </div>


            {{-- ================================================= --}}
            {{-- Pagination --}}
            {{-- ================================================= --}}

            <div class="rounded-2xl bg-white p-5 shadow-sm">
                {{ $publikasis->links('vendor.pagination.default') }}
            </div>
        </div>
    </x-cms-layout>
