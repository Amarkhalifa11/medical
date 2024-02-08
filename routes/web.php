<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
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
        return view('frontend.home');
    })->name('home');
    
    Route::get('/home/about', function () {
        return view('frontend.about');
    })->name('about');

    Route::get('/home/service', function () {
        return view('frontend.service');
    })->name('service');

    Route::get('/home/department', function () {
        return view('frontend.department');
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
        return view('frontend.Appointment');
    })->name('Appointment');
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
