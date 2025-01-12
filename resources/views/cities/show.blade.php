@extends('layouts.app')

@section('content')
    <h1>{{ $tourDetail->title }}</h1>
    <p>{{ $tourDetail->description }}</p>
    @if($tourDetail->image1)
        <img src="{{ asset('storage/' . $tourDetail->image1) }}" alt="{{ $tourDetail->title }}">
    @endif
@endsection
