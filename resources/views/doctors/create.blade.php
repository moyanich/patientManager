@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Doctor') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('patients.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
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

    <div class="card">
        <h5 class="card-header">Profile Details</h5>
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                    </label>
                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                    </button>

                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                </div>
            </div>
        </div>

        <div class="card-body">

            <x-messages />

            {!! Form::open(['action' => 'App\Http\Controllers\DoctorsController@store', 'method' => 'POST']) !!}

                <div class="row">
                    <div class="col-md-8">

                        <div class="mb-3 row">
                            {{ Form::label('employee_no', 'Employee No.', ['class' => 'col-sm-4 col-form-label required-text']) }}
                            <div class="col-sm-8">
                                {{Form::text('employee_no', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('employee_no')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('first_name', 'First Name', ['class' => 'col-sm-4 col-form-label required-text']) }}
                            <div class="col-sm-8">
                                {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('first_name')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('last_name', 'Last Name', ['class' => 'col-sm-4 col-form-label required-text']) }}
                            <div class="col-sm-8">
                                {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('last_name')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('email', 'Email Address', ['class' => 'col-sm-4 col-form-label required-text']) }}
                            <div class="col-sm-8">
                                {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('email')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('designation', 'Designation', ['class' => 'col-sm-4 col-form-label']) }}
                            <div class="col-sm-8">
                                {{Form::text('designation', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('designation')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            {{ Form::label('degrees', 'Degrees', ['class' => 'col-sm-4 col-form-label']) }}
                            <div class="col-sm-8">
                                {{Form::text('degrees', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                @error('degrees')
                                    <p class="text-xs text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        
                        

                        <div class="row">
                            <div class="text-end mt-4">
                                <a href="{{ route('doctors.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                    {{ __('Cancel') }}
                                </a>
                                {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
                            </div>
                        </div>


                    </div>
                    

                    '',
            '',
            'contact_1',
            'contact_2',
            'title',
            'degree',



                </div>

            {!! Form::close() !!}


        </div>



    
    </div>



@endsection




Password
Designation
Department

Address
Phone No
Mobile No
Short Biography
Picture
Specialist Area
Date of Birth
Gender
Blood Group
Education/Degree

Blood Group
Education/Degree
Status - Active Inactive
