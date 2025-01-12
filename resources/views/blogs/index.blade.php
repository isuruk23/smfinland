
<!-- resources/views/blogs/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Blogs</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Summary</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->summary }}</td>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('public/storage/' . $blog->image) }}" width="100" alt="Blog Image">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $blog->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
