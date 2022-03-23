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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/menutrip', [App\Http\Controllers\MenuTripController::class, 'index'])
->name('menutrip');

Route::get('/detailpage', [App\Http\Controllers\DetailController::class, 'index'])
->name('detailpage');

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])
->name('checkout');
Route::get('/checkout/success', [App\Http\Controllers\CheckoutController::class, 'success'])
->name('success');

Route::get('/berita', [App\Http\Controllers\BeritaController::class,'index'])
->name('berita');
Route::get('/berita/detailberita', [App\Http\Controllers\BeritaController::class,'detailberita'])
->name('detailberita');

//Admin
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class,'index'])
->middleware(['auth','admin'])
->name('admin');

//TravelAgent
Route::get('/travelagent', [App\Http\Controllers\TravelAgent\DashboardController::class,'index'])
->middleware(['auth','travelagent'])
->name('travelagent');


Auth::routes(['verify' => true]);
