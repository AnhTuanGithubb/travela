 @include('clients.blocks.header')
  </header>

 @include('clients.blocks.banner2')




     <!-- booing _ tóm tắt booking -->
     {{-- <div class="checkout-area py-120">
         <div class="container">
             <div class="row">
                 <div class="booking-form">
                     <form id="bookingForm">
                         @csrf
                         <div class="row">

                             <!-- Name -->
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>Name</label>
                                     <div class="form-group-icon">
                                         <input type="text" name="name" class="form-control"
                                             placeholder="Your Name" required>
                                         <i class="far fa-user"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Email -->
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>Email</label>
                                     <div class="form-group-icon">
                                         <input type="email" name="email" class="form-control"
                                             placeholder="Email Address" required>
                                         <i class="far fa-envelope"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Phone -->
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>Phone</label>
                                     <div class="form-group-icon">
                                         <input type="text" name="phone" class="form-control"
                                             placeholder="Phone Number" required>
                                         <i class="far fa-phone"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Time -->
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>Thời gian</label>
                                     <div class="form-group-icon">
                                         <input type="text" name="time" class="form-control"
                                             value="{{ $tour->startDate }} - {{ $tour->endDate }}" readonly>
                                         <i class="far fa-clock"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Tour -->
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label>Tên tour</label>
                                     <div class="form-group-icon">
                                         <input type="text" class="form-control" value="{{ $tour->title }}"
                                             readonly>
                                         <i class="far fa-map-location-dot"></i>
                                     </div>
                                 </div>
                             </div>

                             <input type="hidden" name="tourId" value="{{ $tour->tourId }}">

                             <!-- Address -->
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label>Address</label>
                                     <div class="form-group-icon">
                                         <input type="text" name="address" class="form-control"
                                             placeholder="Address Line">
                                         <i class="far fa-map-location-dot"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Adults -->
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>Adults</label>
                                     <div class="form-group-icon">
                                         <input type="number" name="numAdults" class="form-control"
                                             placeholder="Number of Adults">
                                         <i class="far fa-user"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Children -->
                             <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>Children</label>
                                     <div class="form-group-icon">
                                         <input type="number" name="numChildren" class="form-control"
                                             placeholder="Number of Children">
                                         <i class="far fa-child"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Message -->
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label>Message</label>
                                     <div class="form-group-icon">
                                         <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Additional Comment"></textarea>
                                         <i class="far fa-pen"></i>
                                     </div>
                                 </div>
                             </div>

                             <!-- Submit -->
                             <div class="col-lg-12">
                                 <button type="submit" class="btn btn-primary w-100">Book Now</button>
                             </div>
                         </div>
                     </form>
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
     </div> --}}

<!-- checkout area -->
@section('content')
<div class="checkout-area py-120">
    <div class="container">
        <div class="row g-4">

            <!-- Kiểm tra đăng nhập -->
            @if (!session('user'))
                <div class="col-12 text-center">
                    <div class="alert alert-warning p-5">
                        <h4>Bạn cần <a href="{{ route('login') }}" class="text-primary">đăng nhập</a> để đặt tour.</h4>
                        
                    </div>
                </div>
            @else

            <!-- Booking Form -->
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="booking-form p-4 shadow-sm rounded bg-white">
                    <form id="bookingForm">
                        @csrf
                        <div class="row">

                            <!-- Name -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tên người đặt</label>
                                    <div class="form-group-icon">
                                        <input type="text" name="name" class="form-control"
                                            value="{{ session('user.name') }}" readonly>
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="form-group-icon">
                                        <input type="email" name="email" class="form-control"
                                            value="{{ session('user.email') }}" readonly>
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <div class="form-group-icon">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                        <i class="far fa-phone"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Time -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Thời gian</label>
                                    <div class="form-group-icon">
                                        <input type="text" name="time" class="form-control"
                                            value="{{ $tour->startDate }} - {{ $tour->endDate }}" readonly>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Tour -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tên tour</label>
                                    <div class="form-group-icon">
                                        <input type="text" class="form-control" value="{{ $tour->title }}" readonly>
                                        <i class="far fa-map-location-dot"></i>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="tourId" value="{{ $tour->tourId }}">

                            <!-- Address -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <div class="form-group-icon">
                                        <input type="text" name="address" class="form-control" placeholder="Address Line">
                                        <i class="far fa-map-location-dot"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Adults -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Người lớn</label>
                                    <div class="form-group-icon">
                                        <input type="number" name="numAdults" class="form-control" placeholder="Number of Adults">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Children -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Trẻ em</label>
                                    <div class="form-group-icon">
                                        <input type="number" name="numChildren" class="form-control" placeholder="Number of Children">
                                        <i class="far fa-child"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Lời nhắn (tuỳ chọn)</label>
                                    <div class="form-group-icon">
                                        <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Additional Comment"></textarea>
                                        <i class="far fa-pen"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary w-100">Đặt Tour Ngay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endif

            <!-- Booking Summary -->
            <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="booking-summary p-4 shadow-sm rounded bg-white">
                    <h4 class="mb-30">Tóm tắt Tour</h4>
                    <div class="booking-property-img mb-3">
                        <img src="{{ asset('clients/assets/img/hotel/room/01.jpg') }}" alt="Tour Image" class="img-fluid rounded">
                    </div>
                    <div class="booking-property-content">
                        <h5>{{ $tour->title }}</h5>
                        <p><i class="far fa-map-marker-alt"></i> {{ $tour->destination ?? 'Đang cập nhật' }}</p>
                        <div class="booking-property-rate mb-3">
    <span class="badge bg-warning text-dark">
        <i class="far fa-star"></i> {{ number_format($tour->star, 1) }}/5
    </span>
    {{-- <span class="rate-text">(35 Reviews)</span> --}}
</div>

                    </div>
                    <ul class="list-unstyled mt-3">
                        <li>Ngày bắt đầu: <span>{{ $tour->startDate }}</span></li>
                        <li>Ngày kết thúc: <span>{{ $tour->endDate }}</span></li>
                        <li>Giá người lớn: <span>{{ number_format($tour->priceAdult) }}₫</span></li>
                        <li>Giá trẻ em: <span>{{ number_format($tour->priceChild) }}₫</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

 </main>
 @include('clients.blocks.footer')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 {{-- <script>
     $(document).ready(function() {
         $('#bookingForm').on('submit', function(e) {
             e.preventDefault();

             $.ajax({
                 url: "{{ route('clients.booking.store') }}",
                 method: "POST",
                 data: $(this).serialize(),
                 success: function(response) {
                     if (response.success) {
                         toastr.success(response.message, 'Thành công', {
                             timeOut: 3000,
                             closeButton: true,
                             progressBar: true,
                             positionClass: "toast-top-right"
                         });
                         $('#bookingForm')[0].reset();
                     }
                 },
                 error: function(xhr) {
                     if (xhr.status === 422) {
                         // lỗi validate (ví dụ chưa nhập số người)
                         toastr.warning(xhr.responseJSON.message, 'Cảnh báo', {
                             timeOut: 4000,
                             closeButton: true,
                             progressBar: true,
                             positionClass: "toast-top-right"
                         });
                     } else {
                         toastr.error('Có lỗi xảy ra, vui lòng thử lại!', 'Thất bại', {
                             timeOut: 3000,
                             closeButton: true,
                             progressBar: true,
                             positionClass: "toast-top-right"
                         });
                     }
                 }
             });

         });
     });
 </script> --}}

 <script>
$(document).ready(function() {

    // Cấu hình toastr mặc định
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "preventDuplicates": true
    };

    // Xử lý submit form
    $('#bookingForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('clients.booking.store') }}",
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    toastr.clear(); // xóa các toast cũ nếu có
                    toastr.success(response.message, '🎉 Thành công');
                    $('#bookingForm')[0].reset();
                }
            },
            error: function(xhr) {
                toastr.clear(); // xóa toast cũ tránh bị chồng
                if (xhr.status === 422) {
                    // lỗi validate
                    toastr.warning(xhr.responseJSON.message || 'Vui lòng nhập đầy đủ thông tin.', '⚠️ Cảnh báo');
                } else if (xhr.status === 401) {
                    // chưa đăng nhập
                    toastr.error('Bạn cần đăng nhập để đặt tour.', '🔒 Chưa đăng nhập');
                } else {
                    toastr.error('Đã xảy ra lỗi, vui lòng thử lại!', '❌ Thất bại');
                }
            }
        });
    });
});
</script>

