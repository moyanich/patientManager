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

    <div class="card mb-7 p-5">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Create Patient') }}</h5>
        </div>
        <div class="card-body">

            <x-messages />

            {!! Form::open(['action' => 'App\Http\Controllers\PatientsController@store', 'method' => 'POST']) !!}
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{Form::label('firstname', 'First Name', ['class' => 'form-label mb-2'])}}

                            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => ''])}}

                            @error('lastname')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{Form::label('middlename', 'Middle Name', ['class' => 'form-label mb-2'])}}

                            {{Form::text('middlename', '', ['class' => 'form-control', 'placeholder' => ''])}}

                            @error('middlename')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div><!--end col-->
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{Form::label('lastname', 'Last Name', ['class' => 'form-label mb-2'])}}

                            {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => ''])}}

                            @error('lastname')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>                    
                </div>
                <div class="row"><!--end col-->
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{ Form::label('patientID', 'Patient No.', ['class' => 'form-label mb-2']) }}

                            {{ Form::text('patientID', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('patientID')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{ Form::label('dob', 'Date of Birth', ['class' => 'form-label mb-2']) }}

                            {{ Form::date('dob', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('dob')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{ Form::label('gender', 'Gender', ['class' => 'form-label mb-2']) }}

                            {!! Form::select('gender', $genders, '', ['class' => 'form-select']) !!}

                            @error('gender')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">   
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{ Form::label('home_phone', 'Phone Number (Home)', ['class' => 'form-label mb-2']) }}

                            {{ Form::tel('home_phone', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('home_phone')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{ Form::label('cell_number', 'Phone Number (Mobile)', ['class' => 'form-label mb-2']) }}

                            {{ Form::tel('cell_number', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('cell_number')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            {{ Form::label('registration_date', 'Registration Date', ['class' => 'form-label mb-2']) }}

                            {{ Form::date('registration_date', '', ['class' => 'form-control', 'placeholder' => '']) }}

                            @error('registration_date')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">   
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                           
                        </div>
                    </div>
                </div>


                {{-- 
                    
                    
            $table->string('emergency_number')->nullable();
            $table->string('email', 50)->nullable();
            $table->char('nis', 9)->nullable()->unique();
            $table->char('trn', 9)->nullable()->unique();
            $table->mediumText('city')->nullable();
            $table->integer('parish_id')->unsigned()->nullable();--}}
                <div class="row">
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

