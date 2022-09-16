@extends('layouts.dashboard')

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Role Management') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                @can('role-create')
                    <a href="{{ route('roles.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                        <span class=" pe-2">
                            <span data-feather="plus"></span>
                        </span>
                        <span>{{ __('Create New Role') }}</span>
                    </a>
                @endcan
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="card mb-7">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Users') }}</h5>
        </div>

           {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><p>{{ $message }}</p></strong>
                    <button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  --}}

        <x-messages />

        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th scope="col">{{ __('#') }}</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                                
                                @can('role-edit')
                                    <a class="btn btn-sm btn-outline-warning" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                @endcan

                                @can('role-delete')
                                    <a href="#" class="btn btn-outline-danger btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#delRoleModal">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                @endcan

                                {{--  
                                <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                                @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                @endcan--}}
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {!! $roles->render() !!}
        
    </div>


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



@endsection