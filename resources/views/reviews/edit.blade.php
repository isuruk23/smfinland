@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    <form action="{{ route('reviews.update', $review) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $review->name) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" value="{{ old('position', $review->position) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea class="form-control" name="review" required>{{ old('review', $review->review) }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
            @if($review->image)
                <div class="mt-2">
                    <img src="{{ asset('public/storage/' . $review->image) }}" alt="{{ $review->name }}" width="100">
                    <p class="text-muted">Current Image</p>
                </div>
            @endif
        </div>
        
        <div class="mb-3">
            <label for="is_active" class="form-label">Status</label>
            <select class="form-control" name="is_active" required>
                <option value="1" {{ $review->is_active ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$review->is_active ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Review</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
