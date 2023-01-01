<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientsRequest;
use App\Http\Requests\UpdatePatientsRequest;
use App\Models\Address;
use App\Models\Genders;
use App\Models\Patients;

use Carbon\Carbon;
use DB;
// use Datatables;
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
        $patients = Patients::select(['id', 'first_name', 'last_name', 'patient_no', 'registration_date'])->orderBy('id', 'asc')->paginate(20);

        /*
        if ($request->ajax()) {
            $jobs = Jobs::latest()->get();
            return Datatables::of($jobs)->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '
                    <td class="px-6 py-4 text-right">
                        <a href="' . route('admin.jobs.show', $row->id) . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                ';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        } 
        */
        
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
        $patient->first_name = $request->input('firstname');
        $patient->middle_name = $request->input('middlename');
        $patient->last_name = $request->input('lastname');
        $patient->patient_no = $request->input('patient_no');
        $patient->registration_date = $request->input('registration_date');
        $patient->gender_id = $request->input('gender');
        $patient->email = $request->input('email');
        $patient->dob = $request->input('dob');
        $patient->home_phone = $request->input('home_phone');
        $patient->cell_number = $request->input('cell_number');
        

        /*
        $table->string('cell_number')->nullable();
        $table->string('emergency_number')->nullable();
        
        $table->char('nis', 9)->nullable()->unique();
        $table->char('trn', 9)->nullable()->unique();
        $table->mediumText('city')->nullable();
        $table->integer('parish_id')->unsigned()->nullable();
        */


        $patient->save();

        return redirect()->route('patients.show', ['patient' => $patient])->with('success', 'New patient created successfully. Go ahead and complete the patient profile below'); // Redirect to patient profile
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patients::find($id);
        $gender = Genders::find($patient->gender_id);
       
       // $address = Address::where('patient_id', $id)->firstOrFail();


       // $genders['genders'] = Genders::pluck('name', 'id')->toArray(); // Get Genders Table
    
       // return view('patients.show', compact('patient', 'genders', 'gender'))->with('success', 'New patient created successfully. Go ahead and complete the patient profile'); 

       return view('patients.show', compact('patient', 'gender'))->with('success', 'New patient created successfully. Go ahead and complete the patient profile'); 
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
        return view('patients.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientsRequest  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientsRequest $request, Patients $patient)
    {
        $patient = Patients::findOrFail($patient->id);
        $patient->first_name = $request->input('firstname');
        $patient->middle_name = $request->input('middlename');
        $patient->last_name = $request->input('lastname');
        $patient->gender_id = $request->input('gender');
        $patient->email = $request->input('email');
        $patient->dob = $request->input('dob');
        $patient->home_phone = $request->input('home_phone');
        $patient->cell_number = $request->input('cell_number');

        $patient->save();

        Address::updateOrCreate(
            ['patient_id' => $patient->id],
            [
                'address1' => $request->input('address1'), 
                'address2' => $request->input('address2'), 
                'city' => $request->input('city')
            ]
        );

       return redirect()->back()->with('success', 'Patient profile updated sucessfully!!');

       // return view('patients.show', ['patient' => $patient]); // 
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
