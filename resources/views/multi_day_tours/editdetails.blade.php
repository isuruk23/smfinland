@extends('layouts.app')

@section('content')


    <div class="row">
      
        <div class="col-md-6">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('multiday_tours_details.update', $MultiDayTourDetails) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <!-- Day Field -->
                <label for="day">Day</label>
                <input type="number" name="day" id="day" class="form-control" value="{{ old('day', $MultiDayTourDetails->day ?? '') }}">
                @if ($errors->has('day'))
                    <div class="text-danger">{{ $errors->first('day') }}</div>
                @endif
            </div>

            <div class="form-group">
                <!-- Title Field -->
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $MultiDayTourDetails->title ?? '') }}">
                @if ($errors->has('title'))
                    <div class="text-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>

            <div class="form-group">
                <!-- Description Field with TinyMCE -->
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $MultiDayTourDetails->description ?? '') }}</textarea>
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
              
                <input type="hidden" name="tour_id" id="tour_id" class="form-control" value="{{ old('tour_id', $MultiDayTourDetails->id ?? '') }}">
            </div>

            <!-- Is Active Field -->
            <div class="form-group">
                <label for="is_active">Is Active</label>
                <input type="checkbox" name="is_active" id="is_active" value="1">
            </div>

            <button type="submit" class="btn btn-primary">
                Update Day Tour Details
            </button>
        </form>
        </div>
    </div>
    <!-- <a href="{{ route('multi_day_tours.index') }}" class="btn btn-secondary">Back</a> -->
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