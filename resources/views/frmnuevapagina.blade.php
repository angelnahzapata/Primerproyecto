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

@section('contenido_listado')
<div class="row">
    <div class="col-6">
        <form action="{{ route('pagina.nueva') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="calle" class="form-label">Calle</label>
                <input type="text" class="form-control" id="calle" name="calle" required>
            </div>
            <input type="hidden" value="{{ bcrypt('12345678') }}" name="password" id="password">
            <button type="submit" class="btn btn-primary">Crear Página</button>
        </form>  
    </div>
</div>
@endsection

@section('Autor')
<p>{{ $nombre }}</p>
@endsection
@section('actividad', $actividad)
@section('texto_ejemplo')
<p>{{ $texto_ejemplo }}</p>
@endsection