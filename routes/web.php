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

Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])
->name('faq');

Route::get('/detailpage/{slug}', [App\Http\Controllers\DetailController::class, 'index'])
->name('detailpage');

Route::get('/gallery', [App\Http\Controllers\GalleryController::class,'index'])
->name('gallery');

//User Profil
Route::get('/profile',[App\Http\Controllers\ProfileController::class,'index'])
->middleware(['auth'])
->name('profile');

Route::get('/profile/edit',[App\Http\Controllers\ProfileController::class,'edit'])
->middleware(['auth'])
->name('profile.edit');

Route::put('/profile/update',[App\Http\Controllers\ProfileController::class,'update'])
->middleware(['auth'])
->name('profile.update');

//StatusTransaction
Route::get('/status_transaction/index', [App\Http\Controllers\StatusTransactionController::class,'index'])
->middleware(['auth','verified'])
->name('statustransaction.index');

Route::get('/status_transaction/detail/{id}', [App\Http\Controllers\StatusTransactionController::class,'show'])
->middleware(['auth','verified'])
->name('statustransaction.detail');

//Gallery ADMIN

Route::get('/admin/gallery', [App\Http\Controllers\Admin\GalleryAdminController::class,'index'])
->middleware(['auth','admin'])
->name('gallery.admin');

Route::get('/admin/gallery/create', [App\Http\Controllers\Admin\GalleryAdminController::class,'create'])
->middleware(['auth','admin'])
->name('galleryadmin.create');

Route::post('/admin/gallery/store', [App\Http\Controllers\Admin\GalleryAdminController::class,'store'])
->middleware(['auth','admin'])
->name('galleryadmin.store');

Route::get('/admin/gallery/edit/{id}', [App\Http\Controllers\Admin\GalleryAdminController::class,'edit'])
->middleware(['auth','admin'])
->name('galleryadmin.edit');

Route::put('/admin/gallery/update/{id}', [App\Http\Controllers\Admin\GalleryAdminController::class,'update'])
->middleware(['auth','admin'])
->name('galleryadmin.update');

Route::delete('/admin/gallery/delete/{id}', [App\Http\Controllers\Admin\GalleryAdminController::class,'destroy'])
->middleware(['auth','admin'])
->name('galleryadmin.delete');

//Checkout
Route::post('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'process'])
->middleware(['auth','verified'])
->name('checkout.process');
Route::get('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'index'])
->middleware(['auth','verified'])
->name('checkout');
Route::post('/checkout/create/{detail_id}', [App\Http\Controllers\CheckoutController::class, 'create'])
->middleware(['auth','verified'])
->name('checkout.create');
Route::get('/checkout/remove/{detail_id}', [App\Http\Controllers\CheckoutController::class, 'remove'])
->middleware(['auth','verified'])
->name('checkout.remove');
Route::get('/checkout/confirm/{id}', [App\Http\Controllers\CheckoutController::class, 'success'])
->middleware(['auth','verified'])
->name('checkout.success');
Route::get('/checkout/cancel/{id}', [App\Http\Controllers\CheckoutController::class, 'cancel'])
->middleware(['auth','verified'])
->name('checkout.cancel');

Route::get('/berita', [App\Http\Controllers\BeritaController::class,'index'])
->name('berita');

//detailberita
Route::get('/berita/detailberita/{id}', [App\Http\Controllers\DetailBeritaController::class,'index'])
->name('detailberita');

//Admin
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class,'index'])
->middleware(['auth','admin'])
->name('admin');

Route::get('/filter', [App\Http\Controllers\Admin\DashboardController::class,'filter_transaction'])
->middleware(['auth','admin'])
->name('dashboard.filter');

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

//TravelPackage Admin

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

//ADMIN News
Route::get('/admin/news', [App\Http\Controllers\Admin\NewsController::class,'index'])
->middleware(['auth','admin'])
->name('news.index');

Route::get('/admin/news/create', [App\Http\Controllers\Admin\NewsController::class,'create'])
->middleware(['auth','admin'])
->name('news.create');

Route::post('/admin/news/store', [App\Http\Controllers\Admin\NewsController::class,'store'])
->middleware(['auth','admin'])
->name('news.store');

Route::get('/admin/news/edit/{id}', [App\Http\Controllers\Admin\NewsController::class,'edit'])
->middleware(['auth','admin'])
->name('news.edit');

Route::put('/admin/news/update/{id}', [App\Http\Controllers\Admin\NewsController::class,'update'])
->middleware(['auth','admin'])
->name('news.update');

Route::delete('/admin/news/delete/{id}', [App\Http\Controllers\Admin\NewsController::class,'destroy'])
->middleware(['auth','admin'])
->name('news.delete');

//ADMIN News Gallery
Route::get('/admin/gallerynews/index/', [App\Http\Controllers\Admin\GalleryNewsController::class,'index'])
->middleware(['auth','admin'])
->name('gallerynews.index');

Route::get('/admin/gallerynews/create', [App\Http\Controllers\Admin\GalleryNewsController::class,'create'])
->middleware(['auth','admin'])
->name('gallerynews.create');

Route::post('/admin/gallerynews/store', [App\Http\Controllers\Admin\GalleryNewsController::class,'store'])
->middleware(['auth','admin'])
->name('gallerynews.store');

Route::get('/admin/gallerynews/edit/{id}', [App\Http\Controllers\Admin\GalleryNewsController::class,'edit'])
->middleware(['auth','admin'])
->name('gallerynews.edit');

Route::put('/admin/gallerynews/update/{id}', [App\Http\Controllers\Admin\GalleryNewsController::class,'update'])
->middleware(['auth','admin'])
->name('gallerynews.update');

Route::delete('/admin/gallerynews/delete/{id}', [App\Http\Controllers\Admin\GalleryNewsController::class,'destroy'])
->middleware(['auth','admin'])
->name('gallerynews.delete');

//ADMIN Gallery Jejak Adventure


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


//Gallery Travel agent
Route::get('/travelagent/gallery', [App\Http\Controllers\TravelAgent\GalleryTravelController::class,'index'])
->middleware(['auth','travelagent'])
->name('gallery.index');

Route::get('/travelagent/gallery/create', [App\Http\Controllers\TravelAgent\GalleryTravelController::class,'create'])
->middleware(['auth','travelagent'])
->name('gallery.create');

Route::post('/travelagent/gallery/store', [App\Http\Controllers\TravelAgent\GalleryTravelController::class,'store'])
->middleware(['auth','travelagent'])
->name('gallery.store');

Route::get('/travelagent/gallery/edit/{id}', [App\Http\Controllers\TravelAgent\GalleryTravelController::class,'edit'])
->middleware(['auth','travelagent'])
->name('gallery.edit');

Route::put('/travelagent/gallery/update/{id}', [App\Http\Controllers\TravelAgent\GalleryTravelController::class,'update'])
->middleware(['auth','travelagent'])
->name('gallery.update');

Route::delete('/travelagent/gallery/delete/{id}', [App\Http\Controllers\TravelAgent\GalleryTravelController::class,'destroy'])
->middleware(['auth','travelagent'])
->name('gallery.delete');

//Transaction Travel Agent
Route::get('/travelagent/transaction/index', [App\Http\Controllers\TravelAgent\TransactionController::class,'index'])
->middleware(['auth','travelagent'])
->name('transaction.index');

Route::get('/travelagent/transaction/detail/{id}', [App\Http\Controllers\TravelAgent\TransactionController::class,'show'])
->middleware(['auth','travelagent'])
->name('transaction.detail');

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Midtrans
Route::post('/midtrans/callback', [App\Http\Controllers\MidtransController::class,'notificationHandler']);
Route::get('/midtrans/finish', [App\Http\Controllers\MidtransController::class,'finishRedirect']);
Route::get('/midtrans/unfinish', [App\Http\Controllers\MidtransController::class,'unfinishRedirect']);
Route::get('/midtrans/error', [App\Http\Controllers\MidtransController::class,'errorRedirect']);
