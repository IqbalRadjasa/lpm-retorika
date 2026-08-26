{{-- ================================================= --}}
{{-- Form --}}
{{-- ================================================= --}}

{{-- <form action="{{ route('cms.publikasi.store') }}" method="POST"> --}}
<form action="{{ $mode == 'create' ? route('cms.publikasi.store') : route('cms.publikasi.update', $publikasi->id) }}"
    method="POST">
    @csrf
    @if ($mode == 'edit')
        @method('PUT')
    @endif

    <div class="grid gap-8 xl:grid-cols-12">

        {{-- ============================================= --}}
        {{-- LEFT --}}
        {{-- ============================================= --}}

        <div class="space-y-8 xl:col-span-8">
            @include('cms.publikasi.partials.information')
            @include('cms.publikasi.partials.file')
        </div>

        {{-- ============================================= --}}
        {{-- RIGHT --}}
        {{-- ============================================= --}}
        <div class="space-y-8 xl:col-span-4">
            <div class="sticky top-24 space-y-8">
                @include('cms.publikasi.partials.cover')
                @include('cms.publikasi.partials.publish')
            </div>
        </div>
    </div>
</form>
