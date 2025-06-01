<x-app-layout>
    <div class="max-w-4xl mx-auto mt-8 text-white">
        <h1 class="text-3xl font-bold mb-4 text-center">Mis Posts</h1>

        @forelse ($posts as $post)
            <div class="border-b border-black py-4 mb-6">
                <img src={{ $post->imagen }} alt={{ $post->titulo }} class="w-full h-64 object-cover mb-3 rounded-lg">
                <h2 class="text-xl font-semibold">{{ $post->titulo }}</h2>
                <p>{{ $post->contenido }}</p>
            </div>
        @empty
            <p>No has publicado ningun post todavia</p>
        @endforelse
    </div>
</x-app-layout>
