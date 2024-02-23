<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use App\Models\Department;
use App\Http\Requests\StoreGallaryRequest;
use App\Http\Requests\UpdateGallaryRequest;

class GallaryController extends Controller
{

    public function all_images()
    {
        $images = Gallary::all();
        return view('backend.gallary.all_images' , compact('images'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('backend.gallary.add_image' , compact('departments'));
    }

    public function store(StoreGallaryRequest $request)
    {
        $department_id = $request->department_id;
        $imageq         = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imageq->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/gallery/'; 
        $image = $img_name; 
        $imageq->move($upload_location,$img_name); 

        $gallary = Gallary::create([
            'department_id'   => $department_id,
            'image'            => $image,
        ]);

        return redirect()->route('backend.admins.all_images')->with('message' , 'the image is added succefully');
    }

    public function edit( $id)
    {
        $departments = Department::all();
        $gallary = Gallary::find($id);
        return view('backend.gallary.edit_image' , compact('gallary' , 'departments'));
    }

    public function update(UpdateGallaryRequest $request, $id)
    {
        $gallary = Gallary::find($id);
        $department_id = $request->department_id;
        $imageq         = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imageq->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/gallery/'; 
        $image = $img_name; 
        $imageq->move($upload_location,$img_name); 

        $gallary->update([
            'department_id'   => $department_id,
            'image'            => $image,
        ]);

        return redirect()->route('backend.admins.all_images')->with('message' , 'the image is update succefully');
    }

    public function destroy($id)
    {
        $gallary = Gallary::find($id);
        $gallary->delete();
        return redirect()->route('backend.admins.all_images')->with('message' , 'the image is deleted succefully');

    }
}
