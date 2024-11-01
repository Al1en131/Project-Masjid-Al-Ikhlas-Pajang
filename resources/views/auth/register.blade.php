<x-guest-layout>
    <div class="relative w-1/2 my-auto justify-center  content-center mx-auto items-center object-center max-md:hidden">
        <!-- Image -->
        <img src="{{ asset('assets/image/masjide.png') }}" alt="" class="h-[520px] mx-auto">
    </div>
    <img src="{{ asset('assets/image/bg-login-hijau.png') }}" alt="" class="max-md:hidden -z-5 absolute right-0 h-screen w-[58%]">
    <div class="w-1/2 max-md:w-full max-md:bg-[#40534C] my-auto flex items-center justify-center mx-auto z-10 min-h-screen">
        <form method="POST" action="{{ route('register') }}" class="w-80">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="grid mt-6 text-center">


                <x-primary-button class="max-w-full w-full rounded-lg mb-3">
                    {{ __('Registrasi') }}
                </x-primary-button>
                <p class="mr-6 text-white">Already registered? <a class="underline text-sm text-[#40534C] max-md:text-[#80AF81] hover:text-white"
                        href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a></p>

            </div>
        </form>
    </div>
</x-guest-layout>
