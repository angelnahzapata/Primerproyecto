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
    Editar Página
@endsection

@section('subtitulo')
    Modificar registro existente
@endsection

@section('link1', 'Active')

@section('contenido_listado')
    <a href="{{ route('pagina.index') }}" class="btn btn-secondary mb-3">Volver al Listado</a>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('pagina.update', $paginas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $paginas->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $paginas->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $paginas->telefono }}" required>
                </div>
                <div class="mb-3">
                    <label for="calle" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="calle" name="calle" value="{{ $paginas->calle }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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