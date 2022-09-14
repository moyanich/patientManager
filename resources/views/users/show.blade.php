@extends('layouts.dashboard')

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('User Information') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('users.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<span data-feather="plus"></span>
					</span>
                	<span>{{ __('Create New User') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection



@section('content')

    <div class="col-xl-7 mx-auto">

        <div class="card mb-7">
            <div class="card-header">
                <h5 class="mb-0">User Information</h5>
            </div>

            <div class="card-body">

                {!! Form::open(['action' => ['App\Http\Controllers\UserController@update', $user->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}

                    <div class="row mb-5 g-5">
                        <div class="col-md-12">
                            <div class="">
                                {{ Form::label('name', 'Name', ['class' => 'form-label']) }}
                                {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('name')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="">
                                {{ Form::label('username', 'Username', ['class' => 'form-label']) }}
                                {{ Form::text('username', $user->username, ['class' => 'form-control', 'disabled']) }}

                                @error('username')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-12">
                            <div class="">
                                {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
                                {{ Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => ' ']) }}

                                @error('email')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                {{ Form::label('password', 'Password', ['class' => 'form-label']) }}
                                {!! Form::password('password', array('class' => 'form-control')) !!}

                                @error('password')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                {{ Form::label('confirm-password', 'Confirm Password', ['class' => 'form-label']) }}
                                {!! Form::password('confirm-password', array('class' => 'form-control')) !!}

                                @error('confirm-password')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="">
                                {{ Form::label('role', 'Role', ['class' => 'form-label']) }}

                                {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control multiple-selec', 'multiple')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-sm btn-neutral me-2">Cancel</button>
                        {{ Form::submit('Update', ['class' => 'btn btn-sm btn-primary']) }}
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection

