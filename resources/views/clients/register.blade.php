 @include('clients.blocks.header')

@include('clients.blocks.banner2')

  



        <!-- register area -->
       <div class="login-area py-120">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header text-center">
                    <img src="{{ asset('clients/assets/img/logo/logo-dark.png') }}" alt="">
                    <p>Create your Tavelo account</p>
                </div>

                {{-- Hiển thị thông báo --}}
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form đăng ký --}}
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf

                    {{-- Họ và tên --}}
                    <div class="form-group">
                        <label>Full Name</label>
                        <div class="form-group-icon">
                            <input type="text" name="userName" class="form-control" placeholder="Your Name"
                                value="{{ old('userName') }}" required>
                            <i class="far fa-user"></i>
                        </div>
                        @error('userName')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="form-group-icon">
                            <input type="email" name="email" class="form-control" placeholder="Your Email"
                                value="{{ old('email') }}" required>
                            <i class="far fa-envelope"></i>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Mật khẩu --}}
                    <div class="form-group">
                        <label>Password</label>
                        <div class="form-group-icon">
                            <input type="password" name="password" class="form-control" placeholder="Your Password"
                                required>
                            <i class="far fa-lock"></i>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Xác nhận mật khẩu --}}
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="form-group-icon">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm Password" required>
                            <i class="far fa-lock"></i>
                        </div>
                    </div>

                    {{-- Checkbox điều khoản --}}
                    <div class="form-check form-group">
                        <input class="form-check-input" type="checkbox" id="agree" required>
                        <label class="form-check-label" for="agree">
                            I agree with the <a href="#">Terms Of Service</a>.
                        </label>
                    </div>

                    {{-- Nút đăng ký --}}
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn w-100">
                            <i class="far fa-paper-plane"></i> Sign Up
                        </button>
                    </div>
                </form>

                <div class="login-footer text-center">
                    <div class="login-divider"><span>Or</span></div>
                    <div class="social-login">
                        <a href="#" class="btn-fb"><i class="fab fa-facebook"></i> Login With Facebook</a>
                        <a href="#" class="btn-gl"><i class="fab fa-google"></i> Login With Google</a>
                    </div>
                    <p>Already have an account? <a href="{{ route('login') }}">Login.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- register area end -->

    </main>

    </main>
  @include('clients.blocks.footer')