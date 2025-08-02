@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium  text-[#202020]']) }}>
    {{ $value ?? $slot }}
</label>
