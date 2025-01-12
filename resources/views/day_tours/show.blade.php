@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
        <h1>{{ $DayTour->name }}</h1>
        <p><strong>Slogan:</strong> {{ $DayTour->slogan }}</p>
        <p><strong>Summary:</strong> {{ $DayTour->summary }}</p>
        <p><strong>Description:</strong> {{ $DayTour->description }}</p>
        <p><strong>Price:</strong> {{ $DayTour->price }}</p>
        <p><strong>Start Date:</strong> {{ $DayTour->start_date }}</p>
        <p><strong>End Date:</strong> {{ $DayTour->end_date }}</p>
            @if ($DayTour->image)
           <p> <img src="{{ asset('public/storage/' . $DayTour->image) }}" alt="{{ $DayTour->name }}" width="200"></p>
            @endif
            @if ($DayTour->banner_image)
           <p> <img src="{{ asset('public/storage/' . $DayTour->banner_image) }}" alt="{{ $DayTour->name }}" width="200"></p>
            @endif
        <a href="{{ route('day_tours.index') }}" class="btn btn-secondary">Back</a>
        </div>
        <div class="col-md-6">
            <h2>Tour Details</h2>
        </div>
    </div>
@endsection
