<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('settings/profile', [Settings\ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [Settings\ProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('settings/profile', [Settings\ProfileController::class, 'destroy'])->name('settings.profile.destroy');
    Route::get('settings/password', [Settings\PasswordController::class, 'edit'])->name('settings.password.edit');
    Route::put('settings/password', [Settings\PasswordController::class, 'update'])->name('settings.password.update');
    Route::get('settings/appearance', [Settings\AppearanceController::class, 'edit'])->name('settings.appearance.edit');
});

// ingredienten
Route::get('ingredients/index', [IngredientController::class, 'index'])->name('ingredients.index');
Route::get('ingredients/create', [IngredientController::class, 'create'])->name('ingredients.create');
Route::post('ingredients/store', [IngredientController::class, 'store'])->name('ingredients.store');
Route::get('ingredients/edit/{id}', [IngredientController::class, 'edit'])->name('ingredients.edit');
Route::put('ingredients/update/{id}', [IngredientController::class, 'update'])->name('ingredients.update');
Route::delete('ingredients/destroy/{id}', [IngredientController::class, 'destroy'])->name('ingredients.destroy');

//Manager
Route::get('dishes/index', [DishController::class, 'index'])->name('dishes.index');
Route::get('dishes/show/{id}', [DishController::class, 'show'])->name('dishes.show');
Route::get('dishes/create', [DishController::class, 'create'])->name('dishes.create');
Route::post('dishes/store', [DishController::class, 'store'])->name('dishes.store');
Route::get('dishes/edit/{id}', [DishController::class, 'edit'])->name('dishes.edit');
Route::put('dishes/update/{id}', [DishController::class, 'update'])->name('dishes.update');
Route::delete('dishes/destroy/{id}', [DishController::class, 'destroy'])->name('dishes.destroy');

//consument
Route::get('orders/index', [OrderController::class, 'index'])->name('orders.index');
Route::get('orders/show/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::get('orders/order/{id}', [OrderController::class, 'edit'])->name('orders.order');

require __DIR__ . '/auth.php';
