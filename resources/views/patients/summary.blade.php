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
    
    <div class="row">
        <div class="col-12">
            <h4 class="d-block my-4">{{ __('Patient Information') }}</h4>
        </div>
    </div>

    <div class="row gx-2 align-items-start bg-white p-2">
        <div class="col col-md-4">
            <div class="card card-profile mb-2">
                <div class="card-body">
                    photo
                    <img src="..." class="card-img" alt="...">
                </div>
            </div>

            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Emergency Contact Name</h4>
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{__('TRN:') }}</h6>
                            </div>
                            <p class="mb-1">---</p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{__('NIS:') }}</h6>
                            </div>
                            <p class="mb-1">---</p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{__('Gender/Sex:') }}</h6>
                            </div>
                            <p class="mb-1">{{  $gender->name ?? '' }} </p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{__('D.O.B.:') }}</h6>
                            </div>
                            <p class="mb-1">{{ format_date_long($patient->dob) ?? '' }}</p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{__('Age:') }}</h5>
                            </div>
                            <p class="mb-1">{{ calc_age($patient->dob) }}</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-md-4">
           
            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Address</h4>
                    <p>{{ $address->address1 ?? '' }}</p> 
                    <p>{{ $address->address2 ?? '' }}</p> 
                    <p>{{ $address->city ?? '' }}</p> 
                </div>
            </div>

            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Contact Information</h4>
                    <table class="table table-borderless compact-table table-sm">
                        <tbody>
                            <tr>
                                <td><div class="font-bold">{{__('Email:') }}</div></td>
                                <td>{{ $patient->email }}</td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('Home #:') }}</div></td>
                                <td>{{ hyphenate($patient->home_phone) }}</td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('Cellphone #:') }}</div></td>
                                <td>{{ hyphenate($patient->cell_number) }}</td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('Work #:') }}</div></td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('Employer:') }}</div></td>
                                <td>---</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        <div class="col col-md-4">
            <div class="card card-profile mb-4">
                <div class="card-body">
                    <table class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <td><div class="font-bold">{{__('Patient No:') }}</div></td>
                                <td>{{ $patient->patient_no }}</td>
                                <td><div class="font-bold">{{__('Docket No:') }}</div></td>
                                <td>----</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>
  
@endsection
