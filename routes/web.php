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

Route::middleware('is_admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/edit', [AdminController::class, 'editProfile'])->name('admin.edit');
    Route::patch('/admin', [AdminController::class, 'updateProfile'])->name('admin.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/edit', [UserController::class, 'editProfile'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'updateProfile'])->name('user.update');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

require __DIR__ . '/auth.php';
