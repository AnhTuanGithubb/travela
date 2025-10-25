 @include('clients.blocks.header')

@include('clients.blocks.banner2')

  
        <!-- breadcrumb end -->


      <!-- login area -->
<div class="login-area py-120">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                {{-- Header --}}
                <div class="login-header text-center">
                    <img src="{{ asset('clients/assets/img/logo/logo-dark.png') }}" alt="Logo">
                    <p>Login with your Tavelo account</p>
                </div>

                {{-- Hiển thị thông báo lỗi / thành công --}}
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Hiển thị lỗi validate --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form đăng nhập --}}
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    {{-- Email --}}
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="form-group-icon">
                            <input type="email" name="email" id="email" class="form-control"
                                   placeholder="Your Email"
                                   value="{{ old('email') }}" required>
                            <i class="far fa-envelope"></i>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Mật khẩu --}}
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="form-group-icon">
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Your Password" required>
                            <i class="far fa-lock"></i>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Ghi nhớ & Quên mật khẩu --}}
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                    </div>

                    {{-- Nút đăng nhập --}}
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn w-100">
                            <i class="far fa-sign-in"></i> Login
                        </button>
                    </div>
                </form>

                {{-- Footer --}}
                <div class="login-footer text-center mt-4">
                    <div class="login-divider"><span>Or</span></div>
                    <div class="social-login mb-3">
                        <a href="#" class="btn-fb"><i class="fab fa-facebook"></i> Login With Facebook</a>
                        <a href="#" class="btn-gl"><i class="fab fa-google"></i> Login With Google</a>
                    </div>
                    <p>Don't have an account? 
                        <a href="{{ url('register') }}">Sign Up</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- login area end -->


    </main>
  @include('clients.blocks.footer')