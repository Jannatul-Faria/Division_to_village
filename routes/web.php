<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DivisionController;

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

Route::prefix('divisions')->group(function(){
    Route::get('/view',[DivisionController::class, 'view'])->name('divisions.view');
    Route::get('/add', [DivisionController::class, 'add'])->name('divisions.add');
    Route::get('/show/{id}', [DivisionController::class, 'add'])->name('divisions.show');
    Route::post('/store',[DivisionController::class, 'store'])->name('divisions.store');
    Route::get('/edit/{id}',[DivisionController::class, 'edit'])->name('divisions.edit');
    Route::post('/update/{id}', [DivisionController::class, 'update'])->name('divisions.update');
    Route::get('/delete/{id}',[DivisionController::class, 'delete'])->name('divisions.delete');

});
Route::prefix('district')->group(function(){
    Route::get('/view',[DivisionController::class, 'view'])->name('district.view');
    Route::get('/add', [DivisionController::class, 'add'])->name('district.add');
    Route::post('/store',[DivisionController::class, 'store'])->name('district.store');
    Route::get('/edit/{id}',[DivisionController::class, 'edit'])->name('district.edit');
    Route::post('/update/{id}', [DivisionController::class, 'update'])->name('district.update');
    Route::get('/delete/{id}',[DivisionController::class, 'delete'])->name('district.delete');

});
Route::prefix('upazillas')->group(function(){
    Route::get('/view',[DivisionController::class, 'view'])->name('upazillas.view');
    Route::get('/add', [DivisionController::class, 'add'])->name('upazillas.add');
    Route::post('/store',[DivisionController::class, 'store'])->name('upazillas.store');
    Route::get('/edit/{id}',[DivisionController::class, 'edit'])->name('upazillas.edit');
    Route::post('/update/{id}', [DivisionController::class, 'update'])->name('upazillas.update');
    Route::get('/delete/{id}',[DivisionController::class, 'delete'])->name('upazillas.delete');

});
Route::prefix('unions')->group(function(){
    Route::get('/view',[DivisionController::class, 'view'])->name('unions.view');
    Route::get('/add', [DivisionController::class, 'add'])->name('unions.add');
    Route::post('/store',[DivisionController::class, 'store'])->name('unions.store');
    Route::get('/edit/{id}',[DivisionController::class, 'edit'])->name('unions.edit');
    Route::post('/update/{id}', [DivisionController::class, 'update'])->name('unions.update');
    Route::get('/delete/{id}',[DivisionController::class, 'delete'])->name('unions.delete');

});
Route::prefix('words')->group(function(){
    Route::get('/view',[DivisionController::class, 'view'])->name('words.view');
    Route::get('/add', [DivisionController::class, 'add'])->name('words.add');
    Route::post('/store',[DivisionController::class, 'store'])->name('words.store');
    Route::get('/edit/{id}',[DivisionController::class, 'edit'])->name('words.edit');
    Route::post('/update/{id}', [DivisionController::class, 'update'])->name('words.update');
    Route::get('/delete/{id}',[DivisionController::class, 'delete'])->name('words.delete');

});
Route::prefix('villages')->group(function(){
    Route::get('/view',[DivisionController::class, 'view'])->name('villages.view');
    Route::get('/add', [DivisionController::class, 'add'])->name('villages.add');
    Route::post('/store',[DivisionController::class, 'store'])->name('villages.store');
    Route::get('/edit/{id}',[DivisionController::class, 'edit'])->name('villages.edit');
    Route::post('/update/{id}', [DivisionController::class, 'update'])->name('villages.update');
    Route::get('/delete/{id}',[DivisionController::class, 'delete'])->name('villages.delete');

});

require __DIR__.'/auth.php';
