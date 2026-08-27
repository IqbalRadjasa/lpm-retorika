{{-- ================================================= --}}
{{-- Podcast Information --}}
{{-- ================================================= --}}

<div class="overflow-hidden rounded-2xl
           border border-gray-200
           bg-white shadow-sm">


    {{-- Header --}}
    <div class="flex items-start justify-between
               border-b border-gray-100
               px-6 py-5">

        <div>

            <h2 class="text-lg font-semibold
                       text-gray-900">

                Informasi Podcast

            </h2>

            <p class="mt-1 text-sm
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
            <x-form.input-label for="judul" :value="__('Judul Podcast')" />
            <x-form.text-input id="judul" type="text" name="judul" :value="old('judul', $mode === 'edit' ? $podcast->judul : '')"
                placeholder="Contoh: Podcast Retorika" required autofocus />
            <x-form.input-error :messages="$errors->get('judul')" />

            <p class="mt-2 text-xs
                       text-gray-400">

                Gunakan judul yang singkat,
                jelas, dan menarik.

            </p>

        </div>


        {{-- ================================================= --}}
        {{-- Episode + Host --}}
        {{-- ================================================= --}}

        <div class="grid gap-6
                   sm:grid-cols-2">


            {{-- Episode --}}
            <div>
                <x-form.input-label for="episode" :value="__('Episode')" />
                <x-form.text-input id="episode" type="text" name="episode" :value="old('episode', $mode === 'edit' ? $podcast->episode : '')"
                    placeholder="Contoh: Episode 1" required />
                <x-form.input-error :messages="$errors->get('episode')" />
            </div>


            {{-- Host --}}
            <div>
                <x-form.input-label for="host" :value="__('Host')" />
                <x-form.text-input id="host" type="text" name="host" :value="old('host', $mode === 'edit' ? $podcast->host : '')"
                    placeholder="Contoh: Nama host..." required />
                <x-form.input-error :messages="$errors->get('host')" />
            </div>
        </div>


        {{-- ================================================= --}}
        {{-- Description --}}
        {{-- ================================================= --}}

        <div>

            <x-form.input-label for="deskripsi" :value="__('Deskripsi')" />
            <x-form.textarea rows="5" maxlength="500" id="deskripsi" name="deskripsi" :value="old('deskripsi')"
                placeholder="Tulis deskripsi singkat mengenai podcast ini..." required>
                {{ old('deskripsi', $mode === 'edit' ? $podcast->deskripsi : '') }}
            </x-form.textarea>

            <p class="mt-2 text-xs
                       text-gray-400">

                Jelaskan topik dan pembahasan
                dalam episode ini.

            </p>

        </div>

    </div>

</div>
