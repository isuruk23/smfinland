@extends('layouts.web')   
 
@section('content')
<section class="blog-banner-area" id="blog" style="background: url({{ asset('public/storage/experiences_banner.jpg') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Experiences</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Experiences</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
<section class="blog_categorie_area">
      <div class="container">
      @foreach ($experiences as $experience)
          <div class="row">
              <div class="col-12 col-sm-12 col-lg-6 mb-4 mb-lg-0">
                  <div class="categories_post">
                        @if ($experience->image)
                            <img class="card-img rounded-0" src="{{ asset('public/storage/' . $experience->image) }}" alt="{{ $experience->name }}">
                        @else
                        <img class="card-img rounded-0" src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                        @endif
                      <div class="categories_details">
                          <div class="categories_text">
                                  <h5>{{ $experience->name }}</h5>
                              <div class="border_line"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <p>{{ $experience->description }}</p>
              </div>
          </div>
          @endforeach
      </div>
  </section>

@endsection