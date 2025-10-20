<!-- navbar -->
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="assets/img/logo/logo.png" class="logo-display" alt="logo">
                        <img src="assets/img/logo/logo-dark.png" class="logo-scrolled" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="{{ route ('home')}}" data-bs-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ route ('home')}}">Home One</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('home')}}">Home Two</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('home')}}">Home Three</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route ('flight')}}" data-bs-toggle="dropdown">Flight</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ route ('flight')}}">Flight Grid</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('flight')}}">Flight List</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route ('hotel')}}" data-bs-toggle="dropdown">Hotel</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ route ('hotel')}}">Hotel Grid</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('hotel')}}">Hotel List</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('hotel')}}">Hotel Full Width</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route ('blog')}}" data-bs-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu mega-menu fade-down">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a class="dropdown-item" href="{{ route ('blog')}}">Destination</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ route ('blog')}}">Career</a></li>
                                                <li><a class="dropdown-item" href="{{ route ('blog')}}">Career
                                                        Details</a></li>
                                                <li><a class="dropdown-item" href="{{ route ('blog')}}">Become An
                                                        Expert</a></li>
                                                <li><a class="dropdown-item" href="{{ route ('blog')}}">My Cart</a></li>
                                                {{-- <li><a class="dropdown-item" href="{{ route ('checkout')}}">Checkout</a></li> --}}
                                                {{-- <li><a class="dropdown-item" href="{{ route ('infor')}}">Profile</a></li>
                                                <li><a class="dropdown-item" href="{{ route ('login')}}">Login</a></li> --}}
                                                <li><a class="dropdown-item" href="{{ route ('blog')}}">Sign Up</a></li>
                                            </ul>
                                        </div>
                                        {{-- <div class="col-lg-3">
                                            <ul>
                                                <li><a class="dropdown-item" href="forgot-password.html">Forgot
                                                        Password</a></li>
                                                <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                                                <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                                                <li><a class="dropdown-item" href="profile-listing.html">My Listing</a>
                                                </li>
                                                <li><a class="dropdown-item" href="profile-booking.html">My Booking</a>
                                                </li>
                                                <li><a class="dropdown-item" href="profile-booking-history.html">My
                                                        Booking History</a></li>
                                                <li><a class="dropdown-item" href="profile-wishlist.html">My
                                                        Wishlist</a></li>
                                                <li><a class="dropdown-item" href="profile-wallet.html">My Wallet</a>
                                                </li>
                                                <li><a class="dropdown-item" href="profile-message.html">Messages</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a class="dropdown-item"
                                                        href="profile-notification.html">Notifications</a></li>
                                                <li><a class="dropdown-item" href="profile-setting.html">Settings</a>
                                                </li>
                                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                                <li><a class="dropdown-item" href="pricing.html">Pricing Plan</a></li>
                                                <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                                                <li><a class="dropdown-item" href="service.html">Services</a></li>
                                                <li><a class="dropdown-item" href="service-single.html">Service
                                                        Single</a></li>
                                                <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                                <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                                </li>
                                                <li><a class="dropdown-item" href="faq.html">Faq's</a></li>
                                                <li><a class="dropdown-item" href="testimonial.html">Testimonials</a>
                                                </li>
                                                <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                                <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li><a class="dropdown-item" href="terms.html">Terms Of Service</a></li>
                                                <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route ('tour')}}" data-bs-toggle="dropdown">Tour</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Activity Grid</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Activity List</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Activity Full Width</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Activity Details</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Activity Booking</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Activity Search
                                            Result</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('tour')}}">Add Activity</a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Car</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="car-grid.html">Car Grid</a></li>
                                    <li><a class="dropdown-item" href="car-list.html">Car List</a></li>
                                    <li><a class="dropdown-item" href="car-full-width.html">Car Full Width</a></li>
                                    <li><a class="dropdown-item" href="car-single.html">Car Details</a></li>
                                    <li><a class="dropdown-item" href="car-booking.html">Car Booking</a></li>
                                    <li><a class="dropdown-item" href="car-search-result.html">Car Search Result</a>
                                    </li>
                                    <li><a class="dropdown-item" href="car-add.html">Add Car</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Cruise</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="cruise-grid.html">Cruise Grid</a></li>
                                    <li><a class="dropdown-item" href="cruise-list.html">Cruise List</a></li>
                                    <li><a class="dropdown-item" href="cruise-full-width.html">Cruise Full Width</a>
                                    </li>
                                    <li><a class="dropdown-item" href="cruise-single.html">Cruise Details</a></li>
                                    <li><a class="dropdown-item" href="cruise-booking.html">Cruise Booking</a></li>
                                    <li><a class="dropdown-item" href="cruise-search-result.html">Cruise Search
                                            Result</a></li>
                                    <li><a class="dropdown-item" href="cruise-add.html">Add Cruise</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tour</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="tour-grid.html">Tour Grid</a></li>
                                    <li><a class="dropdown-item" href="tour-list.html">Tour List</a></li>
                                    <li><a class="dropdown-item" href="tour-full-width.html">Tour Full Width</a></li>
                                    <li><a class="dropdown-item" href="tour-single.html">Tour Details</a></li>
                                    <li><a class="dropdown-item" href="tour-booking.html">Tour Booking</a></li>
                                    <li><a class="dropdown-item" href="tour-search-result.html">Tour Search Result</a>
                                    </li>
                                    <li><a class="dropdown-item" href="tour-add.html">Add Tour</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item"><a class="nav-link" href="{{ route ('contact')}}">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-btn">
                                <a href="become-expert.html" class="theme-btn mt-2">Become An Expert</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->

    </header>
    <!-- header area end -->



    <main class="main">

        <!-- hero area -->
        <div class="hero-section">
            <div class="hero-single" style="background: url(assets/img/hero/hero-1.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto">
                            <div class="hero-content text-center">
                                <div class="hero-content-wrapper">
                                    <h1 class="hero-title">Explore The World Together</h1>
                                    <p>Find awesome flight, hotel, tour, car and packages</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->
        