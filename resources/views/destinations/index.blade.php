@extends('layouts.app')

@section('content')
<div class="container">
    <h2>destinations List</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3">Add New destination</a>

    @if($destinations->isEmpty())
        <p>No destinations available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destinations as $destination)
                    <tr>
                        <td>{{ $destination->id }}</td>
                        <td>{{ $destination->title }}</td>
                        
                        <td>{{ $destination->type }}</td>
                        <td>
                            @if($destination->image1)
                                <img src="{{ asset('public/storage/' . $destination->image1) }}" alt="Image 1" style="max-width: 50px;">
                            @endif
                        </td>
                        <td>
                            @if($destination->image2)
                                <img src="{{ asset('public/storage/' . $destination->image2) }}" alt="Image 2" style="max-width: 50px;">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" style="display:inline;">
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
