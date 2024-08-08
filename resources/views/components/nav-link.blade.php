@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#42348b] text-sm font-medium leading-5 text-[#42348b] focus:outline-none focus:border-[#42348b] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black hover:text-[#42348b] hover:border-[#42348b] focus:outline-none focus:text-[#42348b] focus:border-[#42348b] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
