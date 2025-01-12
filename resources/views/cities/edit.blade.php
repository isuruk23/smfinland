@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit City Detail</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('cities.update', $city->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title Field -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $city->title }}" required>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" rows="4" class="form-control" required>{{ $city->description }}</textarea>
                        </div>

                        <!-- Image Upload Field -->
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image</label>
                            <input type="file" name="image1" id="image1" class="form-control">
                            @if($city->image1)
                                <img src="{{ asset('storage/' . $city->image1) }}" alt="{{ $city->title }}" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Update City Detail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
