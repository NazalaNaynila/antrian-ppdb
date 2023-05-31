<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomePageController::class, 'index']);
Route::get('/form', [HomePageController::class, 'create']);
Route::post('/form', [HomePageController::class, 'store']);
Route::get('/display', [HomePageController::class, 'show']);

//Operator
Route::get('/operator', [OperatorController::class, 'index']);
Route::get('/operator/loket1', [OperatorController::class, 'loket1']);
Route::get('/operator/loket2', [OperatorController::class, 'loket2']);
Route::get('/operator/loket3', [OperatorController::class, 'loket3']);
Route::get('/operator/loket4', [OperatorController::class, 'loket4']);

//Delete
Route::get('/operator/{id}/delete', [OperatorController::class, 'destroy']);
Route::get('/operator/loket1/{id}/delete', [OperatorController::class, 'destroy']);
Route::get('/operator/loket2/{id}/delete', [OperatorController::class, 'destroy']);
Route::get('/operator/loket3/{id}/delete', [OperatorController::class, 'destroy']);
Route::get('/operator/loket4/{id}/delete', [OperatorController::class, 'destroy']);

Route::get('/operator/panggil/{id}', [OperatorController::class, 'edit']);
