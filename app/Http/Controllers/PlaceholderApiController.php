<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceholderApiController extends Controller
{
    public function index(){
        $response=Http::get('https://jsonplaceholder.typicode.com/posts');

        return view('PlaceholderApi.index',[
            'data'=> $response->json()
        ]);
    }
}
