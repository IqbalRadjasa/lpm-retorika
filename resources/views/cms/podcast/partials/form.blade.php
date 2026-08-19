{{-- ================================================= --}}
{{-- Form --}}
{{-- ================================================= --}}

<form action="#" method="POST" enctype="multipart/form-data">

    @csrf


    <div class="grid gap-8 xl:grid-cols-12">


        {{-- ================================================= --}}
        {{-- LEFT --}}
        {{-- ================================================= --}}

        <div class="space-y-8 xl:col-span-8">


            {{-- Information --}}
            @include('cms.podcast.partials.information')


            {{-- Video --}}
            @include('cms.podcast.partials.video')
        </div>


        {{-- ================================================= --}}
        {{-- RIGHT --}}
        {{-- ================================================= --}}

        <div class="space-y-8 xl:col-span-4">

            <div class="sticky top-24 space-y-8">


                {{-- Thumbnail --}}
                @include('cms.podcast.partials.thumbnail')


                {{-- Publish --}}
                @include('cms.podcast.partials.publish')

            </div>

        </div>

    </div>

</form>

{{-- Media Picker --}}
@include('components.cms.media-picker')
