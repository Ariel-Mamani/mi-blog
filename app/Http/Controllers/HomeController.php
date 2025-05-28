<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    function getHome(){
        return view('home');
    }
    public function index()
    {
        $posts = Post::all(); 
        return view('home', compact('posts'));
    }
}
