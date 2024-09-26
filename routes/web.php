<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\GymsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MachinesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

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
    return view('home.index');
})->name('home.index');

 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/gyms', [GymsController::class, 'index'])->name('gyms.index');
Route::get('/food', [FoodController::class, 'index'])->name('food.index');
Route::get('/machine', [MachinesController::class, 'index'])->name('machine.index');
Route::get('/gyms/create', [GymsController::class, 'create'])->name('gyms.create');
Route::post('/gyms/store', [GymsController::class, 'store'])->name('gyms.store');