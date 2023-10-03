<?php

use App\Http\Controllers\EventController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/events', [EventController::class,'index']);
Route::get('api/events/{id}', [EventController::class,'show']);
Route::post('api/events', [EventController::class,'store']);
Route::put('api/events/{id}', [EventController::class,'update']);
Route::delete('api/events/{id}', [EventController::class,'destroy']);
Route::get('event/new', [EventController::class,'newView']);
Route::get('event/edit/{id}', [EventController::class,'editView']);
Route::get('event/list', [EventController::class,'listView']);
