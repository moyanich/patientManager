@extends('layouts.dashboard', ['page' => __('Department Management')])

{{--  
@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Department') }}</h1>
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
--}}

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0 d-flex">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Department') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('departments.index') }}" type="button" class="text-xs" aria-label="Close"><i class="bi bi-list-task"></i>{{ __(' Departments List') }}</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center g-3 mt-3">
                <div class="col-12">
                    <x-messages />
                </div>
            </div>

            <div class="row align-items-center g-3 mt-2">
                <div class="col-12">
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label required-text">Department Name</label>
                            <input id="name"
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror">
                            
                            @error('name')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description"
                                name="description"
                                style="height: 150px"
                                class="form-control @error('description') is-invalid @enderror">
                            </textarea>
                            
                            @error('description')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div class="mb-3">
                            <label for="deptHead" class="form-label required-text">Department Head</label>
                            <div class="form-floating">
                                <select name="deptHead" class="form-select @error('deptHead') is-invalid @enderror" id="selectHead" aria-label="Department Head">
                                    @foreach($doctors as $key => $value)
                                        <option value="{{ $key }}"> 
                                            {{ $value }} 
                                        </option>
                                    @endforeach
                                </select>
                                <label for="selectHead">Choose a Doctor</label>
                            </div>
                            @error('deptHead')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div class="mb-3">
                            <label for="title" class="form-label required-text">Status</label>
                            <div class="form-floating">
                                <select name="status" class="form-select @error('status') is-invalid @enderror" id="selectStatus" aria-label="Status">
                                    @foreach($statuses as $key => $value)
                                        <option value="{{ $key }}"> 
                                            {{ $value }} 
                                        </option>
                                    @endforeach
                                </select>
                                <label for="selectStatus">Choose a status</label>
                            </div>
                            @error('status')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
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

@section('content')

    <div class="offset-md-3 col-md-6">
        <x-messages />
        <div class="card card-bordered">
            <div class="card-body">
                <h4 class="card-title">Add Department</h4>
              
                        
                        <div class="mb-3">
                           
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

