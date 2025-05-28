@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Bienvenido al HOME</h1>
    <p>Contenido de la pagina de inicio aca...</p>
    @foreach($posts as $post)
        <div class="mb-8 p-4  rounded-lg bg-sandy_brown list-none">
            <li>{{ $post->titulo }}</li>
            <li><img src={{ $post->imagen }} alt={{ $post->titulo }} class="w-full h-64 object-cover mb-3 rounded-lg"></li>
            <li>{{ $post->contenido }}</li>
        </div>
    @endforeach
@endsection