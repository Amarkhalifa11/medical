<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{

    public function all_department()
    {
        $departments = Department::all();
        return view('backend.department.all_department' , compact('departments'));
    }

    public function create()
    {
        return view('backend.department.add_department');
    }

    public function store(StoreDepartmentRequest $request)
    {
        $name     = $request->name;
        $desc     = $request->desc;
        $imageq   = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imageq->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/'; 
        $image = $img_name; 
        $imageq->move($upload_location,$img_name); 

        $departments = Department::create([
            'name'   => $name,
            'image'  => $image,
            'desc'   => $desc,
        ]);

        return redirect()->route('backend.admins.all_department')->with('message' , 'the department is added succefully');
    }


    public function edit($id)
    {
        $departments = Department::find($id);
        return view('backend.department.edit_department' , compact('departments'));
    }

    public function update(UpdateDepartmentRequest $request, $id)
    {
        $departments = Department::find($id);

        $name     = $request->name;
        $desc     = $request->desc;
        $imageq   = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imageq->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/'; 
        $image = $img_name; 
        $imageq->move($upload_location,$img_name); 

        $departments->update([
            'name'   => $name,
            'image'  => $image,
            'desc'   => $desc,
        ]);

        return redirect()->route('backend.admins.all_department')->with('message' , 'the department is ipdated succefully');
    }

    public function destroy($id)
    {
        $departments = Department::find($id);
        $departments->delete();
        return redirect()->route('backend.admins.all_department')->with('message' , 'the department is deleted succefully');

    }
}
