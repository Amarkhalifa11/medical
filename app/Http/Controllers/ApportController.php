<?php

namespace App\Http\Controllers;

use App\Models\Apport;

use App\Http\Requests\StoreApportRequest;
use App\Http\Requests\UpdateApportRequest;

class ApportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApportRequest $request)
    {
        $name          = $request->name;
        $email         = $request->email;
        $phone         = $request->phone;
        $date          = $request->date;
        $department    = $request->department;
        $doctor        = $request->doctor;
        $message       = $request->message;

        $apport = Apport::create([
            'name'        => $name,
            'email'       => $email,
            'phone'       => $phone,
            'date'        => $date,
            'department'  => $department,
            'message'     => $message,
            'doctor'      => $doctor,
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Apport $apport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apport $apport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApportRequest $request, Apport $apport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apport $apport)
    {
        //
    }
}
