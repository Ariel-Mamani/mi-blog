<x-app-layout>
    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-900 dark:text-gray-100">Mis Posts</h1>

        @forelse ($posts as $post)
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-6 mb-6 transition duration-200 hover:shadow-lg">
            @if($post->imagen)
            <img src="{{ asset($post->imagen) }}" alt="{{ $post->titulo }}" class="w-full h-64 object-cover rounded-lg mb-4">
            @else
            <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 flex items-center justify-center">
                <span class="text-gray-500 dark:text-gray-400">Sin imagen</span>
            </div>
            @endif
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $post->titulo }}</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-4">{{ Str::limit($post->contenido, 200) }}</p>
            <div class="flex space-x-4">
                <a href="{{ route('posts.edit', $post->id) }}" style="background-color: dodgerblue"
                    class="inline-block bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 dark:bg-gray-500 dark:hover:bg-gray-600 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-150">
                    Editar
                </a>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-600 dark:text-gray-400">No has publicado ningún post todavía.</p>
        @endforelse
    </div>
</x-app-layout>