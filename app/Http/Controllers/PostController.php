<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('habilitated', true)->latest()->get();
        return view('dashboard', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra todas las categorias en el formulario de creacion
     */
    public function create()
    {
        $categorias = Category::all();
        return view('posts.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     * Crea un registro de unn post
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'required|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = new Post();
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->user_id = auth()->id();
        $post->category_id = $request->category_id;
        $post->habilitated = true;

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('posters', 'public');
            $post->imagen = '/storage/' . $path;
        }
        $post->save();
        return redirect()->back()->with('success', 'Post creado correctamente');
    }

    // Muestra solo los post publicados por un usuario
    public function misPosts()
    {
        $posts = Post::where('user_id', auth()->id())->get();
        return view('posts.misposts', compact('posts'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function getEdit($id)
    {
        $post = Post::findOrFail($id);
        $categorias = Category::all();

        // Pasar el post a la vista
        return view('posts.edit', compact('post', 'categorias'));
        // return view('category.edit', ['id' => $id]);
    }


    // Funcion para ver el detalle de un Post
    public function verDetalle($id)
    {
        $post = Post::findOrFail($id);
        return view('layouts.detalle', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        // Buscar el post
        $post = Post::findOrFail($id);

        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->user_id = auth()->id();
        $post->category_id = $request->category_id;
        $post->habilitated = $request->has('habilitated');

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('posters', 'public');
            $post->imagen = '/storage/' . $path;
        }
        $post->update();

        // Redirigir a la lista de posts con un mensaje de éxito
        return redirect()->route('posts.edit', ['id' => $id])->with('success', 'Post actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
