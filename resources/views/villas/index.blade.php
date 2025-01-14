@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Villa/Rooms Details</h4>
                  
                </div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                        @if($villaRooms->isEmpty())
                        <p class="text-center">No villaRooms details available.</p>
                        @else
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($villaRooms as $villaRoom)
                                        <tr>
                                            <td>{{ $villaRoom->id }}</td>
                                            <td>{{ $villaRoom->name }}</td>
                                            <td>{!! $villaRoom->description !!}</td>                                      
                                            <td>{{ $villaRoom->type }}</td>                                      
                                            <td>
                                                @if($villaRoom->image)
                                                    <img src="{{ asset('public/storage/' . $villaRoom->image) }}" alt="{{ $villaRoom->villaRoom }}" class="img-thumbnail" width="100">
                                                @else
                                                    <span class="text-muted">No image</span>
                                                @endif
                                            </td>
                                            <td>
                                               
                                            <a href="{{ route('villaedit', ['id' => $villaRoom->id, 'resortid' => $resortid]) }}" class="btn btn-warning btn-sm">Edit</a>

                                            
                                                <form action="{{ route('villas.destroy', $villaRoom->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this villaRooms detail?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        </div>
                        <div class="col-md-6">
                        @include('villas.form')
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.5.0/tinymce.min.js" integrity="sha512-KmEMNDKX2KDYPrBMr2MJj/JLgYK271k+P2341E5wvBMgepz1HS3wpc7r65hDXcp4Ul89omtSKIHxdk8VYHd9ug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#description',
    height: 200,
  });

  </script>
@endsection

