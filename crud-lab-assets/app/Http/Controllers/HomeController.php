<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();
        $data =[
            'posts'=>$posts
        ];

        return view('posts.index',$data);    
    }
}
