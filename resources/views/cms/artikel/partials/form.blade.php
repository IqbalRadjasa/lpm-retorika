{{-- ================================================= --}}
{{-- Form --}}
{{-- ================================================= --}}

<form action="{{ $mode == 'create' ? route('cms.artikel.store') : route('cms.artikel.update', $artikel->id) }}"
    method="POST">
    @csrf
    @if ($mode == 'edit')
        @method('PUT')
    @endif

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
                @include('cms.artikel.partials.thumbnail')
                @include('cms.artikel.partials.publish')


            </div>

        </div>

    </div>

</form>
