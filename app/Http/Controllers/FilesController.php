<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilesRequest;
use App\Http\Requests\UpdateFilesRequest;
use App\Models\Files;

class FilesController extends Controller
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
     * @param  \App\Http\Requests\StoreFilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilesRequest $request)
    {
        $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();

        // $request->file->move(public_path('files'), $fileName);

        $request->file->storeAs('files', $fileName, 'public');

        Files::create([
            //'doctor_id' => auth()->id(),
            'doctor_id' => $request->input('doctor_id'),
            'description' => $request->input('description'),
            'name' => $fileName,
            'type' => $type,
            'size' => $size
        ]);


        return redirect()->back()->with('success', 'File uploaded sucessfully!!')->with('file', $fileName);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilesRequest  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilesRequest $request, Files $files)
    {
        //$file = Files::findOrFail($id);
        $file = Files::findOrFail($id);
        $file->description = $request->input('description');

        if($request->hasFile('file')) {
            
            $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  

            $type = $request->file->getClientMimeType();
            $size = $request->file->getSize();
            $request->file->storeAs('files', $fileName, 'public');
            $file->name = $fileName;
            $file->type = $type;
            $file->size = $size;
        }  

        $file->save();

        return redirect()->back()->with('success', 'File uploaded sucessfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }
}
