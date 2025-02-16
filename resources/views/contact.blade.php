@extends('layouts.web')   
 
@section('content')

 <!-- ================ start banner area ================= -->	
 <section class="contact-banner-area" id="contact" style="background: url({{ asset('public/storage/images/maldives_holiday.avif') }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>Contact Us</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

    <section id="contact" class="section-bg">
            
            <div class="map-form pb-5">
                <div class="container">
                       <div class="row text-center">
                        <p>Come join <b>Simplifly Finland Oy</b>, we believe every journey should be effortless, enriching, and
unforgettable. Whether you're dreaming of a <b> tropical escape to the Maldives, an adventurous cultural
tour of Sri Lanka, or a magical Arctic experience in Finland</b>, our travel experts are here to bring your vision to life.</p>
                    </div>
                    <div class="row contact-info mt-5">
                        <div class="col-md-7 text-center">
                            <h2>Our Offices</h2>
                            <img src="{{ asset('public/storage/images/map.png') }}" alt="World map" class="img-fluid">
                        </div>
                        <div class="col-md-5">
                            <div class="text-center">
                                <h2>Contact Us</h2>

                                <p>+358 40 819 2758, +358 40 819 303)</p>
                                <p>Email: sales@simpliflyfinland.fi</p>
                            </div>


                            <div class="form">
                            <form class="row contact_form" action="{{ route('send.mail') }}" method="post" id="contactForm" novalidate="novalidate">
                                    @csrf

                                

                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required value="{{ old('name') }}">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="contactno" id="contactno" placeholder="Phone number" required value="{{ old('contactno') }}">
                                            @error('contactno')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <select class="form-control" name="country" id="country" required>
                                                <option value="">Country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country['name'] }}" data-code="{{ $country['code'] }}"
                                                        @if(strtoupper($country['country-code']) === strtoupper($visitorCountryCode)) selected @endif>
                                                        {{ $country['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-6 mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control" name="arrival"  id="arrival"  onfocus="(this.type='date')"   placeholder="Arrival Date" required value="{{ old('arrival') }}">
                                            </div>
                                            @error('arrival')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control" name="departure"  id="departure"  onfocus="(this.type='date')"   placeholder="Departure Date" required value="{{ old('departure') }}">
                                            </div>
                                            @error('departure')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-4 mb-3">
                                            <select class="form-select" name="adults" id="adults" required>
                                                <option selected="">Adults</option>
                                                @for ($i = 1; $i <= 10; $i++)
                                                    <option value="{{ $i }}" @if (old('adults') == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('adults')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <select class="form-select" name="child" id="child">
                                                <option selected="">Child</option>
                                                @for ($i = 0; $i <= 10; $i++)
                                                    <option value="{{ $i }}" @if (old('child') == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('child')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" name="infant" id="infant">
                                                <option selected="">Infant</option>
                                                @for ($i = 0; $i <= 5; $i++)
                                                    <option value="{{ $i }}" @if (old('infant') == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('infant')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Special Notes" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" id="btnRequest" class="btn btn-primary">Get A Quote</button>
                                    </div>
                                </form>

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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="contact-info padding-base">
                <div class="container data-aos=" fade-up""="">
                    <div class="row contact-info g-3">

                        <div class="col-md-4">
                            <div class="card h-100 p-3 pt-5">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="contact-address">
                                            <h4>Finland Office</h4>
                                            <img src="{{ asset('public/storage/images/finland.png') }}" alt="finland" class="img-fluid w-50">
                                            <h5 class="mb-1">Address</h5>
                                            <address>Frantsinkatu 5 C 27, 20540, <br>Turku, <br> Finland.</address>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-phone">
                                            <h5 class="mb-1">Phone Number</h5>
                                            <p><a href="tel:+358408192758">+358 40 819 2758</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-email">
                                            <h5 class="mb-1">Email</h5>
                                            <p><a href="mailto:sales@simpliflyfinland.fi"> sales@simpliflyfinland.fi</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="contact-email">
                                            <h5 class="mb-1">Web</h5>
                                            <p><a href="simpliflyfinland.fi"> www.simpliflyfinland.fi</a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="col-md-4">
                            <div class="card h-100 p-3 pt-5">
                                <div class="row">

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-address">
                                            <h4>Maldives Office</h4>
                                            <img src="{{ asset('public/storage/images/maldives.png') }}" alt="maldives" class="img-fluid w-50">
                                            <h5 class="mb-1">Address</h5>
                                            <address>H Aagadhage, Aagadhage Building, Boduthakurufaanu<br> Magu, Malé
                                                20026,
                                                Maldives.</address>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-phone">
                                            <h5 class="mb-1">Phone Number</h5>
                                            <p><a href="tel:+94763427054"> +94 76 342 7054, +960 783 4011 </a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-email">
                                            <h5 class="mb-1">Email</h5>
                                            <p><a href="mailto:sales@simpliflymaldives.com">sales@simpliflymaldives.com</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-email">
                                            <h5 class="mb-1">Web</h5>
                                            <p><a href="simpliflymaldives.com">www.simpliflymaldives.com</a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 p-3 pt-5">
                                <div class="row contact-info">

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-address">
                                            <h4>Sri Lanka Office</h4>
                                            <img src="{{ asset('public/storage/images/srilanka.png') }}" alt="srilanka" class="img-fluid w-50">
                                            <h5 class="mb-1">Address</h5>
                                            <address>44/16, Digana Junction, Pelanwaththa, <br>Pannipitiya, Kottawa,
                                                <br>
                                                Sri
                                                Lanka.</address>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-phone">
                                            <h5 class="mb-1">Phone Number</h5>
                                            <p><a href="tel:+94772278407">+94 76 342 7054, +94 77 227 8407</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="contact-email">
                                            <h5 class="mb-1">Email</h5>
                                            <p><a href="mailto:sales@simpliflysrilanka.com">sales@simpliflysrilanka.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="contact-email">
                                            <h5 class="mb-1">Web</h5>
                                            <p><a href="simpliflysrilanka.com">www.simpliflysrilanka.com</a></p>
                                        </div>
                                    </div>

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