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
    // ---------------------------- MRP Table ----------------------------

    // Testing Route MrpControllerTwo
    Route::get('/index', [App\Http\Controllers\MrpControllerTwo::class, 'index'])->name('mrp.index');
    Route::get('/mrp_get_two', [App\Http\Controllers\MrpControllerTwo::class, 'mrp_get_two'])->name('mrp.get_two');
    Route::post('/mrp_update_two', [App\Http\Controllers\MrpController::class, 'mrp_update_two'])->name('mrp.update_two');
    Route::post('/mrp_add_two', [App\Http\Controllers\MrpController::class, 'mrp_add_two'])->name('mrp.add_two');

    // Original Route
    Route::get('/mrp_get', [App\Http\Controllers\MrpController::class, 'mrp_get'])->name('mrp.get');
    Route::post('/mrp_add', [App\Http\Controllers\MrpController::class, 'mrp_add'])->name('mrp.add');
    Route::post('/mrp_update', [App\Http\Controllers\MrpController::class, 'mrp_update'])->name('mrp.update');
    Route::delete('/mrp_delete', [App\Http\Controllers\MrpController::class, 'mrp_delete'])->name('mrp.delete');


    Route::get('core/{id}', [App\Http\Controllers\CoreController::class, 'show']);
    Route::get('customerInfoFullChassis/{id}', [App\Http\Controllers\CoreController::class, 'customerInfoFullChassis']);
    Route::resource('products', ProductController::class);
    Route::post('/chassisSearch', [App\Http\Controllers\CoreController::class, 'chassisSearch']);
    Route::post('/searchChassisList', [App\Http\Controllers\CoreController::class, 'searchChassisList']);
    Route::post('/engineSearch', [App\Http\Controllers\CoreController::class, 'engineSearch']);
    Route::post('/mobileSearch', [App\Http\Controllers\CoreController::class, 'mobileSearch']);
});

// Auth::routes();
Auth::routes(['register' => false]);
