 @include('clients.blocks.header')

@include('clients.blocks.banner')

 <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">My Profile</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">My Profile</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- user-profile -->
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="user-profile-sidebar">
                            <div class="user-profile-sidebar-top">
                                <div class="user-profile-img">
                                    <img src="assets/img/account/user.jpg" alt="">
                                    <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                                    <input type="file" class="profile-img-file">
                                </div>
                                <h4>Antoni Jonson</h4>
                                <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a4045445945446a4f524b475a464f04494547">[email&#160;protected]</a></p>
                            </div>
                            <ul class="user-profile-sidebar-list">
                                <li><a href="dashboard.html"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                                <li><a class="active" href="profile.html"><i class="far fa-user"></i> My Profile</a></li>
                                <li><a href="profile-booking.html"><i class="far fa-shopping-bag"></i> My Booking</a></li>
                                <li><a href="profile-booking-history.html"><i class="far fa-clipboard-list"></i> Booking History</a></li>
                                <li><a href="profile-listing.html"><i class="far fa-globe"></i> My Listing</a></li>
                                <li class="profile-menu">
                                    <a href="#profile-menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="profile-menu">
                                        <i class="far fa-plus-circle"></i> Add Listing <i class="far fa-angle-down profile-menu-angle"></i>
                                    </a>
                                    <div class="collapse" id="profile-menu">
                                        <ul class="profile-menu-list">
                                            <li><a href="flight-add.html">Add Flight</a></li>
                                            <li><a href="hotel-add.html">Add Hotel</a></li>
                                            <li><a href="hotel-room-add.html">Add Hotel Room</a></li>
                                            <li><a href="activity-add.html">Add Activity</a></li>
                                            <li><a href="car-add.html">Add Car</a></li>
                                            <li><a href="cruise-add.html">Add Cruise</a></li>
                                            <li><a href="tour-add.html">Add Tour</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="profile-wishlist.html"><i class="far fa-heart"></i> My Wishlist</a></li>
                                <li><a href="profile-message.html"><i class="far fa-envelope"></i> Messages <span class="badge">02</span></a></li>
                                <li><a href="profile-wallet.html"><i class="far fa-wallet"></i> My Wallet</a></li>
                                <li><a href="profile-notification.html"><i class="far fa-bell"></i> Notifications <span class="badge">05</span></a></li>
                                <li><a href="profile-setting.html"><i class="far fa-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="user-profile-card">
                                <h4 class="user-profile-card-title">Profile Info</h4>
                                <div class="col-lg-6">
                                    <div class="profile-info-list">
                                        <ul>
                                            <li>Full Name: <span>Antoni Jonson</span></li>
                                            <li>Email: <span><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c2a8adacb1adac82a7baa3afb2aea7eca1adaf">[email&#160;protected]</a></span></li>
                                            <li>Phone: <span>+2 134 562 458</span></li>
                                            <li>Address: <span>New York, USA</span></li>
                                            <li>Join Date: <span>21 August, 2025</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user-profile end -->

    </main>

  @include('clients.blocks.footer')