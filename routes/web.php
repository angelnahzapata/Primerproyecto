<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/hello', HomeController::class);

Route::get('post/mensaje', [PostController::class, 'mensaje']);
Route::get('post/about/{param?}/{name}', [PostController::class, 'about']);
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');