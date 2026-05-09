@extends('layouts.base')
@section('titulo', 'Empresa E-commerce')
@push('css')
    <style>
        .fondo {
            background: #302886;
        }

        .img-responsive{
            width: 100%;
            height: 100%;
        }
    </style>
@endpush

@section('titulo')
    Bienvenido a la empresa de E-commerce
@endsection

@section('subtitulo')
    Explorando las oportunidades con laravel 12
@endsection

@section('link1', 'Active')

@section("contenido_listado")
<a href={{route('pagina.create')}}>Nueva Página</a>
<!-- genero un listado de los elementos otenidos de la consulta a la base de datos -->
<ul>
    @foreach($paginas as $pagina)
        <li> 
            <a href='{{route('pagina.detalle', $pagina->id)}}'> {{ $pagina->name }} </a> 
        </li>
    @endforeach
</ul>
{{ $paginas->links() }}
@endsection
@section('Autor')
<p> {{ $nombre }} </p>
@endsection
@section('actividad', $actividad)
@section('texto_ejemplo')
<p> {{ $texto_ejemplo }} </p>
@endsection
@section('contenido_listado')
    <h2> Listado de Usuarios Registrados </h2>
   <ul>
        @if(isset($listadousuarios))
        <table id = 'tablausuarios' class ="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Calle</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listadousuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->calle }}</td>
                    <td><button class='btn btn-primary' onclick="carga_modal({{$usuario->id}},'{{$usuario->name}}', '{{$usuario->calle}}')" data-id="{{ $usuario->id }}" data-nombre="{{ $usuario->name }}" data-calle="{{ $usuario->calle }}" data-toggle="modal" data-target="#myModal"><span class ='fa fa-pencil'></span></button>
                        <button class='btn btn-warning' onclick="desactivar({{$usuario->id}})"><span class='fa fa-eye-slash'></span></button>
                        <button class='btn btn-danger' onclick="eliminar({{$usuario->id}})"><span class='fa fa-trash'></span></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>La variable de listado de usuarios no está definida</p>
        @endif
    </ul>
@endsection