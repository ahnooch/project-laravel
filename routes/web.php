<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/service', [ServiceController::class, 'index']);
    Route::get('/service/add', [ServiceController::class, 'create']);
    Route::post('/service', [ServiceController::class, 'store'])->name('service.add');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::patch('/service/update', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service', [ServiceController::class, 'delete'])->name('service.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/client', [ClientController::class, 'index']);
    Route::get('/client/add', [ClientController::class, 'create']);
    Route::post('/client', [ClientController::class, 'store'])->name('client.add');
    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::patch('/client/update', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/client', [ClientController::class, 'delete'])->name('client.delete');
});
require __DIR__.'/auth.php';
