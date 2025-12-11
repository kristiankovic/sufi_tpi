@extends('layout.app')

@section('header')

@endsection

@section('content')
    <div class="flex flex-row justify-center">
        <table>
            <thead>
                <th class="border p-2">Titulo</th>
                <th class="border p-2">Año de publicacion</th>
                <th class="border p-2">Acciones</th>
            </thead>
            <tbody>
                @foreach ($libros as $item)
                    <tr class="text-center border">
                        <td class="border p-2">{{ $item->titulo  }}</td>
                        <td class="border p-2">{{ $item->anio_publicacion  }}</td>
                        <td>
                            <div class="flex flex-row p-2 gap-2">
                                {{-- <form action="{{ route('libros.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white rounded-lg p-1">Eliminar</button>
                                </form> --}}

                                <a class="bg-red-600 text-white rounded-lg p-1" href="{{ route('libros.destroy', $item->id) }}">Eliminar</a>

                                <a class="bg-blue-600 text-white rounded-lg p-1" href="{{ route('libros.edit', $item->id) }}">Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection