<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;
use App\Models\Departments;
use App\Models\Status;
use DataTables;

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
                        <a href="' . route('departments.edit', $department->id) . '" class="btn btn-sm btn-outline-primary">View</a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#delDepModal-' . $department->id . '"><i class="bi bi-trash"></i></a>';
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
        $statuses = Status::where('name', 'like', '%active%')->pluck('name', 'id');
        return view('departments.create', ['statuses' => $statuses]);
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
        return redirect()->route('departments.create', ['department' => $department])->with('success', 'Department record created!'); //
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
}
