@extends('layouts.web')   
 
@section('content')

<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/'.$tour->banner_image) }}) center center no-repeat;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>{{ $tour->name }}</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $tour->name }}</li>
                        </ol>
                    </nav>
				</div>
			</div>
    </div>
	</section>
  <!-- ================ end banner area ================= -->

  <!-- ================ Explore section start ================= -->
  <section class="section-margin section-margin--small">
    <div class="container">

    <div class="row">
    <div class="col-md-9 package-details">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="false" tabindex="-1">Itinerary</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-tips-tab" data-bs-toggle="pill" data-bs-target="#pills-tips" type="button" role="tab" aria-controls="pills-tips" aria-selected="false" tabindex="-1">Package Price</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-include-tab" data-bs-toggle="pill" data-bs-target="#pills-include" type="button" role="tab" aria-controls="pills-include" aria-selected="false" tabindex="-1">Package
            Includes</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-not_include-tab" data-bs-toggle="pill" data-bs-target="#pills-not_include" type="button" role="tab" aria-controls="pills-not_include" aria-selected="false" tabindex="-1">Package Not
            Includes</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-terms-tab" data-bs-toggle="pill" data-bs-target="#pills-terms" type="button" role="tab" aria-controls="pills-terms" aria-selected="false" tabindex="-1">Terms &amp;
            Conditions</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link " id="pills-important-tab" data-bs-toggle="pill" data-bs-target="#pills-important" type="button" role="tab" aria-controls="pills-important" aria-selected="true">Important</button>
    </li>
    
</ul>
<div class="tab-content tourdetails" id="pills-tabContent">
    <div class="tab-pane fade  active show" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
         <div class="row  my-5">
		    <div class="row tourdetails my-5">
	
		  @foreach ($tourdetails as $detail)
			<div class="card shadow p-3 mb-5 bg-white rounded col-12 my-4">
			  <div class="card-body">
				<div class="row">
				  <div class="date">Day {{$detail->day}} </div>
				  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<h3>{{$detail->title}}</h3>
					{!!$detail->description!!}
				  </div>
				  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
				  <div class="row">
					<div class="col-6">
					@if ($detail->image1)
					<img class="card-img" src="{{ asset('public/storage/'.$detail->image1) }}" alt="{{ $detail->title }}">
					@else            
					  <img class="card-img" src="{{ asset('images/sample.png') }}" alt="">
					@endif
					</div>
					<div class="col-6">
					@if ($detail->image2)
					<img class="card-img" src="{{ asset('public/storage/'.$detail->image2) }}" alt="{{ $detail->title }}">
					@else            
					  <img class="card-img" src="{{ asset('images/sample.png') }}" alt="">
					@endif
					</div>
				  </div>
				  </div>
				</div>
			  </div>
			</div>
			@endforeach
		  </div>                                                    
    </div>
    </div>
    <div class="tab-pane fade" id="pills-include" role="tabpanel" aria-labelledby="pills-include-tab" tabindex="0">
    {!!$tour->includes!!}
    </div>
    <div class="tab-pane fade" id="pills-not_include" role="tabpanel" aria-labelledby="pills-not_include-tab" tabindex="0">
    {!!$tour->excludes!!}
    </div>
    <div class="tab-pane fade" id="pills-terms" role="tabpanel" aria-labelledby="pills-terms-tab" tabindex="0">
    {!!$tour->conditions!!}
    </div>
    <div class="tab-pane fade" id="pills-important" role="tabpanel" aria-labelledby="pills-important-tab" tabindex="0">
    {!!$tour->important!!}
    </div>
    <div class="tab-pane fade" id="pills-tips" role="tabpanel" aria-labelledby="pills-tips-tab" tabindex="0">
    {!!$tour->tips!!}  
    </div>

</div>

</div>
   

 <div class="col-md-3">
<div class="form">
<h2>Quote Now</h2>
@if (session('success'))
        <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="quote-form">
                                                <form action="{{ route('quotenow') }}" method="post" id="formRequest">
                                                @csrf
                                                    <div class="mb-3 row">
                                                        <div class="col-sm-12">
                                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" >
                                                            @if ($errors->has('name'))
                                                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <div class="col-sm-12 mb-3">
                                                        <label class="form-label">Check In Date <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                            <input type="date" class="form-control" name="arrival"  id="arrival" placeholder="Arrival Date"   value="{{ old('arrival', $date) }}">
                                                         @if ($errors->has('arrival'))
                                                                    <div class="text-danger">{{ $errors->first('arrival') }}</div>
                                                            @endif
                                                        </div>
                                                        </div>
                                                      
                                                    </div>
                                                    <div class="mb-3 row">
                                                    <div class="col-auto col-12">
                                                        <label class="form-label">No of Nights <span class="text-danger">*</span></label>
                                                        <select class="form-select" name="nights" id="nights" aria-label="No. of Nights">
                                                            <option value="0" selected="">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                        </select>
                                                            @if ($errors->has('nights'))
                                                                <div class="text-danger">{{ $errors->first('nights') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <div class="col-sm-12">
                                                        <label class="form-label">Passport Issued Country <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="country" id="country" >
                                                                <option value="">Country</option>
                                                                @foreach($countries as $country)
                                                                    <option value="{{ $country['name'] }}" data-code="{{ $country['code'] }}" 
                                                                            @if(strtoupper($country['country-code']) === strtoupper($visitorCountryCode)) selected @endif>
                                                                        {{ $country['name'] }}
                                                                    </option>
                                                                @endforeach
                                                                @if ($errors->has('country'))
                                                                        <div class="text-danger">{{ $errors->first('country') }}</div>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                    <label class="form-label">Number of Pax <span class="text-danger">*</span></label>
                                                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                                        <label class="form-label">Adults</label>
                                                            <select class="form-select" name="adult" id="adult" aria-label="Default select example" >
                                                            <option selected="" value="0" >0 </option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            @if ($errors->has('adults'))
                                                                    <div class="text-danger">{{ $errors->first('adults') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                                        <label class="form-label">Child</label>
                                                            <select class="form-select" name="child" id="child" aria-label="Default select example" >
                                                                <option selected="" value="0" >0 </option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            @if ($errors->has('child'))
                                                                    <div class="text-danger">{{ $errors->first('child') }}</div>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <div class="col-sm-12">
                                                        <label class="form-label">Telephone/WhatsApp <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="contactno" id="contactno" placeholder="Phone number" >
                                                            @if ($errors->has('contactno'))
                                                                    <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-3 row">
                                                        <div class="col-sm-12">
                                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                                                            @if ($errors->has('email'))
                                                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="form-label">Message</label>
                                                        <textarea class="form-control sp-notes" name="message" id="message" rows="5" placeholder="Special Noties" ></textarea>
                                                        @if ($errors->has('message'))
                                                                <div class="text-danger">{{ $errors->first('message') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="my-3" style="display:none;" id="error-alert">
                                                        <div class="alert alert-primary" role="alert">
                                                            <div id="alert-massage"></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="text-center  my-2">
                                                       
                                                    <input type="hidden" class="form-control" name="tourid" id="tourid" value="{{ $tour->id }}">
                                                    <input type="hidden" class="form-control" name="tourtype" id="tourtype" value="multday">

                                                        <button type="submit" class="btn btn-primary" id="btnRequest">Request</button>
                                                        
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
</div>   

    </div>
	    </div>
  </section>
	<!-- ================ Explore section end ================= -->	




@endsection
@section('script')
<script>
     $('#contactno').val('+' + $('option:selected', '#country').data('code'));
        $("#country").on("change", function() {
            $('#contactno').val('+' + $('option:selected', this).data('code'));
        });
    
</script>
@endsection