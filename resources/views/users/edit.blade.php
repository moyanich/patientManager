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

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="{{ route('users.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight">{{ __('Edit User') }}</h1>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="hstack gap-2 justify-content-end">
                        {{-- //TODO: UPDATE BUTTONS --}}
                        <a href="{{ route('users.index') }}" class="btn btn-sm bg-gray-100 me-2">
                            {{ __('Cancel') }}
                        </a>
                        @can('user-edit', $user)
                            <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#passUpdate-{{ $user->id }}">
                                {{ __('Change user password') }}
                            </a>
                        @endcan
                        
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                        @can('user-delete')
                            <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger" data-bs-toggle="modal" data-bs-target="#sDelUser-{{ $user->id }}">
                                <span class="pe-2"><i class="bi bi-trash"></i> </span><span>Remove</span>
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-items-center g-3 mt-3">
            <x-messages />
        </div>

       {{--  <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="name" class="form-label mb-0 required-text">Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="name"
                    type="text"
                    name="name"
                    value="{{ $user->name }}"
                    class="form-control @error('name') is-invalid @enderror">
                
                @error('name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        --}}
        
        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="roles" class="form-label mb-0 required-text">Roles</label>
            </div>
            <div class="col-md-8 col-xl-5">

                <div class="form-floating">
                    <select name="roles" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Choose One</option>
                        <option ></option>
                        @foreach($roles as $key => $value)
                            <option value="{{ $value }}" @foreach($user->getRoleNames() as $createdUser) 
                                @if($value == $createdUser) selected @endif
                            @endforeach> {{ $key }}</option>
                        @endforeach
                     
                    </select>
                    <label for="floatingSelect">Assigned a role</label>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="first_name" class="form-label mb-0 required-text">First Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="firstname"
                type="text"
                name="first_name"
                value="{{ $user->first_name }}"
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
                value="{{ $user->last_name }}"
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
                    value="{{ $user->username }}"
                    class="form-control @error('name') is-invalid @enderror" disabled/>
                
                @error('name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="name" class="form-label mb-0 required-text">Email Address</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="email"
                    type="email"
                    name="email"
                    value="{{ $user->email }}"
                    class="form-control @error('email') is-invalid @enderror">
                
                @error('email')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="name" class="form-label mb-0 required-text">Email Address</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="email"
                    type="email"
                    name="email"
                    value="{{ $user->email }}"
                    class="form-control @error('email') is-invalid @enderror">
                
                @error('email')
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
                            <option value="{{ $key }}" @if($key == $user->status) selected @endif>
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
                            {{ __('Are you sure you want to delete the user record for ') }}<strong>{{ $user->first_name . ' ' . $user->last_name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
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


{{-- 
    
    
     <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="title" class="form-label required-text">Roles</label>
            </div>
            <div class="col-md-8 col-xl-5">
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
        
        
        
        --}}