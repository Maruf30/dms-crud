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

    // Supplier Route
    Route::get('/supplier_index', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/supplier_get', [App\Http\Controllers\SupplierController::class, 'supplier_get'])->name('supplier.get');
    Route::post('/supplier_add', [App\Http\Controllers\SupplierController::class, 'supplier_add'])->name('supplier.add');
    Route::post('/supplier_update', [App\Http\Controllers\SupplierController::class, 'supplier_update'])->name('supplier.update');
    Route::delete('/supplier_delete', [App\Http\Controllers\SupplierController::class, 'supplier_delete'])->name('supplier.delete');

    // Color Code
    Route::get('/color_code_index', [App\Http\Controllers\ColorCodeController::class, 'index'])->name('color_code.index');
    Route::get('/color_code_get', [App\Http\Controllers\ColorCodeController::class, 'color_code_get'])->name('color_code.get');
    Route::post('/color_code_add', [App\Http\Controllers\ColorCodeController::class, 'color_code_add'])->name('color_code.add');
    Route::post('/color_code_update', [App\Http\Controllers\ColorCodeController::class, 'color_code_update'])->name('color_code.update');
    Route::delete('/color_code_delete', [App\Http\Controllers\ColorCodeController::class, 'color_code_delete'])->name('color_code.delete');
});

// Auth::routes();
Auth::routes(['register' => false]);
