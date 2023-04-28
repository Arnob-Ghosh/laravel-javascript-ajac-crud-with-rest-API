<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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


Route::get('/students',[StudentsController::class,'index']);
Route::post('/students',[StudentsController::class,'store']);
Route::get('/fetch_students',[StudentsController::class,'fetch_students']);
Route::get('/edit-students/{id}',[StudentsController::class,'edit_students']);
Route::put('/update-student/{id}',[StudentsController::class,'update']);
Route::delete('/delete_student/{id}',[StudentsController::class,'destroy']);


Route::get('/', function () {
    return view('welcome');
});
