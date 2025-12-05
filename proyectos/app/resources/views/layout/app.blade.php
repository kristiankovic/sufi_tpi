<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header>
        @yield('header')
        <div class="bg-gray-800 text-white mx-2 my-2 flex flex-row justify-center gap-3">
            <a class="p-2" href="{{ route('home') }}">Inicio</a>
            <a class="p-2" href="{{ route('libros.index')  }}">Libros</a>
            <a class="p-2" href="{{ route('autores.index')  }}">Autores</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    <script src="vendor/livewire/livewire.js" data-csrf="{{ csrf_token()  }}" data-update-uri="{{ route("livewire.update") }}">
        
    </script>
</body>
</html>