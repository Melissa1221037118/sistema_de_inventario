<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProveedorController;
use App\Http\Controllers\Admin\OrdenesCompraController;
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

    Route::resource('/productos',ProductController::class);
    Route::resource('/proveedores',ProveedorController::class);
    Route::resource('/ordenes',OrdenesCompraController::class);

});

require __DIR__.'/auth.php';
