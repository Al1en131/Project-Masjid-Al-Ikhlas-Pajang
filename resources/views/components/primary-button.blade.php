<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-4 bg-[#42348b] max-md:bg-[#D9D9FF] border border-transparent rounded-lg font-semibold text-xs text-[#D9D9FF] max-md:text-[#42348b] uppercase tracking-widest hover:bg-[#D9D8FE] max-md:hover:bg-[#42348b] hover:border-[#42348b] max-md:hover:border-[#D9D9FF] hover:border hover:text-[#42348b] max-md:hover:text-[#D9D9FF] focus:bg-[#D9D8FE]  active:bg-[#D9D8FE] max-md:active:bg-[#42348b] focus:outline-none focus:ring-2 focus:ring-[#42348b] max-md:focus:ring-[#D9D9FF]  transition ease-in-out duration-150 ']) }}>
    {{ $slot }}
</button>
