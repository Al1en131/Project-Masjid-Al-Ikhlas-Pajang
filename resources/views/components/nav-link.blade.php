@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#40534C] text-sm font-medium leading-5 text-[#40534C] focus:outline-none focus:border-[#40534C] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-[#40534C] hover:text-[#40534C] hover:border-[#40534C] focus:outline-none focus:text-[#40534C] focus:border-[#40534C] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
