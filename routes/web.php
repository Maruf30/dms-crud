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

Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->middleware('auth');
// Auth::routes();

Route::get('create-pdf-file', [PDFController::class, 'index']);
Route::get('/customerSearch', [App\Http\Controllers\HomeController::class, 'customerSearch'])->middleware('auth');
Route::get('/tblMRP', [App\Http\Controllers\MrpController::class, 'index'])->middleware('auth');

Route::get('core/{id}', [App\Http\Controllers\CoreController::class, 'show'])->middleware('auth');
Route::get('customerInfoFullChassis/{id}', [App\Http\Controllers\CoreController::class, 'customerInfoFullChassis'])->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/chassisSearch', [App\Http\Controllers\CoreController::class, 'chassisSearch'])->middleware('auth');
Route::post('/searchChassisList', [App\Http\Controllers\CoreController::class, 'searchChassisList'])->middleware('auth');
Route::post('/engineSearch', [App\Http\Controllers\CoreController::class, 'engineSearch'])->middleware('auth');
Route::post('/mobileSearch', [App\Http\Controllers\CoreController::class, 'mobileSearch'])->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
Auth::routes(['register' => false]);
