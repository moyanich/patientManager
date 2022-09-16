@extends('layouts.dashboard')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ __('New Patient Onboarding') }}</h1>
    </div>

    {{-- Messages --}}
    <x-messages />
    {{-- End Messages --}}

    <div class="card shadow p-0">
        <div class="card-header">
            <h2>Onboard Patient</h2>
        </div>
        <div class="card-body p-4">
            
            {!! Form::open(['action' => 'App\Http\Controllers\Admin\PatientsController@store', 'method' => 'POST']) !!}
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
                    <div class="col-lg-12">
                        <div class="text-end">
                            <a href="{{ route('admin.patients.index') }}" class="btn btn-outline">
                                {{ __('Cancel') }}
                            </a>

                            {{ Form::submit('Save', ['class' => 'btn btn-secondary']) }}                           
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection

