@extends('layout.app')

@section('header')

@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <form action="{{ route('libros.update', $libro->id) }}" class="bg-amber-200 grid-cols-2">
            @csrf

            <div>
                <label for="titulo">Titulo del libro</label>
                <input class="bg-gray-200" type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}">
            </div>

            <div>
                <label for="anhio_publicacion">Año de publicacion</label>
                <input class="bg-gray-200" type="number" name="anio_publicacion" value="{{ $libro->anio_publicacion }}">
            </div>

            <div>
                <button class="bg-blue-500" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
@endsection