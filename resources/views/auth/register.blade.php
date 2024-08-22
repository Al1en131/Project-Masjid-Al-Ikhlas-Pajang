<x-guest-layout>
    <div class="relative w-1/2 my-auto justify-center  content-center mx-auto items-center object-center max-md:hidden">
        <!-- Image -->
        <img src="{{ asset('assets/image/masjide.png') }}" alt="" class="h-[520px] mx-auto">
    </div>
    <img src="{{ asset('assets/image/bg-login-hijau.png') }}" alt="" class="max-md:hidden -z-5 absolute right-0 h-screen w-[58%]">
    <div class="w-1/2 max-md:w-full max-md:bg-[#40534C] my-auto flex items-center justify-center mx-auto z-10 min-h-screen">
        <form method="POST" action="{{ route('register') }}" class="w-80">
            @csrf
        
            <div class="mb-4 w-full">
                <label class="block font-medium text-sm mb-2 text-[#D6EFD8] md:text-[#40534C]" for="name">
                    Name
                </label>
                <input
                    class="border-[#40534C] w-full bg-[#f5f5f5] focus:border-[#40534C] focus:ring-[#40534C] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] rounded-md shadow-sm"
                    id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        
            <div class="mb-4 w-full">
                <label class="block font-medium text-sm mb-2 text-[#D6EFD8] md:text-[#40534C]" for="email">
                    Email
                </label>
                <input
                    class="border-[#40534C] w-full bg-[#f5f5f5] focus:border-[#40534C] focus:ring-[#40534C] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] rounded-md shadow-sm"
                    id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        
            <div class="mb-4 w-full">
                <label class="block font-medium text-sm mb-2 text-[#D6EFD8] md:text-[#40534C]" for="password">
                    Password
                </label>
                <input
                    class="border-[#40534C] w-full bg-[#f5f5f5] focus:border-[#40534C] focus:ring-[#40534C] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] rounded-md shadow-sm"
                    id="password" type="password" name="password" required autocomplete="new-password" placeholder="password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        
            <div class="mb-6 w-full">
                <label class="block font-medium text-sm mb-2 text-[#D6EFD8] md:text-[#40534C]" for="password_confirmation">
                    Confirm Password
                </label>
                <input
                    class="border-[#40534C] w-full bg-[#f5f5f5] focus:border-[#40534C] focus:ring-[#40534C] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] rounded-md shadow-sm"
                    id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        
            <div class="flex items-center justify-between">
                <button
                    class="inline-flex items-center justify-center w-full px-4 py-4 bg-[#40534C] border border-transparent rounded-lg font-semibold text-xs text-[#D6EFD8] uppercase tracking-widest hover:bg-[#D6EFD8] hover:text-[#40534C] hover:border-[#40534C] max-md:bg-[#D6EFD8] max-md:text-[#40534C] max-md:hover:bg-[#40534C] max-md:hover:text-[#D6EFD8] max-md:hover:border-[#D6EFD8] focus:outline-none focus:ring-2 focus:ring-[#40534C] max-md:focus:ring-[#D6EFD8] transition ease-in-out duration-150"
                    type="submit">
                    Registrasi
                </button>
            </div>
        
            <div class="max-w-full text-center mt-4">
                <p class="text-[#40534C] max-md:text-[#80AF81]">Already registered? 
                    <span class="text-[#D6EFD8]">
                        <a href="{{ route('login') }}">Login here</a>
                    </span>
                </p>
            </div>
        </form>
        
    </div>
</x-guest-layout>
