@extends('admin.layouts.master')

@section('title', 'Quản lý Đặt Tour')

@section('content')

<!-- Content Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách Đặt Tour</h1>
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
                            <th>tourId</th>
                            <th>userId</th>
                            <th>Tên Tour</th>
                            <th>Người Đặt</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Ngày Đặt</th>
                            <th>Người Lớn</th>
                            <th>Trẻ Em</th>
                            <th>Tổng Tiền</th>
                            <th>Trạng Thái</th>
                            <th width="160">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->bookingId }}</td>
                            <td>{{ $booking->tourId }}</td>
                            <td>{{ $booking->userid }}</td>
                            <td>{{ $booking->tour->title ?? '—' }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ \Carbon\Carbon::parse($booking->bookingDate)->format('d/m/Y') }}</td>
                            <td>{{ $booking->numAdults }}</td>
                            <td>{{ $booking->numChildren }}</td>
                            <td>{{ number_format($booking->totalPrice,0,',','.') }} đ</td>
                            <td>
                                <span class="badge 
                                    {{ $booking->bookingStatus=='Đã duyệt' ? 'bg-success' : ($booking->bookingStatus=='Đã hủy' ? 'bg-danger':'bg-secondary') }}">
                                    {{ $booking->bookingStatus }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('admin.bookings.edit', $booking->bookingId) }}"
                                        class="btn btn-warning btn-sm d-flex align-items-center justify-content-center"
                                        style="min-width: 70px; margin-right: 8px;">
                                        <i class="fas fa-edit me-1"></i> Sửa
                                    </a>

                                    <form action="{{ route('admin.bookings.delete', $booking->bookingId) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger btn-sm d-flex align-items-center justify-content-center"
                                            style="min-width: 70px;"
                                            onclick="return confirm('Bạn có chắc muốn xóa đặt tour này không?')">
                                            <i class="fas fa-trash me-1"></i> Xóa
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="13" class="text-center text-muted">Chưa có đặt tour nào.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
