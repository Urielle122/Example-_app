<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        return view('welcome', [
            'articles' => Post::all()
        ]);

    }

    public function show($id){
        return view('article',[
            'article' => Post::find($id)
        ]); 
    }
}
