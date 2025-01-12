@extends('layouts.web')   
 
@section('content')
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/' . $thingstodo->image) }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>{{$thingstodo->title}}</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$thingstodo->title}}</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
<section class="blog_categorie_area thingstodo">
      <div class="container">
      <div class="row">
      {!!$thingstodo->description!!}
          </div>
      </div>
  </section>

@endsection