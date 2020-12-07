<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/add/product', [HomeController::class, 'add_product'])->middleware('auth');
Route::get('/increase/count', [HomeController::class, 'increase_count'] );
Route::get('/scan', function (){
    return view('scan');
});
