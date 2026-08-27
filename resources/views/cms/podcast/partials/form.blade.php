{{-- ================================================= --}}
{{-- Form --}}
{{-- ================================================= --}}

<form action="{{ $mode == 'create' ? route('cms.podcast.store') : route('cms.podcast.update', $podcast->id) }}"
    method="POST">
    @csrf
    @if ($mode == 'edit')
        @method('PUT')
    @endif



    <div class="grid gap-8 xl:grid-cols-12">


        {{-- ================================================= --}}
        {{-- LEFT --}}
        {{-- ================================================= --}}
        <div class="space-y-8 xl:col-span-8">
            @include('cms.podcast.partials.information')
            @include('cms.podcast.partials.video')
        </div>

        {{-- ================================================= --}}
        {{-- RIGHT --}}
        {{-- ================================================= --}}
        <div class="space-y-8 xl:col-span-4">
            <div class="sticky top-24 space-y-8">
                @include('cms.podcast.partials.thumbnail')
                @include('cms.podcast.partials.publish')
            </div>
        </div>
    </div>
</form>
