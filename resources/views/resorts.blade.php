@extends('layouts.web')

@section('content')
<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/maldives_holiday_packages.avif') }}) center center no-repeat;background-size: auto; background-size: cover;width: 100vw;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>All Inclusive Resorts</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Inclusive Resorts</li>
                        </ol>
                    </nav>
                   
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->
<div class="container">
    <div class="row">
        <!-- Filter Section (Inline) -->
        <div class="col-12 mb-4 filter-form">
            <form id="filter-form" class="d-flex flex-wrap align-items-center gap-2">
            <div class="container mt-3">
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <input type="text" id="search-name" class="form-control" placeholder="Resort Name">
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <select id="search-category" class="form-select">
                <option value="">Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->type }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <select id="search-type" class="form-select">
                <option value="">Type</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <input type="number" id="min-price" class="form-control" placeholder="Min Price">
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <input type="number" id="max-price" class="form-control" placeholder="Max Price">
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-grid">
            <button id="filter-btn" type="button" class="btn btn-primary">Apply</button>
        </div>
    </div>
</div>

            </form>
        </div>

        <!-- Resorts List -->
        <div class="col-12">
            <div class="row" id="resort-list">
                @include('partials.resort-list')
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
   $(document).ready(function () {
    $('#filter-btn').click(function () {
        let name = $('#search-name').val();
        let category = $('#search-category').val();
        let resorttype = $('#search-type').val();
        let min_price = $('#min-price').val();
        let max_price = $('#max-price').val();
        let rates = $('#search-rates').val();

        $.ajax({
            url: "{{ route('filter-resorts') }}",
            method: "GET",
            data: {
                name: name,
                category: category,
                resorttype: resorttype,
                min_price: min_price,
                max_price: max_price,
                rates: rates
            },
            success: function (response) {
                $('#resort-list').html(response.resorts);
            }
        });
    });
});


    </script>
@endsection
