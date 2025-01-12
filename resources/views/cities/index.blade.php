@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>City Details</h4>
                    <a href="{{ route('cities.create') }}" class="btn btn-primary">Add New City Detail</a>
                </div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($cities->isEmpty())
                        <p class="text-center">No City details available.</p>
                    @else
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cities as $CityDetail)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $CityDetail->title }}</td>
                                        <td>{{ Str::limit($CityDetail->description, 50) }}</td>
                                        <td>
                                            @if($CityDetail->image1)
                                                <img src="{{ asset('storage/' . $CityDetail->image1) }}" alt="{{ $CityDetail->title }}" class="img-thumbnail" width="100">
                                            @else
                                                <span class="text-muted">No image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('cities.show', $CityDetail->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('cities.edit', $CityDetail->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('cities.destroy', $CityDetail->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this City detail?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
    </div>
</div>
@endsection
