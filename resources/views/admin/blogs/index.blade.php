@extends('admin.layouts.master')

@section('title', 'Quản lý Blog')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách Blog</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                        + Thêm Blog mới
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">

                    {{-- Thông báo thành công --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="60">ID</th>
                                <th width="200">Tiêu đề</th>
                                <th width="150">Tác giả</th>
                                <th width="150">Ngày đăng</th>
                                <th width="150">Ảnh chính</th>
                                <th width="150">Ảnh chi tiết</th>
                                <th width="250">Mô tả</th>
                                <th width="100">Trạng thái</th>
                                <th width="200">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->blogId }}</td>
                                    <td><strong>{{ $blog->title }}</strong></td>
                                    <td>{{ $blog->author }}</td>
                                    <td>{{ \Carbon\Carbon::parse($blog->postdate)->format('d/m/Y') }}</td>

                                    {{-- Ảnh chính --}}
                                    <td>
                                        @if ($blog->image)
                                            <img src="{{ asset('/clients/assets/img/blog/' . $blog->image) }}"
                                                width="100" height="70" alt="Ảnh Blog"
                                                style="object-fit: cover; border-radius: 5px;">
                                        @else
                                            <span class="text-muted fst-italic">Chưa có ảnh</span>
                                        @endif
                                    </td>

                                    {{-- Ảnh chi tiết --}}
                                    <td>
                                        @if ($blog->detailimage)
                                            <img src="{{ asset('/clients/assets/img/blog/' . $blog->detailimage) }}"
                                                width="100" height="70" alt="Ảnh chi tiết"
                                                style="object-fit: cover; border-radius: 5px;">
                                        @else
                                            <span class="text-muted fst-italic">Chưa có ảnh chi tiết</span>
                                        @endif
                                    </td>

                                    {{-- Mô tả --}}
                                    <td>{{ Str::limit($blog->description, 80) }}</td>

                                    {{-- Trạng thái --}}
                                    <td>{!! $blog->statusBadge !!}</td>

                                    {{-- Thao tác --}}
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            {{-- Nút sửa --}}
                                            <a href="{{ route('admin.blogs.edit', $blog->blogId) }}"
                                                class="btn btn-warning btn-sm d-flex align-items-center">
                                                <i class="fas fa-edit me-1"></i> Sửa
                                            </a>

                                            {{-- Nút xóa --}}
                                            <a href="{{ route('admin.blogs.delete', $blog->blogId) }}"
   onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"
   class="btn btn-danger btn-sm">
   <i class="fas fa-trash"></i> Xóa
</a>


                                            {{-- Nút ẩn/hiện --}}
                                            <a href="{{ route('admin.blogs.toggle', $blog->blogId) }}"
                                                class="btn btn-info btn-sm d-flex align-items-center">
                                                <i class="fas fa-eye{{ $blog->isActive ? '-slash' : '' }} me-1"></i>
                                                {{ $blog->isActive ? 'Ẩn' : 'Hiện' }}
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted">Chưa có blog nào được thêm.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
