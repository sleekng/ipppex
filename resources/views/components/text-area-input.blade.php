@props(['disabled' => false, 'name', 'value', 'label' ,'placeholder'])


<div class="py-2">
    <label for="{{ $name }}" > {{ $label }} </label>
</div>
<div class=" relative overflow-hidden">
    <span class=" absolute w-[20px] flex justify-center px-8 items-start pt-2 text-[#202020] text-xl h-full">{{ $icon }}</span>
    <textarea  placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}" {{ $disabled ? 'disabled' : '' }} {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus-visible:outline-none w-full border border-[#D9D2D2] rounded-[12px] pl-14 h-[91px]']) !!} ></textarea>
</div>