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
                @can('role-edit')
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                        <span class=" pe-2">
                            <span data-feather="plus"></span>
                        </span>
                        <span>{{ __('Edit Role') }}</span>
                    </a>
                @endcan
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="col-12 mx-auto">
        <div class="card mb-7 p-5">
            <div class="card-header">
                <h5 class="mb-0">{{ __('Edit Role') }}</h5>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">{{ __('Role Name') }}</th>
                                <th scope="col">{{ __('Permissions') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td> 
                                    @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                            <label class="badge rounded-pill text-dark bg-gradient bg-info px-4 py-2 mb-2">{{ $v->name }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection