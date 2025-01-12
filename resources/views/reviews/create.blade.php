@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Review</h1>
    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" required>
        </div>
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea class="form-control" name="review" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (200px * 200px)</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label for="is_active" class="form-label">Status</label>
            <select class="form-control" name="is_active" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Add Review</button>
    </form>
</div>
@endsection
