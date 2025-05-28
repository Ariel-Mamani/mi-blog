<x-app-layout>
    <x-slot name="header">
        <h1>AAAAAAAAAAAAAA</h1>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-saffron overflow-hidden shadow-sm sm:rounded-lg p-5">
                <div class="p-6 text-gray-900">
                    {{ __("Tu inicio!") }}
                </div>
                @foreach($posts as $post)
                    <div class="mb-8 p-4  rounded-lg bg-sandy_brown list-none">
                        <li>{{ $post->titulo }}</li>
                        <li><img src={{ $post->imagen }} alt={{ $post->titulo }} class="w-full h-64 object-cover mb-3 rounded-lg"></li>
                        <li>{{ $post->contenido }}</li>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
</x-app-layout>
<!-- footer -->
    @include('layouts.partials.footer')