@extends('welcome')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Editar Post</h1>
    <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
    <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="mb-4 w-1/2">
    <p>{{ $post->content }}</p>
@endsection
