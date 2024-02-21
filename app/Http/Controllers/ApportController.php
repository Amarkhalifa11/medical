<?php

namespace App\Http\Controllers;

use App\Models\Apport;

use App\Http\Requests\StoreApportRequest;
use App\Http\Requests\UpdateApportRequest;

class ApportController extends Controller
{

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

    public function all_apports()
    {
        $apports = Apport::latest()->get();
        return view('backend.apports.all_apports' , compact('apports'));
    }


    public function destroy($id)
    {
        $apport = Apport::find($id);
        $apport->delete();
        return redirect()->back()->with('message' , 'the apport is deleted success');
    }
}
