@extends('layouts.web')   
 
@section('content')

<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style='background: url("public/storage/images/maldives_holiday_packages.avif") center center no-repeat;background-size: auto; background-size: cover;width: 100vw;'>
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Family Resorts</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Family Resorts</li>
                        </ol>
                    </nav>
                   
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->

  <!-- ================ Explore section start ================= -->
  <section id="offers">
           
            <div class="offer-card-container padding-base">
                <div class="container">

                    <div class="row">
                    @foreach ($resorts as $resort)
                                                        <div class="col-lg-3 mb-4 offer-card">
                                   <div class="post-img-div">
                                                 @if ($resort->image)
                                                <img class="card-img" src="{{ asset('public/storage/' .$resort->image) }}" alt="{{ $resort->resort }}" class="img-fluid">
                                                @else            
                                                  <img class="card-img" src="{{ asset('public/images/sample.png') }}" alt="" class="img-fluid">
                                                @endif
                                               
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">{{ $resort->category }}</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h3 class="title mb-2 mt-2">
                                                        <a class="text-dark" href="/resort-details/{{ $resort->resort_alias }}/{{ $resort->id }}">
                                                        {{ $resort->resort }}</a>
                                                    </h3>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">€ 
                                                            {{ $resort->price }}</span>
                                                                <span>Per Person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="/resort/{{ $resort->resort_alias }}/{{$resort->id}}/quote" class="btn btn-primary">Book Now</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary" href="/resort-details/{{ $resort->resort_alias }}/{{ $resort->id }}">Explore
                                                            More</a></div>
                                                </div>
                                            </div>

                                </div>
                                @endforeach
                    </div>
                </div>
            </div>

        </section>


  




@endsection