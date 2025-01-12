@extends('layouts.web')   
 
@section('content')



<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/about_banner.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
        <h1>About Us</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->
  <section id="about">
           
            <div class="customer-says bg-gray padding-base">
                <div class="container">
                    <div class="row">
                        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer>
                        </script>
                        <div class="elfsight-app-9f18fa42-ba3d-4dac-85a7-be242db040f2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-block padding-base">
                <div class="container">
                    <div class="row hours text-center g-0">
                        <div class="col-12 p-4">
                            <h3> Call or Whatsapp to your Simplifly Advisor <span class="text-green">24/7</span> on
                                <br>+9476 342 7054, +960 783 4011,
                                +358
                                40
                                819 2758
                            </h3>
                        </div>
                    </div>

                    <div class="row services p-5 g-0">
                        <div class="col-md-3 text-center mb-3">
                            <i class="bi bi-browser-safari"></i>
                            <h4>Explore Maldives</h4>
                            <p>Simplfly knowledge of the Maldives is second to none. Our team of travel professionals
                                have
                                an insider's perspective of the destination, resorts, people and culture - we are
                                passionate
                                about the Maldives! </p>
                        </div>
                        <div class="col-md-3 text-center mb-3">
                            <i class="bi bi-clock"></i>
                            <h4>24/7 Assistance</h4>
                            <p>We work across several time zones to serve customers around the world. Just drop us a
                                line,
                                call our headquarters or have a live-chat - we are available for you.</p>
                        </div>
                        <div class="col-md-3 text-center mb-3">
                            <i class="bi bi-rainbow"></i>
                            <h4>Personally Tailored To You </h4>
                            <p>It’s our commitment to deliver a bespoke service for you. We take careful note of your
                                needs
                                and ensure all the small details are taken care of, every step of the way.</p>
                        </div>

                        <div class="col-md-3 text-center mb-3">
                            <i class="bi bi-pass"></i>
                            <h4>Best Price Guarantee</h4>
                            <p>We work closely with all of our resort partners, so we can offer you a Best Price
                                Guarantee
                                when you make a reservation, or promise to match your lowest price.</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="about-more padding-base">
                <div class="container">
                    <div class="row py-5 item1">
                        <div class="col-md-6">
                            <h2>Explore, Dream & Discover Luxury Travel </h2>
                            <p>Our mission is to redefine the travel experience
                                by seamlessly integrating environmental and
                                social responsibility into every journey. We are
                                dedicated to curating eco-friendly and culturally
                                enriching adventures that prioritize the
                                preservation of natural ecosystems and support
                                local communities. </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('public/storage/images/about/why_simplifly_maldives.avif') }}" alt="image-1">
                        </div>
                    </div>
                    <div class="row py-5 item2">
                        <div class="col-md-6 order-2 order-md-1">
                            <img src="{{ asset('public/storage/images/about/how_we_can_help_you.avif') }}" alt="How we can help you ">
                        </div>
                        <div class="col-md-6 order-1 order-md-2 text-center text-md-start">
                            <h2>How we can help you </h2>
                            <p>Our personalized travel consultant service is
                                designed to provide you with a personalized
                                and customized travel experience. Our team
                                of dedicated travel consultants will work
                                closely with you to understand your travel
                                preferences, requirements, and the budget.
                                Once we have gathered all the necessary
                                information, we will create a tailored itinerary
                                that includes accommodations, transportation,
                                and activities based on your specific interests
                                and preferences. We will also provide you with
                                recommendations and insider tips to enhance
                                your travel experience.</p>

                        </div>
                    </div>
                    <div class="row py-5 item3">
                        <div class="col-md-6">
                            <h2>Our Travel Consultants</h2>
                            <p>
                                Our travel consultants have extensive
                                knowledge and expertise in Finland, Maldives &
                                Sri Lanka. Whether you are planning a romantic
                                getaway, a family vacation, or an all-inclusive
                                adventure, we will ensure that every detail of
                                your trip is taken care of, allowing you to simply
                                relax and enjoy your journey. Additionally, our
                                personalized travel consultant service includes
                                ongoing support and assistance throughout your
                                trip. If any issues or changes arise during your
                                travels, our team will be available to provide
                                immediate assistance and ensure that your
                                journey is stress-free. Contact us today to start
                                planning your personalized travel experience
                                with our dedicated travel consultants.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('public/storage/images/about/our_travel_consultants.avif') }}" alt="Our Travel Consultants">
                        </div>
                    </div>
                    <div class="row py-5 item4">
                        <div class="col-md-6 order-2 order-md-1">
                            <img src="{{ asset('public/storage/images/about/why_simplifly_finland.avif') }}" alt="image-1">
                        </div>
                        <div class="col-md-6 order-1 order-md-2 text-center text-md-start">
                            <h2>Why Simplifly Finland?</h2>
                            <p>“Embarking on a journey is a deeply personal
                                experience, and as your dedicated travel expert,
                                our commitment is to craft a tailor-made
                                adventure that reflects your unique preferences,
                                interests, and aspirations. With a wealth of
                                professional expertise, I navigate the vast
                                landscape of travel possibilities to curate an
                                experience that goes beyond the ordinary”</p>
                            <p>We offer wide range of packages to Finland, Sri
                                Lanka & Maldives with 24/7 service inclusive of
                                competitive prices. Our team of travel experts
                                will ensure that your trip to all three destinations
                                are memorable and hassle-free. We take pride
                                in curating our unique portfolio, and our industry
                                experts play a crucial role in ensuring that each
                                resort meets our high standards of excellence.
                                After your memorable stay, they leave us a
                                valuable feedback and reviews that help us
                                continually refine and improve our offerings.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection