<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'checkadmin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index']);

    Route::prefix('carrier')->group(function(){
        Route::get('add', [App\Http\Controllers\Admin\CarrierController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\CarrierController::class, 'saveCarrier']);
    });

    Route::prefix('vehicle')->group(function(){
        Route::get('add', [App\Http\Controllers\Admin\VehicleController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\VehicleController::class, 'saveVehicle']);
    });

    Route::prefix('driver')->group(function(){
        Route::get('add', [App\Http\Controllers\Admin\DriverController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\DriverController::class, 'saveDriver']);
    });

    Route::prefix('client')->group(function(){
        Route::get('add', [App\Http\Controllers\Admin\ClientController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\ClientController::class, 'saveClient']);
    });

});

Route::group(['prefix' => 'client',  'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\Client\HomeController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
