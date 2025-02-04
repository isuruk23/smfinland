@foreach ($resorts as $resort)
    <div class="col-lg-3 mb-4 offer-card">
        <div class="post-img-div">
            @if ($resort->image)
                <img class="card-img" src="{{ asset('public/storage/' . $resort->image) }}" alt="{{ $resort->resort }}">
            @else            
                <img class="card-img" src="{{ asset('public/images/sample.png') }}" alt="">
            @endif
        </div>
        <div class="description_content p-3 position-relative">
            <div class="type position-absolute">{{ $resort->category }}</div>
            <div class="star-rating rates">
                @for ($i = 0; $i < $resort->rates; $i++)
                    <i class="bi bi-star-fill"></i>
                @endfor
            </div>
            <h5 class="title mb-2 mt-2">
                <a class="text-dark" href="/resort-details/{{ $resort->resort_alias }}/{{ $resort->id }}">
                    {{ $resort->resort }}
                </a>
            </h5>
            <div class="start">Starting From</div>
            <div class="price"><span class="text-big">€ {{ $resort->price }}</span> <span>Per Person</span></div>
            <div class="row justify-content-around align-items-center">
                <div class="col-6 text-end"><a href="/quote" class="btn btn-primary">Get a Quote</a></div>
                <div class="col-6 text-start"><a class="btn btn-outline-primary" href="/resort-details/{{ $resort->resort_alias }}/{{ $resort->id }}">Explore More</a></div>
            </div>
        </div>
    </div>
@endforeach
