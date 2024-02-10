<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {

    Route::get('/home', function () {
        $services = DB::table('services')->get()->random(3);
        $departments = DB::table('departments')->get();
        return view('frontend.home' , compact('services' , 'departments'));
    })->name('home');
    
    Route::get('/home/about', function () {
        return view('frontend.about');
    })->name('about');

    Route::get('/home/service', function () {
        $services = DB::table('services')->get();
        return view('frontend.service' ,compact('services'));
    })->name('service');

    Route::get('/home/department', function () {
        $departments = DB::table('departments')->get();
        return view('frontend.department' , compact('departments'));
    })->name('department');

    Route::get('/home/doctors', function () {
        return view('frontend.doctors');
    })->name('doctors');
    
    Route::get('/home/contact', function () {
        return view('frontend.contact');
    })->name('contact');
        
    Route::get('/home/Appointment', function () {
        return view('frontend.Appointment');
    })->name('Appointment');

    Route::get('/home/gallary', function () {
        return view('frontend.gallary');
    })->name('gallary');

    // Route::get('/home/all_service' , [ServiceController::class , 'all_service'])->name('frontend.all_service');


});


Route::get('logout' , [BackendController::class , 'logout'])->name('logout');

















Route::middleware(['auth:admin',config('jetstream.auth_session'),'verified',
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth:admin');
});


Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login' , [AdminController::class , 'loginForm']);
    Route::post('admin/login' , [AdminController::class , 'store'])->name('admin.login');
});
