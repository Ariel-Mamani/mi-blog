<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    //-------------------------- SHOW
    // Muestra las diferentes categorias en el navigation
    public function show($id)
    {
        $categoria = Category::findOrFail($id);
        $posts = $categoria->posts()->where('habilitated', true)->get(); 
        return view('category.show', compact('categoria', 'posts'));
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
