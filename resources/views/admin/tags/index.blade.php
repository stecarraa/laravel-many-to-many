@extends('layouts.app')
@section('title', 'Index')

@section('content')
    <div class="container-lg">
    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td><a href="{{route('admin.tags.show', $tag->id)}}">{{$tag->id}}</a></th>
                        <td>{{$tag->name}}</td>
                        <td>
                            <a href="{{route('admin.tags.edit',  $tag->id)}}">
                                <button type="button" class="btn btn-sm btn-success">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.tags.destroy', $tag->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('admin.tags.show',  $tag->id)}}">
                                <button type="button" class="btn btn-sm btn-primary">Show tag</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul>
        </ul>
    </div>
@endsection