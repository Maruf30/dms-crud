<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PDFController;



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

Route::get('/', [App\Http\Controllers\HomeController::class, 'login']);
Route::get('create-pdf-file', [PDFController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/customerSearch', [App\Http\Controllers\HomeController::class, 'customerSearch']);


    Route::get('core/{id}', [App\Http\Controllers\CoreController::class, 'show']);
    Route::get('customerInfoFullChassis/{id}', [App\Http\Controllers\CoreController::class, 'customerInfoFullChassis']);
    Route::resource('products', ProductController::class);
    Route::post('/chassisSearch', [App\Http\Controllers\CoreController::class, 'chassisSearch']);
    Route::post('/searchChassisList', [App\Http\Controllers\CoreController::class, 'searchChassisList']);
    Route::post('/engineSearch', [App\Http\Controllers\CoreController::class, 'engineSearch']);
    Route::post('/mobileSearch', [App\Http\Controllers\CoreController::class, 'mobileSearch']);

    // MRP Table
    Route::get('/mrp_index', [App\Http\Controllers\MrpController::class, 'index'])->name('mrp.index');
    Route::get('/mrp_get', [App\Http\Controllers\MrpController::class, 'mrp_get'])->name('mrp.get');
    Route::post('/mrp_add', [App\Http\Controllers\MrpController::class, 'mrp_add'])->name('mrp.add');
    Route::post('/mrp_update', [App\Http\Controllers\MrpController::class, 'mrp_update'])->name('mrp.update');
    Route::delete('/mrp_delete', [App\Http\Controllers\MrpController::class, 'mrp_delete'])->name('mrp.delete');

    // Vehicle Route
    Route::get('/vehicle_index', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle_get', [App\Http\Controllers\VehicleController::class, 'vehicle_get'])->name('vehicle.get');
    Route::post('/vehicle_add', [App\Http\Controllers\VehicleController::class, 'vehicle_add'])->name('vehicle.add');
    Route::post('/vehicle_update', [App\Http\Controllers\VehicleController::class, 'vehicle_update'])->name('vehicle.update');
    Route::delete('/vehicle_delete', [App\Http\Controllers\VehicleController::class, 'vehicle_delete'])->name('vehicle.delete');
});

// Auth::routes();
Auth::routes(['register' => false]);
