<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorDepartmentRequest;
use App\Http\Requests\UpdateDoctorDepartmentRequest;
use App\Models\DoctorDepartment;

class DoctorDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorDepartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorDepartmentRequest  $request
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorDepartmentRequest $request, DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorDepartment $doctorDepartment)
    {
        //
    }
}
