<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    //-------------------------- INDEX
    function  getIndex(){
        $posts = Post::all(); 
        return view('category.index', ['posts' => $posts]);
    }

    //-------------------------- SHOW
    // Muestra las diferentes categorias en el navigation
    public function show($id)
    {
        $categoria = Category::findOrFail($id);
        $posts = $categoria->posts; 
        return view('category.show', compact('categoria', 'posts'));
    }

    // Muestra las diferentes categorias en el header
    public function postsPorCategoria($id)
    {
        $categoria = Category::findOrFail($id);
        $posts = $categoria->posts()->where('habilitated', true)->get(); 
        return view('publica.posts_por_categoria', compact('categoria', 'posts'));
    }
    //-------------------------- CREATE
    function  getCreate(){
        return view('category.create');
    }

    //-------------------------- EDIT
    function  getEdit($id){
        $post = Post::findOrFail($id);
        return view('category.edit', ['post' => $post]);
    }
}
