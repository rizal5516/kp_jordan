<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminRuanganController;


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
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/edit', [AdminController::class, 'editProfile'])->name('admin.edit');
    Route::patch('/', [AdminController::class, 'updateProfile'])->name('admin.update');
    Route::get('/ruangan', [AdminRuanganController::class, 'ruangan'])->name('admin.ruangan');
    Route::get('/detail-ruangan/{id}', [AdminRuanganController::class, 'detailRuangan'])->name('admin.detail-ruangan');
    Route::get('/add-ruangan', [AdminRuanganController::class, 'addRuangan'])->name('admin.ruangan-add');
    Route::post('/store-ruangan', [AdminRuanganController::class, 'storeRuangan'])->name('admin.ruangan-store');
    Route::get('/edit-ruangan/{id}', [AdminRuanganController::class, 'editRuangan'])->name('admin.ruangan-edit');
    Route::post('/update-ruangan', [AdminRuanganController::class, 'updateRuangan'])->name('admin.ruangan-update');
    Route::get('/delete-ruangan/{id}', [AdminRuanganController::class, 'deleteRuangan'])->name('admin.ruangan-delete');
    Route::get('/pemohon', [AdminController::class, 'pemohon'])->name('admin.pemohon');
    Route::get('/peminjaman', [AdminController::class, 'peminjaman'])->name('admin.peminjaman');
});

Route::middleware(['auth'])->prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('user.index');
    Route::get('/edit', [UserController::class, 'editProfile'])->name('user.edit');
    Route::patch('/', [UserController::class, 'updateProfile'])->name('user.update');
    Route::get('/ruangan', [UserController::class, 'ruangan'])->name('user.ruangan');
    Route::get('/user/add-ruangan', [UserController::class, 'addRuangan'])->name('user.ruangan-add');
    Route::get('/user/store-ruangan', [UserController::class, 'storeRuangan'])->name('user.ruangan-store');
    Route::get('/user/edit-ruangan', [UserController::class, 'editRuangan'])->name('user.ruangan-edit');
    Route::get('/peminjaman', [UserController::class, 'peminjaman'])->name('user.peminjaman');
    Route::get('/status-peminjaman', [UserController::class, 'statusPeminjaman'])->name('user.status-peminjaman');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

require __DIR__ . '/auth.php';
