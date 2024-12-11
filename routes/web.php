<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('home');
});


// Catalogue 
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');
Route::get('/catalogue/create', [CatalogueController::class, 'create'])->name('catalogue.create');
Route::post('/catalogue', [CatalogueController::class, 'store'])->name('catalogue.store');
Route::get('/catalogue/{id}/edit', [CatalogueController::class, 'edit'])->name('catalogue.edit');
Route::put('/catalogue/{id}', [CatalogueController::class, 'update'])->name('catalogue.update');
Route::delete('/catalogue/{id}', [CatalogueController::class, 'destroy'])->name('catalogue.destroy');


// Distributor 
Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor.index');
Route::get('/distributor/create', [DistributorController::class, 'create'])->name('distributor.create');
Route::post('/distributor', [DistributorController::class, 'store'])->name('distributor.store');
Route::get('/distributor/{id}/edit', [DistributorController::class, 'edit'])->name('distributor.edit'); // Edit
Route::put('/distributor/{id}', [DistributorController::class, 'update'])->name('distributor.update'); // Update
Route::delete('/distributor/{id}', [DistributorController::class, 'destroy'])->name('distributor.destroy'); // Delete

// Upload 
Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('/uploads', [UploadController::class, 'show'])->name('upload.show');
