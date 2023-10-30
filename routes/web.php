<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\ProfileController;

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
Route::get('/', [PublicController::class,'homepage'])->name ('homepage');

Route::middleware(['auth'])->group(function(){


    Route::get('perfume/create', [PerfumeController::class,'create'])->name ('perfume.create');

    Route::post('perfume/store', [PerfumeController::class,'store'])->name ('perfume.store');

    Route::get('perfume/index', [PerfumeController::class,'index'])->name ('perfume.index');

    Route::get('profile/index',[ProfileController::class,'index'])->name('profile.index');

    Route::get('perfume/show/{perfume}',[PerfumeController::class,'show'])->name('perfume.show');

    Route::get('perfume/edit/{perfume}',[PerfumeController::class,'edit'])->name('perfume.edit');

    Route::put('perfume/update/{perfume}',[PerfumeController::class,'update'])->name('perfume.update');

    Route::delete('perfume/delete/{perfume}',[PerfumeController::class,'destroy'])->name('perfume.delete');

});


