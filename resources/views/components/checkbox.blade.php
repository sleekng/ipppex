@props(['disabled' => false, 'name', 'value', 'label'])


<div class="py-2">
</div>
<div class="inline-flex items-center space-x-2">
    <input  name="{{ $name }}" value="{{ $value }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-primarycolor']) !!}>
    <label for="{{ $name }}" > {{ $label }} </label>
</div>