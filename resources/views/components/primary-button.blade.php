<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-4 bg-[#42348b] border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#D9D8FE] hover:border-[#42348b] hover:border hover:text-[#42348b] focus:bg-[#D9D8FE] active:bg-[#D9D8FE] focus:outline-none focus:ring-2 focus:ring-[#42348b] focus:ring-offset-2 transition ease-in-out duration-150 ']) }}>
    {{ $slot }}
</button>
