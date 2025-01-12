
    
	
@extends('layouts.web')   
 
@section('content')


        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner vh-100">
                    <div class="carousel-item vh-100 active">
                        <img src="{{ asset('public/storage/images/slider/slider1.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                    <div class="carousel-item vh-100">
                        <img src="{{ asset('public/storage/images/slider/slider2.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                    <div class="carousel-item vh-100">
                        <img src="{{ asset('public/storage/images/slider/slider3.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                    <div class="carousel-item vh-100">
                        <img src="{{ asset('public/storage/images/slider/slider4.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                    <div class="carousel-item vh-100">
                        <img src="{{ asset('public/storage/images/slider/slider5.avif') }}" class="d-block w-100" alt="Simplifly Finland">
                    </div>
                     <div class="carousel-item vh-100">
                        <img src="{{ asset('public/storage/images/slider/slider6.avif') }}" class="d-block w-100" alt="Simplifly Finland">
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



            <div class="container heading d-flex align-items-center justify-content-center vh-100">
                <div class="row">
                    <div class="col-12">
                        <h1>The Most Welcome Destination
                            In The World</h1>
                    </div>

                </div>
            </div>

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

                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/adaaran_club_rannalhi.avif"
                                                    alt="Adaaran Club Rannalhi" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=adaaran_club_rannalhi">
                                                            Adaaran Club Rannalhi</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    370</span>
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
                                                            href="resort-details.php?r=adaaran_club_rannalhi">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/adaaran_prestige_vadoo.avif"
                                                    alt="Adaaran Prestige Vadoo" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=adaaran_prestige_vadoo">
                                                            Adaaran Prestige Vadoo</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    479</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=2"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=adaaran_prestige_vadoo">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/adaaran_select_hudhuranfushi.avif"
                                                    alt="Adaaran Select Hudhuranfushi" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=adaaran_select_hudhuranfushi">
                                                            Adaaran Select Hudhuranfushi</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    225</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=3"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=adaaran_select_hudhuranfushi">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/adaaran_select_meedhupparu.avif"
                                                    alt="Adaaran Select Meedhupparu" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=adaaran_select_meedhupparu">
                                                            Adaaran Select Meedhupparu</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    239</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=4"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=adaaran_select_meedhupparu">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/arena_beach_hotel.avif"
                                                    alt="Arena Beach Hotel" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=arena_beach_hotel">
                                                            Arena Beach Hotel</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    160</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=46"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=arena_beach_hotel">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/bandos_maldives.avif"
                                                    alt="Bandos Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=bandos_maldives">
                                                            Bandos Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    125</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=34"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=bandos_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/baros_maldives.avif"
                                                    alt="Baros Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Premium Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=baros_maldives">
                                                            Baros Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    620</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=15"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=baros_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/canareef_resort_maldives.avif"
                                                    alt="Canareef Resort Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=canareef_resort_maldives">
                                                            Canareef Resort Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    235</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=17"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=canareef_resort_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/cinnamon_dhonveli_maldives.avif"
                                                    alt="Cinnamon Dhonveli Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=cinnamon_dhonveli_maldives">
                                                            Cinnamon Dhonveli Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    291</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=6"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=cinnamon_dhonveli_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/cinnamon_hakuraa_huraa_maldives.avif"
                                                    alt="Cinnamon Hakuraa Huraa Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=cinnamon_hakuraa_huraa_maldives">
                                                            Cinnamon Hakuraa Huraa Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    470</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=7"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=cinnamon_hakuraa_huraa_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/cinnamon_velifushi_maldives.avif"
                                                    alt="Cinnamon Velifushi Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=cinnamon_velifushi_maldives">
                                                            Cinnamon Velifushi Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    421</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=8"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=cinnamon_velifushi_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/crystal_sands.avif"
                                                    alt="Crystal Sands" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=crystal_sands">
                                                            Crystal Sands</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    142</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=45"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=crystal_sands">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/ellaidhoo_maldives_by_cinnamon.avif"
                                                    alt="Ellaidhoo Maldives by Cinnamon" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=ellaidhoo_maldives_by_cinnamon">
                                                            Ellaidhoo Maldives by Cinnamon</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    325</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=9"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=ellaidhoo_maldives_by_cinnamon">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/embudu_village.avif"
                                                    alt="Embudu Village" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=embudu_village">
                                                            Embudu Village</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    214</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=18"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=embudu_village">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/eriyadu_island_resort.avif"
                                                    alt="Eriyadu Island Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=eriyadu_island_resort">
                                                            Eriyadu Island Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    169</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=19"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=eriyadu_island_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/filitheyo_island_resort.avif"
                                                    alt="Filitheyo Island Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=filitheyo_island_resort">
                                                            Filitheyo Island Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    255</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=20"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=filitheyo_island_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/heritance_aarah.avif"
                                                    alt="Heritance Aarah" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Premium Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=heritance_aarah">
                                                            Heritance Aarah</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    410</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=5"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=heritance_aarah">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/holiday_inn_resort_kandooma_maldives.avif"
                                                    alt="Holiday Inn Resort Kandooma Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=holiday_inn_resort_kandooma_maldives">
                                                            Holiday Inn Resort Kandooma Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    270</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=21"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=holiday_inn_resort_kandooma_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/hondaafushi_island_resort.avif"
                                                    alt="Hondaafushi Island Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=hondaafushi_island_resort">
                                                            Hondaafushi Island Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    245</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=22"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=hondaafushi_island_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/hotel_riu_atoll.avif"
                                                    alt="Hotel Riu Atoll" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=hotel_riu_atoll">
                                                            Hotel Riu Atoll</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    255</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=27"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=hotel_riu_atoll">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/hotel_riu_palace_maldivas.avif"
                                                    alt="Hotel Riu Palace Maldivas" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=hotel_riu_palace_maldivas">
                                                            Hotel Riu Palace Maldivas</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    285</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=28"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=hotel_riu_palace_maldivas">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/hurawalhi_island_resort.avif"
                                                    alt="Hurawalhi Island Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=hurawalhi_island_resort">
                                                            Hurawalhi Island Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    440</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=23"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=hurawalhi_island_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/kaani_grand_seaview.avif"
                                                    alt="Kaani Grand Seaview" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=kaani_grand_seaview">
                                                            Kaani Grand Seaview</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    165</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=42"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=kaani_grand_seaview">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/kaani_palm_beach.avif"
                                                    alt="Kaani Palm Beach" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=kaani_palm_beach">
                                                            Kaani Palm Beach</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    120</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=44"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=kaani_palm_beach">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/kurumba_maldives.avif"
                                                    alt="Kurumba Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=kurumba_maldives">
                                                            Kurumba Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    220</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=24"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=kurumba_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/malahini_kuda_bandos_resort.avif"
                                                    alt="Malahini Kuda Bandos Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=malahini_kuda_bandos_resort">
                                                            Malahini Kuda Bandos Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    205</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=25"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=malahini_kuda_bandos_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/medhufushi_island_resort.avif"
                                                    alt="Medhufushi Island Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=medhufushi_island_resort">
                                                            Medhufushi Island Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    270</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=26"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=medhufushi_island_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/reethi_faru_resort.avif"
                                                    alt="Reethi Faru Resort" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=reethi_faru_resort">
                                                            Reethi Faru Resort</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    270</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=40"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=reethi_faru_resort">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/royal_island_resort___spa.avif"
                                                    alt="Royal Island Resort & Spa" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=royal_island_resort_&_spa">
                                                            Royal Island Resort & Spa</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    0</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=10"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=royal_island_resort_&_spa">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/sheraton_maldives_full_moon_resort___spa.avif"
                                                    alt="Sheraton Maldives Full Moon Resort & Spa" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=sheraton_maldives_full_moon_resort_&_spa">
                                                            Sheraton Maldives Full Moon Resort & Spa</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    330</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=29"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=sheraton_maldives_full_moon_resort_&_spa">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/summer_island_maldives.avif"
                                                    alt="Summer Island Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=summer_island_maldives">
                                                            Summer Island Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    205</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=30"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=summer_island_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/sun_siyam_iru_fushi.avif"
                                                    alt="Sun Siyam Iru Fushi" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=sun_siyam_iru_fushi">
                                                            Sun Siyam Iru Fushi</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    370</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=39"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=sun_siyam_iru_fushi">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/sun_siyam_iru_veli.avif"
                                                    alt="Sun Siyam Iru Veli" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=sun_siyam_iru_veli">
                                                            Sun Siyam Iru Veli</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    340</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=38"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=sun_siyam_iru_veli">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/sun_siyam_oluveli.avif"
                                                    alt="Sun Siyam Oluveli" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=sun_siyam_oluveli">
                                                            Sun Siyam Oluveli</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    295</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=37"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=sun_siyam_oluveli">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/sun_siyam_vilu_reef.avif"
                                                    alt="Sun Siyam Vilu Reef" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=sun_siyam_vilu_reef">
                                                            Sun Siyam Vilu Reef</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    370</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=36"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=sun_siyam_vilu_reef">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/taj_exotica_resort___spa.avif"
                                                    alt="Taj Exotica Resort & Spa" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=taj_exotica_resort_&_spa">
                                                            Taj Exotica Resort & Spa</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    355</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=31"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=taj_exotica_resort_&_spa">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/the_standard__huruvalhi_maldives.avif"
                                                    alt="The Standard, Huruvalhi Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=the_standard,_huruvalhi_maldives">
                                                            The Standard, Huruvalhi Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    355</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=32"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=the_standard,_huruvalhi_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/velana_beach_hotel_maldives.avif"
                                                    alt="Velana Beach Hotel Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=velana_beach_hotel_maldives">
                                                            Velana Beach Hotel Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    130</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=43"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=velana_beach_hotel_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/villa_haven_maldives.avif"
                                                    alt="Villa Haven Maldives" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Ultra Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=villa_haven_maldives">
                                                            Villa Haven Maldives</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    715</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=35"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=villa_haven_maldives">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/villa_nautica_paradise_island.avif"
                                                    alt="Villa Nautica Paradise Island" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Deluxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=villa_nautica_paradise_island">
                                                            Villa Nautica Paradise Island</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    270</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=11"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=villa_nautica_paradise_island">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


                                    
                                    <div class="swiper-slide">
                                        <article>
                                            <div class="post-img-div">
                                                <img src="assets/img/resort/villa_park_sun_island.avif"
                                                    alt="Villa Park Sun Island" class="img-fluid">
                                            </div>
                                            <div class="description_content p-3 position-relative">
                                                <div class="type position-absolute">Budget Luxe</div>
                                                <div class="star-rating rates">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>                                                </div>
                                                <div class="resort">
                                                    <h5 class="title mb-2 mt-2">
                                                        <a class="text-dark"
                                                            href="resort-details.php?r=villa_park_sun_island">
                                                            Villa Park Sun Island</a>
                                                    </h5>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 text-start">
                                                        <div class="d-flex flex-column">
                                                            <div class="start">Starting From</div>
                                                            <div class="price"><span class="text-big">USD
                                                                    205</span>
                                                                <span>PP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-6 text-end"><a href="quote.php?resort=12"
                                                            class="btn btn-primary">Get a
                                                            Quote</a>
                                                    </div>
                                                    <div class="col-6 text-start"><a class="btn btn-outline-primary"
                                                            href="resort-details.php?r=villa_park_sun_island">Explore
                                                            More</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>


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
                        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer>
                        </script>
                        <div class="elfsight-app-9f18fa42-ba3d-4dac-85a7-be242db040f2">
                        </div>
                    </div>
					
					
                                
                </div>
                </div>
            </div>
        </section>



   
    @endsection
    @section('script')
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.read-more').forEach(function (link) {
            link.addEventListener('click', function () {
                const $this = this; // Reference to the clicked element
                const shortReview = $this.previousElementSibling.previousElementSibling; // Short review span
                const fullReview = $this.previousElementSibling; // Full review span

                if (shortReview.classList.contains('d-none')) {
                    // Show short review, hide full review
                    shortReview.classList.remove('d-none');
                    fullReview.classList.add('d-none');
                    $this.textContent = 'Read more';
                } else {
                    // Show full review, hide short review
                    shortReview.classList.add('d-none');
                    fullReview.classList.remove('d-none');
                    $this.textContent = 'Read less';
                }
            });
        });
    });
</script>

@endsection