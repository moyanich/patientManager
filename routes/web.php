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

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class)->except('edit');

    Route::get('/patients/summary/{patients}', [PatientsController::class, 'summary'])->name('patients.summary');

    Route::resource('departments', DepartmentsController::class)->except([
        'show'
    ]);;

    Route::resource('doctors', DoctorsController::class);
    Route::resource('/patients', PatientsController::class);

   /* Route::get('/profile{patient}', function ($id) {
        
    }); */
    //Route::resource('/patients//{patients}/profile', PatientsController::class);

});



