@extends('layouts.dashboard')

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('All Users') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('users.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus-lg"></i>
					</span>
                	<span>{{ __('Create New User') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')

	<div class="card mb-7">
		<div class="card-header">
			<h5 class="mb-0">{{ __('Users') }}</h5>
		</div>
		
		{{--  @if ($message = Session::get('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><p>{{ $message }}</p></strong>
				<button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif--}}

		<x-messages />

		<div class="table-responsive">
			<table class="table table-hover table-nowrap">
					<thead class="table-light">
						<tr>
							<th scope="col">{{ __('#') }}</th>
							<th scope="col">{{ __('Name') }}</th>
							<th scope="col">{{ __('Email') }}</th>
							<th scope="col">{{ __('Roles') }}</th>
							<th></th>
						</tr>
					</thead>
				<tbody>
					@foreach ($data as $key => $user)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<div class="d-flex flex-wrap">
									@if(!empty($user->getRoleNames()))
										@foreach($user->getRoleNames() as $createdUser)
											<span class="badge rounded-pill bg-primary px-4 py-2 m-1">{{ $createdUser }}</span>
										@endforeach
									@endif
								</div>
							</td>
							<td class="text-end">
								<a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>

								<a href="#" class="btn btn-outline-danger btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#delUserModal">
									<i class="bi bi-trash"></i>
								</a>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
			{!! $data->render() !!}
		</div>
		<div class="card-footer border-0 py-5">

		</div>
	</div>




	<!-- Modal -->
	<div class="modal" id="delUserModal" tabindex="-1" aria-labelledby="delUserModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content shadow-3">
				<div class="modal-header">
					<h5 class="modal-title">{{ __('Delete User') }}</h5>
					<div class="text-xs ms-auto">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="modal-body">
					<p class="text-sm text-gray-500">
						{{ __('Are you sure you want to delete this record?') }}<strong>{{ $user->name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>

					{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

						{{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger cursor-pointer']) }}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


@endsection