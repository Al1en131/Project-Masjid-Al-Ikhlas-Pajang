<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-2" :status="session('status')" />

    <div class="relative w-1/2 my-auto justify-center  content-center mx-auto items-center object-center max-md:hidden">
        <!-- Image -->
        <img src="{{ asset('assets/image/masjide.png') }}" alt="" class="h-[520px] mx-auto">
    </div>

    <img src="{{ asset('assets/image/bg-login-hijau.png') }}" alt=""
        class=" absolute right-0 h-screen -z-5 w-[58%] max-md:hidden">
    <div
        class="w-1/2 max-md:w-full max-md:bg-[#40534C] my-auto  flex items-center justify-center mx-auto z-10 min-h-screen">
        <form method="POST" action="{{ route('login') }}" class="w-80">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex justify-between mt-4 mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-[#80AF81] shadow-sm focus:ring-[#40534C]" name="remember">
                    <span class="ms-2 text-sm text-[#40534C] max-md:text-[#80AF81]">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="max-w-full text-center">

                <x-primary-button class="max-w-full w-full rounded-lg mb-3">
                    {{ __('Log in') }}
                </x-primary-button>
                <p class="text-[#40534C] max-md:text-[#80AF81]">Don't have an account ? <span class="text-[#D6EFD8]"><a
                            href="{{ route('register') }}">Sign up
                            here</a>
                    </span></p>
            </div>
        </form>
    </div>

</x-guest-layout>
