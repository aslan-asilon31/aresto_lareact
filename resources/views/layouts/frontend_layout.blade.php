<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ __('welcome.title') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Aresto</h1>
                    {{-- <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Logo"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">{{ __('welcome.home_title') }}</a>
                        {!! ModalHelper::modalLink(route('your.route.name'), 'myModal', 'Open Modal', 'modal-lg') !!}

                        <a href="about.html" class="nav-item nav-link">{{ __('welcome.about_title') }}</a>
                        <a href="service.html" class="nav-item nav-link">{{ __('welcome.service_title') }}</a>
                        <a href="menu.html" class="nav-item nav-link">{{ __('welcome.menu_title') }}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('welcome.page_title') }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Languages</a> --}}
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{strtoupper(Lang::locale())}}
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="lang/id" class="dropdown-item">{{ __('welcome.indonesia_title') }}</a>
                                <a href="lang/en" class="dropdown-item">{{ __('welcome.english_title') }}</a>
                                <a href="lang/ja" class="dropdown-item">{{ __('welcome.japanese_title') }}</a>
                                <a href="lang/romaji" class="dropdown-item">Japan - Romaji</a>
                                <a href="lang/ch" class="dropdown-item">{{ __('welcome.mandarin_title') }}</a>
                                <a href="lang/pinyin" class="dropdown-item">Mandarin - Pinyin</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">{{ __('welcome.contact_title') }}</a>

                        {{-- // CART --}}
                        <a class="nav-item nav-link">
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M9.58342 1.66675C13.9584 1.66675 17.5001 5.20842 17.5001 9.58342C17.5001 13.9584 13.9584 17.5001 9.58342 17.5001C5.20842 17.5001 1.66675 13.9584 1.66675 9.58342C1.66675 6.50008 3.42508 3.83341 6.00008 2.52508"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M18.3334 18.3334L16.6667 16.6667"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                        </a>
                        <a class="nav-item nav-link ">
                            <span class="badge rounded-pill bg-danger" style=""> 0</span>
                            <svg
                              width="24"
                              height="20"
                              viewBox="0 0 24 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M7.5 6.39167V5.58334C7.5 3.70834 9.31 1.86667 11.56 1.69167C14.24 1.47501 16.5 3.23334 16.5 5.42501V6.57501"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M3.81007 13.8001L4.04007 15.3584C4.26007 16.9917 4.98007 18.3334 9.00007 18.3334H15.0001C19.0201 18.3334 19.7401 16.9917 19.9501 15.3584L20.7001 10.3584C20.9701 8.32508 20.2701 6.66675 16.0001 6.66675H8.00007C3.73007 6.66675 3.03007 8.32508 3.30007 10.3584"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M15.4955 9.99992H15.5045"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M8.49451 9.99992H8.50349"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                        </a>
                        <a
                            class="navbar-toggler nav-item nav-link"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample"
                          >
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        {{-- // END CART --}}

                        {{-- profile  --}}
                        <div class="nav-item nav-link">

                            @if(auth()->check())

                            {{-- dropdown image  --}}
                            <div class="btn-group">
                            <a class="nav-item nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://i.pravatar.cc/85" alt="Profile Image" class="profile-image" style="border-radius: 50%; width:40px; height:40px;">
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Dropdown menu items -->
                                <li><a class="dropdown-item" href="/home">View Profile</a></li>
                                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                                </li>
                            </ul>
                            </div>
                            
                            {{-- End dropdown image  --}}
                        
                            @else
                                {{-- dropdown image  --}}
                                <div class="btn-group">
                                    <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('user_blank.png') }}" alt="Profile Image" class="profile-image" style="border-radius: 50%; width:40px; height:40px;">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Dropdown menu items -->
                                        <li><a class="dropdown-item" href="/login">{{ __('welcome.login_title') }}</a></li>
                                        <li><a class="dropdown-item" href="/register">{{ __('welcome.register_title') }}</a></li>
                                    </ul>
                                </div>
                                {{-- End dropdown image  --}}
                            @endif
                        </div>
                        
                        {{--End profile  --}}

                    </div>
                    <a href="" class="btn btn-primary py-2 px-4">{{ __('welcome.book_a_table') }}</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">{{ __('welcome.enjoy_our_delicious_meal') }}</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">{{ __('welcome.welcome_to_aresto') }}</p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ __('welcome.book_a_table') }}</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">{{ __('welcome.about_title') }}</a>
                        <a class="btn btn-link" href="">{{ __('welcome.contact_title') }}</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Jakarta, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">AslanAsilon</a>, 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>