@extends('layouts.app')

@section('content')

<h1>Listes des Articles</h1>

    <h3>{{ $post-> content }}</h3>
    <span>{{$post->image ? $post->image->path : "pas d'images"}}</span>


    @forelse ($post->comments as $comment)
    <span>{{$comment->content}} | creer le {{$comment->created_at}}</span>
    @empty
        <span>Aucun commentaire</span>
    @endforelse

    @forelse ($post->tags as $tag )
        <span>{{$tag->name}}</span>
        @empty
        <span>Aucun tag pour ce post</span>
    @endforelse
    <hr>
    <span>Nom de l'artiste de l'image:{{$post->imageArtist->name}}</span>


@endsection

