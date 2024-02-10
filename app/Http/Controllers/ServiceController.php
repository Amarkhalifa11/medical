<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{

    public function all_service()
    {
        // $services = DB::table('services')->all();
        // return view('frontend.service' , compact('services'));
    }

    public function create()
    {
        //
    }

    public function store(StoreServiceRequest $request)
    {
        //
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(Service $service)
    {
        //
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    public function destroy(Service $service)
    {
        //
    }
}
