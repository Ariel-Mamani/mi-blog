<x-app-layout>
    <x-slot name="header" class="text-center">
        <div class="dark:bg-gray-900 text-white p-6 
            border-4 border-gray-900 
            [box-shadow:5px_0_0_0_#212121,-5px_0_0_0_#212121,0_5px_0_0_#212121,0_-5px_0_0_#212121]">
            <h1 class=" text-xl md:text-3xl text-center mb-6 glitch-effect ">
            Bienvenido <span class="text-sky-400">{{ Auth::user()->name}}</span> a <span class="text-amethyst">DevNexus</span>
            </h1>
            <p class=" text-xl text-white text-center max-w-2xl mx-auto">
                <span class="animate-ping">< </span>Un espacio donde la <span class="text-amethyst">tecnología</span>, el <span class="text-amethyst">código</span> y el <span class="text-amethyst">diseño</span> se encuentran. Crea, comparte y aprende con la comunidad
                <span class="animate-ping">/></span>
            </p>
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
                    <span class="text-gray-500 dark:text-gray-400">Sin imagen</span>
                </div>
            @endif
            <div class="flex justify-between items-start mb-2"> 
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ $post->titulo }}</h2>
                <p class="text-gray-500 dark:text-gray-400">{{ $post->created_at->format('Y-m-d') }}</p>
            </div>
            <p class="text-gray-700 dark:text-gray-300 mb-4">{{ Str::limit($post->contenido, 500) }}</p>
        </div>
        @empty
            <p class="text-center text-gray-600 dark:text-gray-400">No has publicado ningún post todavía.</p>
        @endforelse
    </div>
    
</x-app-layout>
