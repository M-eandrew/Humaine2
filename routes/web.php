<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelocateController;



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

Route::get('/', [HomeController::class,'index']);

// Route::get('/donate', [HomeController::class,'donate']);

Route::get('/donate', [HomeController::class,'donate'])->name('donate');
Route::get('/profile', [HomeController::class,'profile'])->name('profile');

Route::get('/home', [HomeController::class,'redirect']);
Route::get('/bodyhome', [HomeController::class,'worker_redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_refugee_view', [UserController::class,'addrefugeeview']);
Route::post('/upload_refugee', [UserController::class,'uploadrefugee']);
Route::get('/relocatedrefugee', [RelocateController::class,'relocatedrefugee']);
Route::post('/upload_relocated', [RelocateController::class,'uploadrelocated']);

//Route::get('/bodyhome', [CountController::class,'statistics']);

