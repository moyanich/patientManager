@extends('layouts.dashboard', ['page' => __('Department Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Department Edit') }}</h1>
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
        <h5 class="card-header bg-gradient bg-secondary">Department Information</h5>
        <div class="card-body">
            {!! Form::open(['action' => ['App\Http\Controllers\DepartmentsController@update', $department->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            {{ Form::label('name', 'Department Name', ['class' => 'col-sm-4 col-form-label required-text']) }}
                            <div class="col-sm-8">
                                {{ Form::text('name', $department->name, ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('name')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('description', 'Description', ['class' => 'col-sm-4 col-form-label']) }}
                            <div class="col-sm-8">
                                {{ Form::textarea('description', $department->description, ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('description')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('status', 'Status', ['class' => 'col-sm-4 col-form-label required-text']) }}

                            <div class="col-sm-8">                                
                               {{-- 
                                {!! Form::select('status', $statuses, $department->status, ['class' => 'form-select block w-full mt-1 border-0 px-3 py-3 placeholder-blueGray-400 text-gray-600 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!} 
                                --}} 
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="1" {{ $department->status==1 ? 'checked': '' }}/>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="2" {{ $department->status==2 ? 'checked': '' }}/>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Inactive
                                    </label>
                                </div>

                                @error('status[]')
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

            {{Form::hidden('_method', 'PUT') }}
            {!! Form::close() !!}

        </div>
    </div>


@endsection

