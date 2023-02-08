@switch($status)

    @case('1')
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-success"></i> 
            {{ $message }}
        </span>
    @break

    @case('2')
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-danger"></i>  
            {{ $message }}
        </span>
    @break
   
    @default
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-neutral"></i>  
            {{ $message }}
        </span>
    @break

@endswitch
