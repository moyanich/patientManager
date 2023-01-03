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
