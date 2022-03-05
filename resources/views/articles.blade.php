@extends('layouts.app')

@section('content')

<h1>Listes des Articles</h1>
@foreach ($posts as $post )
    <h3><a href="">{{ $post }}</a></h3>
@endforeach

@endsection
