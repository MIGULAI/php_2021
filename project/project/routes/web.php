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
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create_order',[\App\Http\Controllers\CreateOrderController::class , 'index']);


Route::post('/create_order/post', [\App\Http\Controllers\CreateOrderController::class , 'make_date']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
});
