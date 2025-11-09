@include('clients.blocks.header')
@include('clients.blocks.banner2')

>

    <!-- user-profile -->
    <div class="user-profile py-120">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="user-profile-sidebar">
                        <div class="user-profile-sidebar-top text-center">
                            <div class="user-profile-img position-relative">
                                <img src="{{ $user->avatar ? asset('clients/assets/img/account/' . $user->avatar) : asset('clients/assets/img/account/user.jpg') }}"
                                     alt="Avatar" class="rounded-circle" width="120" height="120">
                            </div>
                            <h4 class="mt-3">{{ $user->userName }}</h4>
                            <p>{{ $user->email }}</p>
                        </div>

                        <ul class="user-profile-sidebar-list">
                            <li><a href="#"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                            <li><a class="active" href="{{ route('infor') }}"><i class="far fa-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main content -->
                <div class="col-lg-9">
                    <div class="user-profile-wrapper">
                        <div class="user-profile-card">
                            <h4 class="user-profile-card-title mb-4">Profile Information</h4>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('infor.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" name="userName" class="form-control"
                                               value="{{ old('userName', $user->userName) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                               value="{{ old('email', $user->email) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" name="phoneNumber" class="form-control"
                                               value="{{ old('phoneNumber', $user->phoneNumber) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control"
                                               value="{{ old('address', $user->address) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Avatar</label><br>
                                        @if ($user->avatar)
                                            <img src="{{ asset('clients/assets/img/account/' . $user->avatar) }}" width="100"
                                                 class="rounded mb-2">
                                        @endif
                                        <input type="file" name="avatar" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                            </form>
                        </div>

                        <!-- Thông tin tĩnh -->
                        <div class="user-profile-card mt-4">
                            <h5>Account Details</h5>
                            <div class="profile-info-list">
                                <ul>
                                    <li>Full Name: <span>{{ $user->userName }}</span></li>
                                    <li>Email: <span>{{ $user->email }}</span></li>
                                    <li>Phone: <span>{{ $user->phoneNumber ?? 'Chưa cập nhật' }}</span></li>
                                    <li>Address: <span>{{ $user->address ?? 'Chưa cập nhật' }}</span></li>
                                    <li>Join Date: <span>{{ $user->created_at ?? 'Không rõ' }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End main content -->
            </div>
        </div>
    </div>
    <!-- user-profile end -->

</main>

@include('clients.blocks.footer')
