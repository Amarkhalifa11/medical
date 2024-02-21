<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class BackendController extends Controller
{

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function logeout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function all_users(){
        $users = User::all();
        return view('backend.users.all_user' , compact('users'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message' , 'the user is deleted successfully');

    }

}
