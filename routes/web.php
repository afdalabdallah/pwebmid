<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RentController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/keranjang', [RentController::class, 'getRentData']);
Route::get('/detail/{id}', [BuildingController::class, 'getBuildingData']);

Route::post('/keranjang/insert/{id}', [RentController::class, 'insertRent']);
Route::post('/keranjang/delete/{id}', [RentController::class, 'deleteRent']);

Route::get('/keranjang/update/{id}', [BuildingController::class, 'UpdateBuildingData']);
Route::post('/keranjang/update/{id}', [RentController::class, 'UpdateRent']);

Route::get('keranjang/detail/{id}', [RentController::class, 'getRentDetail']);
