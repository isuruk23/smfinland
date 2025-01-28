@extends('layouts.web')   
 
@section('content')

<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/holiday_package_in_sri_lanka.avif') }}) center center no-repeat;background-size: auto; background-size: cover;width: 100vw;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>MultiDay Tours</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">MultiDay Tours</li>
                        </ol>
                    </nav>
                    
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->

 





     <!-- ======= Speakers Section ======= -->
     <section id="offers">

<div class="offer-card-container padding-base">
    <div class="container">

        <div class="row">
            
        @foreach ($multitourspage as $tour)
            <div class="col-lg-3 mb-4 offer-card">
                 <div class="post-img-div">
               
            <div class="discount-tag"><span>{{ $tour->discount }}%<br>OFF</span></div>
                        @if ($tour->image)
                                                <img class="card-img" src="{{ asset('public/storage/' .$tour->image) }}" alt="{{ $tour->name }}" class="img-fluid">
                                                @else            
                                                  <img class="card-img" src="{{ asset('images/sample.png') }}" alt="" class="img-fluid">
                                                @endif
                </div>
                <div class="description_content p-3 position-relative">
                   
                    <!-- <div class="star-rating rates text-warning">
                    {{$tour->discount}} % OFF
                    </div> -->
                    <div class="resort">
                    <div class="type position-absolute">{{$tour->nights}} Nights</div>
                        <h3 class="title mb-2 mt-2">
                        {{ $tour->name }}</a>
                        </h3>
                    </div>
                    <div class="row align-items-end mb-3">
                        <div class="col-6 text-start">
                            <div class="d-flex flex-column">
                                <div class="start">Starting From</div>
                                <div class="price text-danger">
                                    <del>€ {{ intval($tour->price) }}  PP</del>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 text-start">
                            <div class="price"><span class="text-big">
                            € {{ intval($tour->price-($tour->price*$tour->discount/100)) }}</span>
                                <span>PP</span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around align-items-center">
                        <div class="col-6 text-end"> <a href="/multiday-tour/{{ $tour->slug }}/{{$tour->id}}/quote"
                                class="btn btn-primary">Get
                                a
                                Quote</a>
                        </div>
                        <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                href="/multiday-tour/{{ $tour->slug }}/{{$tour->id}}">Explore
                                More</a></div>
                    </div>
            </div>

            </div>
            
            @endforeach
            
        </div>
    </div>
</div>
</section><!-- End Speakers Section -->




@endsection