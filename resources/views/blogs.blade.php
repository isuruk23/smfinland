@extends('layouts.web')   
 
@section('content')

<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/blog_banner.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Blogs</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
				</div>
			</div>
    </div>
	</section>


	<!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4 my-4">

		@foreach($blogs as $blog)

          <div class="col-lg-4">
            <article>

              <div class="post-img">
				<img src="{{ asset('public/storage/' . $blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
              </div>

              <!--p class="post-category">Entertainment</p-->

              <h2 class="title">
                <a href="blog-page/{{ $blog->id }}/{{ $blog->slug }}">{{ $blog->title }}</a>
              </h2>

              <div class="d-flex align-items-center">
              <div class="post-meta">
                  <p class="post-date">
                    <time >{{ $blog->created_at }}</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
		  @endforeach
        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
          <!--ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul-->
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

@endsection