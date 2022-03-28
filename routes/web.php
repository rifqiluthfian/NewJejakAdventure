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
Route::get('/admin/usermanagement', [App\Http\Controllers\Admin\UserManagementController::class,'index'])
->middleware(['auth','admin'])
->name('usermanagement');

//TravelAgent
Route::get('/travelagent', [App\Http\Controllers\TravelAgent\DashboardController::class,'index'])
->middleware(['auth','travelagent'])
->name('travelagent');

Route::get('/travelagent/travelpackage', [App\Http\Controllers\TravelAgent\TravelPackageController::class,'index'])
->middleware(['auth','travelagent'])
->name('travelpackage.index');

Route::get('/travelagent/travelpackage/create', [App\Http\Controllers\TravelAgent\TravelPackageController::class,'create'])
->middleware(['auth','travelagent'])
->name('travelpackage.create');

Route::post('/travelagent/travelpackage/store', [App\Http\Controllers\TravelAgent\TravelPackageController::class,'store'])
->middleware(['auth','travelagent'])
->name('travelpackage.store');

Route::get('/travelagent/travelpackage/edit/{id}', [App\Http\Controllers\TravelAgent\TravelPackageController::class,'edit'])
->middleware(['auth','travelagent'])
->name('travelpackage.edit');

Route::put('/travelagent/travelpackage/update/{id}', [App\Http\Controllers\TravelAgent\TravelPackageController::class,'update'])
->middleware(['auth','travelagent'])
->name('travelpackage.update');

Route::delete('/travelagent/travelpackage/delete/{id}', [App\Http\Controllers\TravelAgent\TravelPackageController::class,'destroy'])
->middleware(['auth','travelagent'])
->name('travelpackage.delete');


Auth::routes(['verify' => true]);
