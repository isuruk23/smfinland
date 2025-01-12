@extends('layouts.web')   
 
@section('content')

 <!-- ================ start banner area ================= -->	
 <section class="contact-banner-area" id="contact" style='background: url({{ asset('public/storage/' . $blog->image) }}) center center no-repeat;'>
		<div class="container h-100">
			<div class="contact-banner" >
				<div class="text-center">
					<h1>{{ $blog->title }}</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" ><a href="/blogs">Blogs</a></li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
    <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="content">
                 {!!$blog->description!!}
                </div><!-- End meta bottom -->

              </article>

            </div>
          </section>

@endsection