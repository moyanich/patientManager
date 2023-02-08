@php
    $classes = 'bg-';
@endphp


@switch($status)

    @case('1')
        <span class="badge badge-lg badge-dot text-black">
            <i {{ $attributes->merge(['class' => $classes . 'success']) }}></i> 
            {{ $message }}
        </span>
    @break

    @case('2')
        <span class="badge badge-lg badge-dot text-black">
            <i {{ $attributes->merge(['class' => $classes . 'danger']) }}></i>  
            {{ $message }}
        </span>
    @break
   
    @default
        <span class="badge badge-lg badge-dot text-black">
            <i {{ $attributes->merge(['class' => $classes . 'neutral']) }}></i>  
            {{ $message }}
        </span>
    @break

@endswitch
