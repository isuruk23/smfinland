<!DOCTYPE html>
<html lang="en">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow">
    
    <title>Simplifly Finland | @yield('title', $meta['title'])</title>
    <meta name="author" content="Simplifly finland" />
    <meta
        content="Discover luxury travel with Simplifly Finland. Specializing in Maldives holidays packages and global destinations, we offer curated packages for ultimate relaxation and adventure."
        name="description">
    <meta name="keywords"
        content="simplifly,simpliflyfinland,Maldives resorts, Maldives hotels, resorts in Maldives, hotels in Maldives, holidays in Maldives, honeymoon in Maldives, travel to Maldives, Maldives atolls, vacation in Maldives,top resorts in Maldives, family resorts, family resorts in Maldives, budget resorts, budget resorts in Maldives, top luxurious resorts, top luxurious resorts in Maldives, vacation, vacations, vacation packages, vacation package, travel package, travel packages,Holiday in Maldives,Honeymoon in Maldives, 	Hotels in Maldives, Visit Maldives, Book Maldives, Maldives Holiday offers, Maldives Holiday deals, Maldives all inclusive, 	Cheap deals for Maldives, Diving resort in Maldives, Surfing resorts in Maldives, Couple resorts in Maldives, Honeymoon resorts in Maldives, Family resorts in Maldives, Budget resorts in Maldives, Weddings in Maldives, Top luxury resorts in Maldives, Vacation packages in Maldives,Travel packages in Maldives, Best Maldives resorts, Top 10 Maldives resorts, Hotels and resorts in Maldives, 	Travel agents in Maldives, Resorts in Maldives, Maldives holiday packages, Tours and travels in Maldives" />
 

<link href="{{ asset('public/storage/images/favicon.png') }}" rel="apple-touch-icon">
<link rel="icon" type="image/x-icon" href="{{ asset('public/storage/images/favicon.png') }}">
<link href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link href="{{ asset('public/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="{{ asset('public/vendor/aos/aos.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/styles.min.css') }}">
  <style>
    .es-widget-title-container{
        display:none !important;
    }
  </style>
</head>

<body class="home-page">

    <!-- ======= Header ======= -->
    <header id="header" class="header">
        @include('includes.navbar')
</header><!-- End Header -->


<main id="main">
  @yield('content')

</main>
<!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-middle-block">
    <div class="container">
        <div class="row">

        <div class=" col-lg-3 col-sm-6 footer-contact mb-4">
                <h4 class="my-3">Find Us in Europe</h4>

                <div class="address mb-3 d-flex">
                    <i class="bi bi-house me-3"></i> <span>Frantsinkatu 5 C 27,<br> 20540, Turku,<br>
                        Finland.</span>
                </div>
                <div class="phone mb-3"><i class="bi bi-telephone me-3"></i> <span>+358 40 819 2758</span></div>
                <div class="email"><i class="bi bi-envelope me-3"></i> <span>sales@simpliflyfinland.fi</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 footer-contact mb-4">
                <h4 class="my-3">Find Us in Maldives</h4>

                <div class="address mb-3 d-flex">
                    <i class="bi bi-house me-3"></i> <span>H Aagadhage, Aagadhage Building,<br> Boduthakurufaanu
                        Magu,<br>
                        Malé
                        20026,
                        Maldives.</span>
                </div>
                <div class="phone mb-3"><i class="bi bi-telephone me-3"></i> <span>+960 783 4011</span>
                </div>
                <div class="email"><i class="bi bi-envelope me-3"></i> <span>sales@simpliflymaldives.com</span></div>
            </div>
            <div class="col-lg-3 col-sm-6 footer-contact mb-4">
                <h4 class="my-3">Find Us in Sri Lanka</h4>

                <div class="address mb-3 d-flex">
                    <i class="bi bi-house me-3"></i> <span>44/16, Diyagama Juntion,<br> Pelanwaththa,
                        Pannipitiya,,<br>Kottawa, Sri
                        lanka.</span>
                </div>
                <div class="phone mb-3"><i class="bi bi-telephone me-3"></i> <span>+94 76 342 7054</span></div>
                <div class="email"><i class="bi bi-envelope me-3"></i> <span>sales@simpliflysrilanka.com</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4 class="my-3">Useful Links</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="srilankan_packages.php">Visit Sri Lanka</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a href="maldives_packages.php">Maldives
                                    Packages</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="placetovisit.php">Places to Visit</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="thingstodo.php">Things to do</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-chevron-right"></i> <a href="sustainable.php">Sustainability</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="about.php">Who we are</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
                            <!-- <li><i class="bi bi-chevron-right"></i> <a href="blogs.php">Blogs</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="terms-condition.php">Terms & Conditions</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="faq.php">FAQ’s </a></li> -->

                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="container-fluid border-top">
    <div class="row">
        <div class="col-md-4">
            <div class="copyright">
                &copy; Copyright <a href="simpliflyfinland.fi" class="fw-bold">Simplifly</a>. All Rights Reserved
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment">
                <img src="{{ asset('public/storage/images/bank_payment.png') }}" alt="Payment" class="img-fluid w-75 ">
            </div>
        </div>
        <div class="col-md-4">
            <div class="links">
                <a href="/booking-cancellation-policy">Booking & Cancellation Policy</a>
                <a href="/privacy-policy">Privacy Policy </a>
            </div>
        </div>
    </div>


</div>    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('public/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js "></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Template Main JS File -->
<script src="{{ asset('public/js/main.js') }}"></script>
@yield('script')
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EYCEWM799T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EYCEWM799T');
</script>
</body>

</html>