<?php

use App\Http\Controllers\FincaController;
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

Route::get('fincas', [FincaController::class, 'index'])->name('fincas.index');

Route::get('fincas/create', [FincaController::class, 'create'])->name('fincas.create');

Route::post('fincas',[FincaController::class, 'store'])->name('fincas.store');

Route::delete('fincas/{id}', [FincaController::class, 'destroy'])->name('fincas.destroy');