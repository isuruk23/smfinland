@extends('layouts.web')   
 
@section('content')
<section class="blog-banner-area" id="blog" style="background: url({{ asset('public/storage/gallery_banner.jpg') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Gallery</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Gallery</a></li>
              <li class="breadcrumb-item active" aria-current="page">Experiences</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
 <!-- ================ Gallery section start ================= -->
 <section class="section-margin gallery">
      <div class="container-fluid">
        <div class="section-intro text-center pb-80px">
         
          <h2>Gallery</h2>
        </div>

        <div class="row owl-carousel owl-carousel-gallery owl-theme">
          <div class="item">
            <img src="img/home/gallery/anuradhapura-1.jpg" alt="">
          </div>
          <div class="item">
            <img  src="img/home/gallery/elephent.jpg" alt="">
          </div>
          <div class="item">
            <img  src="img/home/gallery/lepord.jpg" alt="">
          </div>
          <div class="item">
            <img  src="img/home/gallery/nine-arche.jpg" alt="">
          </div>
          <div class="item">
            <img src="img/home/gallery/polonnaruwa-1.jpg" alt="">
          </div>
          <div class="item">
            <img  src="img/home/gallery/sea.jpg" alt="">
          </div>


          

         
        </div>
      </div>
    </section>
    <!-- ================ Gallery section end ================= -->


@endsection