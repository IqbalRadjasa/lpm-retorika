<nav class="fixed top-0 start-0 z-50 w-full navbar-custom border-b border-gray-200/60">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('beranda') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="input-group-1"
                    class="block w-full ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-2.5 py-2 shadow-xs placeholder:text-body"
                    placeholder="Search">
            </div>
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
                        {{ __('Beranda') }}
                    </x-nav-link>

                    <x-nav-dropdown title="Berita" :active="request()->routeIs('berita.*')">
                        <x-nav-dropdown-link>
                            <i class="ri-newspaper-line mr-3"></i>
                            Isu Kampus
                        </x-nav-dropdown-link>
                        <x-nav-dropdown-link>
                            <i class="ri-flag-line mr-3"></i>
                            Nasional
                        </x-nav-dropdown-link>
                    </x-nav-dropdown>

                    <x-nav-link>
                        {{ __('Majalah') }}
                    </x-nav-link>

                    <x-nav-link>
                        {{ __('Tabloid') }}
                    </x-nav-link>

                    <x-nav-link>
                        {{ __('Buletin') }}
                    </x-nav-link>

                    <x-nav-link>
                        {{ __('Tentang Kami') }}
                    </x-nav-link>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3 md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class="flex items-center justify-center md:hidden text-body hover:text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-2 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm w-10 h-10 focus:outline-none">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <label for="input-group-1" class="sr-only">Your Email</label>

            <form class="mx-auto">
                <label for="search" class="sr-only">Search</label>

                <div class="relative">

                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <i class="ri-search-line"></i>
                    </div>

                    <input id="search" type="search" placeholder="Cari Berita..."
                        class="peer
                                w-40
                                focus:w-72
                                h-10
                                pl-10
                                pr-4
                                text-sm
                                bg-gray-200/70
                                rounded-full
                                border
                                border-transparent
                                outline-none
                                transition-all
                                duration-300
                                ease-in-out
                                placeholder:text-gray-400
                                focus:bg-white/70
                                focus:border-red-400
                                focus:ring-0
                                focus:shadow-lg
                                focus:shadow-red-400/30" />
                </div>
            </form>

            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>

            {{-- <button
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200/70 transition-all duration-200 ease-in-out hover:bg-red-600/70 hover:text-white"
                type="button">
                <i class="ri-moon-fill text-lg"></i>
            </button> --}}
        </div>
    </div>
</nav>
