@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Things to do</h2>
    <form action="{{ route('thingstodo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <label for="image1">Image 1</label>
            <input type="file" name="image" class="form-control">
        </div>
       
        
        <div class="form-group">
            <label for="city">City</label>
            <select class="form-select" name="city" id="city">
                <option selected>select menu</option>
                <option value="1">Kandy</option>
                <option value="2">Trincomalee</option>
                <option value="3">Mirissa</option>
                <option value="4">Yala</option>
                <option value="5">Dambulla</option>
                <option value="6">Ella</option>
                </select>
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
