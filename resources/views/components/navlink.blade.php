{{-- 
    
    @props(['active'])

@php

$classes = ($active ?? false)
    ? 'dropdown-item'
    : 'dropdown-item';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

 --}}

@props(['active'])

@php
    $classes = ($active ?? false)
    ? 'nav-item nav-link active'
    : 'nav-item nav-link ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
