<!-- resources/views/blogs/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Blog</h2>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <!-- Title Field -->
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @if ($errors->has('title'))
                <div class="text-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="form-group">
            <!-- Summary Field -->
            <label for="summary">Summary</label>
            <textarea class="form-control" id="summary" name="summary">{{ old('summary') }}</textarea>
            @if ($errors->has('summary'))
                <div class="text-danger">{{ $errors->first('summary') }}</div>
            @endif
        </div>

        <div class="form-group">
            <!-- Description Field -->
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <div class="text-danger">{{ $errors->first('description') }}</div>
            @endif
        </div>

        <div class="form-group">
            <!-- Image Field -->
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($errors->has('image'))
                <div class="text-danger">{{ $errors->first('image') }}</div>
            @endif
        </div>

        <div class="form-group">
            <!-- Active Status Field -->
            <label for="is_active">Active</label>
            <select class="form-control" id="is_active" name="is_active">
                <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            @if ($errors->has('is_active'))
                <div class="text-danger">{{ $errors->first('is_active') }}</div>
            @endif
        </div>


        <button type="submit" class="btn btn-success mt-3">Create Blog</button>
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