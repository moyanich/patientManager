@extends('layouts.dashboard', ['page' => __('User Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('User Edit') }}</h1>
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
            <div class="card-header d-flex">
                <h4 class="card-title">{{ __('Edit User Record') }}</h4>
                @can('user-delete')
                    <div class="ms-auto">
                        @can('user-edit', $user)
                            <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#passUpdate-{{ $user->id }}">
                                {{ __('Change user password') }}
                            </a>
                        @endcan
                        
                        <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#sDelUser-{{ $user->id }}">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                @endcan
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="name" class="form-label mb-0 required-text">Name</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="name"
                                type="text"
                                name="name"
                                value="{{ $user->name }}"
                                class="form-control @error('name') is-invalid @enderror">
                            
                            @error('name')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="username" class="form-label mb-0 required-text">Username</label>
                            </div>
                            <input id="username"
                                type="text"
                                name="username"
                                value="{{ $user->username }}"
                                class="form-control @error('name') is-invalid @enderror" disabled/>
                            
                            @error('name')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="name" class="form-label mb-0 required-text">Email Address</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="email"
                                type="email"
                                name="email"
                                value="{{ $user->email }}"
                                class="form-control @error('email') is-invalid @enderror">
                            
                            @error('email')
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
                                    <input name="roles" class="form-check-input" type="radio" value="{{ $value }}" id="rolesCheck" 
                                    @foreach($user->getRoleNames() as $createdUser) 
                                        @if($value == $createdUser) checked @endif
                                    @endforeach>
                                    <label class="form-check-label" for="rolesCheck">
                                        {{ $key }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-end mt-4">
                            <a href="{{ route('users.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                {{ __('Cancel') }}
                            </a>
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  
    @can('user-edit', $user)
        <div class="modal" id="passUpdate-{{ $user->id }}" tabindex="-1" aria-labelledby="modal_example" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Update User Password') }}</h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <form action="{{ route('users.updatePassword', $user->id) }}" method="POST" style="display: inline">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">

                            <div class="row mb-4">
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
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>
                            <button href="" class="btn btn-sm btn-success cursor-pointer">{{ __('Update Password') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endcan




    @can('user-delete')
        <!-- Modal -->
        <div class="modal" id="sDelUser-{{ $user->id }}" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="text-danger text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> {{ __('Delete Department') }}</h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-sm text-gray-500">
                            {{ __('Are you sure you want to delete the user record for ') }}<strong>{{ $user->name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <button href="" class="btn btn-sm btn-danger cursor-pointer">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan

@endsection

