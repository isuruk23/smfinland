@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $Destination->title }}</h2>
    <p>{!! $Destination->description !!}</p>
    <p> <b>Type</b>
    @if ($Destination->type == 1)
        Hotel
    @elseif ($Destination->type == 2)
        Place
    @else
        Unknown Type
    @endif
</p>
    
    @if ($Destination->image1)
        <img src="{{ asset('public/storage/' . $Destination->image1) }}" alt="Image 1" style="max-width: 100px;">
    @endif
    
    @if ($Destination->image2)
        <img src="{{ asset('public/storage/' . $Destination->image2) }}" alt="Image 2" style="max-width: 100px;">
    @endif
    <div class="row my-3">
        <div class="col-3">
    <a href="{{ route('destinations.edit', $Destination->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('destinations.destroy', $Destination->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    </div>
    </div>
</div>
@endsection
