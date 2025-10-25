 @include('clients.blocks.header')

 @include('clients.blocks.banner2')

 <!-- contact area -->
 <div class="contact-area py-120">
     <div class="container">
         <div class="contact-wrapper">
             <div class="row">
                 <div class="col-lg-4">
                     <div class="contact-content">
                         <div class="contact-info">
                             <div class="contact-info-icon">
                                 <i class="far fa-map-marker-alt"></i>
                             </div>
                             <div class="contact-info-content">
                                 <h5>Office Address</h5>
                                 <p>25/B Milford, New York, USA</p>
                             </div>
                         </div>
                         <div class="contact-info">
                             <div class="contact-info-icon">
                                 <i class="far fa-phone"></i>
                             </div>
                             <div class="contact-info-content">
                                 <h5>Call Us</h5>
                                 <p>+2 123 4565 789</p>
                             </div>
                         </div>
                         <div class="contact-info">
                             <div class="contact-info-icon">
                                 <i class="far fa-envelope"></i>
                             </div>
                             <div class="contact-info-content">
                                 <h5>Email Us</h5>
                                 <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                         data-cfemail="acc5c2cac3ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</a>
                                 </p>
                             </div>
                         </div>
                         <div class="contact-info">
                             <div class="contact-info-icon">
                                 <i class="far fa-clock"></i>
                             </div>
                             <div class="contact-info-content">
                                 <h5>Open Time</h5>
                                 <p>Mon - Sat (10.00AM - 05.30PM)</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-8 align-self-center">
                     {{-- <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page randomised words which don't look even slightly when looking at its layout. </p>
                                </div>
                                <form method="post" action="https://live.themewild.com/tavelo/assets/php/contact.php" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn">Send
                                        Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div> --}}
                     <!-- 1. THÊM CDN CỦA TOASTR (Đặt trong phần head hoặc trước script) -->
                     <!-- Toastr CSS -->
                     <link rel="stylesheet"
                         href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
                     <!-- Đảm bảo jQuery đã được thêm trước đó -->

                     <div class="contact-form">
                         <div class="contact-form-header">
                             <h2>Get In Touch</h2>
                             <p>It is a long established fact that a reader will be distracted by the readable content
                                 of a page...</p>
                         </div>

                         <form method="POST" action="{{ route('contact.store') }}" id="contact-form">
                             @csrf
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <input type="text" class="form-control" name="name"
                                             placeholder="Your Name" required>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <input type="email" class="form-control" name="email"
                                             placeholder="Your Email" required>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <input type="text" class="form-control" name="phone" placeholder="Your Phone"
                                     required>
                             </div>

                             <div class="form-group">
                                 <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message" required></textarea>
                             </div>

                             <button type="submit" class="theme-btn">
                                 Send Message <i class="far fa-paper-plane"></i>
                             </button>

                             <!-- 🚫 ĐÃ XÓA: Loại bỏ DIV thông báo cũ (.form-message) vì đã dùng Toastr -->
                             <!-- <div class="col-md-12 mt-3"><div class="form-message text-success"></div></div> -->
                         </form>
                     </div>




                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end contact area -->

 <!-- map -->
 <div class="contact-map">
     <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
         style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div>
 <!-- map end -->

 </main>
 @include('clients.blocks.footer')


 {{-- <script>
     $(document).ready(function() {
         $('#contact-form').on('submit', function(e) {
             e.preventDefault(); // Ngăn reload trang

             let formData = $(this).serialize();

             // Xóa thông báo cũ (Selector này phải khớp với class DIV bên trên)
             $('.form-message').html('');

             $.ajax({
                 url: "{{ route('contact.store') }}",
                 type: "POST",
                 data: formData,
                 success: function(response) {
                     if (response.success) {
                         $('.form-message') // Selector đã khớp
                             .removeClass('text-danger')
                             .addClass('text-success')
                             .html("✅ Your message has been sent successfully!");

                         $('#contact-form')[0].reset();
                     } else {
                         $('.form-message')
                             .removeClass('text-success')
                             .addClass('text-danger')
                             .html("❌ Something went wrong. Please try again.");
                     }
                 },
                 error: function(xhr) {
                     let errors = xhr.responseJSON?.errors;
                     if (errors) {
                         let message = Object.values(errors).map(e => e[0]).join('<br>');
                         $('.form-message')
                             .removeClass('text-success')
                             .addClass('text-danger')
                             .html(message);
                     } else {
                         $('.form-message')
                             .removeClass('text-success')
                             .addClass('text-danger')
                             .html("❌ Failed to send message.");
                     }
                 }
             });
         });
     });
 </script> --}}

 <!-- 2. THÊM TOASTR JS (Đặt trước script của bạn) -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script>
     $(document).ready(function() {
         // Cấu hình Toastr (Tùy chọn: thiết lập vị trí, thời gian hiển thị, v.v.)
         toastr.options = {
             "closeButton": true,
             "progressBar": true,
             "positionClass": "toast-top-right", // Vị trí hiển thị
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "3000", // Tự động đóng sau 5 giây
             "extendedTimeOut": "1000",
             "showEasing": "swing",
             "hideEasing": "linear",
             "showMethod": "fadeIn",
             "hideMethod": "fadeOut"
         };

         $('#contact-form').on('submit', function(e) {
             e.preventDefault();

             // Lấy dữ liệu từ form
             let formData = $(this).serialize();

             // Gửi AJAX
             $.ajax({
                 url: "{{ route('contact.store') }}",
                 type: "POST",
                 data: formData,
                 success: function(response) {
                     if (response.success) {
                         // ✅ SỬ DỤNG TOASTR CHO THÀNH CÔNG
                         toastr.success("Tin nhắn của bạn đã được gửi thành công!",
                             "Thành công!");

                         // Xóa nội dung form
                         $('#contact-form')[0].reset();
                     } else {
                         // ❌ SỬ DỤNG TOASTR CHO LỖI (Trường hợp Controller trả về success: false, ít xảy ra)
                         toastr.error("Có lỗi xảy ra. Vui lòng thử lại.", "Lỗi!");
                     }
                 },
                 error: function(xhr) {
                     let errors = xhr.responseJSON?.errors;
                     if (errors) {
                         // Hiển thị lỗi validation
                         let message = Object.values(errors).map(e => e[0]).join('<br>');

                         // ❌ SỬ DỤNG TOASTR CHO LỖI VALIDATION
                         toastr.error(message, "Lỗi Validation");
                     } else {
                         // Lỗi server
                         toastr.error("Gửi tin nhắn thất bại. Lỗi máy chủ.",
                         "Lỗi hệ thống!");
                     }
                 }
             });
         });
     });
 </script>
