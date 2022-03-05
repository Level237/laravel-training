<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    public function index(){

        $title="Mon super premier  Titre";
        $title2="Mon super second   Titre";

        return view('articles',compact('title','title2'));
    }
}
