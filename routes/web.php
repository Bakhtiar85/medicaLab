<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Patients\PatientsController;
use App\Http\Controllers\Setting\MedTestController;

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

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/', [AuthController::class, 'store']);
Route::get('/auth', [AuthController::class, 'error'])->name('auth');

Route::get('/patients', [PatientsController::class, 'index'])->name('patients');
Route::post('/patients', [PatientsController::class, 'store']);
Route::get('/newPatients', [PatientsController::class, 'new_patients'])->name('n_patients');
Route::get('/patients/{id}', [PatientsController::class, 'show'])->name('patient');
Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])->name('d_patient');
Route::post('/upatients',  [PatientsController::class, 'updatePat'])->name('upatients');

Route::get('/settings', [MedTestController::class, 'index'])->name('settings');
