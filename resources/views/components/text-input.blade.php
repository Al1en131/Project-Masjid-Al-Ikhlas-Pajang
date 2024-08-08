@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-[#42348b] bg-[#f5f5f5] focus:border-[#42348b] focus:ring-[#42348b] rounded-md shadow-sm']) !!}>
