@extends('layout.app')

@section('header')

@endsection

@section('content')
    <div class="flex flex-row justify-center">
        <table>
            <thead>
                <th class="border p-2">Nombre</th>
                <th class="border p-2">Nacionalidad</th>
            </thead>
            <tbody>
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