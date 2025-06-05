@extends('layouts.master')

@section('title', 'Crear post')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Crear Post</h1>
@if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" style="background-color:green;color:black" role="alert">
    {{ session('success') }}
</div>
@endif
<!-- Mostrar errores de validación si los hay -->
@if ($errors->any())
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
    <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
    @csrf

    <div>
        <label class="block mb-2">Seleccione una imagen:</label>
        <input type="file" name="imagen" class="block mb-4">
    </div>

    <div>
        <label for="titulo" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Título del blog:</label>
        <input type="text" name="titulo" id="titulo"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-900 sm:text-sm" style="color:black">
    </div>
    <div>
        <label for="contenido" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Contenido</label>
        <textarea name="contenido" id="contenido" rows="5"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 sm:text-sm" style="color:black"></textarea>
    </div>

    <label class="block mb-2">Categoria:</label>
    <select name="category_id" class="w-full mb-4 border p-2" style="color:black" required>
        <option value="">Selecciona una categoria</option>
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>

    <div class="flex justify-between items-center">
        <button type="submit" style="background-color: dodgerblue"
            class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 transition duration-200">
            Crear Post
        </button>
    </div>
</form>
@endsection