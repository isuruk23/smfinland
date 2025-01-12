@extends('layouts.web')   
 
@section('content')

 <!-- ================ start banner area ================= -->	
 <section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/quote.jpg') }}) center center no-repeat;background-size: auto;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Quote Us</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Quote Us</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

    <section id="quote">

           
            <div class="container quote">
                <div class="row justify-content-between" id="quoteform">
                    <div class="col-md-6 mb-3">
                        <div class="form">
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
                            
                        <form class="row contact_form" action="{{ route('quotenow') }}" method="post">
                        @csrf
                            <div class="col-md-12">
                                <div class="row form-group">
                                    <div class="col-auto col-12">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col-auto col-6">
                                    <label class="form-label">Check In Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="arrival" name="arrival" placeholder="Enter your Arrival Date" value="{{ old('arrival', $date) }}">
                                        @if ($errors->has('arrival'))
                                            <div class="text-danger">{{ $errors->first('arrival') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-auto col-6">
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
                                <div class="row form-group">
                                    
                                <div class="col-auto col-6">
                                <label class="form-label">Passport Issued Country <span class="text-danger">*</span></label>
                                <select class="form-select" id="country" name="country" >
                                <option selected>Select Country</option>
                                @foreach($countries as $country)
                                        <option value="{{ $country['name'] }}" data-code="{{ $country['code'] }}" 
                                                @if(strtoupper($country['country-code']) === strtoupper($visitorCountryCode)) selected @endif>
                                            {{ $country['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                                    @if ($errors->has('country'))
                                        <div class="text-danger">{{ $errors->first('country') }}</div>
                                    @endif
                                    </div>
                                </div>
                                    <div class="row form-group">
                                    <label class="form-label">Number of Pax <span class="text-danger">*</span></label>
                                    <div class="col-auto col-6">                   
                                    <label class="form-label">Adults</label>   
                                    <select class="form-select" id="adult" name="adult" >
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
                                <div class="col-auto col-6">
                                <label class="form-label">Childs</label>
                                    <select class="form-select" id="child" name="child" >
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
                                <div class="form-group">
                                <label class="form-label">Telephone/WhatsApp <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactno" name="contactno" placeholder="Enter Contact No">
                                    @if ($errors->has('contactno'))
                                            <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                    @endif
                                    </div>
                                <div class="form-group">
                                <label class="form-label">E Mail <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                    </div>
                            </div>
                            
                            <div class="col-md-12 text-right">
                                <input type="hidden" class="form-control" id="tourtype" name="tourtype" value="{{$tourtype}}">
                                <input type="hidden" class="form-control" id="tourid" name="tourid" value="{{$tourid}}">
                                <button type="submit" value="submit" class="button-contact"><span>Quote</span></button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-md-4 contact d-sm-block">
                        <div class="row contact-info text-center text-sm-start">

                            <div class="col-md-12">
                                <div class="contact-address">
                                    <h4 class="mb-0">Finland Office</h4>
                                    <address>Frantsinkatu 5 C 27 20540, Turku, Finland.</address>
                                    <p><strong>Phone:</strong> <a href="tel:+358408192758">+358 40 819 2758</a></p>
                                    <p><strong>Email:</strong> <a href="mailto:sales@simpliflyfinland.fi">sales@simpliflyfinland.fi</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row contact-info text-center text-sm-start">

                            <div class="col-md-12">
                                <div class="contact-address">
                                    <h4 class="mb-0">Sri Lanka Office</h4>
                                    <address>44/16, Digana Junction, Pelanwaththa, Pannipitiya, Kottawa, Sri Lanka.
                                    </address>

                                    <p><strong>Phone:</strong> <a href="tel:+94772278407">+94 76 342 7054 +94 77 227

                                            8407</a></p>
                                    <p><strong>Email:</strong> <a href="mailto:sales@simpliflysrilanka.com">sales@simpliflysrilanka.com</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="row contact-info text-center text-sm-start">

                            <div class="col-md-12">
                                <div class="contact-address">

                                    <h4 class="mb-0">Maldives OFfice</h4>


                                    <address>H Aagadhage, Aagadhage Building, Boduthakurufaanu Magu, Malé 20026,
                                        Maldives.</address>
                                    <p><strong>Phone:</strong> <a href="tel:+94763427054">+94 76 342 7054, +94 77 227
                                            8407</a></p>
                                    <p><strong>Email:</strong> <a href="mailto:sales@simpliflymaldives.com">sales@simpliflymaldives.com</a>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </section>


	
@endsection

@section('script')
<script>
     $('#contactno').val('+' + $('option:selected', '#country').data('code'));
        $("#country").on("change", function() {
            $('#contactno').val('+' + $('option:selected', this).data('code'));
        });
    
</script>
@endsection