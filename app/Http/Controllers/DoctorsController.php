<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Department;
use App\Http\Requests\StoreDoctorsRequest;
use App\Http\Requests\UpdateDoctorsRequest;

class DoctorsController extends Controller
{

    public function all_doctors()
    {
        $doctors = Doctors::all();
        return view('backend.doctors.all_doctors' , compact('doctors'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('backend.doctors.add_doctor' , compact('departments'));
    }

    public function store(StoreDoctorsRequest $request)
    {
        $name           = $request->name;
        $desc           = $request->desc;
        $twitter        = $request->twitter;
        $instagram      = $request->instagram;
        $linkiden       = $request->linkiden;
        $facebook       = $request->facebook;
        $department_id  = $request->department_id;
        $imageq         = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imageq->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/doctors/'; 
        $image = $img_name; 
        $imageq->move($upload_location,$img_name); 

        $doctors = Doctors::create([
            'name'             => $department_id,
            'image'            => $image,
            'desc'             => $desc,
            'twitter'          => $twitter,
            'linkiden'         => $linkiden,
            'facebook'         => $facebook,
            'instagram'        => $instagram,
            'department_id'    => $department_id,
        ]);

        return redirect()->route('backend.admins.all_doctors')->with('message' , 'the doctor is added succefully');


    }

    public function edit($id)
    {
        $departments = Department::all();
        $doctors = Doctors::find($id);
        return view('backend.doctors.edit_doctors' , compact('doctors' , 'departments'));
        
    }

    public function update(UpdateDoctorsRequest $request, $id)
    {
        $doctors = Doctors::find($id);
        $name           = $request->name;
        $desc           = $request->desc;
        $twitter        = $request->twitter;
        $instagram      = $request->instagram;
        $linkiden       = $request->linkiden;
        $facebook       = $request->facebook;
        $department_id  = $request->department_id;
        $imageq         = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imageq->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/doctors/'; 
        $image = $img_name; 
        $imageq->move($upload_location,$img_name); 

        $doctors->update([
            'name'             => $name,
            'image'            => $image,
            'desc'             => $desc,
            'twitter'          => $twitter,
            'linkiden'         => $linkiden,
            'facebook'         => $facebook,
            'instagram'        => $instagram,
            'department_id'    => $department_id,
        ]);

        return redirect()->route('backend.admins.all_doctors')->with('message' , 'the doctor is updated succefully');
        
    }


    public function destroy($id)
    {
        $doctors = Doctors::find($id);
        $doctors->delete();
        return redirect()->route('backend.admins.all_doctors')->with('message' , 'the doctor is deleted successfully');

    }
}
