@include('clients.blocks.header')

@include('clients.blocks.banner')


<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="search-wrapper">
            <!-- search header -->
            <div class="search-header">
                <div class="search-nav">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-tab-1" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true"><i class="far fa-plane-departure"></i>Flights</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-2" data-bs-toggle="pill" data-bs-target="#pills-2"
                                type="button" role="tab" aria-controls="pills-2" aria-selected="false"><i
                                    class="far fa-hotel"></i>Hotels</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-3" data-bs-toggle="pill" data-bs-target="#pills-3"
                                type="button" role="tab" aria-controls="pills-3" aria-selected="false"><i
                                    class="far fa-person-biking-mountain"></i>Activity</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-4" data-bs-toggle="pill" data-bs-target="#pills-4"
                                type="button" role="tab" aria-controls="pills-4" aria-selected="false"><i
                                    class="far fa-car-building"></i>Holiday
                                Package</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-5" data-bs-toggle="pill" data-bs-target="#pills-5"
                                type="button" role="tab" aria-controls="pills-5" aria-selected="false"><i
                                    class="far fa-car"></i>Cars</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-6" data-bs-toggle="pill" data-bs-target="#pills-6"
                                type="button" role="tab" aria-controls="pills-6" aria-selected="false"><i
                                    class="far fa-ship"></i>Cruises</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-7" data-bs-toggle="pill" data-bs-target="#pills-7"
                                type="button" role="tab" aria-controls="pills-7" aria-selected="false"><i
                                    class="far fa-earth-americas"></i>Tours</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- search header end -->

            <!-- tab content -->
            <div class="tab-content" id="pills-tabContent">

                <!-- tab 1 -->
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-tab-1"
                    tabindex="0">
                    <div class="flight-search ft-group">
                        <div class="search-form">
                            <form action="#">
                                <!-- flight type -->
                                <div class="flight-type">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked value="one-way"
                                            name="flight-type" id="flight-type1">
                                        <label class="form-check-label" for="flight-type1">
                                            One Way
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="round-way"
                                            name="flight-type" id="flight-type2">
                                        <label class="form-check-label" for="flight-type2">
                                            Round Way
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="multi-city"
                                            name="flight-type" id="flight-type3">
                                        <label class="form-check-label" for="flight-type3">
                                            Multi City
                                        </label>
                                    </div>
                                </div>
                                <!-- flight type end -->

                                <!-- flight search -->
                                <div class="flight-search-wrapper">
                                    <div class="flight-search-content">
                                        <!-- flight search content -->
                                        <div class="flight-search-item">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="from-destination"
                                                                class="form-control swap-from" value="New York">
                                                            <i class="fal fa-plane-departure"></i>
                                                        </div>
                                                        <p>JFK - John F. Kennedy International Airport
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="search-form-swap"><i class="far fa-repeat"></i>
                                                        </div>
                                                        <label>To</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="to-destination"
                                                                class="form-control swap-to" value="Los Angeles">
                                                            <i class="fal fa-plane-arrival"></i>
                                                        </div>
                                                        <p>LAX - Los Angeles International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="search-form-date">
                                                            <div class="search-form-journey">
                                                                <label>Journey Date</label>
                                                                <div class="form-group-icon">
                                                                    <input type="text" name="journey-date"
                                                                        class="form-control date-picker journey-date">
                                                                    <i class="fal fa-calendar-days"></i>
                                                                </div>
                                                                <p class="journey-day-name"></p>
                                                            </div>
                                                            <div class="search-form-return">
                                                                <label>Return Date</label>
                                                                <div class="form-group-icon">
                                                                    <input type="text" name="return-date"
                                                                        class="form-control date-picker return-date">
                                                                </div>
                                                                <p class="return-day-name"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group dropdown passenger-box">
                                                        <div class="passenger-class" role="menu"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <label>Passenger, Class</label>
                                                            <div class="form-group-icon">
                                                                <div class="passenger-total"><span
                                                                        class="passenger-total-amount">2</span>
                                                                    Passenger
                                                                </div>
                                                                <i class="fal fa-user-tie-hair"></i>
                                                            </div>
                                                            <p class="passenger-class-name">Business</p>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <div class="dropdown-item">
                                                                <div class="passenger-item">
                                                                    <div class="passenger-info">
                                                                        <h6>Adults</h6>
                                                                        <p>12+ Years</p>
                                                                    </div>
                                                                    <div class="passenger-qty">
                                                                        <button type="button" class="minus-btn"><i
                                                                                class="far fa-minus"></i></button>
                                                                        <input type="text" name="adult"
                                                                            class="qty-amount passenger-adult"
                                                                            value="2" readonly>
                                                                        <button type="button" class="plus-btn"><i
                                                                                class="far fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="passenger-item">
                                                                    <div class="passenger-info">
                                                                        <h6>Children</h6>
                                                                        <p>2-12 Years</p>
                                                                    </div>
                                                                    <div class="passenger-qty">
                                                                        <button type="button" class="minus-btn"><i
                                                                                class="far fa-minus"></i></button>
                                                                        <input type="text" name="children"
                                                                            class="qty-amount passenger-children"
                                                                            value="0" readonly>
                                                                        <button type="button" class="plus-btn"><i
                                                                                class="far fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="passenger-item">
                                                                    <div class="passenger-info">
                                                                        <h6>Infant</h6>
                                                                        <p>Below 2 Years</p>
                                                                    </div>
                                                                    <div class="passenger-qty">
                                                                        <button type="button" class="minus-btn"><i
                                                                                class="far fa-minus"></i></button>
                                                                        <input type="text" name="infant"
                                                                            class="qty-amount passenger-infant"
                                                                            value="0" readonly>
                                                                        <button type="button" class="plus-btn"><i
                                                                                class="far fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <h6 class="mb-3 mt-2">Cabin Class</h6>
                                                                <div class="passenger-class-info">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            value="Economy" name="cabin-class"
                                                                            id="cabin-class1">
                                                                        <label class="form-check-label"
                                                                            for="cabin-class1">
                                                                            Economy
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked
                                                                            type="radio" value="Business"
                                                                            name="cabin-class" id="cabin-class2">
                                                                        <label class="form-check-label"
                                                                            for="cabin-class2">
                                                                            Business
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            value="First Class" name="cabin-class"
                                                                            id="cabin-class3">
                                                                        <label class="form-check-label"
                                                                            for="cabin-class3">
                                                                            First Class
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- flight search content end -->

                                        <!-- flight-multicity-item -->
                                        <div class="flight-search-item flight-multicity-item have-to-clone">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="from-destination"
                                                                class="form-control swap-from" value="New York">
                                                            <i class="fal fa-plane-departure"></i>
                                                        </div>
                                                        <p>JFK - John F. Kennedy International Airport
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="search-form-swap"><i class="far fa-repeat"></i>
                                                        </div>
                                                        <label>To</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="to-destination"
                                                                class="form-control swap-to" value="Los Angeles">
                                                            <i class="fal fa-plane-arrival"></i>
                                                        </div>
                                                        <p>LAX - Los Angeles International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="search-form-date">
                                                            <div class="search-form-journey">
                                                                <label>Journey Date</label>
                                                                <div class="form-group-icon">
                                                                    <input type="text" name="journey-date"
                                                                        class="form-control date-picker journey-date">
                                                                    <i class="fal fa-calendar-days"></i>
                                                                </div>
                                                                <p class="journey-day-name"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="multicity-btn">
                                                            <i class="fal fa-plus-circle"></i> Add
                                                            Another Flight
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- flight multicity end -->
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                                <!-- flight search end -->
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab 2 -->
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-tab-2"
                    tabindex="0">
                    <div class="hotel-search">
                        <div class="search-form">
                            <form action="#">
                                <div class="hotel-search-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="destination" class="form-control"
                                                        value="Reserva Ecologica">
                                                    <i class="fal fa-earth-americas"></i>
                                                </div>
                                                <p>Comuna 1, Argentina</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="search-form-date">
                                                    <div class="search-form-journey">
                                                        <label>Check In</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="journey-date"
                                                                class="form-control date-picker journey-date">
                                                            <i class="fal fa-calendar-days"></i>
                                                        </div>
                                                        <p class="journey-day-name"></p>
                                                    </div>
                                                    <div class="search-form-return">
                                                        <label>Check Out</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="return-date"
                                                                class="form-control date-picker return-date">
                                                        </div>
                                                        <p class="return-day-name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group dropdown passenger-box">
                                                <div class="passenger-class" role="menu" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <label>Rooms, Guests</label>
                                                    <div class="form-group-icon">
                                                        <div class="passenger-total">
                                                            <span class="passenger-total-room">2</span> Rooms,
                                                            <span class="passenger-total-amount">2</span> Guests
                                                        </div>
                                                        <i class="fal fa-user-tie-hair"></i>
                                                    </div>
                                                    <p class="passenger-class-name">Double Room</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Adults</h6>
                                                                <p>12+ Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="adult"
                                                                    class="qty-amount passenger-adult" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Children</h6>
                                                                <p>2-12 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="children"
                                                                    class="qty-amount passenger-children"
                                                                    value="0" readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Infant</h6>
                                                                <p>Below 2 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="infant"
                                                                    class="qty-amount passenger-infant" value="0"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Rooms</h6>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="room"
                                                                    class="qty-amount passenger-room" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <h6 class="mb-3 mt-2">Room Type</h6>
                                                        <div class="passenger-class-info">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Single Room" name="room-type"
                                                                    id="room-type1">
                                                                <label class="form-check-label" for="room-type1">
                                                                    Single Room
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" checked type="radio"
                                                                    value="Double Room" name="room-type"
                                                                    id="room-type2">
                                                                <label class="form-check-label" for="room-type2">
                                                                    Double Room
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Deluxe Room" name="room-type"
                                                                    id="room-type3">
                                                                <label class="form-check-label" for="room-type3">
                                                                    Deluxe Room
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab 3 -->
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-tab-3"
                    tabindex="0">
                    <div class="activity-search">
                        <div class="search-form">
                            <form action="#">
                                <div class="activity-search-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="location" class="form-control"
                                                        value="New York, United States">
                                                    <i class="fal fa-earth-americas"></i>
                                                </div>
                                                <p>Where Are You Going?</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="search-form-date">
                                                    <div class="search-form-journey">
                                                        <label>Check In</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="journey-date"
                                                                class="form-control date-picker journey-date">
                                                            <i class="fal fa-calendar-days"></i>
                                                        </div>
                                                        <p class="journey-day-name"></p>
                                                    </div>
                                                    <div class="search-form-return">
                                                        <label>Check Out</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="return-date"
                                                                class="form-control date-picker return-date">
                                                        </div>
                                                        <p class="return-day-name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group dropdown passenger-box">
                                                <div class="passenger-class" role="menu" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <label>Rooms, Guests</label>
                                                    <div class="form-group-icon">
                                                        <div class="passenger-total">
                                                            <span class="passenger-total-room">2</span> Rooms,
                                                            <span class="passenger-total-amount">2</span> Guests
                                                        </div>
                                                        <i class="fal fa-user-tie-hair"></i>
                                                    </div>
                                                    <p class="passenger-class-name">Double Room</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Adults</h6>
                                                                <p>12+ Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="adult"
                                                                    class="qty-amount passenger-adult" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Children</h6>
                                                                <p>2-12 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="children"
                                                                    class="qty-amount passenger-children"
                                                                    value="0" readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Infant</h6>
                                                                <p>Below 2 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="infant"
                                                                    class="qty-amount passenger-infant" value="0"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Rooms</h6>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="room"
                                                                    class="qty-amount passenger-room" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <h6 class="mb-3 mt-2">Room Type</h6>
                                                        <div class="passenger-class-info">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Single Room" name="room-type"
                                                                    id="room-type4">
                                                                <label class="form-check-label" for="room-type4">
                                                                    Single Room
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" checked type="radio"
                                                                    value="Double Room" name="room-type"
                                                                    id="room-type5">
                                                                <label class="form-check-label" for="room-type5">
                                                                    Double Room
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Deluxe Room" name="room-type"
                                                                    id="room-type6">
                                                                <label class="form-check-label" for="room-type6">
                                                                    Deluxe Room
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab 4 -->
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-tab-4"
                    tabindex="0">
                    <div class="holiday-search">
                        <div class="search-form">
                            <form action="#">
                                <!-- holiday type -->
                                <div class="flight-type">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked value="holiday1"
                                            name="holiday-type" id="holiday-type1">
                                        <label class="form-check-label" for="holiday-type1">
                                            Flight + Hotel + Car
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="holiday2"
                                            name="holiday-type" id="holiday-type2">
                                        <label class="form-check-label" for="holiday-type2">
                                            Flight + Hotel
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="holiday3"
                                            name="holiday-type" id="holiday-type3">
                                        <label class="form-check-label" for="holiday-type3">
                                            Flight + Car
                                        </label>
                                    </div>
                                </div>
                                <!-- holiday type end -->
                                <div class="holiday-search-wrapper">
                                    <div class="flight-search-item">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class="form-group-icon">
                                                        <input type="text" name="from-destination"
                                                            class="form-control swap-from" value="New York">
                                                        <i class="fal fa-plane-departure"></i>
                                                    </div>
                                                    <p>JFK - John F. Kennedy International Airport
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="search-form-swap"><i class="far fa-repeat"></i>
                                                    </div>
                                                    <label>To</label>
                                                    <div class="form-group-icon">
                                                        <input type="text" name="to-destination"
                                                            class="form-control swap-to" value="Los Angeles">
                                                        <i class="fal fa-plane-arrival"></i>
                                                    </div>
                                                    <p>LAX - Los Angeles International Airport</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="search-form-date">
                                                        <div class="search-form-journey">
                                                            <label>Check In</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" name="journey-date"
                                                                    class="form-control date-picker journey-date">
                                                                <i class="fal fa-calendar-days"></i>
                                                            </div>
                                                            <p class="journey-day-name"></p>
                                                        </div>
                                                        <div class="search-form-return">
                                                            <label>Check Out</label>
                                                            <div class="form-group-icon">
                                                                <input type="text" name="return-date"
                                                                    class="form-control date-picker return-date">
                                                            </div>
                                                            <p class="return-day-name"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group dropdown passenger-box">
                                                    <div class="passenger-class" role="menu"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <label>Rooms, Guests</label>
                                                        <div class="form-group-icon">
                                                            <div class="passenger-total">
                                                                <span class="passenger-total-room">2</span>
                                                                Rooms,
                                                                <span class="passenger-total-amount">2</span>
                                                                Guests
                                                            </div>
                                                            <i class="fal fa-user-tie-hair"></i>
                                                        </div>
                                                        <p class="passenger-class-name">Double Room</p>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <div class="dropdown-item">
                                                            <div class="passenger-item">
                                                                <div class="passenger-info">
                                                                    <h6>Adults</h6>
                                                                    <p>12+ Years</p>
                                                                </div>
                                                                <div class="passenger-qty">
                                                                    <button type="button" class="minus-btn"><i
                                                                            class="far fa-minus"></i></button>
                                                                    <input type="text" name="adult"
                                                                        class="qty-amount passenger-adult"
                                                                        value="2" readonly>
                                                                    <button type="button" class="plus-btn"><i
                                                                            class="far fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="passenger-item">
                                                                <div class="passenger-info">
                                                                    <h6>Children</h6>
                                                                    <p>2-12 Years</p>
                                                                </div>
                                                                <div class="passenger-qty">
                                                                    <button type="button" class="minus-btn"><i
                                                                            class="far fa-minus"></i></button>
                                                                    <input type="text" name="children"
                                                                        class="qty-amount passenger-children"
                                                                        value="0" readonly>
                                                                    <button type="button" class="plus-btn"><i
                                                                            class="far fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="passenger-item">
                                                                <div class="passenger-info">
                                                                    <h6>Infant</h6>
                                                                    <p>Below 2 Years</p>
                                                                </div>
                                                                <div class="passenger-qty">
                                                                    <button type="button" class="minus-btn"><i
                                                                            class="far fa-minus"></i></button>
                                                                    <input type="text" name="infant"
                                                                        class="qty-amount passenger-infant"
                                                                        value="0" readonly>
                                                                    <button type="button" class="plus-btn"><i
                                                                            class="far fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="passenger-item">
                                                                <div class="passenger-info">
                                                                    <h6>Rooms</h6>
                                                                </div>
                                                                <div class="passenger-qty">
                                                                    <button type="button" class="minus-btn"><i
                                                                            class="far fa-minus"></i></button>
                                                                    <input type="text" name="room"
                                                                        class="qty-amount passenger-room"
                                                                        value="2" readonly>
                                                                    <button type="button" class="plus-btn"><i
                                                                            class="far fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <h6 class="mb-3 mt-2">Room Type</h6>
                                                            <div class="passenger-class-info">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        value="Single Room" name="room-type"
                                                                        id="room-type7">
                                                                    <label class="form-check-label" for="room-type7">
                                                                        Single Room
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" checked
                                                                        type="radio" value="Double Room"
                                                                        name="room-type" id="room-type8">
                                                                    <label class="form-check-label" for="room-type8">
                                                                        Double Room
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        value="Deluxe Room" name="room-type"
                                                                        id="room-type9">
                                                                    <label class="form-check-label" for="room-type9">
                                                                        Deluxe Room
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab 5 -->
                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-tab-5"
                    tabindex="0">
                    <div class="car-search">
                        <div class="search-form">
                            <form action="#">
                                <div class="car-search-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Picking Up</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="picking-up" class="form-control"
                                                        value="New York, United States">
                                                    <i class="fal fa-location-dot"></i>
                                                </div>
                                                <p>City, Airport Or Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="search-form-date">
                                                    <div class="search-form-journey">
                                                        <label>Pick Up date</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="pickup-date"
                                                                class="form-control date-picker journey-date">
                                                            <i class="fal fa-calendar-days"></i>
                                                        </div>
                                                        <p class="journey-day-name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Pick Up Time</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="pick-up-time"
                                                        class="form-control time-picker" value="11:00 PM">
                                                    <i class="fal fa-clock"></i>
                                                </div>
                                                <p>Car Arrival Time</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mt-lg-4">
                                                <label>Drop Off</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="picking-up" class="form-control"
                                                        value="New York, United States">
                                                    <i class="fal fa-location-dot"></i>
                                                </div>
                                                <p>City, Airport Or Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mt-lg-4">
                                                <div class="search-form-date">
                                                    <div class="search-form-journey">
                                                        <label>Drop Off date</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="pickup-date"
                                                                class="form-control date-picker journey-date">
                                                            <i class="fal fa-calendar-days"></i>
                                                        </div>
                                                        <p class="journey-day-name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mt-lg-4">
                                                <label>Drop Off Time</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="pick-up-time"
                                                        class="form-control time-picker" value="11:00 PM">
                                                    <i class="fal fa-clock"></i>
                                                </div>
                                                <p>Car Drop Off Time</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab 6 -->
                <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-tab-6"
                    tabindex="0">
                    <div class="cruise-search">
                        <div class="search-form">
                            <form action="#">
                                <div class="cruise-search-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="destination" class="form-control"
                                                        value="New York, United States">
                                                    <i class="fal fa-earth-americas"></i>
                                                </div>
                                                <p>Where Are You Going?</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="search-form-date">
                                                    <div class="search-form-journey">
                                                        <label>Journey Date</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="journey-date"
                                                                class="form-control date-picker journey-date">
                                                            <i class="fal fa-calendar-days"></i>
                                                        </div>
                                                        <p class="journey-day-name"></p>
                                                    </div>
                                                    <div class="search-form-return">
                                                        <label>Return Date</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="return-date"
                                                                class="form-control date-picker return-date">
                                                        </div>
                                                        <p class="return-day-name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group dropdown passenger-box">
                                                <div class="passenger-class" role="menu" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <label>Travelers</label>
                                                    <div class="form-group-icon">
                                                        <div class="passenger-total">
                                                            <span class="passenger-total-amount">2</span>
                                                            Travelers
                                                        </div>
                                                        <i class="fal fa-user-tie-hair"></i>
                                                    </div>
                                                    <p class="passenger-class-name">In Cabin</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Adults</h6>
                                                                <p>12+ Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="adult"
                                                                    class="qty-amount passenger-adult" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Children</h6>
                                                                <p>2-12 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="children"
                                                                    class="qty-amount passenger-children"
                                                                    value="0" readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Infant</h6>
                                                                <p>Below 2 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="infant"
                                                                    class="qty-amount passenger-infant" value="0"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <h6 class="mb-3 mt-2">Cruise Class</h6>
                                                        <div class="passenger-class-info">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="In Cabin" name="cruise-class"
                                                                    id="cruise-class1">
                                                                <label class="form-check-label" for="cruise-class1">
                                                                    In Cabin
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" checked type="radio"
                                                                    value="In Chair" name="cruise-class"
                                                                    id="cruise-class2">
                                                                <label class="form-check-label" for="cruise-class2">
                                                                    In Chair
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="In First Class" name="cruise-class"
                                                                    id="cruise-class3">
                                                                <label class="form-check-label" for="cruise-class3">
                                                                    In First Class
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab 7 -->
                <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-tab-7"
                    tabindex="0">
                    <div class="tour-search">
                        <div class="search-form">
                            <form action="#">
                                <div class="tour-search-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <div class="form-group-icon">
                                                    <input type="text" name="destination" class="form-control"
                                                        value="New York, United States">
                                                    <i class="fal fa-earth-americas"></i>
                                                </div>
                                                <p>Where Are You Going?</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="search-form-date">
                                                    <div class="search-form-journey">
                                                        <label>Journey Date</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="journey-date"
                                                                class="form-control date-picker journey-date">
                                                            <i class="fal fa-calendar-days"></i>
                                                        </div>
                                                        <p class="journey-day-name"></p>
                                                    </div>
                                                    <div class="search-form-return">
                                                        <label>Return Date</label>
                                                        <div class="form-group-icon">
                                                            <input type="text" name="return-date"
                                                                class="form-control date-picker return-date">
                                                        </div>
                                                        <p class="return-day-name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group dropdown passenger-box">
                                                <div class="passenger-class" role="menu" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <label>Rooms, Guests</label>
                                                    <div class="form-group-icon">
                                                        <div class="passenger-total">
                                                            <span class="passenger-total-room">2</span> Rooms,
                                                            <span class="passenger-total-amount">2</span> Guests
                                                        </div>
                                                        <i class="fal fa-user-tie-hair"></i>
                                                    </div>
                                                    <p class="passenger-class-name">Double Room</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Adults</h6>
                                                                <p>12+ Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="adult"
                                                                    class="qty-amount passenger-adult" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Children</h6>
                                                                <p>2-12 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="children"
                                                                    class="qty-amount passenger-children"
                                                                    value="0" readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Infant</h6>
                                                                <p>Below 2 Years</p>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="infant"
                                                                    class="qty-amount passenger-infant" value="0"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="passenger-item">
                                                            <div class="passenger-info">
                                                                <h6>Rooms</h6>
                                                            </div>
                                                            <div class="passenger-qty">
                                                                <button type="button" class="minus-btn"><i
                                                                        class="far fa-minus"></i></button>
                                                                <input type="text" name="room"
                                                                    class="qty-amount passenger-room" value="2"
                                                                    readonly>
                                                                <button type="button" class="plus-btn"><i
                                                                        class="far fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <h6 class="mb-3 mt-2">Room Type</h6>
                                                        <div class="passenger-class-info">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Single Room" name="room-type"
                                                                    id="room-type10">
                                                                <label class="form-check-label" for="room-type10">
                                                                    Single Room
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" checked
                                                                    type="radio" value="Double Room"
                                                                    name="room-type" id="room-type11">
                                                                <label class="form-check-label" for="room-type11">
                                                                    Double Room
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Deluxe Room" name="room-type"
                                                                    id="room-type12">
                                                                <label class="form-check-label" for="room-type12">
                                                                    Deluxe Room
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab content end -->
        </div>
    </div>
</div>
<!-- search area end -->


<!-- about-area -->
<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">

            {{-- Cột trái: Hình ảnh và Kinh nghiệm --}}
            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                    <div class="about-img">
                        <div class="row">
                            <div class="col-6">
                                {{-- Sửa đường dẫn ảnh 1 --}}
                                <img class="img-1" src="{{ asset('clients/assets/img/about/01.jpg') }}"
                                    alt="Ảnh giới thiệu 1">
                            </div>
                            <div class="col-6">
                                {{-- Sửa đường dẫn ảnh 2 --}}
                                <img class="img-2" src="{{ asset('clients/assets/img/about/02.jpg') }}"
                                    alt="Ảnh giới thiệu 2">
                            </div>
                        </div>
                    </div>
                    <div class="about-experience">
                        <h5>30<span>+</span></h5>
                        <p>Năm Kinh Nghiệm</p>
                    </div>
                </div>
            </div>

            {{-- Cột phải: Nội dung giới thiệu --}}
            <div class="col-lg-6">
                <div class="about-right wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="far fa-plane"></i> Về Chúng Tôi</span>
                        <h2 class="site-title">Chúng Tôi Là Công Ty <span>Đại Lý Đặt Vé Du Lịch Tốt Nhất</span> Trên
                            Thế Giới
                        </h2>
                    </div>
                    <p class="about-text">Có rất nhiều biến thể của các đoạn Lorem Ipsum có sẵn,
                        nhưng phần lớn đã bị thay đổi dưới một số hình thức do thêm vào sự hài hước hoặc sắp xếp ngẫu
                        nhiên.
                        Máy in đã lấy một bản in thử và xáo trộn để tạo thành một cuốn sách mẫu loại.
                        Các từ trông không tự nhiên cũng đã bị thay đổi dưới một số hình thức do chèn vào.</p>
                    <div class="about-content">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="about-item">
                                    <div class="icon">
                                        {{-- Sửa đường dẫn icon 1 --}}
                                        <img src="{{ asset('clients/assets/img/icon/deal.svg') }}"
                                            alt="Biểu tượng ưu đãi">
                                    </div>
                                    <div class="content">
                                        <h6>Nhận Ưu Đãi Tốt Nhất Của Bạn</h6>
                                        <p>Hãy xem các chương trình du lịch vòng quanh của chúng tôi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-item">
                                    <div class="icon">
                                        {{-- Sửa đường dẫn icon 2 --}}
                                        <img src="{{ asset('clients/assets/img/icon/booking.svg') }}"
                                            alt="Biểu tượng đặt chỗ">
                                    </div>
                                    <div class="content">
                                        <h6>Đặt Chỗ Dễ Dàng</h6>
                                        <p>Hãy xem các chương trình du lịch vòng quanh của chúng tôi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('about') }}" class="theme-btn">Khám Phá Thêm <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end -->


<!-- feature area -->
<div class="feature-area pb-120">
    <div class="container">
        <div class="feature-wrapper">
            <div class="row g-4">

                {{-- Cột 1: Tiêu đề và Mô tả --}}
                <div class="col-lg-6 col-xl-4">
                    <div class="wow fadeInLeft" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="far fa-plane"></i> Tính Năng</span>
                            <h2 class="site-title">Hãy Xem Các Tính Năng <span>Tuyệt Vời</span> Của Chúng Tôi</h2>
                        </div>
                        <p>
                            Có rất nhiều biến thể của các đoạn văn Lorem Ipsum có sẵn nhưng phần lớn đã
                            bị thay đổi dưới một số hình thức.
                            Nếu bạn định sử dụng một đoạn văn Lorem Ipsum, bạn cần phải đảm bảo rằng không
                            có bất kỳ điều đáng xấu hổ nào ẩn chứa, chèn thêm sự hài hước, hoặc các từ ngẫu nhiên
                            trông không đáng tin cậy chút nào.
                        </p>
                        {{-- Sửa liên kết tĩnh --}}
                        <a href="{{ url('contact') }}" class="theme-btn mt-30">Tìm Hiểu Thêm <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{-- Cột 2: Hình ảnh --}}
                <div class="col-lg-6 col-xl-4">
                    <div class="feature-img wow fadeInUp" data-wow-delay=".25s">
                        {{-- Sửa đường dẫn ảnh chính --}}
                        <img src="{{ asset('clients/assets/img/feature/01.jpg') }}" alt="Hình ảnh tính năng">
                    </div>
                </div>

                {{-- Cột 3: Các tính năng chi tiết --}}
                <div class="col-lg-6 col-xl-4">
                    <div class="wow fadeInRight" data-wow-delay=".25s">

                        {{-- Tính năng 1 --}}
                        <div class="feature-item">
                            <div class="feature-icon">
                                {{-- Sửa đường dẫn icon 1 --}}
                                <img src="{{ asset('clients/assets/img/icon/world.svg') }}"
                                    alt="Biểu tượng toàn cầu">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Phủ Sóng Toàn Cầu</h4>
                                <p>Đó là một sự thật đã được thiết lập rằng người đọc sẽ bị phân tâm khi nhìn vào bố cục
                                    của trang.</p>
                            </div>
                        </div>

                        {{-- Tính năng 2 --}}
                        <div class="feature-item mt-20">
                            <div class="feature-icon">
                                {{-- Sửa đường dẫn icon 2 --}}
                                <img src="{{ asset('clients/assets/img/icon/quality.svg') }}"
                                    alt="Biểu tượng chất lượng">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Dịch Vụ Chất Lượng Tốt Nhất</h4>
                                <p>Đó là một sự thật đã được thiết lập rằng người đọc sẽ bị phân tâm khi nhìn vào bố cục
                                    của trang.</p>
                            </div>
                        </div>

                        {{-- Tính năng 3 --}}
                        <div class="feature-item mt-20">
                            <div class="feature-icon">
                                {{-- Sửa đường dẫn icon 3 --}}
                                <img src="{{ asset('clients/assets/img/icon/support.svg') }}"
                                    alt="Biểu tượng hỗ trợ">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Dịch Vụ Khách Hàng 24/7</h4>
                                <p>Đó là một sự thật đã được thiết lập rằng người đọc sẽ bị phân tâm khi nhìn vào bố cục
                                    của trang.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature area end -->


<!-- destination area -->
<div class="destination-area bg pt-80 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Điểm đến</span>
                    <h2 class="site-title">Các Điểm Đến Phổ Biến Nhất</h2>
                </div>
            </div>
        </div>
        <div class="destination-slider owl-carousel owl-theme wow fadeInUp" data-wow-duration="1s"
            data-wow-delay=".25s">

            {{-- Mục 1 --}}
            <div class="destination-item">
                <div class="destination-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/destination/01.jpg') }}" alt="New York City">
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('tour-grid') }}" class="destination-btn"><i
                            class="far fa-arrow-right"></i></a>
                </div>
                <div class="destination-info">
                    <h4><a href="#">Thành phố New York</a></h4>
                    <div class="destination-rate">
                        {{-- Giữ nguyên icon --}}
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fal fa-star"></i>
                        <span>(2.5k Đánh giá)</span>
                    </div>
                    <div class="destination-more-info">
                        <div class="destination-more-info">
                            <span><i class="far fa-backpack"></i> Bắt đầu $50</span>
                            <span><i class="far fa-earth-americas"></i> 35 Chuyến</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 2 --}}
            <div class="destination-item">
                <div class="destination-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/destination/02.jpg') }}" alt="San Francisco">
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('tour-grid') }}" class="destination-btn"><i
                            class="far fa-arrow-right"></i></a>
                </div>
                <div class="destination-info">
                    <h4><a href="#">San Francisco</a></h4>
                    <div class="destination-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fal fa-star"></i>
                        <span>(2.5k Đánh giá)</span>
                    </div>
                    <div class="destination-more-info">
                        <span><i class="far fa-backpack"></i> Bắt đầu $70</span>
                        <span><i class="far fa-earth-americas"></i> 25 Chuyến</span>
                    </div>
                </div>
            </div>

            {{-- Mục 3 --}}
            <div class="destination-item">
                <div class="destination-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/destination/03.jpg') }}" alt="New Orleans">
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('tour-grid') }}" class="destination-btn"><i
                            class="far fa-arrow-right"></i></a>
                </div>
                <div class="destination-info">
                    <h4><a href="#">New Orleans</a></h4>
                    <div class="destination-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fal fa-star"></i>
                        <span>(2.5k Đánh giá)</span>
                    </div>
                    <div class="destination-more-info">
                        <span><i class="far fa-backpack"></i> Bắt đầu $47</span>
                        <span><i class="far fa-earth-americas"></i> 28 Chuyến</span>
                    </div>
                </div>
            </div>

            {{-- Mục 4 --}}
            <div class="destination-item">
                <div class="destination-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/destination/04.jpg') }}" alt="Los Angeles">
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('tour-grid') }}" class="destination-btn"><i
                            class="far fa-arrow-right"></i></a>
                </div>
                <div class="destination-info">
                    <h4><a href="#">Los Angeles</a></h4>
                    <div class="destination-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fal fa-star"></i>
                        <span>(2.5k Đánh giá)</span>
                    </div>
                    <div class="destination-more-info">
                        <span><i class="far fa-backpack"></i> Bắt đầu $60</span>
                        <span><i class="far fa-earth-americas"></i> 33 Chuyến</span>
                    </div>
                </div>
            </div>

            {{-- Mục 5 --}}
            <div class="destination-item">
                <div class="destination-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/destination/05.jpg') }}" alt="Sydney">
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('tour-grid') }}" class="destination-btn"><i
                            class="far fa-arrow-right"></i></a>
                </div>
                <div class="destination-info">
                    <h4><a href="#">Sydney</a></h4>
                    <div class="destination-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fal fa-star"></i>
                        <span>(2.5k Đánh giá)</span>
                    </div>
                    <div class="destination-more-info">
                        <span><i class="far fa-backpack"></i> Bắt đầu $60</span>
                        <span><i class="far fa-earth-americas"></i> 33 Chuyến</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- destination area end -->


<!-- counter area -->
<div class="counter-area counter-negative">
    <div class="col-lg-11 col-xl-9">
        <div class="counter-wrap">
            <div class="row">

                {{-- Mục 1: Booking Done --}}
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            {{-- Sửa đường dẫn icon --}}
                            <img src="{{ asset('clients/assets/img/icon/booking-confirm.svg') }}"
                                alt="Biểu tượng đặt chỗ">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                                <span class="counter-sign">k</span>
                            </div>
                            <h6 class="title">Lượt Đặt Chỗ</h6>
                        </div>
                    </div>
                </div>

                {{-- Mục 2: Our Destination --}}
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            {{-- Sửa đường dẫn icon --}}
                            <img src="{{ asset('clients/assets/img/icon/destination.svg') }}"
                                alt="Biểu tượng điểm đến">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-count="+" data-to="200" data-speed="3000">200</span>
                                <span class="counter-sign">+</span>
                            </div>
                            <h6 class="title">Điểm Đến</h6>
                        </div>
                    </div>
                </div>

                {{-- Mục 3: Happy Clients --}}
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            {{-- Sửa đường dẫn icon --}}
                            <img src="{{ asset('clients/assets/img/icon/rating.svg') }}" alt="Biểu tượng đánh giá">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-count="+" data-to="40" data-speed="3000">40</span>
                                <span class="counter-sign">k</span>
                            </div>
                            <h6 class="title">Khách Hàng Hài Lòng</h6>
                        </div>
                    </div>
                </div>

                {{-- Mục 4: Our Partners --}}
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            {{-- Sửa đường dẫn icon --}}
                            <img src="{{ asset('clients/assets/img/icon/partner.svg') }}" alt="Biểu tượng đối tác">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-count="+" data-to="180" data-speed="3000">180</span>
                                <span class="counter-sign">+</span>
                            </div>
                            <h6 class="title">Đối Tác</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- counter area end -->


<!-- flight area -->
<div class="flight-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Chuyến Bay</span>
                    <h2 class="site-title">Các Chuyến Bay Phổ Biến Nhất</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            {{-- Mục 1 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/01.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-1.png') }}"
                                    alt="Logo Hãng 1">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$300</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 2 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <span class="badge">Nổi bật</span>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/02.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-2.png') }}"
                                    alt="Logo Hãng 2">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$450</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 3 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/03.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-3.png') }}"
                                    alt="Logo Hãng 3">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$520</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 4 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/04.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-4.png') }}"
                                    alt="Logo Hãng 4">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$630</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 5 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/05.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-5.png') }}"
                                    alt="Logo Hãng 5">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$780</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 6 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <span class="badge badge-discount">Giảm 25%</span>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/06.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-6.png') }}"
                                    alt="Logo Hãng 6">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$680</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 7 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/07.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-1.png') }}"
                                    alt="Logo Hãng 1">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$580</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 8 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="flight-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                    <div class="flight-img">
                        {{-- Sửa đường dẫn ảnh chuyến bay --}}
                        <img src="{{ asset('clients/assets/img/flight/08.jpg') }}" alt="Ảnh chuyến bay">
                    </div>
                    <div class="flight-content">
                        <div class="flight-title">
                            <div class="flight-title-info">
                                {{-- Sửa đường dẫn logo hãng hàng không --}}
                                <img src="{{ asset('clients/assets/img/flight/airline-2.png') }}"
                                    alt="Logo Hãng 2">
                                <h4><a href="#">New York <i class="far fa-exchange"></i> Los Angeles</a></h4>
                            </div>
                            <p class="flight-date"><i class="far fa-calendar-days"></i> T8 01, 2025 - T8 30, 2025
                            </p>
                        </div>
                        <div class="flight-bottom">
                            <div class="flight-price">
                                Từ <span>$490</span>
                            </div>
                            <div class="flight-text-btn">
                                {{-- Sửa liên kết tĩnh --}}
                                <a href="{{ url('flight-single') }}">Xem Chi tiết <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                {{-- Sửa liên kết tĩnh --}}
                <a href="{{ url('flight-grid') }}" class="theme-btn">Khám phá thêm<i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- flight area end -->


<!-- hotel area -->
<div class="hotel-area bg pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Khách sạn</span>
                    <h2 class="site-title">Các Khách Sạn Phổ Biến Nhất</h2>
                </div>
            </div>
        </div>
        <div class="hotel-slider owl-carousel owl-theme">

            {{-- Mục 1 --}}
            <div class="hotel-item">
                <div class="hotel-img">
                    <span class="badge">Nổi bật</span>
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/hotel/01.jpg') }}" alt="Khách sạn Western Grant Park">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="hotel-content">
                    <h4 class="hotel-title"><a href="{{ url('hotel-single') }}">Khách sạn Western Grant Park</a>
                    </h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="hotel-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="hotel-rate-type">Tuyệt vời</span>
                        <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <div class="hotel-bottom">
                        <div class="hotel-price">
                            <span class="hotel-price-amount">$300 <span class="hotel-price-type">/Mỗi
                                    đêm</span></span>
                        </div>
                        <div class="hotel-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('hotel-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 2 --}}
            <div class="hotel-item">
                <div class="hotel-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/hotel/02.jpg') }}" alt="Khách sạn Western Grant Park">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="hotel-content">
                    <h4 class="hotel-title"><a href="{{ url('hotel-single') }}">Khách sạn Western Grant Park</a>
                    </h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="hotel-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="hotel-rate-type">Tuyệt vời</span>
                        <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <div class="hotel-bottom">
                        <div class="hotel-price">
                            <span class="hotel-price-amount">$300 <span class="hotel-price-type">/Mỗi
                                    đêm</span></span>
                        </div>
                        <div class="hotel-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('hotel-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 3 --}}
            <div class="hotel-item">
                <div class="hotel-img">
                    <span class="badge">Phổ biến</span>
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/hotel/03.jpg') }}" alt="Khách sạn Western Grant Park">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="hotel-content">
                    <h4 class="hotel-title"><a href="{{ url('hotel-single') }}">Khách sạn Western Grant Park</a>
                    </h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="hotel-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="hotel-rate-type">Tuyệt vời</span>
                        <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <div class="hotel-bottom">
                        <div class="hotel-price">
                            <span class="hotel-price-amount">$300 <span class="hotel-price-type">/Mỗi
                                    đêm</span></span>
                        </div>
                        <div class="hotel-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('hotel-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 4 --}}
            <div class="hotel-item">
                <div class="hotel-img">
                    <span class="badge badge-discount">Giảm 25%</span>
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/hotel/04.jpg') }}" alt="Khách sạn Western Grant Park">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="hotel-content">
                    <h4 class="hotel-title"><a href="{{ url('hotel-single') }}">Khách sạn Western Grant Park</a>
                    </h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="hotel-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="hotel-rate-type">Tuyệt vời</span>
                        <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <div class="hotel-bottom">
                        <div class="hotel-price">
                            <span class="hotel-price-amount">$300 <span class="hotel-price-type">/Mỗi
                                    đêm</span></span>
                        </div>
                        <div class="hotel-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('hotel-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 5 --}}
            <div class="hotel-item">
                <div class="hotel-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/hotel/05.jpg') }}" alt="Khách sạn Western Grant Park">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="hotel-content">
                    <h4 class="hotel-title"><a href="{{ url('hotel-single') }}">Khách sạn Western Grant Park</a>
                    </h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="hotel-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="hotel-rate-type">Tuyệt vời</span>
                        <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <div class="hotel-bottom">
                        <div class="hotel-price">
                            <span class="hotel-price-amount">$300 <span class="hotel-price-type">/Mỗi
                                    đêm</span></span>
                        </div>
                        <div class="hotel-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('hotel-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục 6 --}}
            <div class="hotel-item">
                <div class="hotel-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/hotel/06.jpg') }}" alt="Khách sạn Western Grant Park">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="hotel-content">
                    <h4 class="hotel-title"><a href="{{ url('hotel-single') }}">Khách sạn Western Grant Park</a>
                    </h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="hotel-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="hotel-rate-type">Tuyệt vời</span>
                        <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <div class="hotel-bottom">
                        <div class="hotel-price">
                            <span class="hotel-price-amount">$300 <span class="hotel-price-type">/Mỗi
                                    đêm</span></span>
                        </div>
                        <div class="hotel-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('hotel-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- hotel area end -->


<!-- video-area -->
<div class="video-area py-120">
    <div class="container-fluid pe-0 p-lg-0">
        <div class="col-lg-10 ms-lg-auto">
            <div class="row g-4 align-items-center">
                <div class="col-md-8 col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="far fa-plane"></i> Video Của Chúng Tôi</span>
                        <h2 class="site-title">
                            Hãy Cùng Xem <span>Cập Nhật Mới Nhất</span> Và Video Của Chúng Tôi
                        </h2>
                    </div>
                    <p class="about-text">
                        Có nhiều biến thể của các đoạn văn bản có sẵn nhưng phần lớn đã bị thay đổi dưới một hình thức
                        nào đó,
                        chẳng hạn như chèn thêm sự hài hước. Nếu bạn định sử dụng một đoạn văn, bạn cần đảm bảo
                        rằng không có gì trông có vẻ hơi đáng tin.
                    </p>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('about') }}" class="theme-btn mt-30">Tìm Hiểu Thêm<i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                    {{-- Sửa đường dẫn ảnh nền trong style inline --}}
                    <div class="video-content"
                        style="background-image: url({{ asset('clients/assets/img/video/01.jpg') }});">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="video-wrapper">
                                    {{-- Giữ nguyên liên kết YouTube là liên kết ngoài --}}
                                    <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=jLS3DrTJrpI">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video-area end -->


<!-- banner area -->
<div class="banner-area bg pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Ưu Đãi</span>
                    <h2 class="site-title">Khám Phá Các Ưu Đãi Độc Quyền</h2>
                </div>
            </div>
        </div>
        <div class="banner-slider owl-carousel owl-theme">

            {{-- Mục 1 --}}
            <div class="banner-item">
                <div class="banner-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/banner/01.jpg') }}" alt="Ưu đãi 1">
                </div>
                <div class="banner-content">
                    <h6>Giảm đến <span>70%</span>!</h6>
                    <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả bị phân tâm.</p>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('contact') }}" class="theme-btn">Tìm Hiểu Thêm<i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{-- Mục 2 --}}
            <div class="banner-item">
                <div class="banner-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/banner/02.jpg') }}" alt="Ưu đãi 2">
                </div>
                <div class="banner-content">
                    <h6>Giảm đến <span>70%</span>!</h6>
                    <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả bị phân tâm.</p>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('contact') }}" class="theme-btn">Tìm Hiểu Thêm<i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{-- Mục 3 --}}
            <div class="banner-item">
                <div class="banner-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/banner/03.jpg') }}" alt="Ưu đãi 3">
                </div>
                <div class="banner-content">
                    <h6>Giảm đến <span>70%</span>!</h6>
                    <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả bị phân tâm.</p>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('contact') }}" class="theme-btn">Tìm Hiểu Thêm<i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{-- Mục 4 --}}
            <div class="banner-item">
                <div class="banner-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/banner/04.jpg') }}" alt="Ưu đãi 4">
                </div>
                <div class="banner-content">
                    <h6>Giảm đến <span>70%</span>!</h6>
                    <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả bị phân tâm.</p>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('contact') }}" class="theme-btn">Tìm Hiểu Thêm<i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- banner area end -->


<!-- tour area -->
<div class="tour-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading-inline mb-50">
                    <div>
                        <span class="site-title-tagline"><i class="far fa-plane"></i> Tour</span>
                        <h2 class="site-title">Các Tour Phổ Biến Nhất Của Chúng Tôi</h2>
                    </div>
                    <div class="filter-controls">
                        <ul class="filter-btns">
                            <li class="active" data-filter="*">Tất cả Tour</li>
                            <li data-filter=".cat1">Lịch sử</li>
                            <li data-filter=".cat2">Chuyến đi Cuối tuần</li>
                            <li data-filter=".cat3">Tour Đặc biệt</li>
                            <li data-filter=".cat4">Tour Nghỉ lễ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row filter-box">

            {{-- Mục 1: Historical (cat1) --}}
            @foreach ($tours->take(1) as $tour)
                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                    <div class="tour-item">
                        <div class="tour-img">
                            <span class="badge badge-discount">Giảm 25%</span>
                            {{-- Sửa đường dẫn ảnh --}}
                            <img src="{{ asset('clients/assets/img/gallery-tour/'.$tour->images[0].'')}}" alt="Tour Lịch sử Canada">
                            <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="tour-content">
                            <div class="tour-top">
                                <a href="#" class="tour-category"><i class="far fa-tag"></i> Lịch sử</a>
                                <span class="tour-place"><i class="far fa-earth-americas"></i> 10 Địa điểm</span>
                            </div>
                            <h4 class="tour-title"><a href="{{ url('tour-detail') }}"></a>{{ $tour->title }}</h4>
                            <p><i class="far fa-location-dot"></i> {{$tour->destination}}</p>
                            <div class="hotel-rate">
                                <span class="badge"><i class="far fa-star"></i> 5.0</span>
                                <span class="hotel-rate-type">Tuyệt vời</span>
                                <span class="hotel-rate-review">(2.5k Đánh giá)</span>
                            </div>
                            <div class="tour-duration"><i class="far fa-clock"></i> {{$tour->time}}</div>
                            <div class="tour-bottom">
                                <div class="tour-price">
                                    Từ <span>{{ number_format($tour->priceAdult, 0, ',', '.') }}VND</span>
                                </div>
                                <div class="tour-text-btn">
                                    {{-- Sửa liên kết tĩnh --}}
                                    <a href="{{ url('tour-detail', ['id' => $tour->tourId]) }}">Xem Thêm <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- tour area end -->


<!-- cta-area -->
<div class="cta-area">
    <div class="container">
        <div class="cta-wrapper">
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <div class="cta-content">
                    <div class="cta-text">
                        <h1>Đặt chỗ Đầu tiên <span>Giảm 70%</span>!</h1>
                        <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả sẽ bị phân tâm bởi nội dung dễ đọc
                            của một trang web khi nhìn vào bố cục của nó, và các trình chỉnh sửa trang hiện đang sử
                            dụng.</p>
                    </div>
                    {{-- Sửa liên kết tĩnh --}}
                    <a href="{{ url('contact') }}" class="theme-btn mt-20">Đặt Chỗ Ngay <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="cta-img">
                {{-- Sửa đường dẫn ảnh --}}
                <img class="w-100" src="{{ asset('clients/assets/img/cta/01.jpg') }}" alt="Ưu đãi đặt chỗ">
            </div>
        </div>
    </div>
</div>
<!-- cta-area end -->


<!-- choose area -->
<div class="choose-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Tại Sao Chọn Chúng Tôi</span>
                    <h2 class="site-title">Khám Phá Những Địa Điểm Tuyệt Đẹp Cùng Chúng Tôi</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            {{-- Cột Trái: Các Điểm Chọn --}}
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">

                {{-- Mục 1: An toàn và Tin cậy --}}
                <div class="choose-item">
                    <span class="count">01</span>
                    <div class="icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/safety.svg') }}" alt="Biểu tượng An toàn">
                    </div>
                    <div class="content">
                        <h4>An Toàn và Tin Cậy</h4>
                        <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả sẽ bị phân tâm bởi nội dung dễ đọc
                            của một trang web khi nhìn vào bố cục của nó.</p>
                    </div>
                </div>

                {{-- Mục 2: Minh bạch Giá 100% --}}
                <div class="choose-item">
                    <span class="count">02</span>
                    <div class="icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/price.svg') }}" alt="Biểu tượng Giá">
                    </div>
                    <div class="content">
                        <h4>Minh Bạch Giá 100%</h4>
                        <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả sẽ bị phân tâm bởi nội dung dễ đọc
                            của một trang web khi nhìn vào bố cục của nó.</p>
                    </div>
                </div>

                {{-- Mục 3: Tự tin Du lịch --}}
                <div class="choose-item">
                    <span class="count">03</span>
                    <div class="icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/booking-confirm.svg') }}"
                            alt="Biểu tượng Xác nhận">
                    </div>
                    <div class="content">
                        <h4>Du Lịch Với Sự Tự Tin Hơn</h4>
                        <p>Đây là một sự thật đã được thiết lập từ lâu rằng độc giả sẽ bị phân tâm bởi nội dung dễ đọc
                            của một trang web khi nhìn vào bố cục của nó.</p>
                    </div>
                </div>
            </div>

            {{-- Cột Phải: Hình ảnh --}}
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="choose-img">
                    {{-- Sửa đường dẫn ảnh shape --}}
                    <img class="shape" src="{{ asset('clients/assets/img/shape/04.png') }}"
                        alt="Hình trang trí">
                    {{-- Sửa đường dẫn ảnh 1 --}}
                    <img class="img-1" src="{{ asset('clients/assets/img/choose/01.jpg') }}" alt="Hình ảnh 1">
                    {{-- Sửa đường dẫn ảnh 2 --}}
                    <img class="img-2" src="{{ asset('clients/assets/img/choose/02.jpg') }}" alt="Hình ảnh 2">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- choose area end -->


<!-- car area -->
<div class="car-area bg pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Thuê Xe</span>
                    <h2 class="site-title">Các Dịch Vụ Thuê Xe Phổ Biến Nhất</h2>
                </div>
            </div>
        </div>
        <div class="car-slider owl-carousel owl-theme">

            {{-- Mục Xe 1: Featured --}}
            <div class="car-item">
                <div class="car-img">
                    <span class="badge">Nổi bật</span>
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/car/01.jpg') }}" alt="Xe Toyota Corolla">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="car-content">
                    <h4 class="car-title"><a href="{{ url('car-single') }}">Xe Toyota Corolla</a></h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="car-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="car-rate-type">Tuyệt vời</span>
                        <span class="car-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <ul class="car-info-list">
                        <li><i class="far fa-car"></i>Đời xe: 2025</li>
                        <li><i class="far fa-user-tie"></i>4 Người</li>
                        <li><i class="far fa-gas-pump"></i>Hybrid</li>
                        <li><i class="far fa-steering-wheel"></i>Số tự động</li>
                    </ul>
                    <div class="car-bottom">
                        <div class="car-price">
                            <span class="car-price-amount">$62 <span class="car-price-type">/Mỗi Ngày</span></span>
                        </div>
                        <div class="car-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('car-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục Xe 2 --}}
            <div class="car-item">
                <div class="car-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/car/02.jpg') }}" alt="Xe Toyota Corolla">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="car-content">
                    <h4 class="car-title"><a href="{{ url('car-single') }}">Xe Toyota Corolla</a></h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="car-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="car-rate-type">Tuyệt vời</span>
                        <span class="car-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <ul class="car-info-list">
                        <li><i class="far fa-car"></i>Đời xe: 2025</li>
                        <li><i class="far fa-user-tie"></i>4 Người</li>
                        <li><i class="far fa-gas-pump"></i>Hybrid</li>
                        <li><i class="far fa-steering-wheel"></i>Số tự động</li>
                    </ul>
                    <div class="car-bottom">
                        <div class="car-price">
                            <span class="car-price-amount">$45 <span class="car-price-type">/Mỗi Ngày</span></span>
                        </div>
                        <div class="car-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('car-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục Xe 3: Popular --}}
            <div class="car-item">
                <div class="car-img">
                    <span class="badge">Phổ biến</span>
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/car/03.jpg') }}" alt="Xe Toyota Corolla">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="car-content">
                    <h4 class="car-title"><a href="{{ url('car-single') }}">Xe Toyota Corolla</a></h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="car-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="car-rate-type">Tuyệt vời</span>
                        <span class="car-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <ul class="car-info-list">
                        <li><i class="far fa-car"></i>Đời xe: 2025</li>
                        <li><i class="far fa-user-tie"></i>4 Người</li>
                        <li><i class="far fa-gas-pump"></i>Hybrid</li>
                        <li><i class="far fa-steering-wheel"></i>Số tự động</li>
                    </ul>
                    <div class="car-bottom">
                        <div class="car-price">
                            <span class="car-price-amount">$50 <span class="car-price-type">/Mỗi Ngày</span></span>
                        </div>
                        <div class="car-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('car-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục Xe 4: Discount --}}
            <div class="car-item">
                <div class="car-img">
                    <span class="badge badge-discount">Giảm 25%</span>
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/car/04.jpg') }}" alt="Xe Toyota Corolla">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="car-content">
                    <h4 class="car-title"><a href="{{ url('car-single') }}">Xe Toyota Corolla</a></h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="car-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="car-rate-type">Tuyệt vời</span>
                        <span class="car-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <ul class="car-info-list">
                        <li><i class="far fa-car"></i>Đời xe: 2025</li>
                        <li><i class="far fa-user-tie"></i>4 Người</li>
                        <li><i class="far fa-gas-pump"></i>Hybrid</li>
                        <li><i class="far fa-steering-wheel"></i>Số tự động</li>
                    </ul>
                    <div class="car-bottom">
                        <div class="car-price">
                            <span class="car-price-amount">$70 <span class="car-price-type">/Mỗi Ngày</span></span>
                        </div>
                        <div class="car-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('car-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục Xe 5 --}}
            <div class="car-item">
                <div class="car-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/car/05.jpg') }}" alt="Xe Toyota Corolla">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="car-content">
                    <h4 class="car-title"><a href="{{ url('car-single') }}">Xe Toyota Corolla</a></h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="car-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="car-rate-type">Tuyệt vời</span>
                        <span class="car-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <ul class="car-info-list">
                        <li><i class="far fa-car"></i>Đời xe: 2025</li>
                        <li><i class="far fa-user-tie"></i>4 Người</li>
                        <li><i class="far fa-gas-pump"></i>Hybrid</li>
                        <li><i class="far fa-steering-wheel"></i>Số tự động</li>
                    </ul>
                    <div class="car-bottom">
                        <div class="car-price">
                            <span class="car-price-amount">$65 <span class="car-price-type">/Mỗi Ngày</span></span>
                        </div>
                        <div class="car-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('car-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mục Xe 6 --}}
            <div class="car-item">
                <div class="car-img">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/car/06.jpg') }}" alt="Xe Toyota Corolla">
                    <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                </div>
                <div class="car-content">
                    <h4 class="car-title"><a href="{{ url('car-single') }}">Xe Toyota Corolla</a></h4>
                    <p><i class="far fa-location-dot"></i> 25/B Milford Road, New York</p>
                    <div class="car-rate">
                        <span class="badge"><i class="far fa-star"></i> 5.0</span>
                        <span class="car-rate-type">Tuyệt vời</span>
                        <span class="car-rate-review">(2.5k Đánh giá)</span>
                    </div>
                    <ul class="car-info-list">
                        <li><i class="far fa-car"></i>Đời xe: 2025</li>
                        <li><i class="far fa-user-tie"></i>4 Người</li>
                        <li><i class="far fa-gas-pump"></i>Hybrid</li>
                        <li><i class="far fa-steering-wheel"></i>Số tự động</li>
                    </ul>
                    <div class="car-bottom">
                        <div class="car-price">
                            <span class="car-price-amount">$58 <span class="car-price-type">/Mỗi Ngày</span></span>
                        </div>
                        <div class="car-text-btn">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('car-single') }}">Xem Chi tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- car area end -->


<!-- team-area -->
<div class="team-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Đội Ngũ Của Chúng Tôi</span>
                    <h2 class="site-title">Gặp Gỡ Đội Ngũ Chuyên Gia Của Chúng Tôi</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">

            {{-- Thành viên 1 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="team-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/team/01.jpg') }}" alt="Ảnh thành viên Edna Craig">
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Edna Craig</a></h5>
                            <span>Trưởng phòng Thiết kế</span>
                        </div>
                        <div class="team-social">
                            <ul class="team-social-btn">
                                <li><span><i class="far fa-share-alt"></i></span></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Thành viên 2 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                    <div class="team-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/team/02.jpg') }}" alt="Ảnh thành viên Jeffrey Cox">
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Jeffrey Cox</a></h5>
                            <span>Người sáng lập & Giám đốc</span>
                        </div>
                        <div class="team-social">
                            <ul class="team-social-btn">
                                <li><span><i class="far fa-share-alt"></i></span></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Thành viên 3 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                    <div class="team-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/team/03.jpg') }}"
                            alt="Ảnh thành viên Audrey Gadis">
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Audrey Gadis</a></h5>
                            <span>Hỗ trợ Bán hàng</span>
                        </div>
                        <div class="team-social">
                            <ul class="team-social-btn">
                                <li><span><i class="far fa-share-alt"></i></span></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Thành viên 4 --}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="team-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/team/04.jpg') }}"
                            alt="Ảnh thành viên Rodger Garza">
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Rodger Garza</a></h5>
                            <span>Quản lý Tài khoản</span>
                        </div>
                        <div class="team-social">
                            <ul class="team-social-btn">
                                <li><span><i class="far fa-share-alt"></i></span></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- team-area end -->


<!-- download area -->
<div class="download-area pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="download-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <img src="assets/img/download/01.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="download-content wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading mb-0">
                        <span class="site-title-tagline"><i class="far fa-plane"></i> Download</span>
                        <h2 class="site-title">Tavelo Android and IOS App is Available! Download Now</h2>
                        <p>There are many variations of passages contrary to popular belief available the but
                            the majority have suffered alteration in some form by injected humour.</p>
                        <ul class="download-feature">
                            <li><i class="far fa-check"></i> At vero accusamus iusto odio ducimus blanditii</li>
                            <li><i class="far fa-check"></i> Sed perspiciatis unde omnis iste natu sit
                                voluptatem</li>
                            <li><i class="far fa-check"></i> Nor again is anyone who loves pursues desires</li>
                        </ul>
                        <div class="download-link">
                            <a href="#"><img src="assets/img/download/google-play.png" alt=""></a>
                            <a href="#"><img src="assets/img/download/app-store.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- download area end -->


<!-- testimonial area -->
<div class="testimonial-area ts-bg py-120">
    {{-- Giữ nguyên shadow-text để không làm hỏng CSS gốc --}}
    <div class="shadow-text">tavelo</div>
    <div class="container pb-30">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center mb-4">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Đánh Giá Khách Hàng</span>
                    <h2 class="site-title text-white">Khách Hàng Của Chúng Tôi Nói Gì Về Chúng Tôi?</h2>
                </div>
            </div>
        </div>

        {{-- Slider chứa các đánh giá (cần thư viện Owl Carousel) --}}
        <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-duration="1s"
            data-wow-delay=".25s">

            {{-- Đánh giá 1 --}}
            <div class="testimonial-single">
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/testimonial/01.jpg') }}" alt="Ảnh Diana Carter">
                    </div>
                </div>
                <div class="testimonial-quote">
                    <span class="count">01</span>
                    <div class="testimonial-author-info">
                        <h4>Diana Carter</h4>
                        <p>Khách hàng của chúng tôi</p>
                    </div>
                    <p>
                        Có rất nhiều đoạn văn có sẵn nhưng phần lớn đã bị thay đổi dưới một số hình thức,
                        chèn thêm sự hài hước và các từ trông có vẻ đáng tin.
                    </p>
                    <div class="testimonial-quote-icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/quote.svg') }}" alt="Biểu tượng trích dẫn">
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            {{-- Đánh giá 2 --}}
            <div class="testimonial-single">
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/testimonial/02.jpg') }}" alt="Ảnh Brandon Wigfall">
                    </div>
                </div>
                <div class="testimonial-quote">
                    <span class="count">02</span>
                    <div class="testimonial-author-info">
                        <h4>Brandon Wigfall</h4>
                        <p>Khách hàng của chúng tôi</p>
                    </div>
                    <p>
                        Có rất nhiều đoạn văn có sẵn nhưng phần lớn đã bị thay đổi dưới một số hình thức,
                        chèn thêm sự hài hước và các từ trông có vẻ đáng tin.
                    </p>
                    <div class="testimonial-quote-icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/quote.svg') }}" alt="Biểu tượng trích dẫn">
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            {{-- Đánh giá 3 --}}
            <div class="testimonial-single">
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/testimonial/03.jpg') }}" alt="Ảnh Sylvia Green">
                    </div>
                </div>
                <div class="testimonial-quote">
                    <span class="count">03</span>
                    <div class="testimonial-author-info">
                        <h4>Sylvia Green</h4>
                        <p>Khách hàng của chúng tôi</p>
                    </div>
                    <p>
                        Có rất nhiều đoạn văn có sẵn nhưng phần lớn đã bị thay đổi dưới một số hình thức,
                        chèn thêm sự hài hước và các từ trông có vẻ đáng tin.
                    </p>
                    <div class="testimonial-quote-icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/quote.svg') }}" alt="Biểu tượng trích dẫn">
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            {{-- Đánh giá 4 --}}
            <div class="testimonial-single">
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/testimonial/04.jpg') }}"
                            alt="Ảnh Miguel Woodworth">
                    </div>
                </div>
                <div class="testimonial-quote">
                    <span class="count">04</span>
                    <div class="testimonial-author-info">
                        <h4>Miguel Woodworth</h4>
                        <p>Khách hàng của chúng tôi</p>
                    </div>
                    <p>
                        Có rất nhiều đoạn văn có sẵn nhưng phần lớn đã bị thay đổi dưới một số hình thức,
                        chèn thêm sự hài hước và các từ trông có vẻ đáng tin.
                    </p>
                    <div class="testimonial-quote-icon">
                        {{-- Sửa đường dẫn icon --}}
                        <img src="{{ asset('clients/assets/img/icon/quote.svg') }}" alt="Biểu tượng trích dẫn">
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- testimonial area end -->


<!-- blog area -->
<div class="blog-area pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-plane"></i> Blog Của Chúng Tôi</span>
                    <h2 class="site-title">Blog & Tin Tức Mới Nhất</h2>
                </div>
            </div>
        </div>
        <div class="row">

            {{-- Bài viết 1 --}}
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <span class="blog-date">25 Tháng 8, 2025</span>
                    <div class="blog-item-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/blog/01.jpg') }}" alt="Hình ảnh blog">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> Bởi Alicia Davis</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 25.5k Bình luận</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('blog-single') }}">Có nhiều biến thể có sẵn cho đa số dưới một số hình
                                thức
                                hài hước được chèn vào</a>
                        </h4>
                        {{-- Sửa liên kết tĩnh --}}
                        <a class="theme-btn mt-3" href="{{ url('blog-single') }}">Đọc Thêm <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Bài viết 2 --}}
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                    <span class="blog-date">27 Tháng 8, 2025</span>
                    <div class="blog-item-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/blog/02.jpg') }}" alt="Hình ảnh blog">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> Bởi Alicia Davis</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 25.5k Bình luận</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('blog-single') }}">Sự thật đã được thiết lập rằng độc giả sẽ bị phân tâm
                                bởi
                                nội dung dễ đọc</a>
                        </h4>
                        {{-- Sửa liên kết tĩnh --}}
                        <a class="theme-btn mt-3" href="{{ url('blog-single') }}">Đọc Thêm <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Bài viết 3 --}}
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                    <span class="blog-date">30 Tháng 8, 2025</span>
                    <div class="blog-item-img">
                        {{-- Sửa đường dẫn ảnh --}}
                        <img src="{{ asset('clients/assets/img/blog/03.jpg') }}" alt="Hình ảnh blog">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> Bởi Alicia Davis</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 25.5k Bình luận</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            {{-- Sửa liên kết tĩnh --}}
                            <a href="{{ url('blog-single') }}">Trái ngược với niềm tin phổ biến, chỉ là văn bản đơn
                                giản
                                ngẫu nhiên từ tác phẩm cổ điển</a>
                        </h4>
                        {{-- Sửa liên kết tĩnh --}}
                        <a class="theme-btn mt-3" href="{{ url('blog-single') }}">Đọc Thêm <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- blog area end -->


<!-- partner area -->
<div class="partner-area">
    {{-- Lưu ý: Cấu trúc div này có vẻ hơi bất thường (partner-area chỉ có một col-lg-8),
       nhưng tôi sẽ giữ nguyên cấu trúc gốc để đảm bảo CSS không bị ảnh hưởng, chỉ sửa các đường dẫn. --}}
    <div class="col-lg-8">
        <div class="partner-wrap partner-negative">
            <div class="col-lg-11 mx-auto">
                {{-- Khu vực Slider Đối tác (cần thư viện Owl Carousel hoặc tương tự) --}}
                <div class="partner-slider owl-carousel owl-theme">
                    {{-- Sửa đường dẫn ảnh --}}
                    <img src="{{ asset('clients/assets/img/partner/01.png') }}" alt="Logo Đối tác">
                    <img src="{{ asset('clients/assets/img/partner/02.png') }}" alt="Logo Đối tác">
                    <img src="{{ asset('clients/assets/img/partner/03.png') }}" alt="Logo Đối tác">
                    <img src="{{ asset('clients/assets/img/partner/04.png') }}" alt="Logo Đối tác">
                    <img src="{{ asset('clients/assets/img/partner/01.png') }}" alt="Logo Đối tác">
                    <img src="{{ asset('clients/assets/img/partner/02.png') }}" alt="Logo Đối tác">
                    <img src="{{ asset('clients/assets/img/partner/03.png') }}" alt="Logo Đối tác">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partner area end -->

</main>


@include('clients.blocks.footer')
