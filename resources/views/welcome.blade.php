
    
	
@extends('layouts.web')   
 
@section('content')


        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner vh-100">
                <div class="carousel-item vh-100 active">
                        <img src="{{ asset('public/storage/images/slider/best_hotels_in_maldives.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                    
                    <div class="carousel-item vh-100">
                        <img src="{{ asset('public/storage/images/slider/sri_lankan_holiday.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                    
                </div>
                <!--button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button-->
            </div>



            <!-- <div class="container heading d-flex align-items-center justify-content-center vh-100">
                <div class="row">
                    <div class="col-12">
                        <h1>The Most Welcome Destination
                            In The World</h1>
                    </div>

                </div>
            </div> -->

        </section><!-- End Hero Section -->




        <!-- Testimonials Section - Home Page -->
        <section id="packages" class="packages">
        <div class="outer-block bg-gray">

            <div class="container">

                <div class="row align-items-center py-3">
                    <div class="col-12">
                        <div class="section-header">
                            <h2>Multiday Tour Packages <span class="line-sep">-</span> <span class="text-green">Sri
                                    Lanka</span></h2>
                        </div>


                        <!-- Slider main container -->
                        <div class="swiper swiper1">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->

                                @foreach ($multitours as $tour)
                                <div class="swiper-slide">
                                    <article>
                                        <div class="post-img-div">
                                          

                                                @if ($tour->image)
                                                <img class="card-img" src="{{ asset('public/storage/' .$tour->image) }}" alt="{{ $tour->name }}" class="img-fluid">
                                                @else            
                                                  <img class="card-img" src="{{ asset('public/images/sample.png') }}" alt="" class="img-fluid">
                                                @endif
                                        </div>
                                        <div class="description_content p-3 position-relative">
                                            <!-- <div class="type position-absolute"><br />
<b>Warning</b>:  Undefined array key "night" in <b>C:\xampp\htdocs\simpliflyfinland\index.php</b> on line <b>145</b><br />
N/10D</div> -->
                                            <div class="star-rating rates text-warning">
                                            {{$tour->discount}} % OFF
                                            </div>
                                            <div class="resort">
                                                <h5 class="title mb-2 mt-2">
                                                {{ $tour->name }}</a>
                                                </h5>
                                            </div>
                                            <div class="row align-items-end mb-3">
                                                <div class="col-6 text-start">
                                                    <div class="d-flex flex-column">
                                                        <div class="start">Starting From</div>
                                                        <div class="price text-danger">
                                                            <del>${{ intval($tour->price) }} PP</del>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-6 text-start">
                                                    <div class="price"><span class="text-big">USD
                                                    ${{ intval($tour->price-($tour->price*$tour->discount/100)) }}</span>
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
                                    </article>
                                </div>

                                @endforeach
                                
                                


                                                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div> -->

                            <!-- If we need scrollbar -->

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="outer-block bg-gray">

                <div class="container">

                    <div class="row align-items-center py-3">
                        <div class="col-12">
                            <div class="section-header">
                                <h2>Day Tour Packages <span class="line-sep">-</span> <span class="text-green">Sri
                                        Lanka</span></h2>
                            </div>


                            <!-- Slider main container -->
                            <div class="swiper swiper1">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->

                                    @foreach ($tours as $tour)
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                               
                                                    @if ($tour->image)
                                                    <img class="card-img" src="{{ asset('public/storage/' .$tour->image) }}" alt="{{ $tour->name }}" class="img-fluid">
                                                    @else            
                                                      <img class="card-img" src="{{ asset('images/sample.png') }}" alt="" class="img-fluid">
                                                    @endif
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <!-- <div class="type position-absolute"><br />
<b>Warning</b>:  Undefined array key "night" in <b>C:\xampp\htdocs\simpliflyfinland\index.php</b> on line <b>238</b><br />
N/<br />
<b>Warning</b>:  Undefined array key "days" in <b>C:\xampp\htdocs\simpliflyfinland\index.php</b> on line <b>238</b><br />
D</div> -->
                                                <div class="star-rating rates text-warning">
                                                {{$tour->discount}}% OFF
                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                    {{ $tour->name }}</a>
                                                    </h5>
                                                </div>
                                                <div class="row align-items-end mb-3">
                                                    <div class="col-6 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price text-danger">
                                                                <del>${{ intval($tour->price) }} PP</del>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-start">
                                                        <div class="price"><span class="text-big">USD
                                                        ${{ intval($tour->price-($tour->price*$tour->discount/100)) }} </span>
                                                            <span>PP</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-around align-items-center">
                                                    <div class="col-6 text-end"> <a href="/day-tour/{{ $tour->slug }}/{{$tour->id}}/quote"
                                                            class="btn btn-primary">Get
                                                            a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="/day-tour/{{ $tour->slug }}/{{$tour->id}}">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    @endforeach
                                    
                                    

                                    
                                    


                                                                    </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->

                                <!-- If we need scrollbar -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="outer-block bg-gray">
                <div class="container">

                    <div class="row align-items-center py-3">
                        <div class="col-12">
                            <div class="section-header">
                                <h2> Resort <span class="line-sep">-</span> <span
                                        class="text-green">Maldives</span></h2>
                            </div>

                            <!-- Slider main container -->
                            <div class="swiper swiper1">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->

                                    @foreach ($resorts as $resort) 
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                            @if ($resort->image)
                                                <img class="card-img" src="{{ asset('public/storage/' .$resort->image) }}" alt="{{ $resort->resort }}" class="img-fluid">
                                                @else            
                                                  <img class="card-img" src="{{ asset('public/images/sample.png') }}" alt="{{ $resort->resort }}" class="img-fluid">
                                                @endif
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">{{ $resort->category }}</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="/resort-details/{{ $resort->resort_alias }}/{{ $resort->id }}">
                                                            {{ $resort->resort }}</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                            {{ $resort->price }}</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=1"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="/resort-details/{{ $resort->resort_alias }}/{{ $resort->id }}">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach

                                    
                                   

                                    
                                    


                                                                    </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->

                                <!-- If we need scrollbar -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="outer-block travel-experience">
            <div class="container">
                    <div class="section-intro text-center pb-20px">
                    
                    <h2>Clients Review</h2>
                    <p>Simplifly team was available 24/7, ensuring every need was met and every query answered promptly. Even when faced with last-minute changes, they handled everything with professionalism and grace, ensuring our trip continued seamlessly. Simplifly Lanka (Pvt) Ltd doesn’t just plan trips; they create lifelong memories.</p>
                    </div>
					
					  <!-- Slider main container -->
                            
                      <div class="row">
                      <script src="https://static.elfsight.com/platform/platform.js" async></script>
                      <div class="elfsight-app-14a26058-f8b6-4071-b316-96f7ce3bd49b" data-elfsight-app-lazy></div>
                    </div>
					
					
                                
                </div>
                </div>
            </div>
        </section>



   
    @endsection
  
@section('script')

<script>
$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 100) {
            $(".header").addClass('header-scrolled');


            $(".logo-blue").css('display', 'block');
            $(".logo-white").css('display', 'none');


        } else {
            $(".header").removeClass('header-scrolled');
            $(".logo-white").css('display', 'block');
            $(".logo-blue").css('display', 'none');
        }
    });
});
</script>
<script>
var swiper = new Swiper('.swiper1', {
    speed: 600,
    slidesPerView: 3,
    slidesPerColumn: 1,
    spaceBetween: 30,
    parallax: true,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 2,
            spaceBetween: 30
        },

        // when window width is >= 768px
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },

        // when window width is >= 992px
        1100: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
});

// JS file of swiper-2

var swiper = new Swiper('.swiper2', {
    speed: 600,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
});
</script>
@endsection