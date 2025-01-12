<!-- resources/views/quote/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Quote List</h2>
    
    <a href="{{ route('quotes.create') }}" class="btn btn-primary mb-3">Create New quote</a>

    <!-- Display any success or error messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- quotes Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Country</th>
                <th>Nights</th>
                <th>Tour</th>
                <th>Tour Type</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
                <tr>
                    <td>{{ $quote->name }}</td>
                    <td>{{ $quote->date }}</td>
                    <td>{{ $quote->country }}</td>
                    <td>{{ $quote->night }}</td>
                    <td>{{ $quote->tourid }}</td>
                    <td>{{ $quote->tourtype }}</td>
                    <td>{{ $quote->contactno }}</td>
                    <td>{{ $quote->email }}</td>
                    <td>
                        <a href="{{ route('quotes.edit', $quote->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this quote?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{ route('quotes.show', $quote->id) }}" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $quotes->links() }}
    </div>
</div>
@endsection
