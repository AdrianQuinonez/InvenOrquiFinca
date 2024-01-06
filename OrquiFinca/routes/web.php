<?php

use App\Http\Controllers\FincaController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function () {

    Route::prefix('fincas')->controller(FincaController::class)->name('fincas.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
    });
    // Route::get('fincas', [FincaController::class, 'index'])->name('fincas.index');
    // Route::get('fincas/create', [FincaController::class, 'create'])->name('fincas.create');
    // Route::post('fincas', [FincaController::class, 'store'])->name('fincas.store');
    // Route::delete('fincas/{id}', [FincaController::class, 'destroy'])->name('fincas.destroy');
    // Route::get('fincas/{id}/edit', [FincaController::class, 'edit'])->name('fincas.edit');
    // Route::put('fincas/{id}', [FincaController::class, 'update'])->name('fincas.update');
});

Auth::routes();