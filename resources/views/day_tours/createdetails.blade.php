@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
        <h1>{{ $DayTour->name }}</h1>
        <p><strong>Slogan:</strong> {{ $DayTour->slogan }}</p>
        <p><strong>Summary:</strong> {{ $DayTour->summary }}</p>
        <p><strong>Description:</strong> {{ $DayTour->description }}</p>
        <p><strong>Price:</strong> {{ $DayTour->price }}</p>
        <p><strong>Start Date:</strong> {{ $DayTour->start_date }}</p>
        <p><strong>End Date:</strong> {{ $DayTour->end_date }}</p>
            @if ($DayTour->image)
           <p> <img src="{{ asset('storage/' . $DayTour->image) }}" alt="{{ $DayTour->name }}" width="200"></p>
            @endif
            <a href="{{ route('day_tours.index') }}" class="btn btn-secondary">Back</a>
            </div>
        <div class="col-md-6">
            <h2>Tour Details</h2>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ isset($DayTourDetails) ? route('day_tours_details.update', $DayTourDetails->id) : route('day_tours_details.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($DayTourDetails))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="highlight" class="form-label">Highlight</label>
                <textarea name="highlight"  id="highlight" class="form-control" >{{ old('highlight', $DayTourDetails->highlight ?? '') }}</textarea>
                @if ($errors->has('highlight'))
                    <div class="text-danger">{{ $errors->first('highlight') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="itinerary" class="form-label">Itinerary</label>
                <textarea name="itinerary"  id="itinerary" class="form-control" >{{ old('itinerary', $DayTourDetails->itinerary ?? '') }}</textarea>
                @if ($errors->has('itinerary'))
                    <div class="text-danger">{{ $errors->first('itinerary') }}</div>
                @endif
              </div>
            <div class="mb-3">
                <label for="includes" class="form-label"> Includes</label>
                <textarea name="includes" id="includes" class="form-control" >{{ old('includes', $DayTourDetails->includes ?? '') }}</textarea>
                @if ($errors->has('includes'))
                    <div class="text-danger">{{ $errors->first('includes') }}</div>
                @endif
              </div>
            <div class="mb-3">
                <label for="itinerary" class="form-label">Excludes</label>
                <textarea name="excludes" id="excludes" class="form-control" >{{ old('excludes', $DayTourDetails->excludes ?? '') }}</textarea>
                @if ($errors->has('excludes'))
                    <div class="text-danger">{{ $errors->first('excludes') }}</div>
                @endif
              </div>
            <div class="mb-3">
                <label for="conditions" class="form-label">Conditions </label>
                <textarea name="conditions" id="conditions" class="form-control" >{{ old('conditions', $DayTourDetails->conditions ?? '') }}</textarea>
                @if ($errors->has('conditions'))
                    <div class="text-danger">{{ $errors->first('conditions') }}</div>
                @endif
              </div>
            <div class="mb-3">
                <label for="important" class="form-label">Important</label>
                <textarea name="important" id="important" class="form-control" > {{ old('important', $DayTourDetails->important ?? '') }}</textarea>
                @if ($errors->has('important'))
                    <div class="text-danger">{{ $errors->first('important') }}</div>
                @endif
              </div>
            <input type="hidden" name="tour_id" value="{{ $DayTour->id }}">
            <button type="submit" class="btn btn-primary">{{ isset($DayTourDetails) ? 'Update' : 'Create' }} Day Tour</button>
            
        </form>
        </div>
    </div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.5.0/tinymce.min.js" integrity="sha512-KmEMNDKX2KDYPrBMr2MJj/JLgYK271k+P2341E5wvBMgepz1HS3wpc7r65hDXcp4Ul89omtSKIHxdk8VYHd9ug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    tinymce.init({
    selector: '#highlight',
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
  tinymce.init({
    selector: '#itinerary',
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
  tinymce.init({
    selector: '#includes',
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
  tinymce.init({
    selector: '#excludes',
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
  tinymce.init({
    selector: '#excludes',
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
  tinymce.init({
    selector: '#conditions',
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
  tinymce.init({
    selector: '#important',
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