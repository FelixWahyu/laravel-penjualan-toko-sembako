@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label fw-medium text-muted']) }}>
    {{ $value ?? $slot }}
</label>
