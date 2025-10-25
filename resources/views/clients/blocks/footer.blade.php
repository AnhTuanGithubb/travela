 <!-- footer area -->
<footer class="footer-area ft-bg">
    <div class="footer-widget pt-60">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                
                {{-- Cột 1: Giới thiệu và Liên hệ --}}
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            {{-- Sửa đường dẫn logo --}}
                            <img src="{{ asset('clients/assets/img/logo/logo.png') }}" alt="Logo Footer">
                        </a>
                        <p class="mb-4">
                            Chúng tôi có nhiều biến thể của các đoạn văn có sẵn, nhưng phần lớn đã bị thay đổi dưới một số hình thức do được chèn vào.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <div class="footer-call">
                                    <div class="footer-call-icon">
                                        <i class="fal fa-headset"></i>
                                    </div>
                                    <div class="footer-call-info">
                                        <h6>Dịch Vụ Hỗ Trợ 24/7</h6>
                                        <a href="tel:+21236547898">+2 123 654 7898</a>
                                    </div>
                                </div>
                            </li>
                            <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                            {{-- Giữ nguyên data-cfemail để tránh lỗi mã hóa email --}}
                            <li><a href="mailto:contact@tavelo.com"><i
                                            class="far fa-envelopes"></i>contact@tavelo.com</a></li>
                        </ul>
                    </div>
                </div>
                
                {{-- Cột 2: Công ty chúng tôi --}}
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Công Ty Chúng Tôi</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Về Chúng Tôi</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Gặp Gỡ Đội Ngũ</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Liên Hệ</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Chương Trình Liên Kết</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Quảng Cáo Với Chúng Tôi</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Tuyển Dụng</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Blog Của Chúng Tôi</a></li>
                        </ul>
                    </div>
                </div>
                
                {{-- Cột 3: Dịch vụ khác --}}
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Dịch Vụ Khác</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Chương Trình Thưởng</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Đối Tác</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Chương Trình Cộng Đồng</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Quan Hệ Nhà Đầu Tư</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Hướng Dẫn Nhà Phát Triển</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> API Du Lịch</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> PointsPLUS</a></li>
                        </ul>
                    </div>
                </div>
                
                {{-- Cột 4: Trung tâm trợ giúp --}}
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Trung Tâm Trợ Giúp</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Tài Khoản</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Câu Hỏi Thường Gặp (FAQ)</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Thông Báo Pháp Lý</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Chính Sách Bảo Mật</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Điều Khoản & Điều Kiện</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Trò Chuyện Trực Tiếp</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Sơ Đồ Trang Web (Sitemap)</a></li>
                        </ul>
                    </div>
                </div>
                
                {{-- Cột 5: Đăng ký nhận tin --}}
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Bản Tin</h4>
                        <div class="footer-newsletter">
                            <p>Đăng ký nhận bản tin của chúng tôi để nhận các cập nhật và tin tức mới nhất</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="form-group-icon">
                                            <input type="email" class="form-control" placeholder="Email của bạn">
                                            <i class="far fa-envelopes"></i>
                                        </div>
                                    </div>
                                    <button class="theme-btn" type="submit">
                                        Đăng Ký Ngay <i class="far fa-paper-plane"></i>
                                    </button>
                                    <p><i class="far fa-lock"></i> Thông tin của bạn an toàn với chúng tôi.</p>
                                </form>
                            </div>
                        </div>
                        <div class="footer-payment-method">
                            <h6>Chúng Tôi Chấp Nhận:</h6>
                            <div class="payment-method-img">
                                {{-- Sửa đường dẫn ảnh thanh toán --}}
                                <img src="{{ asset('clients/assets/img/payment/paypal.svg') }}" alt="Paypal">
                                <img src="{{ asset('clients/assets/img/payment/mastercard.svg') }}" alt="Mastercard">
                                <img src="{{ asset('clients/assets/img/payment/visa.svg') }}" alt="Visa">
                                <img src="{{ asset('clients/assets/img/payment/discover.svg') }}" alt="Discover">
                                <img src="{{ asset('clients/assets/img/payment/american-express.svg') }}" alt="American Express">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Khu vực bản quyền --}}
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Bản quyền <span id="date"></span> <a href="#"> Tavelo </a>. Bảo lưu mọi quyền.
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-angle-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('clients/assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/main.js') }}"></script>
    <script src="{{ asset('clients/assets/js/modernizr.min.js') }}"></script>

</body>

</html>