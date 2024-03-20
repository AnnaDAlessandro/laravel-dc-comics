<?php
use App\Http\Controllers\Backend\ComicsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ComicsController::class, 'index'])->name('homePage');


/*controller di resources*/
Route::resource('comics', ComicsController::class);