@extends('layouts.app')

@section('content')

<h1>Listes des Articles</h1>

    <h3>{{ $post-> content }}</h3>

    {{-- @foreach ($post->comments as $comment)
    <span>{{$comment->content}}</span>
        
    @endforeach --}}
    @forelse ($post->comments as $comment)
    <span>{{$comment->content}} | creer le {{$comment->created_at}}</span>
    @empty
        <span>Aucun commentaire</span>
    @endforelse

@endsection

