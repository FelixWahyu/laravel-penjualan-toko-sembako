<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark fw-semibold text-uppercase']) }}>
    {{ $slot }}
</button>
