@extends('layouts.dashboard', ['page' => __('Department Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Department') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('departments.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back to Deparment List') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="py-4 border-bottom">
        <div class="row align-items-center">
            <div class="col">
                <div class="d-flex align-items-center gap-4"><div>
                <a href="{{ route('departments.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
            </div>
                <div class="vr opacity-20 my-1"></div>
                <h1 class="h3 ls-tight">{{  $department->name . __(' Department') }} <span>badge  {{ $department->status }} </span></h1>{{-- //TODO: ADD STATUS BADGE --}}

                <x-badges :status="strtolower($department->status)">
                    :message="{{ statusConvert($department->status) ?? '' }}"
                </x-badges>

                </div>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="hstack gap-2 justify-content-end">
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm bg-gray-100 me-2">
                        {{ __('Edit') }}
                    </a>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row align-items-center g-3 mt-3">
        <x-messages />
    </div>

    <div class="row align-items-center g-3 mt-2">
        <div class="col-10">
            <h3 class="mb-3">{{ $department->name }}</h3>
            <p class="mb-3">{{ $department->description }}</p>
            
        </div>
    </div>

    <div class="row align-items-center g-3 mt-5 pt-4">
        <div class="col-6 bg-gray-100 p-4">
            <h3 class="mb-3">{{ __('List of Doctors') }}</h3>
            {{-- $doctors->first_name --}}
            <table class="table table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>

                @foreach ($doctors as $doctor)
                    <tr>
                        <td></td>
                        <td>{{ $doctor->first_name . ' ' . $doctor->last_name  }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
     </div>
    


   


@endsection