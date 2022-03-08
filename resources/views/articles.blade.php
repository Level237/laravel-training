@extends('layouts.app')

@section('content')

<h1>Listes des Articles</h1>
    @if ($posts->count()>0)
        @foreach ($posts as $post )
            <h3><a href="{{route('posts.show',['id'=>$post->id])}}">{{ $post->title }}</a></h3>
        @endforeach

    @else
        <span>Aucune Données dans la base de données</span>
    @endif


@endsection
