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

    <div class="row align-items-start">
        <div class="col col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <td><div class="font-bold">{{__('TRN:') }}</div></td>
                                <td>---</td>
                                <td><div class="font-bold">{{__('Gender/Sex:') }}</div></td>
                                <td>
                                    @if (@empty( $gender->name)) 
                                        {{__('---') }} 
                                    @else 
                                        {{  $gender->name  }} 
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('NIS:') }}</div></td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('D.O.B.:') }}</div></td>
                                <td>@if (@empty($patient->dob)) {{__('----') }}   @else {{ format_date_long($patient->dob) }}@endif</td>
                                <td><div class="font-bold">{{__('Age:') }}</div></td>
                                <td>{{ calc_age($patient->dob) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    @if (@empty($address->address1))
                        {{__('----') }}   
                    @else 
                        {{ $address->address1 }}
                    @endif
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-borderless compact-table table-sm">
                        <tbody>
                            <tr>
                                <td><div class="font-bold">{{__('Email:') }}</div></td>
                                <td>{{ $patient->email }}</td>
                            </tr>
                            <tr>
                                <td><div class="font-bold">{{__('Home #:') }}</div></td>
                                <td>{{ $patient->home_phone }}</td>
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

        <div class="col col-md-6">
            <div class="card mb-4">
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

        <div class="col col-md-2">
            <div class="card mb-2">
                <div class="card-body">
                    photo
                    <img src="..." class="card-img" alt="...">
                </div>
            </div>
        </div>
    </div>
  
@endsection
