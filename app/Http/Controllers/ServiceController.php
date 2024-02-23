<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{

    public function all_service()
    {
        $services = Service::all();
        return view('backend.servics.all_services' , compact('services'));
    }

    public function create()
    {
        $users = User::all();
        return view('backend.servics.add_service' , compact('users'));
    }

    public function store(StoreServiceRequest $request)
    {
        $title     = $request->title;
        $desc      = $request->desc;
        $icon      = $request->icon;
        $user_id   = $request->user_id;

        $services = Service::create([
            'title'     => $title,
            'desc'      => $desc,
            'icon'      => $icon,
            'user_id'   => $user_id,
        ]);

        return redirect()->route('backend.admins.all_services')->with('message' , 'the service is added successfully');

    }

    public function edit($id)
    {
        $users = User::all();
        $services = Service::find($id);
        return view('backend.servics.edit_service' , compact('services' , 'users'));
        
    }

    public function update(UpdateServiceRequest $request,$id)
    {
        $services = Service::find($id);

        $title     = $request->title;
        $desc      = $request->desc;
        $icon      = $request->icon;
        $user_id   = $request->user_id;

        $services->update([
            'title'     => $title,
            'desc'      => $desc,
            'icon'      => $icon,
            'user_id'   => $user_id,
        ]);

        return redirect()->route('backend.admins.all_services')->with('message' , 'the service is updated successfully');
        
    }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('backend.admins.all_services')->with('message' , 'the service is deleted successfully');
    }
}
