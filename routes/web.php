<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminRuanganController;
use App\Http\Controllers\UserRuanganController;
use App\Http\Controllers\PeminjamanRuanganController;


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

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'is_admin'])->prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/edit', [AdminController::class, 'editProfile'])->name('admin.edit');
    Route::patch('/dashboard', [AdminController::class, 'updateProfile'])->name('admin.update');

    Route::get('/ruangan', [AdminRuanganController::class, 'ruangan'])->name('admin.ruangan');
    Route::get('/detail-ruangan/{id}', [AdminRuanganController::class, 'detailRuangan'])->name('admin.detail-ruangan');
    Route::get('/add-ruangan', [AdminRuanganController::class, 'addRuangan'])->name('admin.ruangan-add');
    Route::post('/store-ruangan', [AdminRuanganController::class, 'storeRuangan'])->name('admin.ruangan-store');
    Route::get('/edit-ruangan/{id}', [AdminRuanganController::class, 'editRuangan'])->name('admin.ruangan-edit');
    Route::post('/update-ruangan', [AdminRuanganController::class, 'updateRuangan'])->name('admin.ruangan-update');
    Route::get('/delete-ruangan/{id}', [AdminRuanganController::class, 'deleteRuangan'])->name('admin.ruangan-delete');

    Route::get('/peminjaman', [PeminjamanRuanganController::class, 'adminPeminjaman'])->name('admin.peminjaman');
    Route::post('/store-peminjaman', [PeminjamanRuanganController::class, 'adminStorePeminjaman'])->name('admin.store-peminjaman');
    Route::get('/approve-peminjaman/{id}', [PeminjamanRuanganController::class, 'approvalPeminjaman'])->name('admin.approve-peminjaman');
    Route::get('/delete-peminjaman/{id}', [PeminjamanRuanganController::class, 'adminDeletePeminjaman'])->name('admin.delete-peminjaman');
    Route::get('/pemohon', [PeminjamanRuanganController::class, 'adminPemohon'])->name('admin.pemohon');
});

Route::middleware(['auth'])->prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('user.index');
    Route::get('/edit', [UserController::class, 'editProfile'])->name('user.edit');
    Route::patch('/', [UserController::class, 'updateProfile'])->name('user.update');

    Route::get('/ruangan', [UserRuanganController::class, 'ruangan'])->name('user.ruangan');
    Route::get('/detail-ruangan/{id}', [UserRuanganController::class, 'detailRuangan'])->name('user.detail-ruangan');

    Route::get('/peminjaman', [PeminjamanRuanganController::class, 'userPeminjaman'])->name('user.peminjaman');
    Route::post('/store-peminjaman', [PeminjamanRuanganController::class, 'userStorePeminjaman'])->name('user.store-peminjaman');
    Route::get('/status-peminjaman', [PeminjamanRuanganController::class, 'statusPeminjaman'])->name('user.status-peminjaman');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

require __DIR__ . '/auth.php';
