@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Destination</h2>
    <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <!-- Title Field -->
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
    @if ($errors->has('title'))
        <div class="text-danger">{{ $errors->first('title') }}</div>
    @endif
</div>

<div class="form-group">
    <!-- Description Field -->
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
    @if ($errors->has('description'))
        <div class="text-danger">{{ $errors->first('description') }}</div>
    @endif
</div>

<div class="form-group">
    <!-- Image1 Field -->
    <label for="image1">Image 1</label>
    <input type="file" name="image1" class="form-control">
    @if ($errors->has('image1'))
        <div class="text-danger">{{ $errors->first('image1') }}</div>
    @endif
</div>

<div class="form-group">
    <!-- Image2 Field -->
    <label for="image2">Image 2</label>
    <input type="file" name="image2" class="form-control">
    @if ($errors->has('image2'))
        <div class="text-danger">{{ $errors->first('image2') }}</div>
    @endif
</div>

<div class="form-group">
    <!-- Type Field -->
    <label for="type">Type</label>
    <select class="form-select" name="type" id="type">
        <option selected disabled>Select menu</option>
        <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Hotel</option>
        <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Place</option>
    </select>
    @if ($errors->has('type'))
        <div class="text-danger">{{ $errors->first('type') }}</div>
    @endif
</div>

<div class="form-group">
    <!-- City Field -->
    <label for="city">City</label>
    <select class="form-select" name="city" id="city">
        <option selected disabled>Select menu</option>
        <option value="1" {{ old('city') == '1' ? 'selected' : '' }}>Kandy</option>
        <option value="2" {{ old('city') == '2' ? 'selected' : '' }}>Trincomalee</option>
        <option value="3" {{ old('city') == '3' ? 'selected' : '' }}>Mirissa</option>
        <option value="4" {{ old('city') == '4' ? 'selected' : '' }}>Yala</option>
        <option value="5" {{ old('city') == '5' ? 'selected' : '' }}>Dambulla</option>
        <option value="6" {{ old('city') == '6' ? 'selected' : '' }}>Ella</option>
    </select>
    @if ($errors->has('city'))
        <div class="text-danger">{{ $errors->first('city') }}</div>
    @endif
</div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
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
