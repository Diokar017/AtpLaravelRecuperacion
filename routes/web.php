<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' =>'tenistas'], function () {
    Route::get('/', [TenistaController::class, 'index'])->name('tenistas.index') ;
    Route::get('/create', [TenistaController::class, 'create'])->name('tenistas.create')->middleware('auth');
    Route::post('/', [TenistaController::class, 'store'])->name('tenistas.store')->middleware('auth');
    Route::get('/{tenista}', [TenistaController::class, 'show'])->name('tenistas.show')->middleware('auth');
    Route::get('/{tenista}/edit', [TenistaController::class, 'edit'])->name('tenistas.edit')->middleware('auth');
    Route::put('/{tenista}', [TenistaController::class, 'update'])->name('tenistas.update')->middleware('auth');
    Route::delete('/{tenista}', [TenistaController::class, 'destroy'])->name('tenistas.destroy')->middleware('auth');
});
Route::group(['prefix'=>'torneos'],function (){
    Route::get('/',[TorneoController::class,'index'])->name('torneos.index');
    Route::get('/create',[TorneoController::class,'create'])->name('torneos.create')->middleware('auth');
    Route::post('/',[TorneoController::class,'store'])->name('torneos.store')->middleware('auth');
    Route::get('/{torneo}',[TorneoController::class,'show'])->name('torneos.show');
    Route::get('/{torneo}/edit',[TorneoController::class,'edit'])->name('torneos.edit')->middleware('auth');
    Route::put('/{torneo}',[TorneoController::class,'update'])->name('torneos.update')->middleware('auth');
    Route::delete('/{torneo}',[TorneoController::class,'destroy'])->name('torneos.destroy')->middleware('auth');
});
Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::put('/', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('auth');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/create', 'SomeController@create')->name('create');
});



require __DIR__.'/auth.php';

