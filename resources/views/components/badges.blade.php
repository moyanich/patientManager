@switch($status)

    @case('1') {{-- Active --}}
        <span class="badge rounded bg-opacity-30 bg-gradient bg-primary text-primary">
            {{ $message }}
        </span>
    @break

    @case('2') {{-- Inactive --}}
        <span class="badge rounded bg-opacity-30 bg-tertiary text-tertiary">
            {{ $message }}
        </span>
    @break

    @case('3') {{-- New --}}
        <span class="badge rounded bg-opacity-30 bg-tertiary text-tertiary">
            {{ $message }}
        </span>
    @break

    @case('4') {{-- Pending --}}
    <span class="badge badge-lg badge-dot text-black">
        <i class="bg-secondary"></i>  
        {{ $message }}
    </span>
    @break
   
    @case('5') {{-- Appproved --}}
    <span class="badge badge-lg badge-dot text-black">
        <i class="bg-secondary"></i>  
        {{ $message }}
    </span>
    @break

    @case('6') {{-- Not Approved --}}
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-warning"></i>  
            {{ $message }}
        </span>
    @break

    @case('7') {{-- Expired --}}
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-opacity-30 bg-danger text-danger"></i>  
            {{ $message }}
        </span>
    @break

    @case('8') {{-- Cancelled --}}
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-opacity-30 bg-secondary"></i>  
            {{ $message }}
        </span>
    @break

    @default
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-opacity-30 bg-secondary text-dark"></i>  
            {{ $message }}
        </span>
    @break

@endswitch

