<?php

use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [FilesController::class, 'index'])->name('index');
Route::any('/directory/{dir?}', [FilesController::class, 'directory'])->where('dir', '.*')->name('directory');
