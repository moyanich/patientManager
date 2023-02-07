@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('All Users') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                <span class=" pe-2">
                    <i class="bi bi-pencil"></i>
                </span>
                <span>Edit</span>
                </a>
                <a href="{{ route('users.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                <span class=" pe-2">
                    <i class="bi bi-plus"></i>
                </span>
                <span>Create</span>
                </a>
            </div>
        </div>
    </div>
@endsection



<x-messages />

<div class="card">
	<h5 class="card-header bg-gradient bg-secondary">Department Information</h5>
	<div class="card-body">
	   
			<div class="row">
				<div class="col-md-8">
					<div class="mb-3 row">
						{{ Form::label('name', 'Department Name', ['class' => 'col-sm-4 col-form-label required-text']) }}
						<div class="col-sm-8">
							{{ Form::text('name', $department->name, ['class' => 'form-control', 'placeholder' => '']) }}

							@error('name')
								<p class="text-xs text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>

					<div class="mb-3 row">
						{{ Form::label('description', 'Description', ['class' => 'col-sm-4 col-form-label']) }}
						<div class="col-sm-8">
							{{ Form::textarea('description', $department->description, ['class' => 'form-control', 'placeholder' => '']) }}

							@error('description')
								<p class="text-xs text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>

					<div class="mb-3 row">
						{{ Form::label('status', 'Status', ['class' => 'col-sm-4 col-form-label required-text']) }}

						<div class="col-sm-8">                                
						   {{-- 
							{!! Form::select('status', $statuses, $department->status, ['class' => 'form-select block w-full mt-1 border-0 px-3 py-3 placeholder-blueGray-400 text-gray-600 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!} 
							--}} 
						
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" value="1" {{ $department->status==1 ? 'checked': '' }}/>
								<label class="form-check-label" for="flexRadioDefault1">
								  Active
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" value="2" {{ $department->status==2 ? 'checked': '' }}/>
								<label class="form-check-label" for="flexRadioDefault2">
								  Inactive
								</label>
							</div>

							@error('status[]')
								<p class="text-xs text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>
				
					<div class="row">
						<div class="text-end mt-4">
							<a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
								{{ __('Cancel') }}
							</a>
							{{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
						</div>
					</div>

				</div>
			</div>

		{{Form::hidden('_method', 'PUT') }}
		{!! Form::close() !!}

	</div>
</div>


  {{--  <span class="badge badge-lg badge-dot text-black">

                                    @if(statusConvert($department->status == 1))
                                        <i class="bg-success"></i> 
                                    @else 
                                        <i class="bg-danger"></i> 
                                    @endif
                                    {{ statusConvert($department->status) }}
                                </span>--}}




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
						{{ __('Are you sure you want to delete the patient record for ') }}<strong>{{-- $patient->first_name.''.$patient->last_name --}}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
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








@extends('layouts.dashboard')
@section('content')

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">{{ __('Patients') }}/h1>
	<div class="btn-toolbar mb-2 mb-md-0">
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

	<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

	<h2>Section title</h2>
	<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Header</th>
			<th scope="col">Header</th>
			<th scope="col">Header</th>
			<th scope="col">Header</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>1,001</td>
			<td>random</td>
			<td>data</td>
			<td>placeholder</td>
			<td>text</td>
		</tr>
		<tr>
			<td>1,002</td>
			<td>placeholder</td>
			<td>irrelevant</td>
			<td>visual</td>
			<td>layout</td>
		</tr>
		<tr>
			<td>1,003</td>
			<td>data</td>
			<td>rich</td>
			<td>dashboard</td>
			<td>tabular</td>
		</tr>
		<tr>
			<td>1,003</td>
			<td>information</td>
			<td>placeholder</td>
			<td>illustrative</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,004</td>
			<td>text</td>
			<td>random</td>
			<td>layout</td>
			<td>dashboard</td>
		</tr>
		<tr>
			<td>1,005</td>
			<td>dashboard</td>
			<td>irrelevant</td>
			<td>text</td>
			<td>placeholder</td>
		</tr>
		<tr>
			<td>1,006</td>
			<td>dashboard</td>
			<td>illustrative</td>
			<td>rich</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,007</td>
			<td>placeholder</td>
			<td>tabular</td>
			<td>information</td>
			<td>irrelevant</td>
		</tr>
		<tr>
			<td>1,008</td>
			<td>random</td>
			<td>data</td>
			<td>placeholder</td>
			<td>text</td>
		</tr>
		<tr>
			<td>1,009</td>
			<td>placeholder</td>
			<td>irrelevant</td>
			<td>visual</td>
			<td>layout</td>
		</tr>
		<tr>
			<td>1,010</td>
			<td>data</td>
			<td>rich</td>
			<td>dashboard</td>
			<td>tabular</td>
		</tr>
		<tr>
			<td>1,011</td>
			<td>information</td>
			<td>placeholder</td>
			<td>illustrative</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,012</td>
			<td>text</td>
			<td>placeholder</td>
			<td>layout</td>
			<td>dashboard</td>
		</tr>
		<tr>
			<td>1,013</td>
			<td>dashboard</td>
			<td>irrelevant</td>
			<td>text</td>
			<td>visual</td>
		</tr>
		<tr>
			<td>1,014</td>
			<td>dashboard</td>
			<td>illustrative</td>
			<td>rich</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,015</td>
			<td>random</td>
			<td>tabular</td>
			<td>information</td>
			<td>text</td>
		</tr>
		</tbody>
	</table>
	</div>
		
@endsection



<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Patient No:') }}</div>
			{{ $patient->patient_no }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Full Name:') }}</div>
			{{ $patient->first_name . ' ' . ' ' . $patient->middle_name . ' ' . $patient->last_name }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Home Phone:') }}</div>
			{{ $patient->home_phone }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Mobile Phone:') }}</div>
			{{ $patient->cell_number }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Email:') }}</div>
			{{ $patient->email }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('D.O.B.:') }}</div>
			{{ format_date_long($patient->dob) }}	
		</div>
	</li>

	@if (@empty($patient->dob))
		<li class="list-group-item d-flex justify-content-between align-items-start">
			{{ __('Update DOB Field') }}
		</li>
	@else
		<li class="list-group-item d-flex justify-content-between align-items-start">
			<div class="ms-2 me-auto">
				<div class="font-bold">{{__('Age:') }}</div>
				{{ calc_age($patient->dob) }}	
			</div>
		</li>
	@endif

	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Gender:') }}</div>
			{{ $gender->name }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Address:') }}</div>
			
		</div>
	</li>
</ul>-