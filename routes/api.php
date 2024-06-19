<?php

use App\Http\Controllers\Api\KategoriGetController;
use App\Http\Controllers\Api\ProdukGetController;
use App\Http\Controllers\Api\TanamanGetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserGetController;
use App\Http\Controllers\Api\UserPostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    // api user
    Route::prefix('users')->group(function () {
        Route::get('/', [UserGetController::class, 'index'])->name('api/users');
        Route::get('/{id}', [UserGetController::class, 'show'])->name('api/users');
        // Route::post('/', [UserPostController::class, 'store'])->name('api/users/store');
    });

    // api tanaman
    Route::prefix('tanamans')->group(function () {
        Route::get('/', [TanamanGetController::class, 'index'])->name('api/tanamans');
        Route::get('/{id_tanaman}', [TanamanGetController::class, 'show'])->name('api/tanamans');
    });

    // api kategori
    Route::prefix('kategoris')->group(function () {
        Route::get('/', [KategoriGetController::class, 'index'])->name('api/kategoris');
        Route::get('/{id_kategori}', [KategoriGetController::class, 'show'])->name('api/kategoris');
    });

    // api produk
    Route::prefix('produks')->group(function () {
        Route::get('/', [ProdukGetController::class, 'index'])->name('api/produks');
        Route::get('/{id_produk}', [ProdukGetController::class, 'show'])->name('api/produks');
    });