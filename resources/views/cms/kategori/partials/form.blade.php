{{-- ================================================= --}}
{{-- Form --}}
{{-- ================================================= --}}

<form action="#" method="POST">

    @csrf

    <div class="grid gap-8 lg:grid-cols-12">


        {{-- ================================================= --}}
        {{-- LEFT : Main Information --}}
        {{-- ================================================= --}}

        <div class="space-y-8 lg:col-span-8">

            @include('cms.kategori.partials.basic-information')
            @include('cms.kategori.partials.preview')


        </div>


        {{-- ================================================= --}}
        {{-- RIGHT : Settings --}}
        {{-- ================================================= --}}

        <div class="space-y-8 lg:col-span-4">

            @include('cms.kategori.partials.status')
            @include('cms.kategori.partials.information')
            @include('cms.kategori.partials.actions')
        </div>

    </div>

</form>
