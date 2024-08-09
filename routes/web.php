<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentController;
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
    Route::post('/user', [HomeController::class, 'store'])->name('user.store');
    Route::get('/user/create', [HomeController::class, 'create'])->name('user.create');


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
});


require __DIR__ . '/auth.php';
