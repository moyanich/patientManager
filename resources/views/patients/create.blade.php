@extends('layouts.dashboard')

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Patient Onboarding') }}</h1>
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

    <div class="card mb-7 p-5">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Create Patient') }}</h5>
        </div>
        <div class="card-body">

            <x-messages />

            {!! Form::open(['action' => 'App\Http\Controllers\PatientsController@store', 'method' => 'POST']) !!}
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            {{Form::label('firstname', 'First Name', ['class' => 'form-label mb-2'])}}

                            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}

                            @error('lastname')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            {{Form::label('lastname', 'Last Name', ['class' => 'form-label mb-2'])}}

                            {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}

                            @error('lastname')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div><!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            {{ Form::label('patientID', 'Patient No.', ['class' => 'form-label mb-2']) }}

                            {{ Form::number('patientID', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('patientID')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            {{ Form::label('registration_date', 'Registration Date', ['class' => 'form-label mb-2']) }}

                            {{ Form::date('registration_date', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('registration_date')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            home_phone

                            
                            <label for="phonenumberInput" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+(245) 451 45123" id="phonenumberInput">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="emailidInput" class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
                        </div>
                    </div><!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="address1ControlTextarea" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="citynameInput" class="form-label">City</label>
                            <input type="email" class="form-control" placeholder="Enter your city" id="citynameInput">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="ForminputState" class="form-label">State</label>
                            <select id="ForminputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            {{ Form::label('gender', 'Gender', ['class' => 'block uppercase text-blueGray-600 text-xs font-bold mb-2']) }}

                            {!! Form::select('gender', $genders, '', ['class' => 'form-select']) !!}

                            @error('gender')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <a href="{{ route('patients.index') }}" class="btn btn-sm bg-gray-100 me-2">
                            {{ __('Cancel') }}
                        </a>
                        {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
                    </div>
                </div><!--end row-->
            
            {!! Form::close() !!}

        </div>
    </div>





@endsection

