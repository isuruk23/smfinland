@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
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
                <p><img src="{{ asset('storage/' . $multiDayTour->image) }}" alt="{{ $multiDayTour->name }}" width="200"></p>
            @endif
        </div>
        <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Day</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($MultiDayTourDetails as $MultiDayTourDetail)
                <tr>
                <th>Day {{ $MultiDayTourDetail->day }}</th>
                <td>{{ $MultiDayTourDetail->title }}</td>
                <td>
          
                <a href="{{ route('multiday_tours_details.edit', $MultiDayTourDetail->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('multiday_tours_details.delete', $MultiDayTourDetail->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                </form></td>
                </tr>
            @endforeach
            </tbody>
            </table>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{  route('multiday_tours_details.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <div class="form-group">
                <!-- Day Field -->
                <label for="day">Day</label>
                <input type="number" name="day" id="day" class="form-control" value="{{ old('day') }}">
                @if ($errors->has('day'))
                    <div class="text-danger">{{ $errors->first('day') }}</div>
                @endif
            </div>

            <div class="form-group">
                <!-- Title Field -->
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <div class="text-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>

            <div class="form-group">
                <!-- Description Field with TinyMCE -->
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                @endif
            </div>

            <div class="form-group">
                <!-- Image1 Field -->
                <label for="image1">Image 1 (400px * 600px)</label>
                <input type="file" name="image1" id="image1" class="form-control">
                @if ($errors->has('image1'))
                    <div class="text-danger">{{ $errors->first('image1') }}</div>
                @endif
            </div>

            <div class="form-group">
                <!-- Image2 Field -->
                <label for="image2">Image 2 (400px * 600px)</label>
                <input type="file" name="image2" id="image2" class="form-control">
                @if ($errors->has('image2'))
                    <div class="text-danger">{{ $errors->first('image2') }}</div>
                @endif
            </div>


            <!-- Tour ID Field -->
            <div class="form-group">
              
                <input type="hidden" name="tour_id" id="tour_id" class="form-control" value="{{ old('tour_id', $multiDayTour->id ?? '') }}">
            </div>

            <!-- Is Active Field -->
            <div class="form-group">
                <label for="is_active">Is Active</label>
                <input type="checkbox" name="is_active" id="is_active" value="1">
            </div>

            <button type="submit" class="btn btn-primary">
                Create Day Tour Details
            </button>
        </form>
        </div>
    </div>
    <a href="{{ route('multi_day_tours.index') }}" class="btn btn-secondary">Back</a>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.5.0/tinymce.min.js" integrity="sha512-KmEMNDKX2KDYPrBMr2MJj/JLgYK271k+P2341E5wvBMgepz1HS3wpc7r65hDXcp4Ul89omtSKIHxdk8VYHd9ug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">

  tinymce.init({
    selector: '#description',
    height: 200,
    plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
  });
  
  </script>
@endsection