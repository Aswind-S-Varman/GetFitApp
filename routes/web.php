<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackingController;
use App\Models\User;
use App\Models\Profile;
use App\Models\Tracking;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('redirects', 'App\Http\Controllers\HomeController@index');

//Route for profiles

Route::get('profiles', [ProfileController::class, 'index']);

Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit']);

Route::get('/profiles/{profile}/edit_user', [ProfileController::class, 'edit_user']);

Route::put('/profiles/{profile}', [ProfileController::class, 'update']);

Route::put('/profiles/{profile}/show', [ProfileController::class, 'update_user']);

Route::post('/profiles', [ProfileController::class, 'store']);

Route::get('/profiles/create', [ProfileController::class, 'create']);

Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy']);

Route::get('profiles/{profile}/show' ,[ProfileController::class, 'show']);

//Routes for Tracking

Route::get('tracking', [TrackingController::class, 'index']);

Route::get('/tracking/{tracking}/edit', [TrackingController::class, 'edit']);

Route::get('/tracking/{tracking}/edit_user', [TrackingController::class, 'edit_user']);

Route::put('/tracking/{tracking}', [TrackingController::class, 'update']);

Route::put('/tracking/{tracking}/show', [TrackingController::class, 'update_user']);

Route::post('/tracking', [TrackingController::class, 'store']);

Route::get('/tracking/create', [TrackingController::class, 'create']);

Route::delete('/tracking/{tracking}', [TrackingController::class, 'destroy']);

Route::get('tracking/{tracking}/show' ,[TrackingController::class, 'show']);