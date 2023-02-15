@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Doctor') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('doctors.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back to Doctor List') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf

        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="{{ route('doctors.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight">{{ __('Create Doctor') }}</h1>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="hstack gap-2 justify-content-end">
                        {{-- //TODO: UPDATE BUTTONS --}}
                        <a href="#!" class="text-sm text-muted text-primary-hover font-semibold me-2 d-none d-md-block"><i class="bi bi-question-circle-fill"></i> <span class="d-none d-sm-inline ms-2">Need help?</span> </a>
                        <button type="button" class="btn btn-sm btn-neutral"><span>Save and create another</span></button> 
                        <a href="{{ route('doctors.index') }}" class="btn btn-sm bg-gray-100 me-2">
                            {{ __('Cancel') }}
                        </a>

                        <input type="submit" value="Save" class="btn btn-sm btn-primary">
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-3 mt-3">
            <x-messages />
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="employee_no" class="form-label mb-0 required-text">Employee No.</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="employee_no"
                    type="text"
                    name="employee_no"
                    value = "{{ old('employee_no') }}"
                    class="form-control @error('employee_no') is-invalid @enderror">
                
                @error('employee_no')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="first_name" class="form-label">First Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="first_name"
                    type="text"
                    name="first_name"
                    value = "{{ old('first_name') }}"
                    class="form-control @error('first_name') is-invalid @enderror">

                @error('first_name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="last_name" class="form-label">Last Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="last_name"
                    type="text"
                    name="last_name"
                    value = "{{ old('last_name') }}"
                    class="form-control @error('last_name') is-invalid @enderror">

                @error('last_name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="email" class="form-label">Email Address</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="email"
                    type="email"
                    name="email"
                    value = "{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror">

                @error('email')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="designation" class="form-label">Designation</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="designation"
                    type="text"
                    name="designation"
                    value = "{{ old('designation') }}"
                    class="form-control @error('designation') is-invalid @enderror">

                @error('designation')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="degrees" class="form-label">Degrees</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <textarea id="degrees"
                    name="degrees"
                    value = "{{ old('degrees') }}"
                    class="form-control @error('degrees') is-invalid @enderror">{{ old('degrees') }}</textarea>

                @error('degrees')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
      

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="department" class="form-label mb-0 required-text">Department</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <select  name="department" class="form-select js-example-basic-multiple js-states select2-multiple" multiple>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}"> {{ $department->name }}</option>
                    @endforeach
                  </select>
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="specialist_area" class="form-label">Specialist Area</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="specialist_area"
                    type="text"
                    name="specialist_area"
                    value = "{{ old('specialist_area') }}"
                    class="form-control @error('specialist_area') is-invalid @enderror">

                @error('specialist_area')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="dob" class="form-label">Date of Birth</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="dob"
                    type="date"
                    name="dob"
                    value = "{{ old('dob') }}"
                    class="form-control @error('dob') is-invalid @enderror">

                @error('dob')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>




        <select class="multiple-select" name="state">
            <option value="AL">Alabama</option>
              ...
            <option value="WY">Wyoming</option>
          </select>

        


       
        {{-- 
            
Password

Department
Address
Phone No
Mobile No
Short Biography
Picture

Gender
Blood Group
Education/Degree

Blood Group
Education/Degree
Status - Active Inactive

--}}


        {{--  
        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="title" class="form-label required-text">Status</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <div class="form-floating">
                    <select name="status" class="form-select @error('status') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                        @foreach($statuses as $key => $value)
                            <option value="{{ $key }}"> 
                                {{ $value }} 
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Choose a status</label>
                </div>
                @error('status')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        --}}
    </form>

@endsection

{{--  
                        
                        

                        <div class="row">
                            <div class="text-end mt-4">
                                <a href="{{ route('doctors.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                    {{ __('Cancel') }}
                                </a>
                                {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
                            </div>
                        </div>

                    </div>
                    

                    '',
            '',
            'contact_1',
            'contact_2',
            'title',
            'degree',







--}}