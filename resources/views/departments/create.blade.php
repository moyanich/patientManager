@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Department') }}</h1>
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

    <x-messages />

    <div class="card">
        <h5 class="card-header bg-gradient bg-secondary">Add Department</h5>
        <div class="card-body">
            {!! Form::open(['action' => 'App\Http\Controllers\DepartmentsController@store', 'method' => 'POST']) !!}

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            {{ Form::label('name', 'Department Name', ['class' => 'col-sm-4 col-form-label required-text']) }}
                            <div class="col-sm-8">
                                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('name')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('description', 'Description', ['class' => 'col-sm-4 col-form-label']) }}
                            <div class="col-sm-8">
                                {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('description')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('status', 'Status', ['class' => 'col-sm-4 col-form-label required-text']) }}

                            <div class="col-sm-8">
                                {{ Form::radio('status', 'active', ['class' => 'form-control form-check-input', 'placeholder' => '']) }}
                                <label class="form-check-label ms-1 me-2" for="inlineRadio1">Active</label>

                                {{ Form::radio('status', 'inactive', ['class' => 'form-control form-check-input', 'placeholder' => '']) }}
                                <label class="form-check-label ms-1" for="inlineRadio2">Inactive</label>

                                @error('status')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="text-end mt-4">
                                <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                    {{ __('Cancel') }}
                                </a>
                                {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
                            </div>
                        </div>

                    </div>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection




