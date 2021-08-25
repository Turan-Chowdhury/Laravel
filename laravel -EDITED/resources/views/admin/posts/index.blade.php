@extends('template')

@section('content')
    <h5 class='text-center'>POST | <a href="{{route('posts.create')}}">New Record</a></h5>

    <table border='1' class='table'>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        
        @foreach($data as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->slug}}</td>
                <td>{{$row->description}}</td>
                <td>
                    <a href="{{route('posts.show', $row->id)}}">show</a>
                    <a href="{{route('posts.edit', $row->id)}}">edit</a>
                    <form action="{{route('posts.destroy', $row->id)}}" method="post" onsubmit="confirm('Are you sure?')">
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection