@extends('layout.master')

@section('content')
    <a href="/categories/create"><button type="button" class="btn btn-default">New Category</button></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->type }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="/categories/{{ $category->id }}/edit"><button type="button" class="btn btn-info btn-xs">Edit</button></a>
                    <form method="post" action="/categories/{{ $category->id }}" style="display:inline-block;">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Sure?')">Delete</button></form></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection