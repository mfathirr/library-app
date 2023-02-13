@extends('layouts.app')
@section('main')
<div class="container">
    <a href="{{ url("/book/create") }}" class="btn btn-primary float-end my-3">add</a>
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Pages</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($book as $item)
        <tr>
            <th>{{ $item->id }}</th>
            <td>{{ $item->title }}</td>
            <td>{{ $item->author }}</td>
            <td>{{ $item->pages }}</td>
            <td>
                <a href="" class="btn btn-warning">edit</a>
                <a href="" class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
