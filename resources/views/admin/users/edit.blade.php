@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">✏️ Sửa tài khoản: {{ $user->userName }}</h4>

    {{-- Thông báo thành công hoặc lỗi --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    {{-- Form chỉnh sửa người dùng --}}
    <form action="{{ route('admin.users.update', $user->userid) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Thông tin người dùng --}}
        <div class="card mb-3">
            <div class="card-header fw-bold">Thông tin tài khoản</div>
            <div class="card-body">
                <div class="row">
                    {{-- Tên đăng nhập --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tên đăng nhập <span class="text-danger">*</span></label>
                        <input type="text" name="userName" class="form-control"
                               value="{{ old('userName', $user->userName) }}" required>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control"
                               value="{{ old('email', $user->email) }}" required>
                    </div>
                </div>

                <div class="row">
                    {{-- Mật khẩu mới --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mật khẩu mới</label>
                        <input type="password" name="passWord" class="form-control" placeholder="Để trống nếu không đổi">
                    </div>

                    {{-- Xác nhận mật khẩu --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" name="passWord_confirmation" class="form-control" placeholder="Nhập lại mật khẩu nếu đổi">
                    </div>
                </div>

                <div class="row">
                    {{-- Số điện thoại --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" name="phoneNumber" class="form-control"
                               value="{{ old('phoneNumber', $user->phoneNumber) }}">
                    </div>

                    {{-- Địa chỉ --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Địa chỉ</label>
                        <input type="text" name="address" class="form-control"
                               value="{{ old('address', $user->address) }}">
                    </div>
                </div>

                {{-- Trạng thái hoạt động --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Trạng thái hoạt động</label>
                        <select name="isActive" class="form-select" required>
                            <option value="y" {{ $user->isActive == 'y' ? 'selected' : '' }}>✅ Đang hoạt động</option>
                            <option value="n" {{ $user->isActive == 'n' ? 'selected' : '' }}>🚫 Bị khóa</option>
                        </select>
                        <small class="text-muted">
                            Nếu người dùng bị khóa (<b>Bị khóa</b>), họ sẽ không thể đăng nhập hệ thống.
                        </small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Thông tin hệ thống --}}
        <div class="card mb-3">
            <div class="card-header fw-bold">Thông tin hệ thống</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ID người dùng</label>
                        <input type="text" class="form-control" value="{{ $user->userid }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Địa chỉ IP đăng ký</label>
                        <input type="text" class="form-control" value="{{ $user->ipAddress }}" disabled>
                    </div>
                </div>
            </div>
        </div>

        {{-- Nút hành động --}}
        <div class="text-end">
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Quay lại
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Cập nhật tài khoản
            </button>
        </div>
    </form>
</div>

{{-- Style nhẹ --}}
<style>
    label.form-label { font-weight: 600; }
    .card-header { background: #f8f9fa; }
</style>
@endsection
