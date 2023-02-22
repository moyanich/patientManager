<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDoctorsRequest;
use App\Http\Requests\UpdateDoctorsRequest;
use App\Models\Departments;
use App\Models\Doctors;
use App\Models\Genders;
use DataTables;

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
        $doctors = Doctors::orderBy('id', 'DESC')->get();

       
        
        if ($request->ajax()) {
            $data = Doctors::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
               /* ->addColumn('status', function ($statusRow) {
                    return View::make("components.badges")
                    ->with("status", $statusRow->status)->with("message", statusConvert($statusRow->status));
                }) */
                ->addColumn('contactInfo', function($doctor) {
                    if(!empty($doctor->contact_1) || !empty($doctor->contact_2)) {
                        $output = '';
                        $output .= '<p><i class="bi bi-telephone-fill"></i> ' . $doctor->contact_1 . '</p>';
                        $output .= '<p><i class="bi bi-telephone-fill"></i> ' . $doctor->contact_2 . '</p>';
                        return $output;
                    }
                })

                ->addColumn('departments', function($doctor) {

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

                    // Get departments associated with doctor.
                    $users = $doctor->departments->pluck('name')->toArray();
                   
                    return $users;
                  

                   


                   /* foreach($tags as $tag) {
                        return $tag->name;
                    }*/
                    //return $results->pivot->name;


                   


                   /* //$department = $doctor->getDepartments()->get();

                    $department = $this->through('departments')->has('doctors');

                    return $department;*/

                   
                })

                ->addColumn('action', function($doctor) {
                    $actionBtn = '
                        <a href="' . route('doctors.edit', $doctor->id) . '" class="btn btn-sm btn-outline-primary">View</a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#delDepModal-' . $doctor->id . '"><i class="bi bi-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['contactInfo', 'action'])
                ->make(true);
        }

        return view('doctors.index', compact('doctors') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $departments = Departments::orderBy('id', 'DESC')->get();
       $genders = Genders::pluck('name', 'id'); 

       // $departments = Departments::pluck('name', 'id');
        return view('doctors.create', compact('departments', 'genders'));
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
        $doctor->dob = $request->input('dob');
        $doctor->gender_id = $request->input('gender_id');
        $doctor->email = $request->input('email');
        $doctor->designation = $request->input('designation');
        $doctor->contact_1 = $request->input('contact_1');
        $doctor->contact_2 = $request->input('contact_2');
        $doctor->specialist_area  = $request->input('specialist_area');
        $doctor->information = $request->input('information');
    
        $doctor->kin_name = $request->input('kin_name');
        $doctor->kin_phone = $request->input('kin_phone');
        $doctor->kin_email = $request->input('kin_email');
        $doctor->save();

        $doctor->departments()->attach( $request->input('departments'));
       
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
        return view('doctors.show');
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
