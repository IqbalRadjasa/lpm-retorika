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

        <div class="bg-white px-6 py-8 shadow-sm border border-gray-200/80 rounded-3xl sm:px-10">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-form.input-label for="password" :value="__('Password')" />
                    <x-form.text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-form.input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-form.text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <p class="mt-8 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} CMS Portal. All rights reserved.
        </p>
    </div>
</x-guest-layout>
