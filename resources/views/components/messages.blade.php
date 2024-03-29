@if(count($errors) > 0)

    <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
        <strong>{{ __('Whoops! ') }}</strong>{{ __('Something went wrong.') }}<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

@if(session('success'))

    <div class="row">
        <div class="col m-5">
            <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                <span class="text-green-500 font-semibold">Success</span>
                <p class="text-gray-600 text-sm">{{ session('success') }}</p>

                <button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

@endif


@if(session('error'))

    <div class="row">
        <div class="col m-5">
            <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                <span class="text-red-500 font-semibold">Error</span>
                <p class="text-gray-600 text-sm">{{ session('error') }}</p>

                <button type="button" class="btn-close text-xs text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

@endif