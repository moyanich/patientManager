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

    <div class="mb-7">
        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead>
                    <tr>
                        <th scope="col">{{ __('#') }}</th>
                        <th scope="col">{{ __('Department Name') }}</th>
                        <th scope="col">{{ __('Description') }}</th>
                        <th scope="col">{{ __('Status') }}</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $key => $department)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td> {{-- //TODO: Fix text --}}
                            <td>
                                <x-badges :status="strtolower($department->status)">
                                    {{ statusConvert($department->status) ?? '' }}
                                </x-badges>
                            </td>
                            <td class="text-end">
                                @can('department-edit')
                                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                                @endcan

                                @can('department-delete')
                                    <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#delDepModal-{{ $department->id }}">
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
        {{-- //TODO: Fix Pagination --}}
        
    </div>


    @can('department-delete')
        @foreach ($departments as $key => $department)
            <!-- Modal -->
            <div class="modal" id="delDepModal-{{ $department->id }}" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow-3">
                        <div class="modal-header">
                            <h5 class="modal-title"><span class="text-danger text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> {{ __('Delete Department') }}</h5>
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
                            
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline">
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