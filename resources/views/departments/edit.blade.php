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

    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body">

                    <x-messages />

                    <div class="py-4 border-bottom">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="d-flex align-items-center gap-4">
                                <h1 class="h3 ls-tight">{{ $department->name }}</h1>
                                </div>
                            </div>
                            <div class="col-auto d-none d-md-block">
                                <div class="hstack gap-2 justify-content-end">
                                    {{-- //TODO: UPDATE BUTTONS --}}
                                    @can('department-delete')
                                        <a href="#" class="btn btn-sm btn-danger d-inline-flex cursor-pointer ms-2 text-white" data-bs-toggle="modal" data-bs-target="#sDelDepModal-{{ $department->id }}">
                                            <span class="pe-2"><i class="bi bi-trash"></i> </span><span>Delete</span>
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                    
                        <div class="row align-items-center g-3 mt-2">
                            <div class="col-md-2">
                                <label for="name" class="form-label mb-0 required-text">Department Name</label>
                            </div>
                            <div class="col-md-10">
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
                            <div class="col-md-10">
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
                                <label for="deptHead" class="form-label required-text">Department Head</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <select name="deptHead" class="form-select @error('deptHead') is-invalid @enderror" id="doctorsSelect" aria-label="doctors">
                                        @foreach($doctors as $doctor_key => $doctor)
                                            <option value="{{ $doctor_key }}" 
                                                @foreach($department_head_doctor as $key => $head_doctor)
                                                    @if($doctor_key == $head_doctor->id) selected @endif
                                                @endforeach>
                                                {{ $doctor }} 
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="doctorsSelect">Assign Head of Department</label>
                                </div>

                                @error('status')
                                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row align-items-center g-3 mt-2">
                            <div class="col-md-2">
                                <label for="title" class="form-label required-text">Status</label>
                            </div>
                            <div class="col-md-10">
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
                            <div class="text-end mt-5 pt-5">
                                <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                    {{ __('Cancel') }}
                                </a>
                                <input type="submit" value="Update" class="btn btn-sm btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Department Doctors</h3>
                    <hr/>
                    <ul class="list-group list-group-flush">
                        @foreach ($department_doctors as $key => $doctor )
                            <li><a href="{{ route('doctors.show', $doctor->id) }}" class="list-group-item list-group-item-action">{{ $doctor->fullName }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--  Modal --}}
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
