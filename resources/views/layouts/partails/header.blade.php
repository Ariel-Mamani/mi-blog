<nav class="bg-blue-800 p-4">
            <div class="max-w-7xl mx-auto flex space-x-4">
                <a href="/" class="text-white hover:text-gray-400">Inicio</a>
                <a href="/login" class="text-white hover:text-gray-400">Login</a>
                <a href="/register" class="text-white hover:text-gray-400">Registrarse</a>
                <div class="relative group">
                <!--boton principal -->
                <button class="text-white hover:text-gray-400 focus:outline-none">
                    Categorías
                </button>
                
                <!--menu desplegable -->
                <ul class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform group-hover:translate-y-0 translate-y-1">
                    <li>
                        <a href="/category/index" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Index</a>
                    </li>
                    <li>
                        <a href="/category/edit/1" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Edit</a>
                    </li>
                    <li>
                        <a href="/category/show/1" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Show</a>
                    </li>
                    <li>
                        <a href="/category/create" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Create post</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>