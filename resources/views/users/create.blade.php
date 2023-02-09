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

    <div class="offset-md-3 col-md-6">
        <x-messages />
        <div class="card card-bordered">
            <div class="card-body">
                <h4 class="card-title">Add User</h4>
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
