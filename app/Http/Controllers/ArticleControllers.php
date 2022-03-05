<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    public function index(){

        $posts=[
            'Mon super premier titre',
            'Mon super second titre'
        ];



        return view('articles',compact('posts'));
    }

    public function show($id){

        $posts=[
            1 => 'mon titre numéro 1',
            2 => 'mon titre numéro 2'
        ];
        $post=$posts[$id];

        return view('article',compact('post'));

    }
}
