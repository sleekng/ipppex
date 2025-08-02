<button {{ $attributes->merge(['type' => 'submit', 'class' => 'custom-btn btn-1 ']) }}>
    {{ $slot }}
</button>
