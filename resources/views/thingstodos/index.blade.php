@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Things to do List</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('thingstodo.create') }}" class="btn btn-primary mb-3">Add New thingstodo</a>

    @if($thingstodos->isEmpty())
        <p>No thingstodos available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($thingstodos as $thingstodo)
                    <tr>
                        <td>{{ $thingstodo->id }}</td>
                        <td>{{ $thingstodo->title }}</td>
                        <td>{!! Str::limit($thingstodo->description, 200) !!}</td>
                        <td>{{ $thingstodo->type }}</td>
                        <td>
                            @if($thingstodo->image1)
                                <img src="{{ Storage::url($thingstodo->image1) }}" alt="Image 1" style="max-width: 50px;">
                            @endif
                        </td>
                        <td>
                            @if($thingstodo->image2)
                                <img src="{{ Storage::url($thingstodo->image2) }}" alt="Image 2" style="max-width: 50px;">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('thingstodo.show', $thingstodo->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('thingstodo.edit', $thingstodo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('thingstodo.destroy', $thingstodo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
