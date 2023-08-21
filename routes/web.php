<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/admin/edit', [AdminController::class, 'editProfile'])->name('admin.edit');
    Route::patch('/admin', [AdminController::class, 'updateProfile'])->name('admin.update');
    Route::get('/admin/ruangan', [AdminController::class, 'ruangan'])->name('admin.ruangan');
    Route::get('/admin/add-ruangan', [AdminController::class, 'addRuangan'])->name('ruangan.add');
    Route::get('/admin/edit-ruangan', [AdminController::class, 'editRuangan'])->name('ruangan.edit');
    Route::get('/admin/pemohon', [AdminController::class, 'pemohon'])->name('admin.pemohon');
    Route::get('/admin/peminjaman', [AdminController::class, 'peminjaman'])->name('admin.peminjaman');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'dashboard'])->name('user.index');
    Route::get('/user/edit', [UserController::class, 'editProfile'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'updateProfile'])->name('user.update');
    Route::get('/user/ruangan', [UserController::class, 'ruangan'])->name('user.ruangan');
    Route::get('/user/add-ruangan', [UserController::class, 'addRuangan'])->name('ruangan.add');
    Route::get('/user/edit-ruangan', [UserController::class, 'editRuangan'])->name('ruangan.edit');
    Route::get('/user/peminjaman', [UserController::class, 'peminjaman'])->name('user.peminjaman');
    Route::get('/user/status-peminjaman', [UserController::class, 'statusPeminjaman'])->name('user.status-peminjaman');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

require __DIR__ . '/auth.php';
