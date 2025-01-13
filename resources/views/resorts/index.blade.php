@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Resorts Details</h4>
                    <a href="{{ route('resort.create') }}" class="btn btn-primary">Add New Resorts Detail</a>
                </div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($resorts->isEmpty())
                        <p class="text-center">No Resorts details available.</p>
                    @else
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>resort</th>
                                    <th>summery</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resorts as $resort)
                                    <tr>
                                        <td>{{ $resort->id }}</td>
                                        <td>{{ $resort->resort }}</td>
                                        <td>{{ $resort->summery }}</td>                                      
                                        <td>
                                            @if($resort->image)
                                                <img src="{{ asset('public/storage/' . $resort->image) }}" alt="{{ $resort->resort }}" class="img-thumbnail" width="100">
                                            @else
                                                <span class="text-muted">No image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('resort.show', $resort->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('resort.edit', $resort->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('villas.show', $resort->id) }}" class="btn btn-warning btn-sm">Villa</a>
                                            <a href="{{ route('winedine.show', $resort->id) }}" class="btn btn-warning btn-sm">winedine</a>
                                            <a href="{{ route('facility.show', $resort->id) }}" class="btn btn-warning btn-sm">facility</a>
                                            <form action="{{ route('resort.destroy', $resort->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Resorts detail?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
    </div>
</div>
@endsection
