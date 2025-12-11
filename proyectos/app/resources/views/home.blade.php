@extends('layout.app')

@section('header')
@endsection

@section('content')
    <div class="bg-gray-400 flex flex-col justify-center items-center mx-8 gap-3 p-2">
        <a class="bg-blue-700 text-white p-1.5 rounded-lg" href="{{ route('libros.create') }}">Agregar libro</a>       
    </div>
@endsection