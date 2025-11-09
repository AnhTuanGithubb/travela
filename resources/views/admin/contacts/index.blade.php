@extends('admin.layouts.master')

@section('title', 'Quản lý Liên hệ')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách Liên hệ (Contact)</h1>
                </div>
            </div>
        </div>
    </section>

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

                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="50">ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Tin nhắn</th>
                                <th>Người Gửi (UserID)</th>
                                <th>Ngày Gửi</th>
                                <th>Trạng Thái</th>
                                <th width="160">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr class="{{ $contact->isRead == 0 ? 'table-warning' : '' }}">
                                    <td>{{ $contact->contactId }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ Str::limit($contact->message, 50) }}</td> {{-- Giới hạn độ dài tin nhắn --}}
                                    <td>{{ $contact->userId ?? 'Khách' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($contact->timestamp)->format('H:i d/m/Y') }}</td>
                                    <td>
                                        <span
                                            class="badge 
                                    {{ $contact->isRead == 1 ? 'bg-success' : 'bg-danger' }}">
                                            {{ $contact->isRead == 1 ? 'Đã đọc' : 'Chưa đọc' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            {{-- Nút Đánh dấu đã đọc --}}
                                            <form action="{{ route('admin.contacts.mark_read', $contact->contactId) }}"
                                                method="POST" style="display:inline;"
                                                onsubmit="return confirm('Đánh dấu đã đọc?')">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
                                                    style="min-width: 90px; margin-right: 8px;">
                                                    <i class="fas fa-check-circle me-1"></i> Đã đọc
                                                </button>
                                            </form>

                                            {{-- Nút Xóa --}}
                                            <form action="{{ route('admin.contacts.delete', $contact->contactId) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger btn-sm d-flex align-items-center justify-content-center"
                                                    style="min-width: 70px;"
                                                    onclick="return confirm('Bạn có chắc muốn xóa liên hệ này không?')">
                                                    <i class="fas fa-trash me-1"></i> Xóa
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted">Chưa có liên hệ nào.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Hiển thị phân trang --}}
                    <div class="d-flex justify-content-center mt-3">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
