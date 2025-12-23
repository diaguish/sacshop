<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
  // Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::view('/', 'home')->name('home');
    Route::view('/boutique', 'home')->name('shop.index');
    Route::view('/panier', 'home')->name('cart.index');
    Route::view('/profil', 'home')->name('profile');


require __DIR__.'/auth.php';
