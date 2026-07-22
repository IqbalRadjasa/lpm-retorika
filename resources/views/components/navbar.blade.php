<nav class="sticky top-0 z-50 bg-white shadow-sm border-b">

    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" class="h-12" alt="Logo">
            </a>

            {{-- Menu Desktop --}}
            <div class="hidden lg:flex items-center gap-8">

                <a href="#" class="font-medium hover:text-red-700">
                    Beranda
                </a>

                <a href="#" class="font-medium hover:text-red-700">
                    Berita
                </a>

                <a href="#" class="font-medium hover:text-red-700">
                    Ekonomi
                </a>

                <a href="#" class="font-medium hover:text-red-700">
                    Kampus
                </a>

                <a href="#" class="font-medium hover:text-red-700">
                    Opini
                </a>

                <a href="#" class="font-medium hover:text-red-700">
                    Galeri
                </a>

                <a href="#" class="font-medium hover:text-red-700">
                    Tentang
                </a>

            </div>

            {{-- Search + Mobile --}}
            <div class="flex items-center gap-3">

                <button class="w-10 h-10 rounded-full hover:bg-gray-100">

                    <i class="ri-search-line text-xl"></i>

                </button>

                <button data-collapse-toggle="mobile-menu" class="lg:hidden w-10 h-10 rounded-full hover:bg-gray-100">

                    <i class="ri-menu-line text-2xl"></i>

                </button>

            </div>

        </div>

    </div>

    {{-- Mobile Menu --}}
    <div class="hidden lg:hidden border-t" id="mobile-menu">

        <div class="flex flex-col p-4">

            <a class="py-2" href="#">Home</a>
            <a class="py-2" href="#">Berita</a>
            <a class="py-2" href="#">Ekonomi</a>
            <a class="py-2" href="#">Kampus</a>
            <a class="py-2" href="#">Opini</a>
            <a class="py-2" href="#">Galeri</a>
            <a class="py-2" href="#">Tentang</a>

        </div>

    </div>

</nav>
