@extends('layouts.app')

@section('content')
    <h1>{{ $multiDayTour->name }}</h1>
    <p><strong>Slogan:</strong> {{ $multiDayTour->slogan }}</p>
    <p><strong>Summary:</strong> {{ $multiDayTour->summary }}</p>
    <p><strong>Description:</strong> {{ $multiDayTour->description }}</p>
    <p><strong>Days:</strong> {{ $multiDayTour->days }}</p>
    <p><strong>Nights:</strong> {{ $multiDayTour->nights }}</p>
    <p><strong>Price:</strong> {{ $multiDayTour->price }}</p>
    <p><strong>Start Date:</strong> {{ $multiDayTour->start_date }}</p>
    <p><strong>End Date:</strong> {{ $multiDayTour->end_date }}</p>
    @if ($multiDayTour->image)
        <p><img src="{{ asset('public/storage/' . $multiDayTour->image) }}" alt="{{ $multiDayTour->name }}" width="200"></p>
    @endif
    @if ($multiDayTour->banner_image)
        <p><img src="{{ asset('public/storage/' . $multiDayTour->banner_image) }}" alt="{{ $multiDayTour->name }}" width="200"></p>
    @endif
    <a href="{{ route('day_tours.index') }}" class="btn btn-secondary">Back</a>
@endsection
