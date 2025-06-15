<?php

use App\Http\Controllers\ColorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\LayerControler;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PresenceHistoryController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SablonHistoryContoller;
use App\Http\Controllers\SalaryHistoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TypeFabricController;
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

    Route::prefix('/Operational')->group(function () {
        // Supplier
        Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');

        // Fabric
        Route::get('/fabric', [FabricController::class, 'index'])->name('fabric');

        // Employee
        Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
    });

    Route::prefix('/Configuration')->group(function () {
        // picture
        Route::get('/picture', [PictureController::class, 'index'])->name('picture');

        // color
        Route::get('/color', [ColorController::class, 'index'])->name('color');

        // type-fabric
        Route::get('/type-fabric', [TypeFabricController::class, 'index'])->name('type-fabric');

        // layer
        Route::get('/layer', [LayerControler::class, 'index'])->name('layer');

        // price
        Route::get('/price', [PriceController::class, 'index'])->name('price');
    });


    Route::prefix('/Configuration')->group(function () {
         // sablon-history
        Route::get('/sablon-history', [SablonHistoryContoller::class, 'index'])->name('sablon-history');

        // presence-history
        Route::get('/presence-history', [PresenceHistoryController::class, 'index'])->name('presence-history');

        // salary-history
        Route::get('/salary-history', [SalaryHistoryController::class, 'index'])->name('salary-history');
    });
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
