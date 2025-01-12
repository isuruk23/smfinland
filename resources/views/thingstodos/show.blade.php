@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $thingstodo->title }}</h2>
    <p>{!! $thingstodo->description !!}</p>

    
    @if ($thingstodo->image)
        <img src="{{ Storage::url($thingstodo->image) }}" alt="Image 1" style="max-width: 100px;">
    @endif
    

    <a href="{{ route('thingstodo.edit', $thingstodo->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('thingstodo.destroy', $thingstodo->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection
