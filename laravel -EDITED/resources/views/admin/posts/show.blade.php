@extends('template')

@section('content')
    <h4 class='text-center'>POST / Show Record</h4>

    <div>
        <p>ID : {{$data->id}}</p>
        <p>TITLE : {{$data->title}}</p>
        <p>SLUG : {{$data->slug}}</p>
        <p>DESCRIPTION: {{$data->description}}</p>
    </div>

    <div>
        <h4>Comments</h4>

        @foreach($data->comments as $row)
            {{$row->comment}}
            <br>
        @endforeach
    </div>

@endsection