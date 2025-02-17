@extends('layouts.web')   
 
@section('content')



<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/winter_holiday_in_sri_lanka.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
        <h1>Who We Are</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Who We Are</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->
  <section id="about">
           
           
            <div class="about-more">
                <div class="container">
                    <div class="row text-center">
                        <p>At  <b>Simplifly Finland Oy</b>, we believe that travel is more than just a journey—it’s an experience that
connects cultures, preserves nature, and creates lasting memories. We are a premier travel agency
based in Finland, specializing in curated travel experiences to<b> Sri Lanka, the Maldives</b>, and Finland. Our
mission is to blend <b> luxury, sustainability, and cultural authenticity</b>, offering tailor-made holidays for

discerning travelers worldwide.</p>
                    </div>
                    <div class="row py-5 item1">
                        <div class="col-md-6">
                            <h2>A Mission with Meaning </h2>
                            <p>Imagine waking up in a luxurious villa surrounded by turquoise 
waters, knowing that your stay contributes to protecting coral 
reefs. Picture wandering through the lush landscapes of Sri Lanka, 
where every step helps preserve its biodiversity. Visualize a snowy 
escape in Finland, where you’ll experience the magic of the 
Northern Lights while supporting local Sami communities.
</p>
<p>Our mission is to redefine travel by blending eco-conscious luxury 
with cultural authenticity. Every adventure we curate prioritizes the 
preservation of natural ecosystems and uplifts the communities we cherish.</p>
                        </div>
                        <div class="col-md-6 img-border">
                            <img src="{{ asset('public/storage/images/about/why_simplifly_maldives.avif') }}" alt="image-1">
                        </div>
                    </div>
                    <div class="row py-5 item2">
                        <div class="col-md-6 order-2 order-md-1 img-border">
                            <img src="{{ asset('public/storage/images/about/how_we_can_help_you.avif') }}" alt="How we can help you ">
                        </div>
                        <div class="col-md-6 order-1 order-md-2 text-center text-md-start">
                            <h2>How we can help you </h2>
                            <p>Our personalized travel consultant service is 
designed to provide you with a personalized and 
customized travel experience. Our team of 
dedicated travel consultants will work closely with 
you to understand your travel preferences, 
requirements, and the budget. Once we have 
gathered all the necessary information, we will 
create a tailored itinerary that includes 
accommodations, transportation, and activities 
based on your specific interests and preferences. 
We will also provide you with recommendations 
and insider tips to enhance your travel experience.
</p>

                        </div>
                    </div>
                    <div class="row py-5 item3">
                        <div class="col-md-6">
                            <h2>Your Travel Dream Team</h2>
                            <p>
                            Our team of passionate travel consultants is here to 
make your travel dreams a reality. Whether it’s a 
romantic getaway in the Maldives, a family 
adventure in Sri Lanka, or an Arctic escapade in 
Finland, we dive into every detail to design an 
itinerary tailored just for you.
From handpicking accommodations that meet our 
high standards of excellence to offering insider tips 
and 24/7 support, we’re with you every step of the 
way. And because travel is as unpredictable as it is 
exciting, our team ensures your journey remains 
stress-free, no matter what surprises come your way.</p>
                        </div>
                        <div class="col-md-6 img-border">
                            <img src="{{ asset('public/storage/images/about/travel_your_dream.avif') }}" alt="Our Travel Consultants">
                        </div>
                    </div>
                    <div class="row py-5 item4 ">
                        <div class="col-md-6 order-2 order-md-1 img-border">
                            <img src="{{ asset('public/storage/images/about/why_simplifly_finland.avif') }}" alt="image-1">
                        </div>
                        <div class="col-md-6 order-1 order-md-2 text-center text-md-start">
                            <h2>Why Choose Simplifly Finland?</h2>
                            <p>Because every journey should be as 
unique as the traveller. With offices in 
Finland, Sri Lanka, and the Maldives, we 
bring local expertise and global 
connections to deliver unforgettable 
adventures.
</p>
                            <p><b>Exclusive Packages:</b> From the crystalclear waters of the Maldives to the serene 
forests of Finland and Sri Lanka’s vibrant 
culture, our curated packages offer 
something extraordinary for everyone.
</p>
<p><b>Sustainability First:</b> We’re deeply committed to sustainable tourism, taking every possible step 
to protect the environment and support the communities we visit.</p>
<p><b>24/7 Service:</b> Your peace of mind is our priority. With round-the-clock assistance, you can focus 
on the joy of exploration while we handle the logistics.</p>
<p class="text-center"><b>Start Your Journey Today</b><br>
At Simplifly Finland, we don’t just take you places. We take you deeper, helping you connect 
with the world in ways that inspire, enrich, and endure. Let’s create your next unforgettable 
story together</p>
                        </div>
                        
                    </div>
                </div>
                <div class="customer-says bg-gray ">
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
                                <br>+358 40 819 2758, +9476 342 7054, +960 783 4011,
                                
                            </h3>
                        </div>
                    </div>

                    <div class="row services d-flex justify-content-between p-5 g-0">
                    
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
            </div>
        </section>


@endsection