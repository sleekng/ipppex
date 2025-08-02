@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link-primary active'
            : 'nav-link-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
