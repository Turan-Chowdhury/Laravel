@extends('template')

@section('content')
    <h5 class='text-center'>POST / New Record</h5>

    <form action="{{route('posts.update', $data->id)}}" method="post" class="container">
        @csrf
        @method('put')
        <p>Tittle : </p>
        <input type="text" name="title" value="{{$data->title}}">
        <p>Description : </p>
        <textarea name="description" id="" cols="30" rows="10">{{$data->description}}</textarea><br>
        <button type="submit">update</button>
        <br>
        <br>
        <a href="{{route('posts.index')}}">Back</a>
    </form>
    <br>

@endsection