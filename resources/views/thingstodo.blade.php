@extends('layouts.web')   
 
@section('content')
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/thingstodo_banner.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Things to do</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Place to Visit</li>
                        </ol>
                    </nav>
				</div>
			</div>
    </div>
	</section>
<section class="blog_categorie_area destination">
      <div class="container">
      <div class="row">
      @foreach ($thingstodos as $thingstodo)
      <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
            @if ($thingstodo->image)
              <img class="card-img" src="{{ asset('public/storage/' . $thingstodo->image) }}" alt="{{ $thingstodo->name }}">
              @else            
                <img class="card-img" src="{{ asset('images/sample.png') }}" alt="">
              @endif
            </div>
            <div class="card-body">
               
                <h4 class="card-explore__title"><a href="/thingstodo/{{ $thingstodo->slug }}/{{$thingstodo->id}}">{{ $thingstodo->title }}</a></h4>
                
                <a class="card-explore__link" href="/thingstodo/{{ $thingstodo->slug }}/{{$thingstodo->id}}">View More <i class="ti-arrow-right"></i></a>
              </div>
          </div>
        </div>

        
            
          
          @endforeach
          </div>
      </div>
  </section>

@endsection