<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\WorkController;
use App\Http\Controllers\API\SkillController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
	Route::get('/user', [UserController::class, 'fetch']);
	Route::post('/user', [UserController::class, 'updateProfile']);
	Route::post('/logout', [UserController::class, 'logout']);
	
});


Route::get('/works', [WorkController::class, 'index']);	
Route::post('/works', [WorkController::class, 'store']);
Route::put('/works/{id}', [WorkController::class, 'update']);
Route::delete('/works/{id}', [WorkController::class, 'destroy']);


Route::get('/skills', [SkillController::class, 'index']);	
Route::post('/skills', [SkillController::class, 'store']);
Route::put('/skills/{id}', [SkillController::class, 'update']);
Route::delete('/skills/{id}', [SkillController::class, 'destroy']);