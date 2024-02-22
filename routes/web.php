<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApportController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\QuestionController;
use App\Models\Doctors;
use App\Models\Gallary;
use App\Models\Question;
use App\Models\Count;
use App\Models\Department;

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
        $services    =  DB::table('services')->get()->random(3);
        $departments =  DB::table('departments')->get();
        $doctors     =  Doctors::all()->random(4);
        $gallarys    =  Gallary::all();
        $asks        =  Question::all();
        $counts      =  Count::all();
        $Department = Department::all();

        return view('frontend.home' , compact('services' , 'Department' , 'counts', 'departments' , 'asks' , 'doctors' , 'gallarys'));
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
        $doctors = Doctors::all();
        return view('frontend.doctors' , compact('doctors'));
    })->name('doctors');
    
    Route::get('/home/contact', function () {
        return view('frontend.contact');
    })->name('contact');
        
    Route::get('/home/Appointment', function () {
        $doctors = Doctors::all();
        $Department = Department::all();
        return view('frontend.Appointment' , compact('doctors' , 'Department'));
    })->name('Appointment');

    Route::get('/home/gallary', function () {
        $gallarys =  Gallary::all();
        return view('frontend.gallary' , compact('gallarys'));
    })->name('gallary');

    Route::post('/home/contact_us' , [ContactController::class , 'store'])->name('frontend.contact.store');
    Route::post('/home/apport' , [ApportController::class , 'store'])->name('frontend.apport.store');
    
    
});



Route::get('logout' , [BackendController::class , 'logout'])->name('logout');
















Route::middleware(['auth:admin',config('jetstream.auth_session'),'verified',
])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard')->middleware('auth:admin');

    //user
    Route::get('/admin/dashboard/all_users' , [BackendController::class , 'all_users'])->name('backend.users.all_users');
    Route::get('/admin/dashboard/delete/{id}' , [BackendController::class , 'delete'])->name('backend.users.delete');

    //admin
    Route::get('/admin/dashboard/all_admins' , [AdminController::class , 'all_admins'])->name('backend.admins.all_admins');
    Route::get('/admin/dashboard/admins/delete/{id}' , [AdminController::class , 'delete'])->name('backend.admins.delete');

    //apport
    Route::get('/admin/dashboard/all_apports' , [ApportController::class , 'all_apports'])->name('backend.admins.all_apports');
    Route::get('/admin/dashboard/all_apports/destroy/{id}' , [ApportController::class , 'destroy'])->name('backend.admins.all_apports.destroy');


    //contact
    Route::get('/admin/dashboard/all_contact' , [ContactController::class , 'all_contact'])->name('backend.admins.all_contact');
    Route::get('/admin/dashboard/all_contact/destroy/{id}' , [ContactController::class , 'destroy'])->name('backend.admins.all_contact.destroy');
    
    //count
    Route::get('/admin/dashboard/all_count' , [CountController::class , 'all_count'])->name('backend.admins.all_count');
    Route::get('/admin/dashboard/all_count/edit/{id}' , [CountController::class , 'edit'])->name('backend.admins.all_count.edit');
    Route::post('/admin/dashboard/all_count/update/{id}' , [CountController::class , 'update'])->name('backend.admins.all_count.update');
    Route::get('/admin/dashboard/all_count/destroy/{id}' , [CountController::class , 'destroy'])->name('backend.admins.all_count.destroy');
    
    //department
    Route::get('/admin/dashboard/all_department' , [DepartmentController::class , 'all_department'])->name('backend.admins.all_department');
    Route::get('/admin/dashboard/all_department/create' , [DepartmentController::class , 'create'])->name('backend.admins.department.create');
    Route::post('/admin/dashboard/all_department/store' , [DepartmentController::class , 'store'])->name('backend.admins.department.store');
    Route::get('/admin/dashboard/all_department/edit/{id}' , [DepartmentController::class , 'edit'])->name('backend.admins.department.edit');
    Route::post('/admin/dashboard/all_department/update/{id}' , [DepartmentController::class , 'update'])->name('backend.admins.department.update');
    Route::get('/admin/dashboard/all_department/destroy/{id}' , [DepartmentController::class , 'destroy'])->name('backend.admins.department.destroy');
            


    //quations
    Route::get('/admin/dashboard/all_questions' , [QuestionController::class , 'all_questions'])->name('backend.admins.all_questions');
    Route::get('/admin/dashboard/all_questions/create' , [QuestionController::class , 'create'])->name('backend.admins.all_questions.create');
    Route::post('/admin/dashboard/all_questions/store' , [QuestionController::class , 'store'])->name('backend.admins.all_questions.store');
    Route::get('/admin/dashboard/all_questions/edit/{id}' , [QuestionController::class , 'edit'])->name('backend.admins.all_questions.edit');
    Route::post('/admin/dashboard/all_questions/update/{id}' , [QuestionController::class , 'update'])->name('backend.admins.all_questions.update');
    Route::get('/admin/dashboard/all_questions/destroy/{id}' , [QuestionController::class , 'destroy'])->name('backend.admins.all_questions.destroy');
          
        
    Route::get('logeout' , [BackendController::class , 'logeout'])->name('logeout')->middleware('auth:admin');
});


Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login' , [AdminController::class , 'loginForm']);
    Route::post('admin/login' , [AdminController::class , 'store'])->name('admin.login');
});
