<x-app-layout>
    <x-slot name="header" >
        <div class="p-6 text-center">
            <h1 class="text-3xl text-persian_indigo font-bold">Categoria: {{ $categoria->nombre }}</h1>
        </div>
    </x-slot>

    <div class="max-w-5xl mx-auto mt-8">
        @forelse ($posts as $post)
        <div class="bg-white dark:bg-gray-800  dark:border-gray-700 rounded-lg shadow-md p-6 mb-6 transition duration-200 hover:shadow-lg">
            @if($post->imagen)
                <div class="-mx-6 -mt-6 mb-6"> 
                    <img src="{{ asset($post->imagen) }}" alt="{{ $post->titulo }}"     class="w-full h-64 object-cover rounded-t-lg"
                    >
                </div>
            @else
                <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-gray-500 dark:text-gray-400">
                        Sin imagen
                    </span>
                </div>
            @endif
            <div class="flex justify-between items-start mb-2"> 
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                    {{ $post->titulo }}
                </h2>
                <p class="text-gray-500 dark:text-gray-400">
                    {{ $post->created_at->format('Y-m-d') }}
                </p>
            </div>
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                {{ Str::limit($post->contenido, 500) }}
            </p>
            <div class="flex justify-center items-center hover:-translate-y-1 transition-transform duration-300">
                <a href="/inicio/detalle/{{$post->id}}" class="bg-pink-500 rounded-sm p-2  hover:bg-pink-700 cursor-pointer text-white" value="Ver mas">Ver mas</a>
            </div>
        </div>
        @empty
            <p class="text-center text-gray-600 dark:text-gray-400">
                No hay post de esta categoria.
            </p>
        @endforelse
    </div>
</x-app-layout>
