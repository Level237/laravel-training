<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    public function index(){

    $posts= Post::all();
    dd($posts);




        return view('articles',compact('posts'));
    }

    public function show($id){

        $posts=[
            1 => 'mon titre numéro 1',
            2 => 'mon titre numéro 2'
        ];
        $post=$posts[$id] ?? 'pas de titre';

        return view('article',compact('post'));

    }

    public function contact(){

        return view('contact');
    }
}
