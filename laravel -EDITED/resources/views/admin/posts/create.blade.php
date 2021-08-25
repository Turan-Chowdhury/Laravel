@extends('template')

@section('content')
    <h5 class='text-center'>POST / New Record</h5>

    <form action="{{route('posts.store')}}" method="post" class="container">
        @csrf
        <p>Tittle : </p>
        <input type="text" name="title">
        <p>Description : </p>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">submit</button>
    </form>
    <br>

@endsection