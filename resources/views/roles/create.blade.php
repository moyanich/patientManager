@extends('layouts.dashboard')

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Create New Role') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('roles.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <div class="col-xl-7 mx-auto">
        <div class="card mb-7 p-5">
            <div class="card-header">
                <h5 class="mb-0">{{ __('Create Role') }}</h5>
            </div>
            <div class="card-body">

                <x-messages />

                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

                    <div class="row mb-5 g-5">
                        <div class="col-md-12">
                            <div class="">
                                {{ Form::label('name', 'Role Name', ['class' => 'form-label']) }}
                                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('name')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="">
                                {{ Form::label('permission', 'Permission', ['class' => 'form-label d-block']) }}

                                @foreach($permission as $value)
                                    <label>
                                        {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->name }}
                                    </label>
                                    <br/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-4">
                        {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection