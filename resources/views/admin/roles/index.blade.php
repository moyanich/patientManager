@extends('layouts.dashboard')
@section('content')

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">{{ __('Roles') }}</h1>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-6">
					<h6 class="m-0 font-weight-bold text-primary w-75 p-2">All Roles and Permissions</h6>
				</div>
				<div class="col-2">
					<a href="https://demo.getdoctorino.com/patient/create" class="btn btn-primary btn-sm float-right "><i class="fa fa-plus"></i> New Patient</a>
				</div>
			</div>
		</div>
		<div class="card-body">

			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead class="table-dark">
						<tr>
							<th scope="col">{{ __('#') }}</th>
							<th scope="col">{{ __('Name') }}</th>
							<th scope="col">{{ __('Actions') }}</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						@foreach ($roles as $key => $role)
							<tr>
								<>{{ $loop->iteration }}</
								<td></td>
							</tr>
						
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

