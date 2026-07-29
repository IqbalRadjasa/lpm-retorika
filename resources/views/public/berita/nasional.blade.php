<x-app-layout>

    <main class="
        pt-30
        max-w-screen-xl
        mx-auto
        px-4
        sm:px-6
        lg:px-8">

        <div
            class="relative overflow-hidden
            flex flex-col justify-center gap-2
            rounded-3xl
            border-l-[10px] border-red-500
            bg-gradient-to-r from-red-50 via-red-50/70 to-white
            p-10 md:p-12 lg:p-14
            shadow-lg">

            {{-- Background Decoration --}}
            <i
                class="ri-flag-line
                absolute
                -right-8
                -bottom-16
                lg:-right-8 lg:-bottom-22
                text-[170px]
                lg:text-[220px]
                text-red-500/10
                pointer-events-none">
            </i>

            <p class="relative z-10 text-sm font-semibold uppercase tracking-widest text-red-700">
                Kategori
            </p>

            <h1 class="relative z-10 text-3xl md:text-4xl lg:text-5xl font-extrabold text-red-600">
                Nasional
            </h1>

        </div>

        {{-- ================================================= --}}
        {{-- Isu Kampus Content --}}
        {{-- ================================================= --}}

        <section class="py-16">

            <div class="grid lg:grid-cols-12 gap-10">

                {{-- ================================================= --}}
                {{-- LEFT CONTENT --}}
                {{-- ================================================= --}}
                <div class="lg:col-span-8 space-y-6">
                    <x-no-existing-news />
                </div>

                {{-- ================================================= --}}
                {{-- SIDEBAR --}}
                {{-- ================================================= --}}

                <div class="lg:col-span-4">

                    <x-news-sidebar />

                </div>

            </div>

        </section>

    </main>

</x-app-layout>
