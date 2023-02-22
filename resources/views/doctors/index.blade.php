@extends('layouts.dashboard', ['page' => __('Patient Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('Doctors') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('doctors.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus"></i>
					</span>
                	<span>{{ __('New Doctor') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <x-messages />

    <div class="mb-7">
        <table id="doctors-datatable" class="table table-hover table-nowrap compact doctors-datatable">
            <thead>
                <tr>
                    <th scope="col">{{ __('#') }}</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Status') }}</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

   
    {{--  //TODO: use the data from ajax to pass here --}}
    @can('doctor-delete')
        @foreach ($doctors as $key => $doctor)
            <!-- Modal -->
            <div class="modal" id="delDepModal-{{ $doctor->id }}" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow-3">
                        <div class="modal-header">
                            <h5 class="modal-title"><span class="text-danger text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> {{ __('Delete doctor') }}</h5>
                            <div class="text-xs ms-auto">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <p class="text-sm text-gray-500">
                                {{ __('Are you sure you want to delete the doctor record for ') }}<strong>{{ $doctor->name }}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>
                            
                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display: inline">
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
    
    
@endsection



@push('child-scripts')
<script>
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#doctors-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{!! route('doctors.index') !!}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'first_name', name: 'first_name' , className: 'dept-name'},
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