<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-2" :status="session('status')" />

    <div class="w-1/2 my-auto justify-center px-10 mx-auto">
        <img src="{{ asset('assets/image/masjid3.jpg') }}" alt="">
    </div>
    <img src="{{asset('assets/image/bg-login.png')}}" alt="" class="-z-5 absolute right-0 h-screen w-[55%]">
    <div class="w-1/2 my-auto flex items-center justify-center mx-auto z-10 min-h-screen">
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
                        class="rounded border-gray-300 text-[#42348b] shadow-sm focus:ring-[#42348b]" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-start text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
    
            <div class="max-w-full text-center">
    
                <x-primary-button class="max-w-full w-full rounded-lg mb-3">
                    {{ __('Log in') }}
                </x-primary-button>
                <p>Don't have an account ? <span class="text-blue-600"><a href="{{ route('register') }}">Sign up
                            here</a>
                    </span></p>
            </div>
        </form>
    </div>
    
</x-guest-layout>
