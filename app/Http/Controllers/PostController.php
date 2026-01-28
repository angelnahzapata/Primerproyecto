<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function mensaje()
    {
        return "Hola desde el controlador de Post";
    }


    public function About ($param=null,$nombre=null){
        $datos=['parametro'=>$param, 'nombre'=>$nombre];
        return view('about',$datos);
        //return view('about'), compact('param','nombre');
    }

    public function contacto(){
        return view('contacto',['mensaje'=>'Esto es un mensaje desde el controlador']);
    }
}


