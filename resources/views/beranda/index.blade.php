<x-app-layout>

    <main class="
        pt-30
        max-w-screen-xl
        mx-auto
        px-4
        sm:px-6
        lg:px-8">

        {{-- Mading --}}
        @include('beranda.partials.mading')

        {{-- <hr class="max-w-screen-xl mx-auto text-gray-300"> --}}

        {{-- Hero --}}
        @include('beranda.partials.hero')

        {{-- Podcast --}}
        @include('beranda.partials.podcast')

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Latest Release --}}
        {{-- @include('beranda.partials.latest-release') --}}

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Campus, National & Opinion --}}
        @include('beranda.partials.news-by-category')

        <hr class="max-w-screen-xl mx-auto text-gray-300">

        {{-- Publications --}}
        @include('beranda.partials.publication')
    </main>

</x-app-layout>
