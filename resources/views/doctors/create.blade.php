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

        <div class="row g-5 mt-2">
            <div class="col-12 col-md-2">
                <div class="">
                    <div>
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100%" id="uploadedAvatar">
                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary btn-sm" tabindex="0">
                            <span class="d-none d-sm-block">Upload photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10">

                <div class="row mb-4">
                    <div class="col-12 col-md-2">
                        <label for="employee_no" class="form-label required-text">Employee No.</label>
                        <input id="employee_no"
                            type="text"
                            name="employee_no"
                            value = "{{ old('employee_no') }}"
                            class="form-control @error('employee_no') is-invalid @enderror">
                        
                        @error('employee_no')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-5">
                        <label for="first_name" class="form-label">First Name</label>
                        <input id="first_name"
                            type="text"
                            name="first_name"
                            value = "{{ old('first_name') }}"
                            class="form-control @error('first_name') is-invalid @enderror">

                        @error('first_name')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-5">
                        <label for="last_name" class="form-label">Last Name</label>
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

                <div class="row mb-4">
                    <div class="col-12 col-md-4">
                        <label for="designation" class="form-label">Designation</label>
                        <input id="designation"
                            type="text"
                            name="designation"
                            value = "{{ old('designation') }}"
                            class="form-control @error('designation') is-invalid @enderror">
        
                        @error('designation')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="specialist_area" class="form-label">Specialist Area</label>
                        <input id="specialist_area"
                            type="text"
                            name="specialist_area"
                            value = "{{ old('specialist_area') }}"
                            class="form-control @error('specialist_area') is-invalid @enderror">
        
                        @error('specialist_area')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="departments" class="form-label required-text">Department</label>
                        <select name="departments[]" class="form-select form-control form-select-sm js-example-basic-multiple js-states select2-multiple" multiple>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}"> {{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 col-md-4">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input id="dob"
                            type="date"
                            name="dob"
                            value = "{{ old('dob') }}"
                            class="form-control @error('dob') is-invalid @enderror">
        
                        @error('dob')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="genders" class="form-label required-text">Gender</label>
                        <select name="gender" class="form-select form-control form-select-sm">
                            @foreach($genders as $key => $gender)
                                <option value="{{ $key }}"> {{ $gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-5">
                        <label for="email" class="form-label">Email Address</label>
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

                <div class="row mb-4">
                    <div class="col-12 col-md-4">
                        <label for="contact_1" class="form-label">Contact Number 1</label>
                        <input id="contact_1"
                            type="text"
                            name="contact_1"
                            value = "{{ old('contact_1') }}"
                            class="form-control @error('contact_1') is-invalid @enderror">
        
                        @error('contact_1')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="contact_2" class="form-label">Contact Number 2</label>
                        <input id="contact_2"
                            type="text"
                            name="contact_2"
                            value = "{{ old('contact_2') }}"
                            class="form-control @error('contact_2') is-invalid @enderror">
        
                        @error('contact_2')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address"
                        name="address"
                        value="{{ old('address') }}"
                        rows="10"
                        class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
    
                        @error('information')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="row mb-4">
                    <div class="col-12 col-md-4">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address"
                        name="address"
                        value="{{ old('address') }}"
                        rows="10"
                        class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
    
                        @error('information')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>


                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <label for="information" class="form-label">Additonal Information</label>
                        <textarea id="information"
                        name="information"
                        value="{{ old('information') }}"
                        rows="10"
                        class="form-control @error('information') is-invalid @enderror">{{ old('information') }}</textarea>
    
                        @error('information')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                
                <div class="row g-5 mt-2">
                    <hr/>
                    <div class="col-12">
                        <h4>Emergency Contact Information</h4>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="kin_name" class="form-label">Name</label>
                        <input id="kin_name"
                            type="text"
                            name="kin_name"
                            value = "{{ old('kin_name') }}"
                            class="form-control @error('kin_name') is-invalid @enderror">
        
                        @error('kin_name')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="kin_phone" class="form-label">Phone Number</label>
                        <input id="kin_phone"
                            type="text"
                            name="kin_phone"
                            value = "{{ old('kin_phone') }}"
                            class="form-control @error('kin_phone') is-invalid @enderror">
        
                        @error('kin_phone')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="kin_email" class="form-label">Email Address</label>
                        <input id="kin_email"
                            type="email"
                            name="kin_email"
                            value = "{{ old('kin_email') }}"
                            class="form-control @error('kin_email') is-invalid @enderror">
        
                        @error('kin_email')
                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
        </div>

       


    </form>

 @endsection
    
       
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
    
