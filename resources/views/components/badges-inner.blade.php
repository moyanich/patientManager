@switch($status)

    @case('1') {{-- Active --}}
        <span class="badge rounded-pill bg-success">
            <i class="bg-success"></i> 
            {{ $slot }}
        </span>
    @break

    @case('2') {{-- Inactive --}}
        <span class="badge rounded-pill bg-danger">
            <i class="bg-danger"></i>  
            {{ $slot }}
        </span>
    @break

    @case('3') {{-- New --}}
        <span class="badge badge-lg badge-dot text-black {{ $status }}">
            <i class="bg-tertiary"></i>  
            {{ $slot }}
        </span>
    @break

    @case('4') {{-- Pending --}}
    <span class="badge badge-lg badge-dot text-black {{ $status }}">
        <i class="bg-secondary"></i>  
        {{ $slot }}
    </span>
    @break
   
    @case('5') {{-- Appproved --}}
    <span class="badge badge-lg badge-dot text-black {{ $status }}">
        <i class="bg-secondary"></i>  
        {{ $slot }}
    </span>
    @break

    @case('6') {{-- Not Approved --}}
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-warning"></i>  
            {{ $slot }}
        </span>
    @break

    @case('7') {{-- Expired --}}
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-opacity-30 bg-danger text-danger"></i>  
            {{ $slot }}
        </span>
    @break

    @case('8') {{-- Cancelled --}}
        <span class="badge badge-lg badge-dot text-black {{ $status }}">
            <i class="bg-opacity-30 bg-secondary"></i>  
            {{ $slot }}
        </span>
    @break

    @default
        <span class="badge rounded-pill bg-opacity-30 bg-primary text-primary">
            <i class="bg-opacity-30 bg-secondary text-dark"></i>  
            {{ $slot }}
        </span>
    @break

@endswitch

{{-- //TODO: ADD BADGE COLORS 
    
    <div>
  <span class="badge rounded-pill bg-primary">Primary</span>
  <span class="badge rounded-pill bg-secondary text-dark">Secondary</span>
  <span class="badge rounded-pill bg-tertiary">Secondary</span>
  <span class="badge rounded-pill bg-success">Success</span>
  <span class="badge rounded-pill bg-danger">Danger</span>
  <span class="badge rounded-pill bg-warning">Warning</span>
  <span class="badge rounded-pill bg-info">Info</span>
  <hr>
  <span class="badge rounded-pill bg-opacity-30 bg-primary text-primary">Primary</span>
  <span class="badge rounded-pill bg-opacity-30 bg-secondary text-dark">Secondary</span>
  <span class="badge rounded-pill bg-opacity-30 bg-tertiary text-tertiary">Secondary</span>
  <span class="badge rounded-pill bg-opacity-30 bg-success text-success">Success</span>
  <span class="badge rounded-pill bg-opacity-30 bg-danger text-danger">Danger</span>
  <span class="badge rounded-pill bg-opacity-30 bg-warning text-warning">Warning</span>
  <span class="badge rounded-pill bg-opacity-30 bg-info text-info">Info</span>
</div>
    
    --}}