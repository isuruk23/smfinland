@extends('layouts.app')

@section('content')
    <h1>Edit Experience</h1>

    <form action="{{ route('experience.update', $experience) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('experience.form', ['experience' => $experience])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
