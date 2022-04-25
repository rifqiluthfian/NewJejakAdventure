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

//Admin UserManagement
Route::get('/admin/usermanagement', [App\Http\Controllers\Admin\UserManagementController::class,'index'])
->middleware(['auth','admin'])
->name('usermanagement');

Route::get('/admin/usermanagement/edit/{id}', [App\Http\Controllers\Admin\UserManagementController::class,'edit'])
->middleware(['auth','admin'])
->name('usermanagement.edit');

Route::put('/admin/usermanagement/update/{id}', [App\Http\Controllers\Admin\UserManagementController::class,'update'])
->middleware(['auth','admin'])
->name('usermanagement.update');

Route::delete('/admin/usermanagement/delete/{id}', [App\Http\Controllers\Admin\UserManagementController::class,'destroy'])
->middleware(['auth','admin'])
->name('usermanagement.destroy');


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


//Gallery
Route::get('/travelagent/gallery', [App\Http\Controllers\TravelAgent\GalleryController::class,'index'])
->middleware(['auth','travelagent'])
->name('gallery.index');

Route::get('/travelagent/gallery/create', [App\Http\Controllers\TravelAgent\GalleryController::class,'create'])
->middleware(['auth','travelagent'])
->name('gallery.create');

Route::post('/travelagent/gallery/store', [App\Http\Controllers\TravelAgent\GalleryController::class,'store'])
->middleware(['auth','travelagent'])
->name('gallery.store');

Route::get('/travelagent/gallery/edit/{id}', [App\Http\Controllers\TravelAgent\GalleryController::class,'edit'])
->middleware(['auth','travelagent'])
->name('gallery.edit');

Route::put('/travelagent/gallery/update/{id}', [App\Http\Controllers\TravelAgent\GalleryController::class,'update'])
->middleware(['auth','travelagent'])
->name('gallery.update');

Route::delete('/travelagent/gallery/delete/{id}', [App\Http\Controllers\TravelAgent\GalleryController::class,'destroy'])
->middleware(['auth','travelagent'])
->name('gallery.delete');

//Transaction Travel Agent
Route::get('/travelagent/transaction/index', [App\Http\Controllers\TravelAgent\TransactionController::class,'index'])
->middleware(['auth','travelagent'])
->name('transaction.index');

Route::get('/travelagent/transaction/detail/{id}', [App\Http\Controllers\TravelAgent\TransactionController::class,'show'])
->middleware(['auth','travelagent'])
->name('transaction.detail');

//Transaction Admin
Route::get('/admin/transaction/index', [App\Http\Controllers\Admin\TransactionController::class,'index'])
->middleware(['auth','admin'])
->name('transactionadmin.index');

Route::get('/admin/transaction/detail/{id}', [App\Http\Controllers\Admin\TransactionController::class,'show'])
->middleware(['auth','admin'])
->name('transactionadmin.detail');

Route::get('/admin/transaction/edit/{id}', [App\Http\Controllers\Admin\TransactionController::class,'edit'])
->middleware(['auth','admin'])
->name('transactionadmin.edit');

Route::put('/admin/transaction/update/{id}', [App\Http\Controllers\Admin\TransactionController::class,'update'])
->middleware(['auth','admin'])
->name('transactionadmin.update');

Route::delete('/admin/transaction/delete/{id}', [App\Http\Controllers\Admin\TransactionController::class,'destroy'])
->middleware(['auth','admin'])
->name('transactionadmin.destroy');

//TravelAgent Admin

Route::get('/admin/travelpackage', [App\Http\Controllers\Admin\TravelPackageController::class,'index'])
->middleware(['auth','admin'])
->name('travelpackageadmin.index');

Route::get('/admin/travelpackage/edit/{id}', [App\Http\Controllers\Admin\TravelPackageController::class,'edit'])
->middleware(['auth','admin'])
->name('travelpackageadmin.edit');

Route::put('/admin/travelpackage/update/{id}', [App\Http\Controllers\Admin\TravelPackageController::class,'update'])
->middleware(['auth','admin'])
->name('travelpackageadmin.update');

Route::delete('/admin/travelpackage/delete/{id}', [App\Http\Controllers\Admin\TravelPackageController::class,'destroy'])
->middleware(['auth','admin'])
->name('travelpackageadmin.delete');





Auth::routes(['verify' => true]);
