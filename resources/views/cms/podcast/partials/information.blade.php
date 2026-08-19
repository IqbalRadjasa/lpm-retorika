{{-- ================================================= --}}
{{-- Podcast Information --}}
{{-- ================================================= --}}

<div
    class="overflow-hidden rounded-2xl
           border border-gray-200
           bg-white shadow-sm">


    {{-- Header --}}
    <div
        class="flex items-start justify-between
               border-b border-gray-100
               px-6 py-5">

        <div>

            <h2
                class="text-lg font-semibold
                       text-gray-900">

                Informasi Podcast

            </h2>

            <p
                class="mt-1 text-sm
                       text-gray-500">

                Masukkan informasi dasar
                mengenai podcast.

            </p>

        </div>


        <div
            class="flex h-11 w-11 shrink-0
                   items-center justify-center
                   rounded-xl bg-red-50
                   text-red-600">

            <i class="ri-information-line text-xl"></i>

        </div>

    </div>


    {{-- Body --}}
    <div class="space-y-6 p-6">


        {{-- ================================================= --}}
        {{-- Title --}}
        {{-- ================================================= --}}

        <div>

            <label
                for="title"
                class="mb-2 block text-sm
                       font-medium text-gray-700">

                Judul Podcast

            </label>

            <input
                id="title"
                type="text"
                name="title"
                placeholder="Masukkan judul podcast..."
                class="w-full rounded-xl
                       border-gray-300
                       focus:border-red-500
                       focus:ring-red-500">

            <p
                class="mt-2 text-xs
                       text-gray-400">

                Gunakan judul yang singkat,
                jelas, dan menarik.

            </p>

        </div>


        {{-- ================================================= --}}
        {{-- Episode + Host --}}
        {{-- ================================================= --}}

        <div
            class="grid gap-6
                   sm:grid-cols-2">


            {{-- Episode --}}
            <div>

                <label
                    for="episode"
                    class="mb-2 block text-sm
                           font-medium text-gray-700">

                    Episode

                </label>

                <input
                    id="episode"
                    type="text"
                    name="episode"
                    placeholder="Contoh: Episode 01"
                    class="w-full rounded-xl
                           border-gray-300
                           focus:border-red-500
                           focus:ring-red-500">

            </div>


            {{-- Host --}}
            <div>

                <label
                    for="host"
                    class="mb-2 block text-sm
                           font-medium text-gray-700">

                    Host

                </label>

                <input
                    id="host"
                    type="text"
                    name="host"
                    placeholder="Nama host..."
                    class="w-full rounded-xl
                           border-gray-300
                           focus:border-red-500
                           focus:ring-red-500">

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- Description --}}
        {{-- ================================================= --}}

        <div>

            <label
                for="description"
                class="mb-2 block text-sm
                       font-medium text-gray-700">

                Deskripsi

            </label>

            <textarea
                id="description"
                name="description"
                rows="7"
                placeholder="Tulis deskripsi podcast..."
                class="w-full rounded-xl
                       border-gray-300
                       focus:border-red-500
                       focus:ring-red-500"></textarea>

            <p
                class="mt-2 text-xs
                       text-gray-400">

                Jelaskan topik dan pembahasan
                dalam episode ini.

            </p>

        </div>

    </div>

</div>
