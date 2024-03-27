<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MaskapaiController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[DefaultController::class, 'selection'])->name('home');


Route::middleware('auth', 'Admin')->group(function () {
    Route::get('/admin', [DefaultController::class, 'index'])->name('admin');
    Route::put('/users/{id}/update-role', [DefaultController::class, 'updateRole'])->name('update-role');

});

Route::middleware('auth', 'Maskapai')->group(function () {
    Route::get('/dashboardmaskapai', [MaskapaiController::class, 'index'])->name('home.maskapai');
    Route::get('/addflight', [TiketController::class, 'create'])->name('create.tiket');
    Route::post('/add', [TiketController::class, 'store'])->name('tiket.store');
    Route::get('/report', [LaporanController::class, 'index'])->name('report');
});

Route::middleware('auth', 'User')->group(function () {
    Route::get('/dashboard', [TiketController::class, 'index'])->name('home.user');
    Route::get('/cart/{tiketId}', [OrderController::class, 'create'])->name('order.tiket');
    Route::post('/order', [OrderController::class, 'store'])->name('order');
    Route::get('/transaksi', [OrderController::class, 'index'])->name('transaksi');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
