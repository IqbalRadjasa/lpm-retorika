<div x-data="{ open: false, beritaOpen: false }">

    {{-- ===================== --}}
    {{-- Navbar --}}
    {{-- ===================== --}}
    <nav class="fixed top-0 left-0 z-50 w-full navbar-custom border-b border-gray-200/60">

        <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">

            {{-- Logo --}}
            <a href="{{ route('beranda') }}" class="shrink-0">
                <x-application-logo class="h-9 w-auto" />
            </a>

            {{-- ===================== --}}
            {{-- Desktop Navigation --}}
            {{-- ===================== --}}
            <div class="hidden md:flex items-center gap-8">

                <x-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
                    Beranda
                </x-nav-link>

                <x-nav-dropdown title="Berita" :active="request()->routeIs('berita.*')">

                    <x-nav-dropdown-link :href="route('berita.isu-kampus')" :active="request()->routeIs('berita.isu-kampus')">
                        <i class="ri-newspaper-line mr-3"></i>
                        Isu Kampus
                    </x-nav-dropdown-link>

                    <x-nav-dropdown-link :href="route('berita.nasional')" :active="request()->routeIs('berita.nasional')">
                        <i class="ri-flag-line mr-3"></i>
                        Nasional
                    </x-nav-dropdown-link>

                    <x-nav-dropdown-link :href="route('berita.opini')" :active="request()->routeIs('berita.opini')">
                        <i class="ri-user-voice-line mr-3"></i>
                        Opini
                    </x-nav-dropdown-link>

                </x-nav-dropdown>

                <x-nav-link :href="route('majalah.index')" :active="request()->routeIs('majalah.index')">Majalah</x-nav-link>
                <x-nav-link>Tabloid</x-nav-link>
                <x-nav-link>Buletin</x-nav-link>
                <x-nav-link>Tentang Kami</x-nav-link>

            </div>

            {{-- Desktop Search --}}
            <div class="hidden md:flex items-center gap-3">

                <form>

                    <div class="relative">

                        <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"></i>

                        <input type="search" placeholder="Cari Berita..."
                            class="w-40 focus:w-72 h-10 pl-10 pr-4 text-sm bg-gray-200/70 rounded-full border border-transparent transition-all duration-300 placeholder:text-gray-400 focus:bg-white focus:border-red-400 focus:ring-0 focus:shadow-lg focus:shadow-red-400/30">

                    </div>

                </form>

            </div>

            {{-- Mobile --}}
            <div class="flex md:hidden">

                <button @click="open=true"
                    class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center">

                    <i class="ri-menu-line text-2xl"></i>

                </button>

            </div>

        </div>

    </nav>

    {{-- ===================== --}}
    {{-- Overlay --}}
    {{-- ===================== --}}
    <div x-show="open" x-cloak x-transition.opacity class="fixed inset-0 z-40 bg-black/40 backdrop-blur-sm"
        @click="open=false" style="display:none;">
    </div>

    {{-- ===================== --}}
    {{-- Drawer --}}
    {{-- ===================== --}}
    <aside x-show="open" x-cloak x-transition:enter="transform transition ease-out duration-300"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in duration-200" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-y-0 right-0 z-50 w-80 bg-white shadow-2xl flex flex-col" style="display:none;">

        {{-- Header --}}
        <div class="flex items-center justify-between p-5 border-b border-gray-200">

            <span class="text-xl font-bold">

                Menu

            </span>

            <button @click="open=false">

                <i class="ri-close-line text-2xl"></i>

            </button>

        </div>

        {{-- Search --}}
        <div class="p-5 border-b border-gray-200">

            <div class="relative">

                <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"></i>

                <input type="text" placeholder="Cari berita..."
                    class="w-full rounded-xl border border-gray-200 py-3 pl-10 pr-4 focus:border-red-500 focus:ring-0">

            </div>

        </div>

        {{-- Navigation --}}
        <div class="flex-1 overflow-y-auto py-2">

            <a href="{{ route('beranda') }}" class="flex items-center gap-3 px-5 py-4 hover:bg-gray-50">

                <i class="ri-home-4-line"></i>

                Beranda

            </a>

            <button @click="beritaOpen=!beritaOpen"
                class="w-full flex justify-between items-center px-5 py-4 hover:bg-gray-50">

                <div class="flex items-center gap-3">

                    <i class="ri-newspaper-line"></i>

                    Berita

                </div>

                <i class="ri-arrow-down-s-line transition duration-300" :class="{ 'rotate-180': beritaOpen }">
                </i>

            </button>

            <div x-show="beritaOpen" x-collapse x-cloak class="bg-gray-50">

                <a href="{{ route('berita.isu-kampus') }}" class="block py-3 pl-14 hover:bg-gray-100">
                    Isu Kampus
                </a>

                <a href="{{ route('berita.nasional') }}" class="block py-3 pl-14 hover:bg-gray-100">
                    Nasional
                </a>

                <a href="{{ route('berita.opini') }}" class="block py-3 pl-14 hover:bg-gray-100">
                    Opini
                </a>

            </div>

            <a href="{{route('majalah.index')}}" class="flex items-center gap-3 px-5 py-4 hover:bg-gray-50">
                <i class="ri-book-open-line"></i>
                Majalah
            </a>

            <a href="#" class="flex items-center gap-3 px-5 py-4 hover:bg-gray-50">
                <i class="ri-file-paper-2-line"></i>
                Tabloid
            </a>

            <a href="#" class="flex items-center gap-3 px-5 py-4 hover:bg-gray-50">
                <i class="ri-article-line"></i>
                Buletin
            </a>

            <a href="#" class="flex items-center gap-3 px-5 py-4 hover:bg-gray-50">
                <i class="ri-information-line"></i>
                Tentang Kami
            </a>

        </div>

    </aside>

</div>
