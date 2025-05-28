<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger text-uppercase fw-semibold']) }}>
    {{ $slot }}
</button>
