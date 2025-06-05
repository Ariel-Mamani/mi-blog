<nav class="bg-russian_violet p-4">

    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="hidden space-x-8 sm:-my-px sm:ms-1 sm:flex items-center text-xl">
            <!-- Logo -->
            <div class="flex items-center " style="width:10%">
                <a href="/">
                    <img src="{{ asset('img/logoTP3.png') }}" alt="Logo" class="drop-shadow-[0_0_4px_rgba(225,225,225,0.8)] hover:drop-shadow-[0_0_12px_rgba(255,255,255,1)] transition-all duration-300">
                </a>
            </div>
            <a href="/" class="text-white hover:text-mauve">Inicio</a>
            <!-- Categorías desplegable -->
            <div class="relative group ">
                <button class="text-white font-semibold  hover:text-mauve focus:outline-none text-xl">
                    Categorías
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-md  rounded">
                    <ul class="py-2">
                        @foreach ($navCategories as $categoria)
                        <li>
                            <a href="{{ route('publica.categoria', $categoria->id) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">
                                {{ $categoria->nombre }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex space-x-4 text-xl">
            <a href="/login" class="text-white hover:text-mauve">Login</a>
            <a href="/register" class="text-white hover:text-mauve">Registrarse</a>
        </div>
    </div>
</nav>