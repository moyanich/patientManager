@extends('layouts.dashboard')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-6 pb-2 mb-3 border-bottom">
        <h1>{{ __('Users') }}</h1>
    </div>



    <div class="row align-items-center">
        <div class="col-sm col-12">
            <h1 class="h2 ls-tight">Users</h1>
        </div><div class="col-sm-auto col-12 mt-4 mt-sm-0"><div class="hstack gap-2 justify-content-sm-end"><a href="#modalExport" class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal"><span class="pe-2"><i class="bi bi-people-fill"></i> </span><span>Share</span> </a><a href="#offcanvasCreate" class="btn btn-sm btn-primary" data-bs-toggle="offcanvas"><span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span><span>Create</span></a></div></div></div>



    <div class="card shadow mb-4">

        <div class="card-header border-bottom d-flex align-items-center">
            <h5 class="me-auto">{{ __('Create New User') }}</h5>
            <div class="">
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-right "><span data-feather="arrow-left"></i> {{ __('Back') }}</span></a>
            </div>
        </div>
   


        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('Create New User') }}</h6>
                </div>
                <div class="col mx-auto d-flex justify-content-end">
					<a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-right "><span data-feather="arrow-left"></i> {{ __('Back') }}</span></a>
				</div>
            </div>
        </div>
        <div class="card-body">

            @if (count($errors) > 0)
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ __('}Whoops!') }}</strong>{{ __('Something went wrong.') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

					<strong><p>{{ $message }}</p></strong>
					<button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif



            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
	</div>

@endsection