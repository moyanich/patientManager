<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;
use App\Models\Departments;
use App\Models\Doctors;
use App\Models\Status;
use DataTables;
use DB;
use Illuminate\Database\Query\JoinClause;


class DepartmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:department-list|department-create|department-edit|department-delete', ['only' => ['index', 'edit']]);
        $this->middleware('permission:department-create', ['only' => ['create','store']]);
        $this->middleware('permission:department-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:department-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $departments = Departments::orderBy('id', 'DESC')->get();
        
        if ($request->ajax()) {
            $data = Departments::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($statusRow) {
                    return View::make("components.badges")
                    ->with("status", $statusRow->status)->with("message", statusConvert($statusRow->status));
                })
                ->addColumn('action', function($department){
                    $actionBtn = '
                        <a href="' . route('departments.show', $department->id) . '" class="btn btn-sm btn-grey text-dark"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-grey btn-circle text-warning" data-bs-toggle="modal" data-bs-target="#delDepModal-' . $department->id . '"><i class="bi bi-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('departments.index', compact('departments') );

       /* $departments = Departments::orderBy('id', 'DESC')->paginate(10);
        return view('departments.index', compact('departments'))->with('i', ($request->input('page', 1) - 1) * 10);
        
        <x-badges :status="strtolower($department->status)">
                                    {{ statusConvert($department->status) ?? '' }}
                                </x-badges>
                                
                                */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctors::select(DB::raw("CONCAT(first_name,' ',last_name) as full_name"),'id')->pluck('full_name', 'id');
        $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');
        return view('departments.create', ['statuses' => $statuses, 'doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentsRequest $request)
    {
        $department = new Departments();
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->doctors_id = $request->input('deptHead');
        $department->status = $request->input('status');
        $department->save();
        return redirect()->route('departments.create', ['department' => $department])->with('success', 'Department record created!'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departments $department
     * @return \Illuminate\Http\Response
     */
    public function show(Departments $department)
    {
        //$department = Departments::find($id);
       // $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');
       
       /*  $doctors = DB::table('departments_doctors')
        ->leftJoin('doctors', function (JoinClause $join) use($department) {
            $join->on('departments_doctors.doctors_id ', '=', 'doctors.id')
                 ->where('departments_doctors.departments_id', '=', $department->id);
        })
        ->get(); */

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $department)
    {
        $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');
        return view('departments.edit', ['department' => $department, 'statuses' => $statuses ]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentsRequest  $request
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentsRequest $request, Departments $department)
    {
        $department = Departments::findOrFail($department->id);
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->status = $request->input('status');
        $department->save();
        return redirect()->back()->with('success', 'Record updated sucessfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departments $department)
    {
        $department = Departments::findOrFail($department->id);
        $department->delete();
        return redirect()->route('departments.index', $department->id)->with('success', 'Department record for ' . $department->name . ' removed sucessfully');
    }

    //TODO: LOG TABLE FOR ALL ACTIONS
}



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
