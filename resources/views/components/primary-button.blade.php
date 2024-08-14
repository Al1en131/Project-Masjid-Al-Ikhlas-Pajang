<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-4 bg-[#40534C] max-md:bg-[#D6EFD8] border border-transparent rounded-lg font-semibold text-xs text-[#D6EFD8] max-md:text-[#40534C] uppercase tracking-widest hover:bg-[#D6EFD8] max-md:hover:bg-[#40534C] hover:border-[#40534C] max-md:hover:border-[#D6EFD8] hover:border hover:text-[#40534C] max-md:hover:text-[#D6EFD8] focus:bg-[#40534C]  active:bg-[#40534C] focus:text-[#D6EFD8] max-md:active:bg-[#40534C] focus:outline-none focus:ring-2 focus:ring-[#40534C] max-md:focus:ring-[#D6EFD8]  transition ease-in-out duration-150 ']) }}>
    {{ $slot }}
</button>
