@props(['name', 'value', 'label'])

<label class="inline-flex items-center">
    <input type="radio" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['class' => 'form-radio text-primarycolor']) }}>
    <span class="ml-2">{{ $label }}</span>
</label>