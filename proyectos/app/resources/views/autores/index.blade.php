@extends('layout.app')

@section('header')

@endsection

@section('content')
    <div class="bg-gray-400 flex flex-col justify-center items-center mx-8 p-2">
        <table>
            <thead class="bg-gray-700 text-white">
                <th class="p-2" style="border: 1px solid black">Nombre</th>
                <th class="p-2" style="border: 1px solid black">Nacionalidad</th>
            </thead>
            <tbody class="bg-white">
                @foreach ($autores as $item)
                    <tr class="text-center border">
                        <td class="border p-2">{{ $item->nombre  }}</td>
                        <td class="border p-2">{{ $item->nacionalidad  }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection