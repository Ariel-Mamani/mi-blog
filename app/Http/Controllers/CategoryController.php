<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    //-------------------------- INDEX
    function  getIndex(){
        $posts = Post::all(); 
        return view('category.index', ['posts' => $posts]);
    }

    //-------------------------- SHOW
    function  getShow($id){
        $post = Post::findOrFail($id);
        return view('category.show', ['post' => $post]);
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
