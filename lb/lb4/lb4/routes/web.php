<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/login', [MainController::class, 'login']);

Route::get('/registration',[MainController::class, 'registration']);

Route::post('/login/check', [MainController::class , 'login_check']);

Route::post('/registration/check', [MainController::class , 'registration_check']);

/*Route::get('/user/{id}/{name}', function ($id, $name){
    return 'ID : '.$id.' Name : '.$name ;
});*/
