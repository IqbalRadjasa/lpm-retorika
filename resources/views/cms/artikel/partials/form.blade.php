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

                {{-- @include('cms.artikel.partials.tags') --}}

                @include('cms.artikel.partials.publish')


            </div>

        </div>

    </div>

</form>
