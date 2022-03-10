@extends('layouts.app')

@section('content')

<h1>Listes des Articles</h1>

    <h3>{{ $post-> content }}</h3>
    <span>{{$post->image ? $post->image->path : "pas d'images"}}</span>

    {{-- @foreach ($post->comments as $comment)
    <span>{{$comment->content}}</span>
        
    @endforeach --}}
    {{-- @forelse ($post->comments as $comment)
    <span>{{$comment->content}} | creer le {{$comment->created_at}}</span>
    @empty
        <span>Aucun commentaire</span>
    @endforelse --}}

    @foreach ($post->tags as $tag )
        <span>{{$tag->name}}</span>
    @endforeach

@endsection

