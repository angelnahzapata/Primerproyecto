<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');


Route::get('/hello', [HomeController::class, 'empresa']);

Route::get('contact', function(){
    $nombre = "Angel Nah Zapata";
    
    return view('contact', ['nombre'=>$nombre, 'carrera'=>'Desarrollo de Software']); })->name('contact');


Route::get('post/mensaje', [PostController::class, 'mensaje']);
Route::get('post/about/{param?}/{name}', [PostController::class, 'about']);
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');

