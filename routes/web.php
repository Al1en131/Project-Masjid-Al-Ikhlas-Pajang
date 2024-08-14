<?php

use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMasjidController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\WifeController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::middleware(['auth', 'verified', 'role:user'])->group(function () {
    Route::get('/home/{user_id}/{resident_id}', [HomeController::class, 'home'])->name('home');
    // Pass both user_id and resident_id when needed
    Route::get('/user/create/{user_id}', [HomeController::class, 'create'])->name('user.create');
    Route::post('/user/store/{user_id}', [HomeController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [HomeController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [HomeController::class, 'update'])->name('user.update');
    Route::get('/user/{id}', [HomeController::class, 'show'])->name('user.show');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/resident', [ResidentController::class, 'index'])->name('admin.resident.index');
    Route::get('/resident/create', [ResidentController::class, 'create'])->name('admin.resident.create');
    Route::post('/resident', [ResidentController::class, 'store'])->name('admin.resident.store');
    Route::get('/resident/{id}/edit', [ResidentController::class, 'edit'])->name('admin.resident.edit');
    Route::put('/resident/{id}', [ResidentController::class, 'update'])->name('admin.resident.update');
    Route::get('/resident/{id}', [ResidentController::class, 'destroy'])->name('admin.resident.destroy');
    Route::get('/wife', [WifeController::class, 'index'])->name('admin.resident.wife');
    Route::get('/child', [ChildrenController::class, 'index'])->name('admin.resident.child');
    Route::get('/financial', [FinancialController::class, 'index'])->name('admin.financial.index');
    Route::get('/profilemasjid', [ProfileMasjidController::class, 'index'])->name('admin.profile.index');
    Route::get('profilemasjid/edit', [ProfileMasjidController::class, 'edit'])->name('admin.profile.edit');
    Route::put('profilemasjid/update', [ProfileMasjidController::class, 'update'])->name('admin.profile.update');
});


require __DIR__ . '/auth.php';
