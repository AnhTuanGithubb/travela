@extends('admin.layouts.master')

@section('title', 'Quản lý Người Dùng')

@section('content')

<!-- Content Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách Người Dùng</h1>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th width="50">ID</th>
                            <th>Tên người dùng</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Địa chỉ IP</th>
                            <th>Hoạt động</th>
                            <th width="160">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->userid }}</td>
                            <td>{{ $user->userName }}</td>
                            <td>{{ $user->passWord }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phoneNumber ?? 'Không có' }}</td>
                            <td>{{ $user->address ?? 'Không có' }}</td>
                            <td>{{ $user->ipAddress ?? 'Không có' }}</td>
                            <td>
                                @if($user->isActive === 'y')
                                    <span class="badge bg-success">Hoạt động</span>
                                @else
                                    <span class="badge bg-secondary">Không hoạt động</span>
                                @endif
                            </td>

                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('admin.users.edit', $user->userid) }}"
                                        class="btn btn-warning btn-sm d-flex align-items-center justify-content-center"
                                        style="min-width: 70px; margin-right: 8px;">
                                        <i class="fas fa-edit me-1"></i> Sửa
                                    </a>

                                    <form action="{{ route('admin.users.delete', $user->userid) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger btn-sm d-flex align-items-center justify-content-center"
                                            style="min-width: 70px;"
                                            onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">
                                            <i class="fas fa-trash me-1"></i> Xóa
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center text-muted">Chưa có người dùng nào.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
