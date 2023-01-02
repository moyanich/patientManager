<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBloodGroupsRequest;
use App\Http\Requests\UpdateBloodGroupsRequest;
use App\Models\BloodGroups;

class BloodGroupsController extends Controller
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
     * @param  \App\Http\Requests\StoreBloodGroupsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodGroupsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodGroups  $bloodGroups
     * @return \Illuminate\Http\Response
     */
    public function show(BloodGroups $bloodGroups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodGroups  $bloodGroups
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodGroups $bloodGroups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodGroupsRequest  $request
     * @param  \App\Models\BloodGroups  $bloodGroups
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBloodGroupsRequest $request, BloodGroups $bloodGroups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodGroups  $bloodGroups
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodGroups $bloodGroups)
    {
        //
    }
}
