@extends('layouts.app')
@section('main')
<div class="container">
    <a href="{{ url("/book/create") }}" class="btn btn-primary float-end my-3">add</a>
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Pages</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach ($book as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->author }}</td>
            <td>{{ $item->pages }}</td>
            <td>
                <form action="{{ url("/book/$item->id") }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ url("/book/$item->id/edit") }}" class="btn btn-warning">edit</a>
                    <button href="{{ url("/book/$item->id") }}" class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
