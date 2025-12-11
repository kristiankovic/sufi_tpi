@extends('layout.app')

@section('header')
@endsection

@section('content')
    <div class="bg-gray-400 flex flex-col justify-center items-center mx-8 p-4">
        <table>
            <thead class="bg-gray-700 text-white">
                <th class="p-2" style="border: 1px solid black">Titulo</th>
                <th class="p-2" style="border: 1px solid black">Año de publicacion</th>
                <th class="p-2" style="border: 1px solid black">Autor</th>
                <th class="p-2" style="border: 1px solid black">Acciones</th>
            </thead>
            <tbody class="bg-white">
                @foreach ($libros as $libro)
                    <tr class="text-center border">
                        <td class="border p-2">{{ $libro->titulo }}</td>
                        <td class="border p-2">{{ $libro->anio_publicacion }}</td>
                        <td class="border p-2">{{ optional($libro->autor)->nombre }}</td>
                        <td>
                            <div class="flex flex-row p-2 gap-2">
                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST"
                                    onsubmit="return confirm('¿Seguro de eliminar este registro?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 text-white rounded-lg p-1" type="submit">
                                        Eliminar
                                    </button>
                                </form>

                                <a class="bg-blue-600 text-white rounded-lg p-1"
                                    href="{{ route('libros.edit', $libro->id) }}">Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
