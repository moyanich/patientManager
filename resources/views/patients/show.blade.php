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

			<div class="card mb-7 mt-5">
				<div class="card-header">
					<h5 class="mb-0">{{ __('Personal Information') }}</h5>
				</div>

				<div class="card-body p-0">
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
					</ul>
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
									<p class="text-muted font-weight-medium">Total Bill</p>
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



