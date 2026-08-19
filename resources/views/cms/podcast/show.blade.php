{{-- ================================================= --}}
{{-- Podcast Detail --}}
{{-- ================================================= --}}

<x-cms-layout>

    <div class="space-y-8 py-6">


        {{-- ================================================= --}}
        {{-- Header --}}
        {{-- ================================================= --}}

        <div>

            <div class="mb-8 flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

                <div>
                    <h1 class="text-2xl font-bold text-gray-900">

                        Podcast

                    </h1>

                    <p class="mt-1 text-sm text-gray-500">
                        Detail Podcast
                    </p>
                </div>


                {{-- Actions --}}
                <div class="flex flex-col lg:flex-row gap-3">
                    <x-link-button.secondary-link :href="route('cms.podcast.index')" icon="ri-arrow-left-line">
                        Kembali
                    </x-link-button.secondary-link>

                    <x-link-button.secondary-link :href="'#'" icon="ri-external-link-line">
                        Lihat di Website
                    </x-link-button.secondary-link>

                    <x-link-button.secondary-link :href="'#'" icon="ri-edit-line">
                        Edit
                    </x-link-button.secondary-link>

                    <x-link-button.primary-link :href="'#'" icon="ri-delete-bin-line">
                        Hapus
                    </x-link-button.primary-link>

                </div>

            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Main Grid --}}
        {{-- ================================================= --}}

        <div class="grid gap-8
                   xl:grid-cols-12">


            {{-- ================================================= --}}
            {{-- LEFT : Video + Information --}}
            {{-- ================================================= --}}

            <div class="space-y-8
                       xl:col-span-8">


                {{-- ================================================= --}}
                {{-- Video Player --}}
                {{-- ================================================= --}}

                <div class="overflow-hidden rounded-2xl
                           bg-black shadow-sm">


                    {{-- Video --}}
                    <div class="aspect-video
                               bg-gray-950">

                        <video controls
                            poster="https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=1600&q=85"
                            class="h-full w-full
                                   object-contain">

                            <source src="#" type="video/mp4">

                            Browser Anda tidak mendukung
                            pemutaran video.

                        </video>

                    </div>


                    {{-- Video Footer --}}
                    <div
                        class="border-t
                               border-white/10
                               bg-gray-950 px-5 py-4">

                        <div
                            class="flex flex-col gap-2
                                   sm:flex-row
                                   sm:items-center
                                   sm:justify-between">

                            <div class="flex min-w-0
                                       items-center gap-3">

                                <i
                                    class="ri-video-line
                                           shrink-0 text-lg
                                           text-gray-400">
                                </i>

                                <p
                                    class="truncate
                                           text-sm
                                           text-gray-300">

                                    podcast-retorika-episode-01.mp4

                                </p>

                            </div>

                            <span class="shrink-0
                                       text-xs text-gray-500">

                                42:18

                            </span>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Podcast Information --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                    {{-- Header --}}
                    <div
                        class="border-b
                               border-gray-100
                               px-6 py-5">

                        <div
                            class="flex flex-col gap-4
                                   sm:flex-row
                                   sm:items-start
                                   sm:justify-between">


                            <div class="min-w-0">

                                <div
                                    class="mb-3 flex flex-wrap
                                           items-center gap-2">


                                    {{-- Status --}}
                                    <span
                                        class="inline-flex
                                               items-center gap-1.5
                                               rounded-full
                                               bg-green-50 px-3 py-1
                                               text-xs font-medium
                                               text-green-700">

                                        <span
                                            class="h-1.5 w-1.5
                                                   rounded-full
                                                   bg-green-500">
                                        </span>

                                        Published

                                    </span>


                                    {{-- Episode --}}
                                    <span
                                        class="rounded-full
                                               bg-gray-100 px-3 py-1
                                               text-xs font-medium
                                               text-gray-600">

                                        Episode 01

                                    </span>

                                </div>


                                <h2
                                    class="text-2xl font-bold
                                           leading-tight
                                           text-gray-900">

                                    Ngobrol Kampus:
                                    Kehidupan Mahasiswa
                                    di Era Digital

                                </h2>


                                <p class="mt-3 text-sm
                                           text-gray-500">

                                    Dipublikasikan pada
                                    15 Agustus 2026

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Body --}}
                    <div class="space-y-6 p-6">


                        {{-- Host --}}
                        <div
                            class="flex items-start gap-4
                                   rounded-xl
                                   bg-gray-50 p-4">

                            <div
                                class="flex h-11 w-11
                                       shrink-0
                                       items-center
                                       justify-center
                                       rounded-full
                                       bg-red-100
                                       text-red-600">

                                <i class="ri-mic-line
                                           text-xl">
                                </i>

                            </div>


                            <div>

                                <p
                                    class="text-xs
                                           font-medium
                                           uppercase
                                           tracking-wide
                                           text-gray-400">

                                    Host

                                </p>

                                <p
                                    class="mt-1
                                           font-semibold
                                           text-gray-900">

                                    Muhammad Rizky

                                </p>

                            </div>

                        </div>


                        {{-- Description --}}
                        <div>

                            <h3
                                class="text-sm
                                       font-semibold
                                       text-gray-900">

                                Deskripsi

                            </h3>

                            <p
                                class="mt-3 text-sm
                                       leading-7
                                       text-gray-600">

                                Pada episode pertama Podcast
                                Retorika, kami membahas kehidupan
                                mahasiswa di era digital, mulai dari
                                penggunaan teknologi dalam kegiatan
                                perkuliahan hingga bagaimana mahasiswa
                                dapat memanfaatkan media digital
                                secara positif.

                            </p>

                            <p
                                class="mt-3 text-sm
                                       leading-7
                                       text-gray-600">

                                Pembahasan juga mencakup tantangan
                                yang dihadapi mahasiswa dalam menjaga
                                produktivitas dan membangun
                                keseimbangan antara kehidupan
                                akademik dan aktivitas digital.

                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- RIGHT : Sidebar --}}
            {{-- ================================================= --}}

            <div class="space-y-8
                       xl:col-span-4">


                {{-- ================================================= --}}
                {{-- Thumbnail --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                    <div
                        class="border-b
                               border-gray-100
                               px-6 py-5">

                        <h2 class="text-lg font-semibold
                                   text-gray-900">

                            Thumbnail

                        </h2>

                        <p class="mt-1 text-sm
                                   text-gray-500">

                            Gambar sampul podcast.

                        </p>

                    </div>


                    <div class="p-6">

                        <div class="overflow-hidden
                                   rounded-xl bg-gray-100">

                            <img src="https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=1000&q=85"
                                alt="Podcast thumbnail"
                                class="aspect-video
                                       w-full object-cover">

                        </div>


                        <div class="mt-4">

                            <p
                                class="truncate text-sm
                                       font-medium
                                       text-gray-800">

                                podcast-episode-01.jpg

                            </p>

                            <p class="mt-1 text-xs
                                       text-gray-400">

                                JPG · 856 KB

                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- Podcast Information --}}
                {{-- ================================================= --}}

                <div
                    class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                    <div
                        class="border-b
                               border-gray-100
                               px-6 py-5">

                        <h2 class="text-lg font-semibold
                                   text-gray-900">

                            Informasi Media

                        </h2>

                        <p class="mt-1 text-sm
                                   text-gray-500">

                            Informasi file video.

                        </p>

                    </div>


                    <div class="divide-y divide-gray-100">


                        {{-- File --}}
                        <div
                            class="flex items-start
                                   justify-between gap-4
                                   px-6 py-4">

                            <div>

                                <p class="text-xs
                                           text-gray-400">

                                    File

                                </p>

                                <p
                                    class="mt-1 text-sm
                                           font-medium
                                           text-gray-800">

                                    podcast-episode-01.mp4

                                </p>

                            </div>

                            <i class="ri-video-line
                                       text-lg text-gray-400">
                            </i>

                        </div>


                        {{-- Type --}}
                        <div
                            class="flex items-center
                                   justify-between
                                   px-6 py-4">

                            <span class="text-sm
                                       text-gray-500">

                                Format

                            </span>

                            <span
                                class="text-sm
                                       font-medium
                                       text-gray-800">

                                MP4

                            </span>

                        </div>


                        {{-- Size --}}
                        <div
                            class="flex items-center
                                   justify-between
                                   px-6 py-4">

                            <span class="text-sm
                                       text-gray-500">

                                Ukuran

                            </span>

                            <span
                                class="text-sm
                                       font-medium
                                       text-gray-800">

                                248 MB

                            </span>

                        </div>


                        {{-- Duration --}}
                        <div
                            class="flex items-center
                                   justify-between
                                   px-6 py-4">

                            <span class="text-sm
                                       text-gray-500">

                                Durasi

                            </span>

                            <span
                                class="text-sm
                                       font-medium
                                       text-gray-800">

                                42:18

                            </span>

                        </div>


                    </div>

                </div>
            </div>

        </div>

    </div>

</x-cms-layout>
