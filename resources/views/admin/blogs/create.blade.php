@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">📝 Thêm Blog Mới</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Thông tin blog --}}
        <div class="card mb-3">
            <div class="card-header fw-bold">Thông tin bài viết</div>
            <div class="card-body">
                {{-- Tiêu đề --}}
                <div class="mb-3">
                    <label class="form-label">Tiêu đề bài viết <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                {{-- Mô tả ngắn --}}
                {{-- <div class="mb-3">
                    <label class="form-label">Mô tả ngắn</label>
                    <textarea name="short_description" class="form-control" rows="2">{{ old('short_description') }}</textarea>
                </div> --}}

                {{-- Nội dung chính (mô tả chi tiết) --}}
                <div class="mb-3">
                    <label class="form-label">Nội dung chi tiết <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" rows="6" required>{{ old('description') }}</textarea>
                </div>

                {{-- Tác giả + Ngày đăng --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tác giả</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Ngày đăng</label>
                        <input type="date" name="postdate" class="form-control" value="{{ old('postdate') }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- Ảnh đại diện & ảnh chi tiết --}}
        <div class="card mb-3">
            <div class="card-header fw-bold">Ảnh bài viết</div>
            <div class="card-body">
                {{-- Ảnh đại diện --}}
                <div class="mb-3">
                    <label class="form-label">Ảnh đại diện (image)</label>
                    <input type="file" name="image" class="form-control" accept="image/*" id="thumbnailInput">
                    <div id="thumbnailPreview" class="mt-2"></div>
                </div>

                {{-- Ảnh chi tiết --}}
                <div class="mb-3">
                    <label class="form-label">Ảnh chi tiết (detailimage)</label>
                    <input type="file" name="detailimage" class="form-control" accept="image/*" id="detailInput">
                    <div id="detailPreview" class="mt-2"></div>
                </div>
            </div>
        </div>

        {{-- Trạng thái hiển thị --}}
        <div class="card mb-3">
            <div class="card-header fw-bold">Cài đặt hiển thị</div>
            <div class="card-body">
                <label class="form-label">Trạng thái</label>
                <select name="isActive" class="form-control">
                    <option value="1" selected>Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
        </div>

        {{-- Nút thao tác --}}
        <div class="text-end">
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Quay lại</a>
            <button type="submit" class="btn btn-primary">Thêm bài viết</button>
        </div>
    </form>
</div>

{{-- CSS xem trước ảnh --}}
<style>
    #thumbnailPreview img, #detailPreview img {
        width: 150px;
        height: 100px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #ddd;
        margin-top: 5px;
    }
</style>

{{-- Script xem trước ảnh --}}
<script>
    function previewImage(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);
        preview.innerHTML = '';
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                const img = document.createElement('img');
                img.src = e.target.result;
                preview.appendChild(img);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.getElementById('thumbnailInput').addEventListener('change', () => previewImage('thumbnailInput', 'thumbnailPreview'));
    document.getElementById('detailInput').addEventListener('change', () => previewImage('detailInput', 'detailPreview'));
</script>
@endsection
