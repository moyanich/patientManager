@extends('layouts.dashboard', ['page' => __('User Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New User') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('users.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back to Users List') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="{{ route('users.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight">{{ __('Create User') }}</h1>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="hstack gap-2 justify-content-end">
                        {{-- //TODO: UPDATE BUTTONS --}}
                        <a href="#!" class="text-sm text-muted text-primary-hover font-semibold me-2 d-none d-md-block"><i class="bi bi-question-circle-fill"></i> <span class="d-none d-sm-inline ms-2">Need help?</span> </a>
                        <button type="button" class="btn btn-sm btn-neutral"><span>Save and create another</span></button> 
                        <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                            {{ __('Cancel') }}
                        </a>

                        
                        <input type="submit" value="Save" class="btn btn-sm btn-primary">
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="roles" class="form-label mb-0 required-text">Roles</label>
            </div>
            <div class="col-md-8 col-xl-5">

                <div class="form-floating">
                    <select name="roles" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Choose One</option>
                        @foreach($roles as $key => $value)
                            <option value="{{ $value }}"> {{ $key }}</option>
                        @endforeach
                     
                    </select>
                    <label for="floatingSelect">Assign a role</label>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-3 mt-3">
            <x-messages />
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="first_name" class="form-label mb-0 required-text">First Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="firstname"
                type="text"
                name="first_name"
                class="form-control @error('first_name') is-invalid @enderror">
            
                @error('first_name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="last_name" class="form-label mb-0 required-text">Last Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="lastname"
                type="text"
                name="last_name"
                class="form-control @error('last_name') is-invalid @enderror">
            
                @error('last_name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="username" class="form-label mb-0 required-text">Username</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="username"
                    type="text"
                    name="username"
                    class="form-control @error('username') is-invalid @enderror">
                
                @error('username')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="email" class="form-label mb-0 required-text">Email Address</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="email"
                    type="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror">
                
                @error('email')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="password" class="form-label mb-0 required-text">Password</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="pass"
                    type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror">
                
                @error('password')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="confirm-password" class="form-label mb-0 required-text">Confirm Password</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="pass-confirm"
                    type="password"
                    name="confirm-password"
                    class="form-control @error('confirm-password') is-invalid @enderror">
                
                @error('confirm-password')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

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

    </form>

@endsection


{{-- 
    @extends('layouts.dashboard', ['page' => __('User Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New User') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('users.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back to Users List') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')

<x-messages />
<div class="py-4 border-bottom">
    <div class="row align-items-center">
        <div class="col">
           <h1 class="h4 ls-tight">{{ __('Add a new user') }}</h1>
        </div>
        <div class="col-auto d-none d-md-block">
            <div class="hstack gap-2 justify-content-end">
                <a href="#!" class="text-sm text-muted text-primary-hover font-semibold me-2 d-none d-md-block"><i class="bi bi-question-circle-fill"></i> <span class="d-none d-sm-inline ms-2">Need help?</span> </a>
                <button type="button" class="btn btn-sm btn-neutral rounded-pill"><span>Save and create another</span></button> 
                <button type="button" class="btn btn-sm btn-primary rounded-pill"><span>Save</span></button>
            </div>
        </div>
    </div>
</div>



    <div class="row align-items-center g-3 mt-6">
        <div class="col-md-2"><label class="form-label mb-0">Asset name</label></div>
        <div class="col-md-8 col-xl-5">
            <input type="text" class="form-control" placeholder="Asset name">
        </div>
    </div>

    <div class="offset-md-3 col-md-6">
        <x-messages />
        <div class="card card-bordered">
            <div class="card-body">
                <h4 class="card-title">Create a new user</h4>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="name" class="form-label mb-0 required-text">Full Name</label>
                                <div class="ms-auto">
                                  <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="name"
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror">
                            
                            @error('name')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="username" class="form-label required-text">Username</label>
                                <div class="ms-auto">
                                  <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="username"
                                type="text"
                                name="username"
                                class="form-control @error('username') is-invalid @enderror">
                           
                            @error('username')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="email" class="form-label required-text">Email Address</label>
                                <div class="ms-auto">
                                  <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="email"
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror">
                           
                            @error('email')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="email" class="form-label required-text">Password</label>
                                <div class="ms-auto">
                                  <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="pass"
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror">
                           
                            @error('password')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="email" class="form-label required-text">Confirm Password</label>
                                <div class="ms-auto">
                                  <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="pass-confirm"
                                type="password"
                                name="confirm-password"
                                class="form-control @error('confirm-password') is-invalid @enderror">
                           
                            @error('confirm-password')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="title" class="form-label required-text">Roles</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>

                            @foreach($roles as $key => $value)
                                <div class="form-check">
                                    <input name="roles" class="form-check-input" type="radio" value="{{ $value }}" id="rolesCheck">
                                    <label class="form-check-label" for="rolesCheck">
                                        {{ $key }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-end mt-4">
                            <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                {{ __('Cancel') }}
                            </a>
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

    
--}}