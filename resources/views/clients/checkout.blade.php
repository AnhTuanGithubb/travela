 @include('clients.blocks.header')

@include('clients.blocks.banner')

<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Checkout</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- checkout area -->
        <div class="checkout-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="booking-widget">
                            <h4 class="booking-widget-title">Booking Personal Info</h4>
                            <div class="booking-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <div class="form-group-icon">
                                                    <input type="email" class="form-control"
                                                        placeholder="Email Address">
                                                    <i class="far fa-envelopes"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                    <i class="far fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Tour</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="Address Line">
                                                    <i class="far fa-map-location-dot"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Address You</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="Address Line">
                                                    <i class="far fa-map-location-dot"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>numAdults</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="Age">
                                                    <i class="fab fa-pagelines"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>numChildren</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="Age">
                                                    <i class="fab fa-pagelines"></i>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label>Zip Code</label>
                                                <div class="form-group-icon">
                                                    <input type="text" class="form-control" placeholder="Zip Code">
                                                    <i class="far fa-location-dot"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>message</label>
                                                <div class="form-group-icon">
                                                    <textarea class="form-control" cols="30" rows="5"
                                                        placeholder="Additional Comment"></textarea>
                                                    <i class="far fa-pen"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="booking-summary">
                            <h4 class="mb-30">Booking Summary</h4>
                            <div class="booking-property-img">
                                <img src="assets/img/hotel/room/01.jpg" alt="">
                            </div>
                            <div class="booking-property-content">
                                <div class="booking-property-title">
                                    <div>
                                        <h5>Premium Deluxe Room</h5>
                                        <p><i class="far fa-map-marker-alt"></i> 25/B Milford Road, New York, USA</p>
                                    </div>
                                    <a href="#" class="book-edit-btn"><i class="far fa-pen"></i></a>
                                </div>
                                <div class="booking-property-rate">
                                    <span class="badge"><i class="far fa-star"></i> 4.5/5</span>
                                    <span class="rate-type">Average</span>
                                    <span class="rate-text">(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="booking-info-summary">
                                <h5>Order Info</h5>
                                <ul>
                                    <li>Check In: <span>20 Aug 2025 at 10:10 AM</span></li>
                                    <li>Check Out: <span>25 Aug 2025 at 10:10 AM</span></li>
                                    <li>Room Type: <span>King Luxury</span></li>
                                    <li>Room: <span>2 Rooms</span></li>
                                    <li>Per Room Price: <span>$250</span></li>
                                    <li>Adults: <span>4</span></li>
                                    <li>Childs: <span>2</span></li>
                                    <li>Stay: <span>5 Nights</span></li>
                                </ul>
                            </div>
                            <div class="booking-order-info">
                                <div class="booking-pay-info">
                                    <h5>Booking Payment</h5>
                                    <ul>
                                        <li>Sub Total: <span>$50,540.00</span></li>
                                        <li>Discount: <span>$600.00</span></li>
                                        <li>Taxes: <span>$560.00</span></li>
                                        <li class="order-total">You Pay: <span>$51,543.00</span></li>
                                    </ul>
                                </div>

                                <div class="text-end mt-40">
                                    <a href="#" class="theme-btn d-block">Confirm Booking<i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->
         {{-- <div class="booking-widget"> --}}
                            <h4 class="booking-widget-title">Your Card Information</h4>
                            <div class="booking-payment-area">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-tab-1" data-bs-toggle="pill"
                                            data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                            aria-selected="true">
                                            <div class="payment-card-img">
                                                <img src="assets/img/payment/mastercard.svg" alt="">
                                                <img src="assets/img/payment/visa.svg" alt="">
                                                <img src="assets/img/payment/american-express.svg" alt="">
                                                <img src="assets/img/payment/discover.svg" alt="">
                                            </div>
                                            <span>Payment With Credit Card</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-tab-2" data-bs-toggle="pill"
                                            data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                            aria-selected="false">
                                            <div class="booking-payment-img">
                                                <img src="assets/img/payment/paypal-2.svg" alt="">
                                            </div>
                                            <span>Payment With PayPal</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-tab-3" data-bs-toggle="pill"
                                            data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3"
                                            aria-selected="false">
                                            <div class="booking-payment-img">
                                                <img src="assets/img/payment/payoneer.svg" alt="">
                                            </div>
                                            <span>Payment With Payoneer</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                        aria-labelledby="pills-tab-1" tabindex="0">
                                        <div class="booking-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Card Holder Name</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Name On Card">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Card Number</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Your Card Number">
                                                                <i class="far fa-credit-card"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Expire Date</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Expire">
                                                                <i class="far fa-calendar-days"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>CCV</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="CVV">
                                                                <i class="far fa-credit-card"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mt-2">
                                                            <button type="submit" class="theme-btn">Confirm Booking<i
                                                                    class="fas fa-arrow-circle-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-2" role="tabpanel"
                                        aria-labelledby="pills-tab-2" tabindex="0">
                                        <div class="booking-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email">
                                                                <i class="far fa-envelopes"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <div class="form-group-icon">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <i class="far fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mt-2">
                                                            <button type="submit" class="theme-btn">Login Account<i
                                                                    class="fas fa-arrow-circle-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-3" role="tabpanel"
                                        aria-labelledby="pills-tab-3" tabindex="0">
                                        <div class="booking-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email">
                                                                <i class="far fa-envelopes"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <div class="form-group-icon">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <i class="far fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mt-2">
                                                            <button type="submit" class="theme-btn">Login Account<i
                                                                    class="fas fa-arrow-circle-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </main>
  @include('clients.blocks.footer')