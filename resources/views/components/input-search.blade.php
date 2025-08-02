@props(['disabled' => false, 'name', 'value','placeholder'])


<div class=" relative overflow-hidden">
    <span class=" absolute w-[20px] flex justify-center px-8 items-center text-[#202020] text-xl h-full">{{ $icon }}</span>
    <input placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] pl-14 h-[56px]']) !!}>
</div>