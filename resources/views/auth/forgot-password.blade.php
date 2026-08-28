<x-guest-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        {{-- Header Card --}}
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                Lupa Kata Sandi
            </h2>
            <p class="mt-2 text-sm text-gray-500">
                Masukkan email untuk menerima link reset password
            </p>
        </div>

        {{-- Main Form Card --}}
        <div class="bg-white px-6 py-8 shadow-sm border border-gray-200/80 rounded-3xl sm:px-10">

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="pt-2 flex flex-col gap-2">
                    <x-button.primary-button class="flex-1">
                        {{ __('Email Password Reset Link') }}
                    </x-button.primary-button>
                    <x-link-button.secondary-link :href="route('login')" class="flex-1">
                        Kembali
                    </x-link-button.secondary-link>
                </div>
            </form>
        </div>

        {{-- Footer copyright sederhana --}}
        <p class="mt-8 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} CMS Portal. All rights reserved.
        </p>
    </div>
</x-guest-layout>
