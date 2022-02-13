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
Auth::routes(['verify' => true]);
Route::get('admin/login', [App\Http\Controllers\Auth\AdminAuthController::class, 'getLogin'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Auth\AdminAuthController::class, 'postLogin']);

Route::middleware('auth:admin')->group(function(){
    Route::get('admin/logout', [App\Http\Controllers\Auth\AdminAuthController::class,'postLogout'])->name('admin.logout');
Route::get('admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('administrator');
Route::get('/Admin/laporan', [App\Http\Controllers\Admin\LaporanController::class, 'index'])->name('laporan.index');
Route::resource('/Admin/produk', App\Http\Controllers\Admin\ProductController::class);
Route::resource('/Admin/transaksi', App\Http\Controllers\Admin\TransaksiController::class);
});

Route::get('/',[App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
Route::get('/contact',[App\Http\Controllers\User\ContactController::class, 'index'])->name('user.contact');

// Route::get('/contact',[App\Http\Controllers\User\ContactController::class, 'index'])->name('user.contact');
//product
Route::get('/product',[App\Http\Controllers\User\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[App\Http\Controllers\User\ProductController::class, 'create'])->name('product.create');
Route::get('/product/{product}',[App\Http\Controllers\User\ProductController::class, 'show'])->name('product.show');
Route::delete('/product/{product}',[App\Http\Controllers\User\ProductController::class, 'destroy'])->name('product.destroy');
// Route::delete('/product/{product}',[App\Http\Controllers\User\ProductController::class, 'update'])->name('product.update');
Route::put('/product/{product}/edit',[App\Http\Controllers\User\ProductController::class, 'edit'])->name('product.edit');
// Route::resource('/product', App\Http\Controllers\User\ProductController::class);
Route::middleware(['auth','verified'])->group(function(){
Route::post('/product',[App\Http\Controllers\User\ProductController::class, 'store'])->name('product.store');
Route::get('/cart',[App\Http\Controllers\User\ProfilController::class, 'cart'])->name('product.cart');
Route::post('/cart',[App\Http\Controllers\User\TransaksiController::class, 'store'])->name('transaksi.store');
Route::delete('/cart/{product}',[App\Http\Controllers\User\ProductController::class, 'destroy'])->name('product.cartdestroy');

Route::get('/profil',[App\Http\Controllers\User\ProfilController::class, 'index'])->name('profil.index');
route::post('/profil',[App\Http\Controllers\User\ProfilController::class, 'update'])->name('profil.update');
Route::get('/riwayat',[App\Http\Controllers\User\ProfilController::class, 'riwayat'])->name('profil.riwayat');
Route::post('/riwayat',[App\Http\Controllers\User\ProfilController::class, 'detail'])->name('profil.detail');
});

Route::get('/userhome', function () {
    return view('user.home');
});
Route::get('/home', function () {
    return redirect(route('user.home'));
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
