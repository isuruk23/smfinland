@extends('layouts.app')

@section('content')
    <h1>{{ $experience->name }}</h1>
    <p><strong>Summary:</strong> {{ $experience->summary }}</p>
    <p><strong>Description:</strong> {{ $experience->description }}</p>
 
    @if ($experience->image)
        <p><img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->name }}" width="200"></p>
    @endif
    <a href="{{ route('experience.index') }}" class="btn btn-secondary">Back</a>
@endsection
