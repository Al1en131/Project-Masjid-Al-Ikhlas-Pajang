@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' border-[#40534C] bg-[#f5f5f5] max-md:focus:border-[#80AF81] max-md:focus:ring-[#80AF81] focus:border-[#40534C] focus:ring-[#40534C] rounded-md shadow-sm']) !!}>
