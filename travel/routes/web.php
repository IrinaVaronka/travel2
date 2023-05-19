<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController as C;
use App\Http\Controllers\HotelController as H;
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


Route::prefix('countries')->name('countries-')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index');
    Route::get('/create', [C::class, 'create'])->name('create');
    Route::post('/create', [C::class, 'store'])->name('store');
    Route::get('/{country}', [C::class, 'show'])->name('show');
    Route::get('/edit/{country}', [C::class, 'edit'])->name('edit');
    Route::put('/edit/{country}', [C::class, 'update'])->name('update');
    Route::delete('/delete/{country}', [C::class, 'destroy'])->name('delete');
    });

    Route::prefix('hotels')->name('hotels-')->group(function () {
        Route::get('/', [H::class, 'index'])->name('index');
        Route::get('/create', [H::class, 'create'])->name('create');
        Route::post('/create', [H::class, 'store'])->name('store');
        Route::get('/{hotel}', [H::class, 'show'])->name('show');
        Route::get('/edit/{hotel}', [H::class, 'edit'])->name('edit');
        Route::put('/edit/{hotel}', [H::class, 'update'])->name('update');
        Route::delete('/delete/{hotel}', [H::class, 'destroy'])->name('delete');
        });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
