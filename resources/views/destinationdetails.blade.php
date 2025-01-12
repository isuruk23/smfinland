@extends('layouts.web')   
 
@section('content')
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/' . $destinations->image1) }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>{{$destinations->title}}</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$destinations->title}}</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
<section class="blog_categorie_area destination">
      <div class="container">
      <div class="row">
      {!!$destinations->description!!}
          </div>
      </div>
  </section>

@endsection