@extends('layouts.dashboard', ['page' => __('Department Management')])

{{--  
@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0 d-flex">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{  $department->name . __(' Department') }}</h1>

            <x-badges-inner :status="strtolower($department->status)">
               {{ statusConvert($department->status) }}
            </x-badges-inner>
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
--}}


@section('header')
    <div class="row align-items-center">
        <div class="col">
            <div class="d-flex align-items-center gap-4">
                <h1 class="h3 ls-tight">{{  $department->name . __(' Department') }}</h1>

                <x-badges-inner :status="strtolower($department->status)">
                    {{ statusConvert($department->status) }}
                </x-badges-inner>
            </div>
        </div>

        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('departments.index') }}" type="button" class="text-xs" aria-label="Close"><i class="bi bi-list-task"></i>{{ __(' Departments List') }}</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row align-items-center justify-content-end">
        <div class="col-auto d-none d-md-block">
            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm bg-gray-100 me-2">
                {{ __('Edit') }}
            </a>
        </div>
    </div>


    <div class="row align-items-center g-3 mt-3">
        <x-messages />
    </div>

    <div class="row align-items-center g-3 mt-2">
        <div class="col-10">
            <h4>Description:</h4>
            <p class="mb-3">{{ $department->description }}</p>
        </div>
    </div>

    <div class="row align-items-center g-3 mt-2">
        <div class="col-10">
            <h4>Head of Department:</h4>
            <p class="mb-3">{{ $department->doctors_id }}</p>

            {{ $deptHead->first_name}}
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