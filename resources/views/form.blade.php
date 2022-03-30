@extends('layouts.app')

@section('content')

<h1>Créer un nouveau Post</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)

        <div class="text-red-500">{{$error}}</div>
    @endforeach

@endif

<form  method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" class="border-gray-600 border-2">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <label for="avatar">Choose a profile picture</label>
    <input type="file" name="avatar" id="avatar" accept="image/png,image/jpeg">
    <button type="submit" class="bg-green-500">Créer</button>

</form>

@endsection
