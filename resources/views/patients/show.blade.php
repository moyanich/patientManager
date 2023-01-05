@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-8 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h6 class="text-uppercase">{{__('Patient Profile') }}</h6>
			<h1 class="h2 mb-0 ls-tight">{{ $patient->first_name . ' ' . ' ' . $patient->middle_name . ' ' . $patient->last_name }}</h1>
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

	<div class="row">
		<div class="col-12">
			<h4 class="d-block my-4">{{ __('Patient Information') }}</h4>
		</div>
	</div>

	{!! Form::open(['action' => ['App\Http\Controllers\PatientsController@update', $patient->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

		<div class="row align-items-start">

			<div class="col col-md-6">
				<div class="card">
					
					<div class="card-body">

						<div class="row mb-3">
							{{Form::label('patientno', 'Patient No', ['class' => 'col-sm-4 col-form-label'])}}
							<div class="col-sm-8">
								{{ Form::text('patientno', $patient->patient_no, ['class' => 'form-control', 'placeholder' => '', 'disabled' ]) }}
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
							{{Form::label('parish', 'Parish', ['class' => 'col-sm-4 col-form-label'])}}
							<div class="col-sm-8">
								{{ Form::text('parish', 'parishy', ['class' => 'form-control', 'placeholder' => '' ]) }}
								@error('city')
									<p class="text-xs text-red-600">{{$message}}</p>
								@enderror
							</div>
						</div>
						
					</div>
				</div>

			</div>

			<div class="col col-md-6">
				<div class="card">
					<div class="card-body">
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
				</div>
			</div>


		</div>


		{{ Form::submit('Update', ['class' => 'btn btn-sm btn-primary']) }}

	{{ Form::hidden('_method', 'PUT') }}
	{!! Form::close() !!}
		





@endsection



