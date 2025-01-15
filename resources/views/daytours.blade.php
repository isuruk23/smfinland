@extends('layouts.web')   
 
@section('content')

<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style='background: url("public/storage/images/sri_lankan_vacation.avif") center center no-repeat;background-size: auto; background-size: cover;'>
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Day Tours</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Day Tours</li>
                        </ol>
                    </nav>
                   
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->

  <!-- ================ Explore section start ================= -->
  <section class="section-margin section-margin--small">
    <div class="container">
    <p class="text-center">Welcome to the beautiful emerald isle known as Sri 
Lanka! Let us greet you with a salutation of “Ayubowan” 
which means “May you live long and healthy” and offer 
you an exciting array of tours to enjoy and turn your 
vacation into a delight</p>
      <div class="row pb-4  my-3">
      @foreach ($tours as $tour)
    

        <div class="col-lg-3 mb-4 offer-card">
                             <div class="post-img-div">
                             @if ($tour->image)
                              <img class="card-img" src="{{ asset('public/storage/' .$tour->image) }}" alt="{{ $tour->name }}" class="img-fluid">
                              @else            
                                <img class="card-img" src="{{ asset('images/sample.png') }}" alt="" class="img-fluid">
                              @endif

							</div>
							<div class="description_content p-3 position-relative">
								<!-- <div class="type position-absolute"><br />
<b>Warning</b>:  Undefined array key "type" in <b>C:\xampp\htdocs\simpliflyfinland\daytour_packages.php</b> on line <b>65</b><br />
</div> -->
								<div class="star-rating rates text-warning">
									15 % OFF
								</div>
								<div class="resort">
									<h5 class="title mb-2 mt-2">
                  {{ $tour->name }}
									</h5>
								</div>
								<div class="row align-items-end mb-3">
									<div class="col-6 text-start">
										<div class="d-flex flex-column">
											<div class="start">Starting From</div>
											<div class="price text-danger">
												<del>€ {{ intval($tour->price) }} PP</del>
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
									<div class="col-6 text-end"> <a href="/day-tour/{{ $tour->slug }}/{{$tour->id}}/quote" class="btn btn-primary">Get
											a
											Quote</a>
									</div>
									<div class="col-6 text-start"><a class="btn btn-outline-primary" href="/day-tour/{{ $tour->slug }}/{{$tour->id}}">Explore
											More</a></div>
								</div>
						</div>

                        </div>
        @endforeach
        
      </div>
    </div>
  </section>
	<!-- ================ Explore section end ================= -->	




@endsection