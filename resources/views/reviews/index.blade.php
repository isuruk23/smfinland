@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reviews</h1>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Add Review</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Position</th>
                <th>Review</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->name }}</td>
                <td>{{ $review->position }}</td>
                <td>{{ $review->review }}</td>
                <td>
                    @if($review->image)
                    <img src="{{ asset('public/storage/' . $review->image) }}" alt="{{ $review->name }}" width="50">
                    @endif
                </td>
                <td>{{ $review->is_active ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
