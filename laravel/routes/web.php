<?php

use App\Http\Controllers\FormRekam;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormRekamController;
use App\Http\Controllers\ListRekamController;
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

    Route::get('/form_rekam', [FormRekamController::class, 'showForm'])->name('form_rekam');
    Route::post('/form_rekam', [FormRekamController::class, 'submitForm']);


    Route::get('/list_rekam', [ListRekamController::class, 'showUsers'])->name('list_rekam');
    Route::get('/edit/{id}', [ListRekamController::class, 'edit'])->name('rekam.edit');
    Route::post('/update/{id}', [ListRekamController::class, 'update'])->name('rekam.update');
    Route::get('/delete/{id}', [ListRekamController::class,'delete'])->name('rekam.delete');
});

require __DIR__.'/auth.php';

