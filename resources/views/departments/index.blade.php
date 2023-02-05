@extends('layouts.dashboard', ['page' => __('Department Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Departments') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('departments.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus"></i>
					</span>
                	<span>{{ __('New Department') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <x-messages />

    <div class="card mb-7">
        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th scope="col">{{ __('#') }}</th>
                        <th scope="col">{{ __('Department Name') }}</th>
                        <th scope="col">{{ __('Description') }}</th>
                        <th scope="col">{{ __('Status') }}</th>
                        <th scope="col">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $key => $department)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td>
                            <td>{{ statusConvert($department->status) }}</td>
                            <td>
                                @can('department-edit')
                                    <a class="btn btn-sm btn-warning" href="{{ route('departments.edit', $department->id) }}"><i class="bi bi-pencil"></i></a>
                                @endcan

                                @can('department-delete')
                                    <a href="#" class="btn btn-danger btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#delRoleModal">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {!! $departments->render() !!}
        
    </div>



    {{--  
    @can('role-delete')
        <!-- Modal -->
        <div class="modal" id="delRoleModal" tabindex="-1" aria-labelledby="delRoleModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="text-red-500 text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> {{ __('Delete User') }}</h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-sm text-gray-500">
                            {{ __('Are you sure you want to delete this record? All of your data will be permanently removed. This action cannot be undone.') }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>

                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger cursor-pointer']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    @endcan
--}}


@endsection