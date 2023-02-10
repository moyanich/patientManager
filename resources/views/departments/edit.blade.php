@extends('layouts.dashboard', ['page' => __('Department Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Department Edit') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('departments.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back to Deparment List') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <form action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="{{ route('departments.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight">{{ __('Edit Department') }}</h1>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="hstack gap-2 justify-content-end">
                        {{-- //TODO: UPDATE BUTTONS --}}
                        @can('department-delete')
                            <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger" data-bs-toggle="modal" data-bs-target="#sDelDepModal-{{ $department->id }}">
                                <span class="pe-2"><i class="bi bi-trash"></i> </span><span>Remove</span>
                            </a>
                        @endcan
                        <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                            {{ __('Cancel') }}
                        </a>
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-items-center g-3 mt-3">
            <x-messages />
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="name" class="form-label mb-0 required-text">Department Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="name"
                type="text"
                name="name"
                value="{{ $department->name }}"
                class="form-control @error('name') is-invalid @enderror">
                
                @error('name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="description" class="form-label">Description</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <textarea id="description"
                    name="description"
                    style="height: 150px"
                    class="form-control @error('description') is-invalid @enderror">{{ $department->description }}
                </textarea>
                
                @error('description')
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
                            <option value="{{ $key }}" @if($key == $department->status) selected @endif>
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


    @can('department-delete')
        <!-- Modal -->
        <div class="modal" id="sDelDepModal-{{ $department->id }}" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
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
                            {{ __('Are you sure you want to delete the department record for ') }}<strong>{{ $department->name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline">
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

@section('content')

    <div class="offset-md-3 col-md-6">
        <x-messages />

        <div class="card card-bordered">
            <div class="card-header d-flex">
                <h4 class="card-title">Edit Department</h4>
                @can('department-delete')
                    <div class="ms-auto">
                        <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#sDelDepModal-{{ $department->id }}">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                @endcan
            </div>
            <div class="card-body">
                <div>
                  

                    
                </div>
                <form action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="name" class="form-label mb-0 required-text">Department Name</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="name"
                                type="text"
                                name="name"
                                value="{{ $department->name }}"
                                class="form-control @error('name') is-invalid @enderror">
                            
                            @error('name')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="description" class="form-label">Description</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Optional</span>
                                </div>
                            </div>
                            <textarea id="description"
                                name="description"
                                style="height: 150px"
                                class="form-control @error('description') is-invalid @enderror">{{ $department->description }}
                            </textarea>
                            
                            @error('description')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="title" class="form-label required-text">Status</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <div class="form-floating">
                                <select name="status" class="form-select @error('status') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                    @foreach($statuses as $key => $value)
                                        <option value="{{ $key }}" @if($key == $department->status) selected @endif>
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


    @can('department-delete')
        <!-- Modal -->
        <div class="modal" id="sDelDepModal-{{ $department->id }}" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
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
                            {{ __('Are you sure you want to delete the department record for ') }}<strong>{{ $department->name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline">
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

--}}