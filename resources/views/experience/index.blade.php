@extends('layouts.app')

@section('content')
    <h1>Experiences</h1>
    <a href="{{ route('experience.create') }}" class="btn btn-primary">Create New experience</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($experiences as $experience)
                <tr>
                    <td>{{ $experience->name }}</td>
                    <td>{{ $experience->description }}</td>
                    <td>
                        <a href="{{ route('experience.show', $experience) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('experience.edit', $experience) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
