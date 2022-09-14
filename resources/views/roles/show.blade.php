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

    <div class="col-xl-7 mx-auto">
        <div class="card mb-7 p-5">
            <div class="card-header">
                <h5 class="mb-0">{{ __('Role') }}</h5>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h4><strong>Role Name:</strong> {{ $role->name }}</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h4><strong>Permissions:</strong></h4>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <span class="badge rounded-pill text-bg-dark">{{ $v->name }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection