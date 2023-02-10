@extends('layouts.dashboard', ['page' => __('User Management')])

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
	<x-messages />

	<div class="mb-7">
		<div class="table-responsive">
			<table id="users-datatable" class="table table-hover table-striped table-sm table-nowrap compact users-datatable">
				<thead>
					<tr>
						<th scope="col">{{ __('#') }}</th>
						<th scope="col">{{ __('First Name') }}</th>
						<th scope="col">{{ __('Last Name') }}</th>
						<th scope="col">{{ __('Username') }}</th>
						<th scope="col">{{ __('Email') }}</th>
						<th scope="col">{{ __('Roles') }}</th>
						<th></th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>

		
	<!-- Modal -->
	@can('user-delete')
		@foreach ($users as $key => $user)
		<div class="modal" id="delUserModal-{{ $user->id }}" tabindex="-1" aria-labelledby="delUserModal" aria-hidden="true">
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
		@endforeach
    @endcan
@endsection


@push('child-scripts')
	<script>
		$(document).ready( function () {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('#users-datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{!! route('users.index') !!}",
				columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' },
					{ data: 'first_name', name: 'first_name'},
					{ data: 'last_name', name: 'last_name'},
					{ data: 'username', name: 'username'},
					{ data: 'email', name: 'email'},
					{
						data: 'roles', 
						name: 'roles'
					},
					{
						data: 'action', 
						name: 'action'
					},
				]
			});
		});
	</script>
@endpush