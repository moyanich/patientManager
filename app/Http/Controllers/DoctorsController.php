<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDoctorsRequest;
use App\Http\Requests\UpdateDoctorsRequest;
use App\Models\Doctors;

class DoctorsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:doctor-list|doctor-create|doctor-edit|doctor-delete', ['only' => ['index','show']]);
        $this->middleware('permission:doctor-create', ['only' => ['create','store']]);
        $this->middleware('permission:doctor-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:doctor-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctors = Doctors::orderBy('id','DESC')->paginate(5);
        return view('doctors.index', compact('doctors'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorsRequest $request)
    {
        $doctor = new Doctors();
        $doctor->employee_no = $request->input('employee_no');
        $doctor->first_name = $request->input('first_name');
        $doctor->last_name = $request->input('last_name');
        $doctor->email = $request->input('email');
        $doctor->designation = $request->input('designation');
        $doctor->degree = $request->input('degrees');

        

        $doctor->save();

        return redirect()->route('doctors.show', ['doctor' => $doctor])->with('success', 'New doctor profile created successfully. Go ahead and complete the profile below'); // Redirect to doctor profile
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show(Doctors $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctors $doctors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorsRequest  $request
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorsRequest $request, Doctors $doctors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctors $doctors)
    {
        //
    }
}