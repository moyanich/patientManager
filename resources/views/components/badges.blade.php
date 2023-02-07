@php
    $classes = 'bg-';
@endphp


@switch($status)

    @case('1')
        <span class="badge badge-lg badge-dot text-black">
            <i {{ $attributes->merge(['class' => $classes . 'success']) }}></i> 
            {{ $slot }}
        </span>
    @break

    @case('2')
        <span class="badge badge-lg badge-dot text-black">
            <i {{ $attributes->merge(['class' => $classes . 'danger']) }}></i>  
            {{ $slot }}
        </span>
    @break
   
    @default
        <span class="badge badge-lg badge-dot text-black">
            <i {{ $attributes->merge(['class' => $classes . 'neutral']) }}></i>  
            {{ $slot }}
        </span>
    @break

@endswitch
