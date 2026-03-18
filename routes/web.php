<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
Use App\Models\Pagina;
use App\Models\User;


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

//definimos el metodo para crear un nuevo registro
Route::get('nuevoregistro', function (){
    $pagina = new Pagina();
    $pagina->name='Jorge';
    $pagina->email='jorge@example.com';
    $pagina->email_verified_at=date('Y-m-d');
    $pagina->password='124456789';
    $pagina->avatar='avatar.png';
    $pagina->telefono='12355678902';
    $pagina->calle='64';
    $pagina->save();

    return $pagina;
});

//definimos el metodo para buscar por id para obtener unicamente un registro
Route::get('buscarpaginaid', function(){
    $post = Pagina::find(1);
    return $post;
});

//definimos el metdo para buscar por un campo determinado
Route::get('buscarxname', function(){
    $post = Pagina::where('name', 'Angel')->first();
    return $post;
});

//para recuperar más de un registro
Route::get('obtenertodos', function(){
    $post= Pagina::all();
    return $post;
});

//definimos el metodo para cambiar un registro
Route::get('updatename', function(){
    $post = Pagina::where('name', 'Angel')->first();
    $post->email='angel3@example.com';
    $post->save();
    return $post;
});

//definimos un metodo para obtener una lista conforma a un criterio determinado para obtener mas de un registro
Route::get('filter', function(){
    $post = Pagina::where('calle', 'like', '%89%')->orderBy("id", "desc")->get();
    return $post;
});

//para especificar unicamente los campos que queremos recuperar
Route::get('trescampos', function(){
    $post = Pagina::select('name', 'email', 'telefono')->get();
    return $post;
});

//conforme a una seleccion solamente traerme un cierto numero de registros
Route::get('filtroxnumreg', function(){
    $post = Pagina::select("name", "email")->orderBy("name")->take(2)->get();
    return $post;
});

//para eliminar un determinado registro
Route::get('eliminar_registro', function(){
    $post = Pagina::find(1);
    $post->delete();
    return "Eliminado";
});

//obtener la fecha conforme a un formato
Route::get('Obtenerfechaformato', function(){
    $post = Pagina::select("name","email", "created_at")->get(3);
    return $post;
});

//obtener el valor de is_active
Route::get('Obtenerestatus', function(){
    $post = Pagina::find(3);
    dd($post->is_active);
});

//El siguiente metodo se debe de llamar mediante un metodo de tipo request por ejemplo, utilizando ajax o postman
Route::put('/actualizar-dato/{id}', [HomeController::class, 'update'])->name('dato.update');

//definimos el metodo para desactivar un registro
Route::post('/desactivar-dato', [HomeController::class, 'desactivar'])->name('dato.desactivar');

//definimos el metodo para eliminar un registro
Route::post('/eliminar-dato', [HomeController::class, 'eliminar'])->name('dato.eliminar');