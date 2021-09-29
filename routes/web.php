<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\PatientController;

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

//! edycja rekordu w bazie 
Route::get('/doctors/edit/{id}', [DoctorController::class, 'edit']);
Route::post('/doctors/edit/', [DoctorController::class, 'store']);

// ! wywołany kontroler i metoda create - tworzy doctora i przekierowuje na /doctors  - testowa trasa - zmieniona do obsługi formularza POST
Route::get('/doctors/create', [DoctorController::class, 'create']);

Route::post('/doctors/create', [DoctorController::class, 'store']);

Route::get('/doctors', [DoctorController::class, 'index']);

Route::get('/doctors/{id}', [DoctorController::class, 'show']);

//usuwanie lekarza
Route::get('/doctors/delete/{id}', [DoctorController::class, 'delete']);

Route::get('/patients', [PatientController::class, 'index']);

Route::get('/patients/{id}', [PatientController::class, 'show']);

Route::get('/specializations', [SpecializationController::class, 'index']);

//formularz
Route::get('/specializations/create', [SpecializationController::class, 'create']);
//Route::post('/specializations', [SpecializationController::class, 'store']);
Route::post('/specializations/create', [SpecializationController::class, 'store']);

Route::get('/visits', [VisitController::class, 'index']);

// tworzy formularz
Route::get('/visits/create', [VisitController::class, 'create']);

//obsługuje formularz
Route::post('/visits/create', [VisitController::class, 'store']);