@extends('layouts.plantilla')

@section('content')
    <h1 class="text-3xl text-persian_indigo font-bold text-center">
        Categoria: {{ $categoria->nombre }}
    </h1>

    <div class="max-w-4xl mx-auto mt-8">
        @if($posts->count())
            @foreach ($posts as $post)
                <div class="mb-4 p-4 bg-persian_indigo text-white rounded shadow">
                        <img src={{ $post->imagen }} alt={{ $post->titulo }} class="w-full h-64 object-cover mb-3 rounded-lg">
                        <h1>{{ $post->titulo }}</h1>
                        <div>
                            {{ $post->contenido }}
                        </div>
                </div>
            @endforeach
        @else
            <p>No hay posts en esta categoria.</p>
        @endif
    </div>
@endsection