@extends('admin.layouts.master')

@section('title', 'Chỉnh sửa Trạng thái Booking')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <h1>Chỉnh sửa Trạng thái Booking #{{ $booking->bookingId }}</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.bookings.update', $booking->bookingId) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="bookingStatus" class="form-label">Trạng thái</label>
                        <select name="bookingStatus" id="bookingStatus" class="form-select" required>
                            <option value="Chưa duyệt" {{ $booking->bookingStatus=='Chưa duyệt' ? 'selected' : '' }}>Chưa duyệt</option>
                            <option value="Đã duyệt" {{ $booking->bookingStatus=='Đã duyệt' ? 'selected' : '' }}>Đã duyệt</option>
                            <option value="Đã hủy" {{ $booking->bookingStatus=='Đã hủy' ? 'selected' : '' }}>Đã hủy</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-1"></i> Lưu thay đổi
                    </button>
                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
