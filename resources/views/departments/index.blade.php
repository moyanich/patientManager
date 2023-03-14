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
                	<span>{{ __('Add Department') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <x-messages />
            <div class="mb-7">
                <div class="table-responsive">
                    <table id="department-datatable" class="table table-nowrap compact department-datatable">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#') }}</th>
                                <th scope="col">{{ __('Department Name') }}</th>
                                <th scope="col">{{ __('Department Head') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            
                {{--  //TODO: use the data from ajax to pass here --}}
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
                                            {{ __('Are you sure you want to delete the department record for ') }}<strong>{{ $department->name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                        
                                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <button href="" class="btn btn-sm btn-danger text-danger-hover cursor-pointer">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endcan
            </div>
        </div>
    </div>
@endsection


@push('child-scripts')
<script>
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#department-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{!! route('departments.index') !!}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' , className: 'dept-name'},
                { data: 'departmentHead', name: 'departmentHead'},
                {
                    data: 'status', 
                    name: 'status', 
                    orderable: true, 
                    searchable: true
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