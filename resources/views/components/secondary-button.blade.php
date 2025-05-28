<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-outline-secondary btn-sm text-uppercase fw-semibold shadow-sm']) }}>
    {{ $slot }}
</button>
