@extends('layouts.base')

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

@section('contenido_listado')
    <a href="{{ route('pagina.index') }}">Volver al Listado</a>
    <h1>{{ $paginas->id }}: {{ $paginas->name }}</h1>
    <p>Email: {{ $paginas->email }}</p>
    <p>{{ $paginas->calle }}</p>
    <a href="{{ route('pagina.edit', $paginas->id) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('pagina.delete', $paginas->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection

@section('titulo_modal', 'Detalle usuario')

@section('Autor')
    <p>{{ $nombre }}</p>
@endsection

@section('actividad', $actividad)

@section('texto_ejemplo')
    <p>{{ $texto_ejemplo }}</p>
@endsection