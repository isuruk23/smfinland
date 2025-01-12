public/public/@extends('layouts.web')   
 
@section('content')
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/place_banner.jpg') }}) center center no-repeat;background-size: auto; background-size: cover;">
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

  
<!-- ================ Place to visit section start ================= -->
<section class="section-margin my-4">
      <div class="container placetovisit">
          <div class="row">
        @foreach ($cities as $city)
          
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="city/{{ str_replace(' ', '_', strtolower($city->title)) }}">
            <div class="bottom-layer" style="background-image: url({{ asset('public/storage/' . $city->image1) }})">
              <div class="middle-layer">
            
                <div class="top-layer">
                  <p class="block-title">{{ $city->title }} </p>
                </div><!-- .top-layer -->
              </div><!-- .middle-layer -->
            </div><!-- .button-layer -->
            </a>
          </div>


          @endforeach
          
          
        </div>
      </div>
    </section>
    <!-- ================ Place to visit section end ================= --> 

@endsection