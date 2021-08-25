@extends('template')

@section('content')
    <p>Home Page</p>

    <form action="form" method='post'>
         @csrf
        <input type="text" name="name" placeholder="your name"><br><br>
        <input type="email" name="email" placeholder="your email"><br><br>
        <button type="submit">submit</button>
    </form>

@endsection