@extends('layouts.app')

@section('content')
    <h1>Multi-Day Tours</h1>
    <a href="{{ route('multi_day_tours.create') }}" class="btn btn-primary">Create New Tour</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slogan</th>
                <th>Days</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($mtours as $tour)
                <tr>
                    <td>{{ $tour->name }}</td>
                    <td>{{ $tour->slogan }}</td>
                    <td>{{ $tour->days }}</td>
                    <td>{{ $tour->price }}</td>
                    <td>
                    <a href="{{ route('multi_day_tours.show', $tour) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('multiday_tours_details.show', $tour) }}" class="btn btn-info btn-sm">Insert Details</a>
                    <a href="{{ route('multi_day_tours.edit', $tour) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('multi_day_tours.destroy', $tour->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
