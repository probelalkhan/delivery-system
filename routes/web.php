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

    Route::prefix('order')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\OrderController::class, 'index']);
        Route::get('/{order_id}', [App\Http\Controllers\Admin\OrderController::class, 'orderDetail']);
        Route::post('/{order_id}', [App\Http\Controllers\Admin\OrderController::class, 'saveDelivery']);
    });

    Route::prefix('carrier')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\CarrierController::class, 'allCarriers']);
        Route::get('add', [App\Http\Controllers\Admin\CarrierController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\CarrierController::class, 'saveCarrier']);
        Route::post('delete/{carrier_id}', [App\Http\Controllers\Admin\CarrierController::class, 'deleteCarrier']);
    });

    Route::prefix('vehicle')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\VehicleController::class, 'allVehicles']);
        Route::get('add', [App\Http\Controllers\Admin\VehicleController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\VehicleController::class, 'saveVehicle']);
        Route::post('delete/{vehicle_id}', [App\Http\Controllers\Admin\VehicleController::class, 'deleteVehicle']);
    });

    Route::prefix('driver')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DriverController::class, 'allDrivers']);
        Route::get('add', [App\Http\Controllers\Admin\DriverController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\DriverController::class, 'saveDriver']);
        Route::post('delete/{driver_id}', [App\Http\Controllers\Admin\DriverController::class, 'deleteDriver']);
    });

    Route::prefix('client')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\ClientController::class, 'allClients']);
        Route::get('add', [App\Http\Controllers\Admin\ClientController::class, 'index']);
        Route::post('add', [App\Http\Controllers\Admin\ClientController::class, 'saveClient']);
        Route::post('delete/{client_id}', [App\Http\Controllers\Admin\ClientController::class, 'deleteClient']);
    });

});

Route::group(['prefix' => 'client',  'middleware' => 'checkclient'], function () {
    Route::get('/', [App\Http\Controllers\Client\HomeController::class, 'index']);

    Route::prefix('address')->group(function(){
        Route::get('/', [App\Http\Controllers\Client\AddressController::class, 'allAddresses']);
        Route::get('/add', [App\Http\Controllers\Client\AddressController::class, 'index']);
        Route::post('/add', [App\Http\Controllers\Client\AddressController::class, 'saveAddress']);
    });

    Route::prefix('order')->group(function(){
        Route::get('/', [App\Http\Controllers\Client\OrderController::class, 'allOrders']);
        Route::get('/add', [App\Http\Controllers\Client\OrderController::class, 'index']);
        Route::post('/add', [App\Http\Controllers\Client\OrderController::class, 'saveOrder']);
    });

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
