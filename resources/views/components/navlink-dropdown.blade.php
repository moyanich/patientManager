@props(['active'])

@php

$classes = ($active ?? false)
    ? 'nav-link dropdown-toggle'
    : 'nav-link dropdown-toggle';

$roles = 'button'

@endphp

<a {{ $attributes->merge(['class' => $classes, 'role' => 'button', 'data-bs-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']) }}>
    {{ $slot }}
</a>



