 @include('clients.blocks.header')

 @include('clients.blocks.banner2')





 <!-- search area -->
 <div class="search-area search-common">
     <div class="container">
         <div class="search-wrapper">
             <!-- tour search -->
             <div class="search-box tour-search">
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
                                                             class="qty-amount passenger-adult" value="2" readonly>
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
                                                             class="qty-amount passenger-children" value="0"
                                                             readonly>
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
                                                             class="qty-amount passenger-room" value="2" readonly>
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
                                                             value="Single Room" name="room-type" id="room-type10">
                                                         <label class="form-check-label" for="room-type10">
                                                             Single Room
                                                         </label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input class="form-check-input" checked type="radio"
                                                             value="Double Room" name="room-type" id="room-type11">
                                                         <label class="form-check-label" for="room-type11">
                                                             Double Room
                                                         </label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input class="form-check-input" type="radio"
                                                             value="Deluxe Room" name="room-type" id="room-type12">
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
                                 <button type="submit" class="theme-btn"><span class="far fa-search"></span>Search
                                     Now</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             <!-- tour search end -->
         </div>
     </div>
 </div>
 <!-- search area end -->


 <!-- tour grid -->
 <div class="tour-grid py-120">
     <div class="container">
         <div class="row">
             <!-- tour booking sidebar -->
             <div class="col-lg-4 col-xl-3 mb-4">
                 <div class="booking-sidebar">
                     <div class="booking-item">
                         <h4 class="booking-title">Điểm đến</h4>
                         <a href="{{ route('tours') }}" class="btn btn-primary">
                             Tất cả tour
                         </a>
                         <div class="tour-category">
                             <div class="form-check">
                                 <input class="form-check-input" type="radio" value="b" name="domain"
                                     id="id_mien_bac">
                                 <label class="form-check-label" for="id_mien_bac">
                                     Miền Bắc <span>({{ $domainsCount['mien_bac'] }})</span>
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" type="radio" value="t" name="domain"
                                     id="id_mien_trung">
                                 <label class="form-check-label" for="id_mien_trung">
                                     Miền Trung <span>({{ $domainsCount['mien_trung'] }})</span>
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" type="radio" value="n" name="domain"
                                     id="id_mien_nam">
                                 <label class="form-check-label" for="id_mien_nam">
                                     Miền Nam <span>({{ $domainsCount['mien_nam'] }})</span>
                                 </label>
                             </div>
                         </div>
                     </div>
                     <div class="booking-item">
                         <h4 class="booking-title">Theo Giá</h4>
                         <div class="tour-price">
                             <div class="price-range-slider">
                                 <div class="price-range-info">
                                     <label for="priceRange1">Price:</label>
                                     <input type="text" class="priceRange" id="priceRange1" readonly>
                                 </div>
                                 <div id="price-range1" class="price-range slider"></div>
                             </div>
                         </div>
                     </div>
                     {{-- <div class="booking-item">
                         <h4 class="booking-title">Thời Gian</h4>
                         <div class="tour-duration">
                             <div class="form-check">
                                 <input class="form-check-input" name="duration" type="radio" value="1"
                                     id="3ngay2dem" value="3n2d">
                                 <label class="form-check-label" for="3ngay2dem">
                                     3 Ngày 2 Đêm <span>(20)</span>
                                 </label>
                             </div>
                            <div class="form-check">
                                 <input class="form-check-input" name="duration"type="radio" value="1"
                                     id="4ngay3dem" value="4n3d">
                                 <label class="form-check-label" for="4ngay3dem">
                                     4 Ngày 3 Đêm <span>(20)</span>
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="duration"type="radio" value="1"
                                     id="5ngay4dem" value="5n4d">
                                 <label class="form-check-label" for="5ngay4dems">
                                     5 Ngày 4 Đêm <span>(20)</span>
                                 </label>
                             </div>
                         </div>
                     </div> --}}
                     <div class="booking-item">
                         <h4 class="booking-title">Thời Gian</h4>
                         <div class="tour-duration">
                             <div class="form-check">
                                 <input class="form-check-input" name="duration" type="radio" id="3ngay2dem"
                                     value="3n2d">
                                 <label class="form-check-label" for="3ngay2dem">
                                     3 Ngày 2 Đêm <span>(20)</span>
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="duration" type="radio" id="4ngay3dem"
                                     value="4n3d">
                                 <label class="form-check-label" for="4ngay3dem">
                                     4 Ngày 3 Đêm <span>(20)</span>
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="duration" type="radio" id="5ngay4dem"
                                     value="5n4d">
                                 <label class="form-check-label" for="5ngay4dem">
                                     5 Ngày 4 Đêm <span>(20)</span>
                                 </label>
                             </div>
                         </div>
                     </div>

                     <div class="booking-item">
                         <h4 class="booking-title">Số Sao</h4>
                         <div class="tour-language">
                             <div class="form-check">
                                 <li class="list-inline-item">
                                     <input class="form-check-input" type="radio" name="filter_star"
                                         id="5star" value="5">
                                     <label for="5star">
                                         <span class="ratting">
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                         </span>
                                     </label>
                                 </li>

                             </div>
                             <div class="form-check">
                                 <li class="list-inline-item">
                                     <input class="form-check-input" type="radio" name="filter_star"
                                         id="4star" value="4">
                                     <label for="4star">
                                         <span class="ratting">
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </span>
                                     </label>
                                 </li>

                             </div>
                             <div class="form-check">
                                 <li class="list-inline-item">
                                     <input class="form-check-input" type="radio" name="filter_star"
                                         id="3star" value="3">
                                     <label for="3star">
                                         <span class="ratting">
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </span>
                                     </label>
                                 </li>

                             </div>
                             <div class="form-check">
                                 <li class="list-inline-item">
                                     <input class="form-check-input" type="radio" name="filter_star"
                                         id="2star" value="2">
                                     <label for="2star">
                                         <span class="ratting">
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </span>
                                     </label>
                                 </li>

                             </div>
                             <div class="form-check">
                                 <li class="list-inline-item">
                                     <input class="form-check-input" type="radio" name="filter_star"
                                         id="1star" value="1">
                                     <label for="1star">
                                         <span class="ratting">
                                             <i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </span>
                                     </label>
                                 </li>

                             </div>
                         </div>
                     </div>



                 </div>
             </div>
             <!-- tour booking grid -->
             <div class="col-lg-8 col-xl-9">
                 <div class="col-md-12">
                     <div class="booking-sort">
                         <h5>2,350 Results Found</h5>
                         <div class="booking-sort-list-grid">
                             <a class="booking-sort-grid active" href="tour-grid.html"><i
                                     class="far fa-grid-2"></i></a>
                             <a class="booking-sort-list" href="tour-list.html"><i class="far fa-list-ul"></i></a>
                         </div>
                         {{-- <div class="col-md-3 booking-sort-box">
                             <select class="select">
                                 <option value="1">Sort By Default</option>
                                 <option value="2">Sort By Popular</option>
                                 <option value="3">Sort By Low Price</option>
                                 <option value="4">Sort By High Price</option>
                             </select>
                         </div> --}}
                         <div class="col-md-3 booking-sort-box">
                             <select class="select" onchange="window.location.href = this.value;">

                                 <?php $baseUrl = url()->current(); ?>

                                 <option value="{{ $baseUrl }}?sort_by=default"
                                     {{ request('sort_by', 'default') == 'default' ? 'selected' : '' }}>
                                     Sort By Default
                                 </option>

                                 <option value="{{ $baseUrl }}?sort_by=popular"
                                     {{ request('sort_by') == 'popular' ? 'selected' : '' }}>
                                     Sort By Popular
                                 </option>

                                 <option value="{{ $baseUrl }}?sort_by=low_price"
                                     {{ request('sort_by') == 'low_price' ? 'selected' : '' }}>
                                     Sort By Low Price
                                 </option>

                                 <option value="{{ $baseUrl }}?sort_by=high_price"
                                     {{ request('sort_by') == 'high_price' ? 'selected' : '' }}>
                                     Sort By High Price
                                 </option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="row" id="tours-container">
                     @foreach ($tours as $tour)
                         <div class="col-md-6 col-lg-4">
                             <div class="tour-item">
                                 <div class="tour-img">
                                     <span class="badge badge-discount">25% Save</span>
                                     <img src="{{ asset('clients/assets/img/gallery-tour/' . $tour->images[0] . '') }}"
                                         alt="">
                                     <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                                 </div>
                                 <div class="tour-content">
                                     <div class="tour-top">
                                         <a href="#" class="tour-category"><i class="far fa-tag"></i>
                                             Historical</a>
                                         <span class="tour-place"><i class="far fa-earth-americas"></i> 10
                                             Places</span>
                                     </div>
                                     <h4 class="tour-title"><a
                                             href="{{ url('tour-detail', ['id' => $tour->tourId]) }}">{{ $tour->title }}</a>
                                     </h4>
                                     <p><i class="far fa-location-dot"></i> {{ $tour->destination }}</p>
                                     <div class="hotel-rate">
                                         @php
                                             $rating = round($tour->star);
                                         @endphp

                                         @for ($i = 0; $i < $rating; $i++)
                                             <i class="fas fa-star text-warning"></i>
                                         @endfor


                                         <span class="hotel-rate-review">(2.5k Reviews)</span>
                                     </div>
                                     <div class="tour-duration"><i class="far fa-clock"></i>{{ $tour->time }}</div>
                                     <div class="tour-bottom">
                                         <div class="tour-price">
                                             Từ <span>{{ number_format($tour->priceAdult, 0, ',', '.') }}VND</span>
                                         </div>
                                         <div class="tour-text-btn">
                                             <a href="{{ url('tour-detail', ['id' => $tour->tourId]) }}">Xem Thêm <i
                                                     class="fas fa-arrow-right"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach


                     <!-- pagination -->
                     <div class="pagination-area">
                         <div aria-label="Page navigation example">
                             {{-- <ul class="pagination">
                                 <li class="page-item">
                                     <a class="page-link" href="#" aria-label="Previous">
                                         <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                     </a>
                                 </li>
                                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                     <a class="page-link" href="#" aria-label="Next">
                                         <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                     </a>
                                 </li>
                             </ul> --}}
                             <div class="pagination-area">
                                 <div class="d-flex justify-content-center">
                                     {{ $tours->links('pagination::bootstrap-5') }}
                                 </div>
                                 {{-- <div class="pagination-showing text-center mt-2">
                                     <p>
                                         Hiển thị {{ $tours->firstItem() }} - {{ $tours->lastItem() }}
                                         trong tổng số {{ $tours->total() }} tours
                                     </p>
                                 </div> --}}
                             </div>


                         </div>
                         {{-- <div class="pagination-showing">
                             <p>Showing 1 - 6 of 24 Tours</p>
                         </div> --}}
                     </div>
                     <!-- pagination end -->

                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- tour grid end -->

 </main>
 @include('clients.blocks.footer')
 <script>
     var filterTourUrl = "{{ route('filter-tours') }}"
 </script>
