<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pagina;

class HomeController extends Controller
{

    public function empresa()
    {

    $datos["nombre"]="Angel NAh Zapata";
    $datos["fecha"]="26-15-15";
    $datos["actividad"]="Desarrollo de Software";
    $datos["descripcion_about"]="Empresa dedicada al desarrollo de software";
    $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";

    $usuarios=new Pagina();
    $datos["listadousuarios"]=$usuarios->ObtenerListado();
    return view('empresa', $datos);
    }
    }