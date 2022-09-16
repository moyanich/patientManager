<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientsRequest;
use App\Http\Requests\UpdatePatientsRequest;
use App\Models\Genders;
use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:patient-list|patient-create|patient-edit|patient-delete', ['only' => ['index','show']]);
        $this->middleware('permission:patient-create', ['only' => ['create','store']]);
        $this->middleware('permission:patient-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:patient-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $patients = Patients::select(['id', 'name', 'last_name', 'registration_date'])->orderBy('id', 'asc')->paginate(20);
       // $fullName = $patients->name;

        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Genders::pluck('name', 'id')->toArray(); 
        return view('patients.create', compact('genders'));
       // return view('admin.patients.create')->with('genders', $genders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientsRequest $request)
    {
        $patient = new Patients();
        $patient->patient_no = $request->input('patientID');
        $patient->first_name = $request->input('firstname');
        $patient->last_name = $request->input('lastname');
        $patient->gender_id = $request->input('gender');
        $patient->email = $request->input('email');
        $patient->registration_date = $request->input('registration_date');

        /*
        home_phone
$table->string('cell_number')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('email', 50)->nullable();
            $table->char('nis', 9)->nullable()->unique();
            $table->char('trn', 9)->nullable()->unique();
            $table->mediumText('city')->nullable();
            $table->integer('parish_id')->unsigned()->nullable();
            */

        $patient->save();

        return redirect()->route('patients.index', $request->input('id'))->with('success', 'New employee created successfully. Go ahead and complete the employee profile. Activation email sent!'); // Redirect to employee profile
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientsRequest  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientsRequest $request, Patients $patients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patients $patients)
    {
        //
    }
}
