@extends('layouts.dashboard')

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('All Patients') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('patients.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus-lg"></i>
					</span>
                	<span>{{ __('Create New Patient') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="btn-toolbar mb-2 mb-md-0 ms-auto">
			<div class="btn-group me-2">
			<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
			<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
			<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
			<span data-feather="calendar"></span>
			This week
			</button>
		</div>
	</div>

	<div class="card mb-7">
		<div class="card-header">
			<h5 class="mb-0">{{ __('All Patients') }}</h5>
		</div>

		<div class="table-responsive">
			<table class="table table-hover table-nowrap">
					<thead class="table-light">
						<tr>
							<th scope="col">{{ __('#') }}</th>
							<th scope="col">{{ __('Patient Name') }}</th>
							<th scope="col">{{ __('Patient No.') }}</th>
							<th scope="col">{{ __('Assigned Doctor') }}</th>
							<th scope="col">{{ __('Prescriptions') }}</th>
							<th scope="col">{{ __('Registration Date') }}</th>
							<th></th>
						</tr>
					</thead>
				<tbody>
					@foreach ($patients as $key => $patient)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $patient->first_name . ' ' . $patient->last_name }}</td>
							<td>{{ $patient->patient_no }}</td>
							<td>  
								
							</td>
							<td>{{ $patient->home_phone }}</td>
							<td>{{ format_date_long($patient->registration_date) }}</td>

							<td class="text-end">
								<a href="{{ route('patients.show', $patient->id) }}" class="btn btn-sm btn-outline-primary">View</a>
								<a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
								<a href="#" class="btn btn-outline-danger btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#delPatientModal">
									<i class="bi bi-trash"></i>
								</a>
							</td>
						</tr>
					
					@endforeach
				</tbody>
			</table>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal" id="delPatientModal" tabindex="-1" aria-labelledby="delPatientModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content shadow-3">
				<div class="modal-header">
					<h5 class="modal-title">{{ __('Delete User') }}</h5>
					<div class="text-xs ms-auto">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="modal-body">
					<p class="text-sm text-gray-500">
						{{ __('Are you sure you want to delete the patient record for ') }}<strong>{{ $patient->first_name . ' ' . $patient->last_name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>

					{!! Form::open(['method' => 'DELETE', 'route' => ['patients.destroy', $patient->id],'style'=>'display:inline']) !!}

						{{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger cursor-pointer']) }}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


@endsection

