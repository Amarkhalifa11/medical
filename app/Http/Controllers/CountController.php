<?php

namespace App\Http\Controllers;

use App\Models\Count;
use App\Http\Requests\StoreCountRequest;
use App\Http\Requests\UpdateCountRequest;

class CountController extends Controller
{

    public function all_count()
    {
        $counts = Count::all();
        return view('backend.count.all_count' , compact('counts'));
    }

    public function edit($id)
    {
        $counts = Count::find($id);
        return view('backend.count.edit_count' , compact('counts'));
    }

    public function update(UpdateCountRequest $request, $id)
    {
        $counts = Count::find($id);

        $title = $request->title;
        $count = $request->count;
        $desc  = $request->desc;

        $counts->update([
            'title' => $title,
            'count' => $count,
            'desc'  => $desc,
        ]);

        return redirect()->route('backend.admins.all_count')->with('message' , 'updated sucessfully');
    }

    public function destroy($id)
    {
        $counts = Count::find($id);
        $counts->delete();
        return redirect()->back()->with('message' , 'deleted successfully');
    }
}
