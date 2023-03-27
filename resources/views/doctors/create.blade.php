@extends('layouts.dashboard', ['page' => __('Doctor Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0 d-flex">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Doctor') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('doctors.index') }}" type="button" class="text-xs" aria-label="Close"><i class="bi bi-list-task"></i>{{ __(' Doctors List') }}</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center g-3">
                <div class="col-12">
                    <x-messages />
                </div>
            </div>

            <div class="row align-items-center g-3 mt-2">
                <div class="col-12">
                    <form action="{{ route('doctors.store') }}" method="POST">
                        @csrf

                        <div class="row g-5">
                            <div class="col-12 col-md-12">
                                <div class="row mb-4">
                                    <div class="col-12 col-md-4">
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
                                </div>

                                {{-- Name --}}
                                <div class="row mb-4">
                                    <div class="col-12 col-md-4">
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
                                    <div class="col-12 col-md-4">
                                        <label for="middle_name" class="form-label">Middle Name</label>
                                        <input id="middle_name"
                                            type="text"
                                            name="middle_name"
                                            value = "{{ old('middle_name') }}"
                                            class="form-control @error('middle_name') is-invalid @enderror">

                                        @error('middle_name')
                                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-4">
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

                                {{-- Gender, DOB--}}
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
                                        <select name="gender" class="form-select form-control form-select-md">
                                            @foreach($genders as $key => $gender)
                                                <option value="{{ $key }}"> {{ $gender }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-5">
                                       
                                    </div>
                                </div>

                                {{-- Designation --}}
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
                                    {{-- //TODO Add error to field --}}
                                    <div class="col-12 col-md-4">
                                        <label for="departments" class="form-label required-text">Department</label>
                                        <select name="departments[]" class="form-select form-control form-select-md js-example-basic-multiple js-states select2-multiple @error('departments[]') is-invalid @enderror"" multiple>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}"> {{ $department->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('departments[]')
                                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Contact --}}
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
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
                                    <div class="col-12 col-md-3">
                                        <label for="contact_1" class="form-label">Home Phone</label>
                                        <input id="contact_1"
                                            type="text"
                                            name="contact_1"
                                            value = "{{ old('contact_1') }}"
                                            class="form-control @error('contact_1') is-invalid @enderror">
                        
                                        @error('contact_1')
                                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <label for="contact_2" class="form-label">Mobile Phone</label>
                                        <input id="contact_2"
                                            type="text"
                                            name="contact_2"
                                            value = "{{ old('contact_2') }}"
                                            class="form-control @error('contact_2') is-invalid @enderror">
                        
                                        @error('contact_2')
                                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Address --}}
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea id="address"
                                        name="address"
                                        value="{{ old('address') }}"
                                        rows="5"
                                        class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                    
                                        @error('information')
                                            <span class="mt-2 invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                {{-- Additonal Information --}}
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="information" class="form-label">Additonal Information</label>
                                        <textarea id="information"
                                        name="information"
                                        value="{{ old('information') }}"
                                        rows="5"
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

                        <div class="row">
                            <div class="text-end mt-4">
                                <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                    {{ __('Cancel') }}
                                </a>
                                <input type="submit" value="Save" class="btn btn-sm btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



 @endsection
    
       
{{-- 
            
Password


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
    
