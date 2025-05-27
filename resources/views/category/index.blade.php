@extends('welcome')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Bienvenido al INDEX</h1>
    <p>Listado de Posts</p>
        @if(count($posts) > 0)
            <ul>
                @foreach($posts as $post)
                    <li>{{ $post->title }}</li>
                    <li><img src={{ $post->poster }} alt={{ $post->title }} ></li>
                    <li>{{ $post->content }}</li>
                @endforeach
            </ul>
        @else
        <p>NO HAY UNA CHOTA</p>
    @endif
@endsection