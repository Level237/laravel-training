@extends('layouts.app')

@section('content')

<h1>Créer un nouveau Post</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)

        <div class="text-red-500">{{$error}}</div>
    @endforeach

@endif

<form  method="post" action="{{route('post.store')}}">
    @csrf
    <input type="text" name="title" class="border-gray-600 border-2">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <button type="submit" class="bg-green-500">Créer</button>

</form>

@endsection
