<?php

use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [FilesController::class, 'index'])->name('index');
//Route::get('/{dir?}', [FilesController::class, 'directory'])->name('directory');

//Route::get('/directory/{dir?}', [FilesController::class, 'directory'])
//    ->where('path', '[a-zA-Z0-9/_-]+') // чтобы путь мог содержать слэши
//    ->name('directory');

Route::any('/directory/{dir?}', [FilesController::class, 'directory'])->where('dir', '.*')->name('directory');
