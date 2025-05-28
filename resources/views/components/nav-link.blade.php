@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'nav-link btn btn-primary active fw-medium border border-primary mb-3 shadow-sm'
            : 'nav-link btn btn-outline-primary text-white fw-medium border border-white shadow-sm mb-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
