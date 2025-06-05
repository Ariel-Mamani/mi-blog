<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 py-8">
        <div class="mb-8 text-gray-900">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-3xl font-bold text-gray-900 ">{{ $post->titulo }}</h1>
                <span>{{ $post->created_at->format('d M Y') }}</span>
            </div>
            
            @if($post->imagen)
                <div class="mb-8 rounded-lg overflow-hidden">
                    <img src="{{ asset($post->imagen) }}" alt="{{ $post->titulo }}" 
                        class="w-full h-auto max-h-96 object-cover">
                </div>
            @else
                <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 rounded-lg mb-8 flex items-center justify-center">
                    <span class="text-gray-900">Sin imagen</span>
                </div>
            @endif
        </div>

        <article class="prose dark:prose-invert max-w-none">
            <div class="text-gray-900 leading-relaxed space-y-4 text-lg">
                {!! nl2br(e($post->contenido)) !!}
            </div>
        </article>

        <div class="mt-8 text-pink-500 text-xl">
            <a href="{{ url()->previous() }}" 
            class="inline-flex items-center  hover:underline transition-transform duration-300 ease-in-out hover:translate-x-1 hover:text-pink-700">
                ← Volver atrás
            </a>
        </div>
    </div>
</x-app-layout>