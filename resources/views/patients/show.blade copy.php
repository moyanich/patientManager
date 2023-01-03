@extends('layouts.dashboard')

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

	<x-messages />

	<ul class="nav nav-pills nav-fill mb-5">
		<li class="nav-item">
		  	<a class="nav-link active" aria-current="page" href="#">Active</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Much longer nav link</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link disabled">Disabled</a>
		</li>
	  </ul>


{{--  
	<section class="patient-profile bg-white">

		<div class="row g-6 mb-6 p-4">

			<div class="col-xl-4 col-sm-4 col-12 border-end">
				<div class="d-flex align-items-center">
					<h4 class="d-block my-4">{{ __('General Information') }}</h4>
					<div class="ms-auto">
						<a href="{{ route('patients.edit', $patient->id) }}" class="btn d-inline-flex btn-sm btn-primary mx-2">
							<span>{{__('Edit Profile') }}</span>
						</a>
					</div>
				</div>
			
				<div class="table-responsive">
					<table class="table table-hover table-nowrap table-no-padding">
						<tbody>
							<tr>
								<td><div class="font-bold">{{__('Patient No:') }}</div></td>
								<td><div class="font-bold">{{ $patient->patient_no }}</div></td>
							</tr>
							<tr>
								<td><div class="font-bold">{{__('Status:') }}</div></td>
								<td><div class="font-bold">--</div></td>
							</tr>
							<tr>
								<td><div class="font-bold">{{__('D.O.B.:') }}</div></td>
								<td>{{ format_date_long($patient->dob) }}</td>
							</tr>
							@if (@empty($patient->dob))
								<tr>
									<td><div class="font-bold">{{ __('Update DOB Field') }}</div></td>
								</tr>
							@else
								<tr>
									<td><div class="font-bold">{{__('Age:') }}</div>
									</td>
									<td>{{ calc_age($patient->dob) }}</td>
								</tr>
							@endif
							<tr>
								<td><div class="font-bold">{{__('Gender:') }}</div></td>
								<td>{{ $gender->name }}</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="d-flex align-items-center">
					<h4 class="d-block my-4">{{ __('Contact Information') }}</h4>
					<div class="ms-auto">
						<a href="{{ route('patients.edit', $patient->id) }}" class="btn d-inline-flex btn-sm btn-primary mx-2">
							<span>{{__('Edit Profile') }}</span>
						</a>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-hover table-nowrap table-no-padding">
						<tbody>
							<tr>
								<td><div class="font-bold">{{__('Address:') }}</div></td>
								<td><div class="font-bold">--</div></td>
							</tr>
							<tr>
								<td><div class="font-bold">{{__('Home Phone:') }}</div></td>
								<td><div class="font-bold">{{ $patient->home_phone }}</div></td>
							</tr>
							<tr>
								<td><div class="font-bold">{{__('Mobile Phone:') }}</div></td>
								<td>{{ $patient->cell_number }}</td>
							</tr>
							<tr>
								<td><div class="font-bold">{{__('Email:') }}</div></td>
								<td>{{ $patient->email }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-xl-6 col-sm-6 col-12">
				<div class="row">
					<div class="col-md-4">
						<div class="card mini-stats-wid">
							<div class="card-body">
								<div class="media">
									<div class="media-body">
										<p class="text-muted font-weight-medium">Blood Type</p>
										<h4 class="mb-0">{{-- $blood_group->name --}}</h4>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

	</section>

	<section class="patient-profile">
		<!-- Card stats -->
		<div class="row g-6 mb-6">
			<div class="col-xl-4 col-sm-4 col-12">

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col">
							<span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
							<span class="h3 font-bold mb-0">$750.90</span>
							</div>
							<div class="col-auto">
							<div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
								<i class="bi bi-credit-card"></i>
							</div>
							</div>
						</div>
						<div class="mt-2 mb-0 text-sm">
							<span class="badge badge-pill bg-soft-success text-success me-2">
							<i class="bi bi-arrow-up me-1"></i>13%
							</span>
							<span class="text-nowrap text-xs text-muted">Since last month</span>
						</div>
					</div>
				</div>

				

			</div>


			<div class="col-xl-8 col-sm-8 col-12">
				<div class="row">
					<div class="col-md-4">
						<div class="card mini-stats-wid">
							<div class="card-body">
								<div class="media">
									<div class="media-body">
										<p class="text-muted font-weight-medium">Appointments</p>
										<h4 class="mb-0">0</h4>
									</div>
									<div class="mini-stat-icon avatar-sm align-self-center rounded-circle bg-primary">
										<span class="avatar-title">
											<i class="bx bx-check-circle font-size-24"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mini-stats-wid">
							<div class="card-body">
								<div class="media">
									<div class="media-body">
										<p class="text-muted font-weight-medium">Pending Bills</p>
										<h4 class="mb-0">0</h4>
									</div>
									<div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
										<span class="avatar-title">
											<i class="bx bx-hourglass font-size-24"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mini-stats-wid">
							<div class="card-body">
								<div class="media">
									<div class="media-body">
										<p class="text-muted font-weight-medium">Blood Group</p>
										<h4 class="mb-0">$0.00</h4>
									</div>
									<div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
										<span class="avatar-title">
											<i class="bx bx-package font-size-24"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>

		</div>
	</section>



@endsection



