<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;
use App\Models\Departments;
use App\Models\DepartmentHead;
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
                ->addColumn('department_head', function ($department) {
                    $deptHead = DB::table('department_head')
                    ->join('doctors', 'department_head.doctor_id', '=', 'doctors.id')->where(
                        'department_head.department_id', '=', $department->id
                    ) 
                    ->select(DB::raw("CONCAT(first_name,' ',last_name) as full_name"),'doctors.id')
                    ->pluck('full_name', 'id')->toArray();

                    foreach ($deptHead as $key => $doctor) {
                        $newName = '
                        <a href="' . route('doctors.show', $key) . '" class="btn btn-sm btn-grey text-dark">' . $doctor . '</a>';
                        return $newName;
                    }
                })
                ->addColumn('status', function ($statusRow) {
                    return View::make("components.badges")
                    ->with("status", $statusRow->status)->with("message", statusConvert($statusRow->status));
                })
                ->addColumn('action', function($department){
                    $actionBtn = '
                        <a href="' . route('departments.edit', $department->id) . '" class="btn btn-sm bg-indigo-200 text-white"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-danger text-white" data-bs-toggle="modal" data-bs-target="#delDepModal-' . $department->id . '"><i class="bi bi-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['department_head', 'action'])
                ->make(true);
        }
        return view('departments.index', compact('departments') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctors::select(DB::raw("CONCAT(first_name,' ',last_name) as full_name"),'id')->pluck('full_name', 'id')->prepend('Select a Doctor', '');
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
        $department->status = $request->input('status');
        $department->save();

        DepartmentHead::create([
            'department_id' => $department->id,
            'doctor_id' => $request->input('deptHead'),
        ]);

        return redirect()->route('departments.create', ['department' => $department])->with('success', 'Department record created!'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $department)
    {
        $doctors = Doctors::select(DB::raw("CONCAT(first_name,' ',last_name) as full_name"),'doctors.id')->orderBy('first_name')->get()->pluck('full_name', 'id')->prepend('Select Doctor', '');

        /*$deptHead = DB::table('dept_heads')
            ->join('doctors', 'dept_heads.doctor_id', '=', 'doctors.id')->where(
                'dept_heads.department_id', '=', $department->id
            ) 
            ->select('doctors.id')->pluck('id'); */

        $deptHead = DB::table('department_head')->select('doctors.id')->leftJoin('doctors', 'department_head.doctor_id', '=', 'doctors.id')->where('department_head.department_id', '=', $department->id )->limit('1')->get();

      //  dd( $deptHead);


        $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');

        return view('departments.edit', ['department' => $department, 'statuses' => $statuses, 'doctors' => $doctors, 'deptHead' => $deptHead ]);        
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

        DepartmentHead::updateOrInsert(
            ['department_id' => $department->id, 'doctor_id' => $request->input('deptHead')],
            ['doctor_id' => $request->input('deptHead')]
        );
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


        