@extends('layouts.web')   
 
@section('content')

<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/team_banner.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Our Team</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->

  <!-- ================ Explore section start ================= -->
  <section class="section-margin section-margin--small">
    <div class="container py-3 about">
         <div class="row">
        <p> We are actual people with deep insights of Sri Lanka's appeal, not just a virtual presence. Trust our professionals to create 
a customized Sri Lankan experience for you rather than attempting to handle the complexities of travel on your own.</p>
<p>Learn about the people who are driving your trip, from our dedicated board of directors and managers to our travel 
experts who have their top local picks. As the leading travel operator, Team Simplifly guarantees that your Sri Lankan 
experience is unmatched, whether you're getting back in touch with us or need specific advice. </p>
         </div>
        <div class="row">
        <div class="team-title my-2"><h3>Our Team
        </h3></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/profile/buddika_gamage.avif') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Buddhika Gamage</h5>
                <p class="card-text">Founder (CEO)</p>
            </div>
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/profile/primal_gamage.avif') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Primal Gamage </h5>
                <p class="card-text">Director</p>
            </div>
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/profile/jayani_jayasundara.avif') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jayani Jayasundara</h5>    
                <p class="card-text">Business Development Manager</p>
            </div>
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/profile/pradeep_kumara.avif') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pradeep Kumara</h5>
                <p class="card-text">Travel Consultant</p>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="team-title my-2"><h3>Memorable Moment with Our Clients
        </h3></div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/1.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/2.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/3.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/4.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/5.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/6.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/7.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/8.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/9.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/10.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/11.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/12.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/13.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/14.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/15.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/16.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/17.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
            <div class="card card-team">
            <img src="{{ asset('public/storage/images/clients/18.avif') }}" class="card-img-top" alt="...">
            </div>
            </div>
            
        </div>
    
    
    </div>
  </section>
	<!-- ================ Explore section end ================= -->	




@endsection