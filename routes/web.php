<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\WarehouseController;

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


Route::get('/', function (){
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard',[Dashboardcontroller::class,'index'])->name('dashboard');
    Route::resource('warehouse.stock', WarehouseStockController::class);
    Route::resource('warehouse',WarehouseController::class);
    Route::resource('material',MaterialController::class);
    Route::resource('product',ProductController::class);
});

require __DIR__ . '/auth.php';

