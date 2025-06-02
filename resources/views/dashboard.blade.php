<x-app-layout>
    <x-slot name="header" class="text-center">
        <div class="p-6 text-center">
            <h1 class="text-3xl text-persian_indigo font-bold">POSTS</h1>
        </div>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-amethyst overflow-hidden shadow-xl sm:rounded-lg p-5">
      
                @foreach($posts as $post)
                    <div class="mb-8 p-4  rounded-lg bg-persian_indigo list-none text-white">
                        <li><img src={{ $post->imagen }} alt={{ $post->titulo }} class="w-full h-64 object-cover mb-3 rounded-lg"></li>
                        <li>{{ $post->titulo }}</li>
                        <li>{{ $post->contenido }}</li>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
</x-app-layout>
