@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#D6EFD8] md:text-[#40534C]']) }}>
    {{ $value ?? $slot }}
</label>
