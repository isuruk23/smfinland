<!-- resources/views/quote/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Quote Details</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $quote->name }}</p>
            <p><strong>Requested Date:</strong> {{ $quote->created_at }}</p>
            <p><strong>Country:</strong> {{ $quote->country }}</p>
            <p><strong>Number of Nights:</strong> {{ $quote->night }}</p>
            <p><strong>Adults:</strong> {{ $quote->adult }}</p>
            <p><strong>Children:</strong> {{ $quote->child }}</p>
            <p><strong>Contact No:</strong> {{ $quote->contactno }}</p>
            <p><strong>Email:</strong> {{ $quote->email }}</p>
            <p><strong>Resort:</strong> {{ $quote->resort }}</p>
            <p><strong>Villa:</strong> {{ $quote->villaname }}</p>
            <p><strong>Offer:</strong> {{ $quote->offertitle }}</p>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('quotes.edit', $quote->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
