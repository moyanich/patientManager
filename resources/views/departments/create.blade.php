@extends('layouts.dashboard', ['page' => __('Department Management')])

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

@section('content')

    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="{{ route('departments.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight">{{ __('Create Department') }}</h1>
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
                    class="form-control @error('description') is-invalid @enderror">
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

