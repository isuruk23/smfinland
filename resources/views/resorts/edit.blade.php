@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Resort Detail</h4>
                </div>
                <div class="card-body">
<form action="{{ route('resort.update', $resort) }}" method="POST" enctype="multipart/form-data">
    @csrf
   
        @method('PUT')
   


    @include('resorts.form')
     <!-- Submit Button -->
     <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">Update Resort Detail</button>
    </div>
</form>
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

