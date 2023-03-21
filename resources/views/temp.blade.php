@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('All Users') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                <span class=" pe-2">
                    <i class="bi bi-pencil"></i>
                </span>
                <span>Edit</span>
                </a>
                <a href="{{ route('users.create') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                <span class=" pe-2">
                    <i class="bi bi-plus"></i>
                </span>
                <span>Create</span>
                </a>
            </div>
        </div>
    </div>
@endsection



<x-messages />

<div class="card">
	<h5 class="card-header bg-gradient bg-secondary">Department Information</h5>
	<div class="card-body">
	   
			<div class="row">
				<div class="col-md-8">
					<div class="mb-3 row">
						{{ Form::label('name', 'Department Name', ['class' => 'col-sm-4 col-form-label required-text']) }}
						<div class="col-sm-8">
							{{ Form::text('name', $department->name, ['class' => 'form-control', 'placeholder' => '']) }}

							@error('name')
								<p class="text-xs text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>

					<div class="mb-3 row">
						{{ Form::label('description', 'Description', ['class' => 'col-sm-4 col-form-label']) }}
						<div class="col-sm-8">
							{{ Form::textarea('description', $department->description, ['class' => 'form-control', 'placeholder' => '']) }}

							@error('description')
								<p class="text-xs text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>

					<div class="mb-3 row">
						{{ Form::label('status', 'Status', ['class' => 'col-sm-4 col-form-label required-text']) }}

						<div class="col-sm-8">                                
						   {{-- 
							{!! Form::select('status', $statuses, $department->status, ['class' => 'form-select block w-full mt-1 border-0 px-3 py-3 placeholder-blueGray-400 text-gray-600 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!} 
							--}} 
						
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" value="1" {{ $department->status==1 ? 'checked': '' }}/>
								<label class="form-check-label" for="flexRadioDefault1">
								  Active
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" value="2" {{ $department->status==2 ? 'checked': '' }}/>
								<label class="form-check-label" for="flexRadioDefault2">
								  Inactive
								</label>
							</div>

							@error('status[]')
								<p class="text-xs text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>
				
					<div class="row">
						<div class="text-end mt-4">
							<a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
								{{ __('Cancel') }}
							</a>
							{{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
						</div>
					</div>

				</div>
			</div>

		{{Form::hidden('_method', 'PUT') }}
		{!! Form::close() !!}

	</div>
</div>


  {{--  <span class="badge badge-lg badge-dot text-black">

                                    @if(statusConvert($department->status == 1))
                                        <i class="bg-success"></i> 
                                    @else 
                                        <i class="bg-danger"></i> 
                                    @endif
                                    {{ statusConvert($department->status) }}
                                </span>--}}




	<!-- Modal -->
	<div class="modal" id="delPatientModal" tabindex="-1" aria-labelledby="delPatientModal" aria-hidden="true">
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
						{{ __('Are you sure you want to delete the patient record for ') }}<strong>{{-- $patient->first_name.''.$patient->last_name --}}</strong>{{ __('? All of your data will be permanently removed. This action cannot be undone.') }}
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">{{ __('Close') }}</button>

					{!! Form::open(['method' => 'DELETE', 'route' => ['patients.destroy', $patient->id],'style'=>'display:inline']) !!}

						{{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger cursor-pointer']) }}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>








@extends('layouts.dashboard')
@section('content')

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">{{ __('Patients') }}/h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group me-2">
		<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
		<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
		</div>
		<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
		<span data-feather="calendar"></span>
		This week
		</button>
	</div>
	</div>

	<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

	<h2>Section title</h2>
	<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Header</th>
			<th scope="col">Header</th>
			<th scope="col">Header</th>
			<th scope="col">Header</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>1,001</td>
			<td>random</td>
			<td>data</td>
			<td>placeholder</td>
			<td>text</td>
		</tr>
		<tr>
			<td>1,002</td>
			<td>placeholder</td>
			<td>irrelevant</td>
			<td>visual</td>
			<td>layout</td>
		</tr>
		<tr>
			<td>1,003</td>
			<td>data</td>
			<td>rich</td>
			<td>dashboard</td>
			<td>tabular</td>
		</tr>
		<tr>
			<td>1,003</td>
			<td>information</td>
			<td>placeholder</td>
			<td>illustrative</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,004</td>
			<td>text</td>
			<td>random</td>
			<td>layout</td>
			<td>dashboard</td>
		</tr>
		<tr>
			<td>1,005</td>
			<td>dashboard</td>
			<td>irrelevant</td>
			<td>text</td>
			<td>placeholder</td>
		</tr>
		<tr>
			<td>1,006</td>
			<td>dashboard</td>
			<td>illustrative</td>
			<td>rich</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,007</td>
			<td>placeholder</td>
			<td>tabular</td>
			<td>information</td>
			<td>irrelevant</td>
		</tr>
		<tr>
			<td>1,008</td>
			<td>random</td>
			<td>data</td>
			<td>placeholder</td>
			<td>text</td>
		</tr>
		<tr>
			<td>1,009</td>
			<td>placeholder</td>
			<td>irrelevant</td>
			<td>visual</td>
			<td>layout</td>
		</tr>
		<tr>
			<td>1,010</td>
			<td>data</td>
			<td>rich</td>
			<td>dashboard</td>
			<td>tabular</td>
		</tr>
		<tr>
			<td>1,011</td>
			<td>information</td>
			<td>placeholder</td>
			<td>illustrative</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,012</td>
			<td>text</td>
			<td>placeholder</td>
			<td>layout</td>
			<td>dashboard</td>
		</tr>
		<tr>
			<td>1,013</td>
			<td>dashboard</td>
			<td>irrelevant</td>
			<td>text</td>
			<td>visual</td>
		</tr>
		<tr>
			<td>1,014</td>
			<td>dashboard</td>
			<td>illustrative</td>
			<td>rich</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1,015</td>
			<td>random</td>
			<td>tabular</td>
			<td>information</td>
			<td>text</td>
		</tr>
		</tbody>
	</table>
	</div>
		
@endsection



<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Patient No:') }}</div>
			{{ $patient->patient_no }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Full Name:') }}</div>
			{{ $patient->first_name . ' ' . ' ' . $patient->middle_name . ' ' . $patient->last_name }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Home Phone:') }}</div>
			{{ $patient->home_phone }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Mobile Phone:') }}</div>
			{{ $patient->cell_number }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Email:') }}</div>
			{{ $patient->email }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('D.O.B.:') }}</div>
			{{ format_date_long($patient->dob) }}	
		</div>
	</li>

	@if (@empty($patient->dob))
		<li class="list-group-item d-flex justify-content-between align-items-start">
			{{ __('Update DOB Field') }}
		</li>
	@else
		<li class="list-group-item d-flex justify-content-between align-items-start">
			<div class="ms-2 me-auto">
				<div class="font-bold">{{__('Age:') }}</div>
				{{ calc_age($patient->dob) }}	
			</div>
		</li>
	@endif

	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Gender:') }}</div>
			{{ $gender->name }}	
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
			<div class="font-bold">{{__('Address:') }}</div>
			
		</div>
	</li>
</ul>-


<script type="text/javascript">
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            select: true,
            dom: 'Bfrtip',
            ajax: "{{ url('employees') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                { data: 'empID', name: 'empID' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'jobTitle', name: 'jobTitle' },
                { data: 'name', name: 'name' },
                {
                    data: 'status', 
                    name: 'status', 
                    orderable: true, 
                    searchable: true
                }, 
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ],
            columnDefs: [
                {
                    targets: -1,
                    className: 'dt-body-center'
                }
            ],
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],

            order: [[0, 'desc']],
        });
    });
</script>




{{--  
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
                            <td>{{ $department->description }}</td> 
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


    <button type="button">Test jQuery Code</button>

@endsection
--}}


/* if(!empty($doctor->departments)) {
	foreach($doctor->departments as $doctor_has_dept) {
	  return $doctor_has_dept->name;                       
	}
} 

$results = Doctors::with('departments')->where('id', $doctor->id)->get(); 



$results = Doctors::with('departments')->get();
foreach($results as $result) {
	return $result->name;  
} 
$tags = Doctors::where('id', '=', $doctor->id)
->with('departments')
->first();

return $tags; */

$users = $doctor->departments->pluck('name')->toArray();

return $users;





/* foreach($tags as $tag) {
	return $tag->name;
}*/
//return $results->pivot->name;





/* //$department = $doctor->getDepartments()->get();

$department = $this->through('departments')->has('doctors');

return $department;*/




















@extends('layouts.dashboard', ['page' => __('Department Management')])

@section('header')
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight">{{ __('New Department') }}</h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="{{ route('departments.index') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span>{{ __('Back to Deparment List') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="{{ route('departments.index') }}" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight">{{ __('Create Department') }}</h1>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="hstack gap-2 justify-content-end">
                        {{-- //TODO: UPDATE BUTTONS --}}
                        <a href="#!" class="text-sm text-muted text-primary-hover font-semibold me-2 d-none d-md-block"><i class="bi bi-question-circle-fill"></i> <span class="d-none d-sm-inline ms-2">Need help?</span> </a>
                        <button type="button" class="btn btn-sm btn-neutral"><span>Save and create another</span></button> 
                        <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                            {{ __('Cancel') }}
                        </a>

                        
                        <input type="submit" value="Save" class="btn btn-sm btn-primary">
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-items-center g-3 mt-3">
            <x-messages />
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="name" class="form-label mb-0 required-text">Department Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="name"
                    type="text"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror">
                
                @error('name')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="description" class="form-label">Description</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <textarea id="description"
                    name="description"
                    style="height: 150px"
                    class="form-control @error('description') is-invalid @enderror">
                </textarea>
                
                @error('description')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="deptHead" class="form-label mb-0 required-text">Department Head</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <div class="form-floating">
                    <select name="deptHead" class="form-select @error('deptHead') is-invalid @enderror" id="selectHead" aria-label="Department Head">
                        @foreach($doctors as $key => $value)
                            <option value="{{ $key }}"> 
                                {{ $value }} 
                            </option>
                        @endforeach
                    </select>
                    <label for="selectHead">Choose a status</label>
                </div>
                @error('deptHead')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="title" class="form-label required-text">Status</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <div class="form-floating">
                    <select name="status" class="form-select @error('status') is-invalid @enderror" id="selectStatus" aria-label="Status">
                        @foreach($statuses as $key => $value)
                            <option value="{{ $key }}"> 
                                {{ $value }} 
                            </option>
                        @endforeach
                    </select>
                    <label for="selectStatus">Choose a status</label>
                </div>
                @error('status')
                    <span class="mt-2 invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

    </form>

@endsection




{{--

@section('content')

    <div class="offset-md-3 col-md-6">
        <x-messages />
        <div class="card card-bordered">
            <div class="card-body">
                <h4 class="card-title">Add Department</h4>
              
                        
                        <div class="mb-3">
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-end mt-4">
                            <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                {{ __('Cancel') }}
                            </a>
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


--}}

////////////////////////
DEPARTMENTS

/* $departments = Departments::orderBy('id', 'DESC')->paginate(10);
return view('departments.index', compact('departments'))->with('i', ($request->input('page', 1) - 1) * 10);

<x-badges :status="strtolower($department->status)">
	{{ statusConvert($department->status) ?? '' }}
</x-badges>

*/


//<a href="' . route('departments.show', $department->id) . '" class="btn btn-sm bg-info text-white"><i class="bi bi-eye"></i></a>-->


/**
* Display the specified resource.
*
* @param  \App\Models\Departments $department
* @return \Illuminate\Http\Response
*/
/*public function show(Departments $department)
{
	//$department = Departments::find($id);
	// $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');
	
	/*  $doctors = DB::table('departments_doctors')
	->leftJoin('doctors', function (JoinClause $join) use($department) {
		$join->on('departments_doctors.doctors_id ', '=', 'doctors.id')
			->where('departments_doctors.departments_id', '=', $department->id);
	})
	->get(); 

	// $deptHead = Doctors::where('id', '=', $department->doctors_id)->pluck('first_name');
	$deptHead = Doctors::with('department')->get();

	// $deptHead = Departments::with('doctor')->get();

	//dd($deptHead);

	$doctors = DB::table('departments_doctors')
		->join('doctors', 'departments_doctors.doctors_id', '=', 'doctors.id')->where(
			'departments_doctors.departments_id', '=', $department->id
		)
		->get();

	return view('departments.show', ['department' => $department, 'doctors' => $doctors, 'deptHead' => $deptHead ]);

}*/


/*
$department = Departments::find($department);
//return view('departments.show');
        $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');
        //$departments = $doctor->departments->pluck('name')->toArray();
       // $doctors = $department->doctors->pluck('name')->toArray();

       // $doctors = $doctors->department->pluck('name')->toArray();

       /*
        $employees = DB::select('select employees.id, employees.firstname, employees.lastname, employees.email, employees.photo, departments.name as department, jobs.name as job, status_codes.name as status
            FROM employees
            LEFT JOIN departments ON (SELECT department_id from employee_job_histories WHERE employee_job_histories.employee_id = employees.id ORDER BY start_date DESC LIMIT 1) = departments.id
            
            LEFT JOIN jobs ON (SELECT job_id from employee_job_histories WHERE employee_job_histories.employee_id = employees.id ORDER BY start_date DESC LIMIT 1) = jobs.id

            LEFT JOIN status_codes ON (SELECT status_id from employee_job_histories WHERE employee_job_histories.employee_id = employees.id ORDER BY start_date DESC LIMIT 1) = status_codes.id
            ');  
                 

       $departments = Departments::select('departments.*', 
                DB::raw('CONCAT(employees.firstname, " " , employees.lastname) as managerName'), 
                DB::raw('CONCAT(userSup.firstname, " " , userSup.lastname) as supervisorName'))
                    ->leftJoin('employees', 'departments.manager_id', '=', 'employees.id')
                    ->leftJoin('employees as userSup', 'departments.supervisor_id', '=', 'userSup.id')
                    ->orderBy('id', 'asc')->paginate(15);
                    


        $doctors = Departments::select('select id, departments.name') ->leftJoin('departments_doctors', 'id', '=', 'department_id'); 
        
        $users = DB::table('users')
            ->select('name', 'email as user_email')
            ->get();
       

        //$doctors = Doctors::select('select *')->get();
       // $doctors = Doctors::orderBy('id')->get()->pluck('id', 'first_name')->toArray();
    
    
       $doctors = DB::table('doctors')
        ->leftJoin('departments_doctors', 'doctors.id', '=', 'departments_doctors.doctors_id')
        ->get();
        */

       /* $doctors = DB::table('doctors')
        ->join('departments_doctors', function (JoinClause $join) {
            $join->on('doctors.id', '=', 'departments_doctors.doctors_id')
                ->where('departments_doctors.departments_id', '=', $department->id);
        }) 


        $doctors = DB::table('doctors')
        ->join('departments_doctors', function (JoinClause $join) {
            $join->on('doctors.id', '=', 'departments_doctors.doctors_id')
                 ->where('departments_doctors.doctors_id', '=', 1);
        })
        ->get();

      

        


        


        /*
       $departments = $doctor->departments->pluck('name')->toArray();
        $doctors = Doctors::orderBy('first_name', 'DESC')->get();
       $doctors = $doctors->doctors();

       $doctors = $doctors->department->pluck('name')->toArray();

        */





{{--  

@section('content')

    <div class="offset-md-3 col-md-6">
        <x-messages />

        <div class="card card-bordered">
            <div class="card-header d-flex">
                <h4 class="card-title">Edit Department</h4>
                @can('department-delete')
                    <div class="ms-auto">
                        <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#sDelDepModal-{{ $department->id }}">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                @endcan
            </div>
            <div class="card-body">
                <div>
                  

                    
                </div>
                <form action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="name" class="form-label mb-0 required-text">Department Name</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <input id="name"
                                type="text"
                                name="name"
                                value="{{ $department->name }}"
                                class="form-control @error('name') is-invalid @enderror">
                            
                            @error('name')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="description" class="form-label">Description</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Optional</span>
                                </div>
                            </div>
                            <textarea id="description"
                                name="description"
                                style="height: 150px"
                                class="form-control @error('description') is-invalid @enderror">{{ $department->description }}
                            </textarea>
                            
                            @error('description')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <label for="title" class="form-label required-text">Status</label>
                                <div class="ms-auto">
                                <span class="text-sm text-muted">Required</span>
                                </div>
                            </div>
                            <div class="form-floating">
                                <select name="status" class="form-select @error('status') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                    @foreach($statuses as $key => $value)
                                        <option value="{{ $key }}" @if($key == $department->status) selected @endif>
                                            {{ $value }} 
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Choose a status</label>
                            </div>

                            @error('status')
                                <span class="mt-2 invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-end mt-4">
                            <a href="{{ route('departments.index') }}" class="btn btn-sm bg-gray-100 me-2">
                                {{ __('Cancel') }}
                            </a>
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            </div>
    </div>


    @can('department-delete')
        <!-- Modal -->
        <div class="modal" id="sDelDepModal-{{ $department->id }}" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
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
                            <button href="" class="btn btn-sm btn-danger cursor-pointer">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan

@endsection

--}}

////////////////////////