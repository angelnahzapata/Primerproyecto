<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Models\Pagina;
use Illuminate\Support\Facades\DB;

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
    $datos["listadousuarios"] = $usuarios->ObtenerListado();
    return view('empresa', $datos);
    }

    public function update(Request $request) {
        $usuarios = new Pagina();
        $respuesta = $usuarios->BuscarId($request->id);
        if(!empty($respuesta)){
            $respuesta->name = $request->name;
            $respuesta->calle = $request->calle;
            $respuesta->save();
        }
        return $respuesta;
    }

    public function desactivar(Request $request) {
    $usuarios = new Pagina();
    $respuesta = $usuarios->BuscarId($request->id);
    if (!empty($respuesta)) {
        $respuesta->is_active = 0;
        $respuesta->save();
        return response()->json(['success' => true, 'mensaje' => 'Registro desactivado']);
    }
    return response()->json(['success' => false, 'mensaje' => 'Registro no encontrado'], 404);
}

public function eliminar(Request $request) {
    $usuarios = new Pagina();
    $respuesta = $usuarios->BuscarId($request->id);
    if (!empty($respuesta)) {
        $respuesta->delete();
        return response()->json(['success' => true, 'mensaje' => 'Registro eliminado']);
    }
    return response()->json(['success' => false, 'mensaje' => 'Registro no encontrado'], 404);
}



}