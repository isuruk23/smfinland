@extends('layouts.app')

@section('content')
    <h1>Day Tours</h1>
    <a href="{{ route('day_tours.create') }}" class="btn btn-primary">Create New Tour</a>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slogan</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->name }}</td>
                    <td>{{ $tour->slogan }}</td>
                    <td>{{ $tour->price }}</td>
                    <td>
                    <a href="{{ route('day_tours.show', $tour) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('day_tours_details.show', $tour) }}" class="btn btn-info btn-sm">Insert Details</a>
                        <a href="{{ route('day_tours.edit', $tour) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
