<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisheController as DisheController;
use App\Http\Controllers\DashBoardController as DashBoardController;
use App\Http\Controllers\OrderController as OrderController;
use App\Http\Controllers\RestaurantController as RestaurantController;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContattoRistoratore;
use App\Mail\ContattoUtente;
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

Route::get('/test', function () {
    Mail::to('aimanbello2001@gmail.com')->send(new ContattoRistoratore);
}); 

Route::get('/test2', function () {
    Mail::to('aimanbello2001@gmail.com')->send(new ContattoUtente);
});
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');
    Route::resource('/dish', DisheController::class);
    Route::resource('/order', OrderController::class);
});

Route::resource('/restaurants', RestaurantController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
