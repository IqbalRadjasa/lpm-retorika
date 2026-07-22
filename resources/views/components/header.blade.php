@php
    use Carbon\Carbon;

    Carbon::setLocale('id');
@endphp

<header class="border-b bg-white">

    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-10 text-sm text-gray-500">

            <span>
                {{ Carbon::now()->translatedFormat('l, d F Y') }}
            </span>

            <div class="hidden md:flex items-center gap-4">

                <a href="#" class="hover:text-red-700">
                    <i class="ri-instagram-line text-lg"></i>
                </a>

                <a href="#" class="hover:text-red-700">
                    <i class="ri-facebook-circle-line text-lg"></i>
                </a>

                <a href="#" class="hover:text-red-700">
                    <i class="ri-twitter-x-line text-lg"></i>
                </a>

                <a href="#" class="hover:text-red-700">
                    <i class="ri-youtube-line text-lg"></i>
                </a>

            </div>

        </div>

    </div>

</header>
