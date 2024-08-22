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
        
            <div class="mb-4 w-full">
                <label class="block font-medium text-sm text-[#D6EFD8] md:text-[#40534C] mb-2" for="email">
                    Email
                </label>
                <input
                    class="border-[#40534C] bg-[#f5f5f5] focus:border-[#40534C] w-full focus:ring-[#40534C] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] rounded-md shadow-sm"
                    id="email" type="email" name="email" placeholder="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        
            <div class="mb-6 w-full">
                <label class="block font-medium text-sm text-[#D6EFD8] mb-2 md:text-[#40534C]" for="password">
                    Password
                </label>
                <input
                    class="border-[#40534C] bg-[#f5f5f5] focus:border-[#40534C] w-full focus:ring-[#40534C] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] rounded-md shadow-sm"
                    id="password" type="password" name="password" placeholder="password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        
            <div class="flex justify-between mt-4 mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-[#80AF81] shadow-sm focus:ring-[#40534C]" name="remember">
                    <span class="ms-2 text-sm text-[#40534C] max-md:text-[#80AF81]">{{ __('Remember me') }}</span>
                </label>
            </div>
        
            <div class="flex items-center justify-between">
                <button
                    class="inline-flex items-center justify-center w-full px-4 py-4 bg-[#40534C] border border-transparent rounded-lg font-semibold text-xs text-[#D6EFD8] uppercase tracking-widest hover:bg-[#D6EFD8] hover:text-[#40534C] hover:border-[#40534C] max-md:bg-[#D6EFD8] max-md:text-[#40534C] max-md:hover:bg-[#40534C] max-md:hover:text-[#D6EFD8] max-md:hover:border-[#D6EFD8] focus:outline-none focus:ring-2 focus:ring-[#40534C] max-md:focus:ring-[#D6EFD8] transition ease-in-out duration-150"
                    type="submit">
                    Log In
                </button>
            </div>
        
            <div class="max-w-full text-center mt-4">
                <p class="text-[#40534C] max-md:text-[#80AF81]">Don't have an account? 
                    <span class="text-[#D6EFD8]">
                        <a href="{{ route('register') }}">Sign up here</a>
                    </span>
                </p>
            </div>
        </form>
        
    </div>

</x-guest-layout>
