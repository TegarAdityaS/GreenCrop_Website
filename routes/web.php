<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    // Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 
    //rute untuk kategori
    Route::get('/admin/kategori', [kategoriController::class, 'index'])->name('admin/kategori');
    Route::get('/admin/kategori/create', [kategoriController::class, 'create'])->name('admin/kategori/create');
    Route::post('/admin/kategori/store', [kategoriController::class, 'store'])->name('admin/kategori/store');
    Route::get('/admin/kategori/show/{id_kategori}', [kategoriController::class, 'show'])->name('admin/kategori/show');
    Route::get('/admin/kategori/edit/{id_kategori}', [kategoriController::class, 'edit'])->name('admin/kategori/edit');
    Route::put('/admin/kategori/edit/{id_kategori}', [kategoriController::class, 'update'])->name('admin/kategori/update');
    Route::delete('/admin/kategori/destroy/{id_kategori}', [kategoriController::class, 'destroy'])->name('admin/kategori/destroy');


    //rute untuk tanaman
    Route::get('/admin/tanaman', [TanamanController::class, 'index'])->name('admin/tanaman');
    Route::get('/admin/tanaman/create', [TanamanController::class, 'create'])->name('admin/tanaman/create');
    Route::post('/admin/tanaman/store', [TanamanController::class, 'store'])->name('admin/tanaman/store');
    Route::get('/admin/tanaman/show/{id_tanaman}', [TanamanController::class, 'show'])->name('admin/tanaman/show');
    Route::get('/admin/tanaman/edit/{id_tanaman}', [TanamanController::class, 'edit'])->name('admin/tanaman/edit');
    Route::put('/admin/tanaman/edit/{id_tanaman}', [TanamanController::class, 'update'])->name('admin/tanaman/update');
    Route::delete('/admin/tanaman/destroy/{id_tanaman}', [TanamanController::class, 'destroy'])->name('admin/tanaman/destroy');


    //rute untuk produk
    Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin/produk');
    Route::get('/admin/produk/create', [ProdukController::class, 'create'])->name('admin/produk/create');
    Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin/produk/store');
    Route::get('/admin/produk/show/{id_produk}', [ProdukController::class, 'show'])->name('admin/produk/show');
    Route::get('/admin/produk/edit/{id_produk}', [ProdukController::class, 'edit'])->name('admin/produk/edit');
    Route::put('/admin/produk/edit/{id_produk}', [ProdukController::class, 'update'])->name('admin/produk/update');
    Route::delete('/admin/produk/destroy/{id_produk}', [ProdukController::class, 'destroy'])->name('admin/produk/destroy');
});


Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/product', function () {
    return view('frontend.product');
});

Route::get('/deskripsi', function () {
    return view('frontend.deskripsi');
});