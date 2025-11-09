 @include('clients.blocks.header')
 </header>

 @include('clients.blocks.banner2')



 <!-- booking-confirm -->
 <div class="booking-confirm py-120">
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <div class="booking-confirm-content">
                     <div class="booking-confirm-icon"><i class="far fa-check"></i></div>
                     <h3>Your Booking Roltak Hotel Is Confirmed.</h3>
                     <p>There are many variations of passages available but the majority have suffered alteration
                         in some form by injected humour or randomised words.</p>
                     <a href="#" class="theme-btn">Book More Now<i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <div class="col-md-12 mt-5">

                 <div class="row">
                     @foreach ($bookings as $booking)
                         <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                             <div class="card booking-summary border-0 h-100 shadow-sm">

                                 <div
                                     class="card-header bg-primary text-white py-2 d-flex justify-content-between align-items-center">
                                     <h6 class="mb-0 fs-6">Booking #{{ $booking->booking_id }}</h6>
                                     <span
                                         class="badge 
    {{ $booking->bookingStatus == 'Pending' ? 'bg-warning text-dark' : ($booking->bookingStatus == 'Đã hủy' ? 'bg-danger' : 'bg-success') }}">
                                         {{ $booking->bookingStatus }}
                                     </span>

                                 </div>

                                 @php
                                     $img = $booking->image;
                                     $imageDirectory = 'clients/assets/img/gallery-tour/';
                                     $defaultImage = asset('clients/assets/img/no-image.jpg');

                                     if ($img) {
                                         $fullImagePath = $imageDirectory . $img;
                                         $imgSrc = filter_var($fullImagePath, FILTER_VALIDATE_URL)
                                             ? $fullImagePath
                                             : asset($fullImagePath);
                                     } else {
                                         $imgSrc = $defaultImage;
                                     }
                                 @endphp

                                 <img src="{{ $imgSrc }}" alt="{{ $booking->tour_title }}" class="card-img-top"
                                     style="height: 180px; object-fit: cover;">

                                 <div class="card-body d-flex flex-column justify-content-between p-3">

                                     <div>
                                         <dl class="row small mb-2">

                                             {{-- Tên Tour --}}
                                             <dt class="col-5 fw-bold"><i
                                                     class="fas fa-map-marker-alt text-info me-2"></i> Tên tour:</dt>
                                             <dd class="col-7 text-end fw-bold mb-1 text-truncate"
                                                 title="{{ $booking->tour_title }}">{{ $booking->tour_title }}</dd>

                                             {{-- Giá người lớn --}}
                                             <dt class="col-5"><i class="fas fa-user text-success me-2"></i> Giá người
                                                 lớn:</dt>
                                             <dd class="col-7 text-end fw-bold mb-1">
                                                 {{ number_format($booking->priceAdult ?? 0) }} VNĐ</dd>

                                             {{-- Giá trẻ em (Đã sửa lỗi tên biến thành priceChild) --}}
                                             <dt class="col-5"><i class="fas fa-child text-success me-2"></i> Giá trẻ
                                                 em:</dt>
                                             <dd class="col-7 text-end fw-bold mb-1">
                                                 {{ number_format($booking->priceChild ?? 0) }} VNĐ</dd>

                                             {{-- Ngày đặt --}}
                                             <dt class="col-5"><i class="far fa-calendar-alt text-secondary me-2"></i>
                                                 Ngày đặt:</dt>
                                             <dd class="col-7 text-end mb-1">
                                                 {{ \Carbon\Carbon::parse($booking->bookingDate)->format('d/m/Y') }}
                                             </dd>

                                             {{-- Trạng thái --}}
                                             <dt class="col-5"><i class="fas fa-signal text-warning me-2"></i> Trạng
                                                 thái:</dt>
                                             <dd class="col-7 text-end mb-1">
                                                 <span
                                                     class="badge 
                         {{ $booking->bookingStatus == 'Pending' ? 'bg-warning text-dark' : ($booking->bookingStatus == 'Đã hủy' ? 'bg-danger' : 'bg-success') }}">
                                                     {{ $booking->bookingStatus }}
                                                 </span>

                                             </dd>

                                             {{-- Đánh giá --}}
                                             <dt class="col-5"><i class="fas fa-star text-warning me-2"></i> Đánh giá:
                                             </dt>
                                             <dd class="col-7 text-end mb-1">⭐ {{ $booking->star }}/5</dd>

                                             {{-- TỔNG TIỀN (Làm nổi bật bằng HR và màu đỏ) --}}
                                             <hr class="my-2">
                                             <dt class="col-5 fw-bold text-danger">TỔNG TIỀN:</dt>
                                             <dd class="col-7 text-end fw-bold text-danger">
                                                 {{ number_format($booking->totalPrice ?? 0) }} VNĐ</dd>

                                         </dl>
                                     </div>

                                     {{-- Nút hành động --}}
                                     <div class="booking-confirm-btn mt-3 d-grid">
                                         <a href="#" class="btn btn-sm btn-outline-danger">
                                             <i class="far fa-xmark-circle me-1"></i> Hủy Tour
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- booking-confirm end -->

 </main>

 @include('clients.blocks.footer')
