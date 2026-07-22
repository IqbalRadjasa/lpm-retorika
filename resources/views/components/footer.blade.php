<footer class="bg-gray-900 text-white mt-20">

    <div class="max-w-7xl mx-auto px-4 py-16">

        <div class="grid lg:grid-cols-4 gap-10">

            {{-- Logo --}}
            <div>

                <h2 class="text-2xl font-bold text-red-500">
                    Suara Kampus
                </h2>

                <p class="mt-4 text-gray-400 leading-7">

                    Portal berita mahasiswa yang menyajikan
                    informasi kampus, ekonomi, opini,
                    dan berbagai kegiatan mahasiswa.

                </p>

            </div>

            {{-- Menu --}}
            <div>

                <h3 class="font-semibold mb-4">
                    Menu
                </h3>

                <ul class="space-y-3 text-gray-400">

                    <li><a href="#">Home</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Tentang</a></li>

                </ul>

            </div>

            {{-- Contact --}}
            <div>

                <h3 class="font-semibold mb-4">
                    Kontak
                </h3>

                <ul class="space-y-3 text-gray-400">

                    <li>
                        info@suarakampus.id
                    </li>

                    <li>
                        Jakarta, Indonesia
                    </li>

                </ul>

            </div>

            {{-- Social --}}
            <div>

                <h3 class="font-semibold mb-4">
                    Ikuti Kami
                </h3>

                <div class="flex gap-4 text-2xl">

                    <a href="#">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>

                    <a href="#">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="#">
                        <i class="ri-youtube-fill"></i>
                    </a>

                    <a href="#">
                        <i class="ri-twitter-x-line"></i>
                    </a>

                </div>

            </div>

        </div>

        <div class="border-t border-gray-800 mt-12 pt-6 text-center text-gray-500 text-sm">

            © {{ date('Y') }} Suara Kampus.
            All Rights Reserved.

        </div>

    </div>

</footer>
