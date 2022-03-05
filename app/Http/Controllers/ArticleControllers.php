<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    public function index(){

        return view('articles');
    }
}
