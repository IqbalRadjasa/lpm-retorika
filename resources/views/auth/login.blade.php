<x-guest-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        {{-- Header Card --}}
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                Selamat Datang Kembali
            </h2>
            <p class="mt-2 text-sm text-gray-500">
                Masukan kredensial kamu untuk mengakses dashboard CMS
            </p>
        </div>

        {{-- Main Form Card --}}
        <div class="bg-white px-6 py-8 shadow-sm border border-gray-200/80 rounded-3xl sm:px-10">
            <!-- Session Status -->
            <x-auth-session-status class="mb-6" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs" />
                </div>

                <!-- Password with Show/Hide Toggle -->
                <div x-data="{ showPassword: false }">
                    <div class="flex items-center justify-between mb-2">
                        <x-form.input-label for="password" :value="__('Password')" />
                        {{-- @if (Route::has('password.request'))
                            <a class="text-xs font-medium text-red-600 hover:text-red-700 transition"
                                href="{{ route('password.request') }}">
                                Lupa kata sandi?
                            </a>
                        @endif --}}
                    </div>
                    <x-form.text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    {{-- Toggle Button --}}
                    {{-- <button type="button" @click="showPassword = !showPassword"
                        class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-gray-400 hover:text-gray-600 focus:outline-none">
                        <i :class="showPassword ? 'ri-eye-off-line' : 'ri-eye-line'" class="text-lg"></i>
                    </button> --}}
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between pt-1">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded-md border-gray-300 text-red-600 shadow-sm focus:ring-red-500/20 focus:ring-offset-0 h-4 w-4 transition cursor-pointer">
                        <span class="ms-2.5 text-sm text-gray-600 font-normal">Ingat saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full flex justify-center items-center gap-2 rounded-xl bg-red-600 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition duration-200">
                        <span>Login</span>
                        <i class="ri-arrow-right-line text-base"></i>
                    </button>
                </div>
            </form>
        </div>

        {{-- Footer copyright sederhana --}}
        <p class="mt-8 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} CMS Portal. All rights reserved.
        </p>
    </div>
</x-guest-layout>
