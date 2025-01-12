@extends('layouts.app')

@section('content')
    <h1>Create experience</h1>

   <div class="row">
    <div class="col-md-6">
    <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('experience.form')
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
    <div class="col-md-6">
        
    </div>
   </div>
@endsection
