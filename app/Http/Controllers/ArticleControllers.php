<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\Image;
use App\Models\Video;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\Storage;

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
        // $request->validate([
        //     'title'=>['required','min:5','max:255','unique:posts',new Uppercase],
        //     'content'=>'required'
        // ]);

        // Storage::disk('public')->put('avatars',$request->avatar);

        $filename=time() .'.'.$request->avatar->extension();

        $path= $request->file('avatar')->storeAs(
            'avatars',
            $filename,
            'public'
        );



        $post= Post::create([
            'title'=> $request->title,
            'content'=> $request->content
        ]);

        $image=new Image();
        $image->path=$path;

        $post->image()->save($image);

        dd('post créer');
    }

    public function register(){

        $post=Post::find(11);
        $video=Video::find(1);

        $comment1=new comment(['content'=>'mon premier commentaire']);
        $comment2=new comment(['content'=>'mon deuxieme commentaire']);
        $comment3=new comment(['content'=>'mon troisième commentaire']);

        $video->comments()->save($comment3);

        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

    }
}
