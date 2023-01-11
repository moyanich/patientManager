@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-8 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h6 class="text-uppercase">{{__('Patient Profile') }}</h6>
			<h1 class="h2 mb-0 ls-tight">{{ $patient->salutation . ' ' . $patient->first_name . ' ' . ' ' . $patient->middle_name . ' ' . $patient->last_name }}</h1>
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

	@include('partials.nav')

	<x-messages />

	
	{!! Form::open(['action' => ['App\Http\Controllers\PatientsController@update', $patient->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

		<div class="row align-items-center py-4">
			<div class="col-sm col-12">
				<h4>{{ __('Patient Information') }}</h4>
			</div>
			<div class="col-sm-auto col-12 mt-4 mt-sm-0">
				<div class="hstack gap-2 justify-content-sm-end">
					{{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}

					<a href="#modalExport" class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal"><span class="pe-2"><i class="bi bi-people-fill"></i> </span><span>Share</span> </a>
				
				</div>
			</div>
		</div>

		<div class="row align-items-start gx-2 bg-white p-4">

			<div class="col-12 col-md-4">
				<h4 class="d-block my-4">{{ __('Personal Information') }}</h4>

				<div class="row mb-3">
					{{Form::label('patientno', 'Patient No', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('patientno', $patient->patient_no, ['class' => 'form-control', 'placeholder' => '', 'disabled' ]) }}
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('salutation', 'Salutation', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						
						{!! Form::select('salutation', [
							'Mr.' => 'Mr.',
							'Mrs.' => 'Mrs.',
							'Ms.' => 'Ms.',
							'Miss' => 'Miss'], $patient->salutation ?? '', ['class' => 'form-select form-control']) !!}

						@error('salutation')
							<p class="text-xs text-danger">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('firstname', 'First Name', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('firstname', $patient->first_name, ['class' => 'form-control', 'placeholder' => '' ]) }}
						@error('firstname')
							<p class="text-xs text-danger">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('middlename', 'Middle Name', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('middlename', $patient->middle_name, ['class' => 'form-control', 'placeholder' => '' ]) }}
						@error('middlename')
							<p class="text-xs text-red-600">{{$message}}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('lastname', 'Last Name', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('lastname', $patient->last_name, ['class' => 'form-control', 'placeholder' => '' ]) }}
						@error('lastname')
							<p class="text-xs text-red-600">{{$message}}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('trn', 'TRN', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('trn',  $patient->trn, ['class' => 'form-control', 'placeholder' => '' ]) }}
						@error('trn')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('nis', 'NIS', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('nis',  $patient->nis, ['class' => 'form-control', 'placeholder' => '' ]) }}
						@error('nis')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('gender', 'Gender', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{!! Form::select('gender', $genders, $patient->gender_id ?? '', ['class' => 'form-select form-control']) !!}

						@error('gender')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('dob', 'Date of Birth', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::date('dob', $patient->dob, ['class' => 'form-control']) }}

						@error('dob')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>
				
			</div>

			<div class="col-12 col-md-4 ps-4">
				<h4 class="d-block my-4">{{ __('Residential Information') }}</h4>

				<div class="row mb-3">
					{{Form::label('address1', 'Address 1', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('address1', $address->address1 ?? '', ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('address1')
							<p class="text-xs text-red-600">{{$message}}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('address2', 'Address 2', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('address2', $address->address2 ?? '', ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('address2')
							<p class="text-xs text-red-600">{{$message}}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('city', 'City', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('city', $address->city ?? '', ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('city')
							<p class="text-xs text-red-600">{{$message}}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('parish_id', 'Parish', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{!! Form::select('parish_id', $parishes, $patient->parish_id ?? '', ['class' => 'form-select form-control']) !!}
						@error('parish_id')
							<p class="text-xs text-red-600">{{$message}}</p>
						@enderror
					</div>
				</div>

				<h4 class="d-block my-4 pt-5">{{ __('Contact Information') }}</h4>

				<div class="row mb-3">
					{{Form::label('email', 'Email Address', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::email('email', $patient->email, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('email')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('homephone', 'Home Phone', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('homephone', $patient->home_phone, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('homephone')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('cellnumber', 'Cell Phone', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('cellnumber', $patient->cell_number, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('cellnumber')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

			</div>

			<div class="col-12 col-md-4 ps-4">

				<h4 class="d-block my-4">{{ __('Next of Kin') }}</h4>

				<div class="row mb-3">
					{{Form::label('kin_name', 'Name', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('kin_name', $patient->kin_name, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('kin_name')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('kin_phone', 'Phone Number', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('kin_phone', $patient->kin_phone, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('kin_phone')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('kin_address', 'Address', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::textarea('kin_address', $patient->kin_address, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('kin_address')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>


				<h4 class="d-block my-4 pt-5">{{ __('Employer Information') }}</h4>

				<div class="row mb-3">
					{{Form::label('employer', 'Employer', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('employer', $patient->employer, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('employer')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('workphone', 'Work Phone', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('workphone', $patient->work_phone, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('workphone')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('work_email', 'Work Email', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::text('work_email', $patient->work_email, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('work_email')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					{{Form::label('emp_address', 'Employer Address', ['class' => 'col-sm-4 col-form-label'])}}
					<div class="col-sm-8">
						{{ Form::textarea('emp_address', $patient->emp_address, ['class' => 'form-control', 'placeholder' => '' ]) }}

						@error('emp_address')
							<p class="text-xs text-red-600">{{ $message }}</p>
						@enderror
					</div>
				</div>
			</div>
			
		</div>
		

	{{ Form::hidden('_method', 'PUT') }}
	{!! Form::close() !!}
		

@endsection



