@extends('layouts.web')   
 
@section('content')
<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/destination_banner.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Place to Visit</h1>
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
  <!-- ================ end banner area ================= -->
<section class="blog_categorie_area destination">
      <div class="container">
      <div class="row">
      @foreach ($destinations as $destination)
      <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
            @if ($destination->image1)
              <img class="card-img" src="{{ asset('public/storage/' . $destination->image1) }}" alt="{{ $destination->name }}">
              @else            
                <img class="card-img" src="{{ asset('images/sample.png') }}" alt="">
              @endif
            </div>
            <div class="card-body">
               
                <h4 class="card-explore__title"><a href="/destination/{{ $destination->slug }}/{{$destination->id}}">{{ $destination->title }}</a></h4>
                
                <a class="card-explore__link" href="/destination/{{ $destination->slug }}/{{$destination->id}}">View More <i class="ti-arrow-right"></i></a>
              </div>
          </div>
        </div>

        
            
          
          @endforeach
          </div>
      </div>
  </section>

@endsection