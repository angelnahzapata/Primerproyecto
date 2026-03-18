<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Pagina extends Model
{
    protected $table='paginas';

    protected function casts():array{
        return [
            'created_at' => 'datetime:d-m-Y',
            'is_active' => 'boolean',
        ];
    }

    protected function name():Attribute{
        return Attribute::make(
            set:function($value){//mutador
                return strtolower($value);
            },
            get:function($value){//accesor
                return ucfirst($value);
            }
        );
    }
    
    //definimos el metodo para obtener el listado de usuarios activos
    public function ObtenerListado(){
        $listadousuarios = Pagina::where('is_active', 1)->get();
        return $listadousuarios;
    }

    public function BuscarId($id)
    {
        $registro=Pagina::find($id);
        return $registro;
    }
}