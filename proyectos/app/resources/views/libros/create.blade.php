@extends('layout.app')

@section('header')
@endsection

@section('content')
    <div class="bg-gray-400 flex flex-col justify-center items-center mx-8 gap-3 p-4">

        <h2 class=""><strong>Ingreso de informacion para nuevo libro</strong></h2>

        <form class="grid grid-rows-4 gap-3" action="{{ route('libros.store') }}" method="POST">
            @csrf
            <div>
                <label for="titulo">Título</label>
                <input class="bg-white w-full p-1" type="text" name="titulo" id="titulo" required>
            </div>

            <div>
                <label for="anio_publicacion">Año de publicación</label>
                <input class="bg-white w-full p-1" type="number" name="anio_publicacion" id="anio_publicacion" required>
            </div>

            <div>
                <label for="autor">Autor</label>
                <select class="bg-white w-full p-1" name="autor_id" id="autor_id" required>
                    <option value="">Seleccione un autor</option>
                    @foreach ($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button class="bg-blue-700 text-white p-1.5 rounded-lg w-full" type="submit">Guardar</button>
            </div>
        </form>
    </div>
@endsection
