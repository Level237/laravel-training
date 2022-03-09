<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    public function index(){

    $posts= Post::all();





        return view('articles',compact('posts'));
    }

    public function show($id){

    $post=Post::findOrFail($id);

        return view('article',compact('post'));

    }

    public function contact(){

        return view('contact');
    }

    public function create(){
        return view('form');
    }
    public function store(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        dd('post créer');
    }
}
