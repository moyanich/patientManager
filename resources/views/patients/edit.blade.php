@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-8 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h6 class="text-uppercase">{{__('Patient Profile') }}</h6>
			<h1 class="h2 mb-0 ls-tight">{{-- $patient->first_name.''.''.$patient->middle_name.''.$patient->last_name --}}</h1>
        </div>
        <!-- Actions -->

		<div class="col-md-4 col-12 text-md-end">
			<div class="mx-n1">
			  <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
				<span class=" pe-2">
				  <i class="bi bi-pencil"></i>
				</span>
				<span>Edit</span>
			  </a>
				<a href="{{ route('patients.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus-lg"></i>
					</span>
					<span>{{__('Create New Patient') }}</span>
				</a>
			</div>
		</div>
    </div>
@endsection

@section('content')

<x-messages />


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{-- route('patients.edit',$patient->id) --}}" class="btn btn-sm btn-outline-warning">Edit</a>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>

{{--  

<div class="card mb-7 p-5">
    <div class="card-body">
        {!! Form::open(['action' => ['App\Http\Controllers\PatientsController@update', $patient->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{Form::label('firstname', 'First Name', ['class' => 'form-label mb-2'])}}

                    {{Form::text('firstname', $patient->first_name, ['class' => 'form-control', 'placeholder' => ''])}}

                    @error('firstname')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{Form::label('middlename', 'Middle Name', ['class' => 'form-label mb-2'])}}

                    {{Form::text('middlename', $patient->middle_name, ['class' => 'form-control', 'placeholder' => ''])}}

                    @error('middlename')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div><!--end col-->
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{Form::label('lastname', 'Last Name', ['class' => 'form-label mb-2'])}}

                    {{Form::text('lastname', $patient->last_name, ['class' => 'form-control', 'placeholder' => ''])}}

                    @error('lastname')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>                    
        </div>
        <div class="row"><!--end col-->
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('patient_no', 'Patient No.', ['class' => 'form-label mb-2']) }}

                    {{ Form::text('patient_no', $patient->patient_no, ['class' => 'form-control', 'placeholder' => '', 'disabled']) }}

                    @error('patient_no')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('dob', 'Date of Birth', ['class' => 'form-label mb-2']) }}

                    {{ Form::date('dob', $patient->dob, ['class' => 'form-control', 'placeholder' => '']) }}

                    @error('dob')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('gender', 'Gender', ['class' => 'form-label mb-2']) }}

                    {{--  {!! Form::select('gender', $genders, $patient->gender_id, '', ['class' => 'form-select']) !!}--}}

                    {{--

                    @error('gender')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('home_phone', 'Phone Number (Home)', ['class' => 'form-label mb-2']) }}

                    {{ Form::tel('home_phone', $patient->home_phone, ['class' => 'form-control', 'placeholder' => '']) }}

                    @error('home_phone')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('cell_number', 'Phone Number (Mobile)', ['class' => 'form-label mb-2']) }}

                    {{ Form::text('cell_number', $patient->cell_phone, ['class' => 'form-control', 'placeholder' => '']) }}

                    @error('cell_number')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('registration_date', 'Registration Date', ['class' => 'form-label mb-2']) }}

                    {{ Form::date('registration_date', $patient->registration_date, ['class' => 'form-control', 'placeholder' => '', 'disabled']) }}

                    @error('registration_date')
                        <p class="text-xs text-danger">{{ $message }}</p>
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
    $table->integer('parish_id')->unsigned()->nullable();



        <div class="row">
            <div class="text-end mt-4">
                <a href="{{ route('patients.index') }}" class="btn btn-sm bg-gray-100 me-2">
                    {{ __('Cancel') }}
                </a>
                {{ Form::submit('Update', ['class' => 'btn btn-sm btn-primary']) }}
            </div>
        </div><!--end row-->
    

        {{Form::hidden('_method', 'PUT') }}
        {!! Form::close() !!}


    </div>
</div>

--}}


@endsection