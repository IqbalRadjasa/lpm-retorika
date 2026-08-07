<x-cms-layout>

    <div class="space-y-8 py-6">

        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div>

                <a href="{{ route('cms.artikel.index') }}"
                    class="inline-flex items-center gap-2 text-sm text-gray-500 transition hover:text-red-600">

                    <i class="ri-arrow-left-line"></i>

                    Back to artikel

                </a>

                <h1 class="mt-3 text-3xl font-bold text-gray-900">

                    Create Article

                </h1>

                <p class="mt-2 text-gray-500">

                    Tulis dan publikasikan artikel baru.

                </p>

            </div>

            {{-- <div class="flex gap-3">

                <x-button.secondary-button>

                    Save Draft

                </x-button.secondary-button>

                <x-button.primary-button>

                    Publish

                </x-button.primary-button>

            </div> --}}

        </div>

        {{-- ================================================= --}}
        {{-- Form --}}
        {{-- ================================================= --}}

        <form action="#" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="grid gap-8 xl:grid-cols-12">

                {{-- ============================================= --}}
                {{-- LEFT --}}
                {{-- ============================================= --}}

                <div class="min-w-0 space-y-8 xl:col-span-8">

                    @include('cms.artikel.partials.basic-information')

                    @include('cms.artikel.partials.content')

                </div>

                {{-- ============================================= --}}
                {{-- RIGHT --}}
                {{-- ============================================= --}}
                <div class="space-y-8 xl:col-span-4">

                    <div class="space-y-8 xl:sticky xl:top-24">


                        {{-- @include('cms.artikel.partials.category') --}}

                        @include('cms.artikel.partials.thumbnail')

                        {{-- @include('cms.artikel.partials.seo') --}}

                        @include('cms.artikel.partials.tags')

                        @include('cms.artikel.partials.publish')


                    </div>

                </div>

            </div>

        </form>

    </div>

</x-cms-layout>
