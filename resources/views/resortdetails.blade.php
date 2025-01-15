@extends('layouts.web')   
 
@section('content')

<!-- ================ start banner area ================= -->	
<section class="contact-banner-area" id="contact" style="background: url({{ url('public/storage/'.$resort->bannerimage) }}) center center no-repeat;background-size: auto; background-size: cover;">
		<div class="container h-100">
			<div class="contact-banner">
				<div class="text-center">
					<h1>{{$resort->resort}}</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$resort->resort}}</li>
                        </ol>
                    </nav>
                   
				</div>
			</div>
    </div>
</section>

           

            <section id="resort-details">
                <div class="container-fluid p-0">
                    <div class="nav-tabs border-bottom pt-3 pb-3">
                        <div class="container">
                          

                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="btn nav-link" href="#pills-overview"
                                            onclick="toggleActive(this)">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="btn btn-primary nav-link" href="#pills-offers"
                                            onclick="toggleActive(this)">Offers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="btn nav-link" href="#pills-villas" onclick="toggleActive(this)">Villas</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="btn nav-link" href="#pills-dining" onclick="toggleActive(this)">Restaurants</a>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <a class="btn nav-link" href="#pills-experiences"
                                            onclick="toggleActive(this)">Experiences</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="btn nav-link" href="#pills-factsheet"
                                            onclick="toggleActive(this)">Fact Sheet</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="padding-base overview" id="pills-overview">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading text-center">Overview</h2>
                                            <p class="font-larger">{!! $resort->description !!} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="padding-base" id="pills-offers">
                                <div class="container Offers">
                                    <h2 class="heading text-center">Offers</h2>
                                    <div class="row py-2">
                                   
                                   @foreach ($offers as $offer)
                                            
                                                <div class="col-lg-3 offer-card p-3">
                                                    <h4 class="text-center">{{ $offer->title }}</h4>
                                                    <p>{!! $offer->description !!}</p>
                                                    <div class="row align-items-center justify-content-center button-container">
                                                    <div class="col-12 text-center"><a class="btn btn-primary " href="/offer/{{$resort->id}}/{{ $offer->id }}">Book
                                                            Now
                                                        </a></div>
                                                </div>
                                                </div>
                                                
                                                @endforeach
                                     </div>
                                </div>
                            </div>
                            <div class="padding-base bg-gray" id="pills-villas">
                                <div class="container">
                                    <h2 class="heading text-center">Villas</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="villa-container">
                                            @foreach ($villas as $villa)
                                                        <div class="row villa g-0 p-0">
                                                            <div class="col-lg-3 villa-img">
                                                                <img src="{{  asset('public/storage/'.$villa->image) }}"
                                                                    alt="{{ $villa->name }}" class="img-fluid">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="p-4 d-flex h-100 align-items-center">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h4>{{ $villa->name }}  </h4>
                                                                            <p class="description @if(strlen($villa->description) > 100) collapsed @endif">
                                                                            @if(strlen($villa->description) > 100)
                                                                                {{ substr($villa->description, 0, 100) }}
                                                                                <span class="more-text d-none">{!! substr($villa->description, 100) !!}</span>
                                                                                ...
                                                                            @else
                                                                                {!! $villa->description !!}
                                                                            @endif
                                                                        </p>
																											
																			
                                                                           
                                                                        </div>
                                                                        <div class="col-md-4 mt-3">
                                                                            <p>
                                                                              
                                                                                <i class="bi bi-house"></i> Room
                                                                                Size: {{$villa->roomsize}} sqm
                                                                                
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-4 mt-3">
                                                                            <p>
                                                                             
                                                                                <i class="bi bi-grid-3x2-gap"></i>Sleeps:
                                                                               {{$villa->bed}} Bed
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-4 mt-3">
                                                                            <p>                                                                                
                                                                               
                                                                                <i class="bi bi-eye"></i>View: 
                                                                                {{$villa->view}}
                                                                               
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 mb-2">
                                                                            <p> 
                                                                            @if($villa->wifi == 1)
                                                                            <i class='bi bi-wifi'></i> Wifi
                                                                            @endif
                                                                        </p>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 mb-2">
                                                                            <p>
                                                                            @if($villa->ac == 1)
                                                                                <i class="bi bi-snow2"></i> AC
                                                                            @endif
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 mb-2">
                                                                            <p> 
                                                                             @if($villa->barthroom == 1)
                                                                             <i class='bi bi-textarea-resize'></i> Private Bathroom
                                                                            @endif
                                                                            </p>
                                                                        </div>
																		<div class="col-lg-12">
																			<div class="text-start py-5">
																											<a villa-id="{{ $villa->id }}" class='villa-more link' ><span>Read More</span> <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																								 <path d='M9.29 6.71002C9.1973 6.80254 9.12375 6.91242 9.07357 7.0334C9.02339 7.15437 8.99756 7.28405 8.99756 7.41502C8.99756 7.54599 9.02339 7.67567 9.07357 7.79665C9.12375 7.91762 9.1973 8.02751 9.29 8.12002L13.17 12L9.29 15.88C9.19742 15.9726 9.12398 16.0825 9.07388 16.2035C9.02377 16.3244 8.99798 16.4541 8.99798 16.585C8.99798 16.716 9.02377 16.8456 9.07388 16.9666C9.12398 17.0875 9.19742 17.1974 9.29 17.29C9.38258 17.3826 9.4925 17.456 9.61346 17.5061C9.73442 17.5563 9.86407 17.582 9.995 17.582C10.1259 17.582 10.2556 17.5563 10.3765 17.5061C10.4975 17.456 10.6074 17.3826 10.7 17.29L15.29 12.7C15.3827 12.6075 15.4563 12.4976 15.5064 12.3766C15.5566 12.2557 15.5824 12.126 15.5824 11.995C15.5824 11.8641 15.5566 11.7344 15.5064 11.6134C15.4563 11.4924 15.3827 11.3825 15.29 11.29L10.7 6.70002C10.32 6.32002 9.68 6.32002 9.29 6.71002Z' fill='#198754'/>
																								 </svg>
																								  </a>
																													</div>
																													
																						</div>		
                                                                    </div>
																						
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 text-center">
                                                                <div
                                                                    class="p-4 d-flex flex-column h-100 align-items-center justify-content-center left-border position-relative">
                                                                    <p class="text-gray">Rate Upon Request</p>
                                                                    <a href="/villaquote/{{ $villa->id }}/{{$resort->id}}"
                                                                        class="btn btn-primary mt-4 button btnVillaRequest text-center">Get
                                                                        a
                                                                        Quote</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="padding-base" id="pills-factsheet">
                                <div class="container">
                                    <h2 class="heading text-center">Fact Sheet</h2>
                                    <div class="row d-flex justify-content-center g-0" id="resorts">
                                    @foreach ($documents as $document)
                                            <div class="col-md-12">
                                                <i class="bi bi-check-circle"></i> <a target="_blank" href="{{ asset('public/storage/files/pdf/' . $document->file_path) }}">{{$document->documents}}</a>
                                            </div>      
                                    @endforeach
                                    </div>
                                </div>
                            </div> -->
                            <div class="padding-base  bg-gray" id="pills-dining">
                                <div class="container">
                                    <h2 class="heading text-center">Restaurants</h2>
                                    <div class="row py-2" data-masonry='{"percentPosition": true }'>
                                    @foreach ($restaurants as $restaurant)
                                                <div class="col-lg-3 mb-4 offer-card dine">
                                                    <div class="img-div">
                                                        <img src="{{ asset('public/storage/' . $restaurant->image) }}" alt="{{$restaurant->title}}"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="description_content p-3 position-relative">
                                                        <h4>{{$restaurant->title}}</h4>
                                                        <p>{!!$restaurant->description!!}</p>
                                                    </div>
                                                </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="padding-base" id="pills-experiences">
                                <div class="container">
                                    <h2 class="heading text-center">Experiences</h2>
                                    <div class="row py-2" data-masonry='{"percentPosition": true }'>
                                    @foreach ($experiences as $experience)
                                                <div class="col-lg-3 mb-4 offer-card experiences">
                                                  
                                                    <div class="description_content p-3 position-relative">
                                                        <h4>{{$experience->facilities_activities}}
                                                        </h4>
                                                        
                                                        <p class="description @if(strlen($experience->description) > 100) collapsed @endif">
                                                            @if(strlen($experience->description) > 100)
                                                                {!! substr($experience->description, 0, 100) !!}
                                                                <span class="more-text d-none">{{ substr($experience->description, 100) }}</span>
                                                                ...
                                                            @else
                                                                {!! $experience->description !!}
                                                            @endif
                                                        </p>

                                                                            <div class="text-center">
                                                                                <?php
                                                         echo " <a facility-id=".$experience->id." class='facility-more link' ><span>Read More</span> <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                         <path d='M9.29 6.71002C9.1973 6.80254 9.12375 6.91242 9.07357 7.0334C9.02339 7.15437 8.99756 7.28405 8.99756 7.41502C8.99756 7.54599 9.02339 7.67567 9.07357 7.79665C9.12375 7.91762 9.1973 8.02751 9.29 8.12002L13.17 12L9.29 15.88C9.19742 15.9726 9.12398 16.0825 9.07388 16.2035C9.02377 16.3244 8.99798 16.4541 8.99798 16.585C8.99798 16.716 9.02377 16.8456 9.07388 16.9666C9.12398 17.0875 9.19742 17.1974 9.29 17.29C9.38258 17.3826 9.4925 17.456 9.61346 17.5061C9.73442 17.5563 9.86407 17.582 9.995 17.582C10.1259 17.582 10.2556 17.5563 10.3765 17.5061C10.4975 17.456 10.6074 17.3826 10.7 17.29L15.29 12.7C15.3827 12.6075 15.4563 12.4976 15.5064 12.3766C15.5566 12.2557 15.5824 12.126 15.5824 11.995C15.5824 11.8641 15.5566 11.7344 15.5064 11.6134C15.4563 11.4924 15.3827 11.3825 15.29 11.29L10.7 6.70002C10.32 6.32002 9.68 6.32002 9.29 6.71002Z' fill='#198754'/>
                                                         </svg>
                                                          </a>";
                                                            
                                                    ?>
                                                                            </div>
                                                    </div>
                                                </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div> -->
      
                           
                  


                </div>

                <!--- villa model -->

                    <div class="modal" id="experiendetailsmodel" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title experien-title"></h4>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body experien-body p-4">

                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--- villa model -->

                    <div class="modal" id="villadetailsmodel" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title villa-title"></h4>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body villa-body p-4">

                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>








@endsection
@section('script')
<script>
    
    $(document).ready(function () {
    // Add CSRF token to every AJAX request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Handler for facility details
    $(".facility-more").click(function (e) {
        e.preventDefault();
        var id = $(this).attr("facility-id");
        $('#experiendetailsmodel').fadeIn(2000).modal('show');

        $.ajax({
            type: "POST",
            url: '/experiencesmore',
            data: { 
                id: id,
                _token:"{{ csrf_token() }}"
             },
            success: function (result) {
                // Parse the response and update the modal content
                var name = result.name;
                var description = result.description;
                $('.experien-title').html(name);
                $('.experien-body').html('<div class="row g-0">' + description + '</div>');
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                alert('An error occurred while fetching facility details.');
            }
        });
    });

    // Handler for villa details
    $(".villa-more").click(function (e) {
        e.preventDefault();
        var id = $(this).attr("villa-id");
        $('#villadetailsmodel').fadeIn(1500).modal('show');

        $.ajax({
            type: "POST",
            url: '/villamore',
            data: { 
                id: id,
                _token: "{{ csrf_token() }}",
            },
            success: function (result) {
                // Parse the response and update the modal content
                var name = result.name;
                var description = result.description;
                var roomsize = result.roomsize;
                var sleep = result.sleep;
                var view = result.view;
                var wifi = result.wifi;
                var ac = result.ac;
                var bathroom = result.barthroom;

                // Generate icons based on availability
                var iswifi = wifi ? '<i class="bi bi-wifi"></i>' : '';
                var isac = ac ? '<i class="bi bi-snow2"></i>' : '';
                var isbathroom = bathroom ? '<i class="bi bi-textarea-resize"></i>' : '';

                $('.villa-title').html(name);
                $('.villa-body').html(`
                    <div class="row g-0">${description}</div>
                    <div class="row villa-icon mt-4">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4"><p><i class="bi bi-house"></i> ${roomsize}</p></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4"><p><i class="bi bi-people"></i> ${sleep}</p></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4"><p><i class="bi bi-eye"></i> ${view}</p></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">${iswifi}</div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">${isac}</div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">${isbathroom}</div>
                    </div>
                `);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                alert('An error occurred while fetching villa details.');
            }
        });
    });
});

    </script>
@endsection