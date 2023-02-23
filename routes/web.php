<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PatientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Roles
    Route::resource('roles', RoleController::class);

    // Users
    Route::resource('users', UserController::class)->except('show');
    //Route::put('/users/{id}', [UserController::class, 'edit']);
    Route::put('/users/{user}/updatePassword', [UserController::class, 'updatePassword'])->name('users.updatePassword');

    /*
    Route::put('/employees/{employee}/savenote', [EmployeesController::class, 'savenote'])->name('employees.savenote');
    */

    // Departments
    Route::resource('departments', DepartmentsController::class);

    // Doctors
    Route::resource('doctors', DoctorsController::class);

    // Patients
    Route::resource('/patients', PatientsController::class);
    Route::get('/patients/summary/{patients}', [PatientsController::class, 'summary'])->name('patients.summary');




   /* 
    Route::resource('departments', DepartmentsController::class)->except(['show']);
   
   
   Route::get('/profile{patient}', function ($id) {
        
    });
    //Route::resource('/patients//{patients}/profile', PatientsController::class); */

});



