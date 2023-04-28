<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students',[StudentsController::class,'index']);
Route::post('/students',[StudentsController::class,'store']);
Route::get('/fetch_students',[StudentsController::class,'fetch_students']);
Route::get('/edit-students/{id}',[StudentsController::class,'edit_students']);
Route::put('/update-student/{id}',[StudentsController::class,'update']);
Route::delete('/delete_student/{id}',[StudentsController::class,'destroy']);
