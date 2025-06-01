<x-app-layout>
    <div class="max-w-xl mx-auto mt-8">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="block mb-2">Seleccione una imagen:</label>
            <input type="file" name="imagen" class="block mb-4">

            <label class="block mb-2">Título del blog:</label>
            <input type="text" name="titulo" class="w-full mb-4 border p-2">

            <label class="block mb-2">Contenido:</label>
            <textarea name="contenido" class="w-full mb-4 border p-2"></textarea>

            <label class="block mb-2">Categoria:</label>
            <select name="category_id" class="w-full mb-4 border p-2" required>
                <option value="">Selecciona una categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Subir Post</button>
        </form>
        @if(session('success'))
            <div class="bg-green-400 text-center">
                <h1 class="text-green-700">{{session('success')}}</h1>
            </div>
        @endif
        
    </div>
</x-app-layout>