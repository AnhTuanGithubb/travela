@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">✏️ Chỉnh sửa Blog</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

   <form action="{{ route('admin.blogs.update', $blog->blogId) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- ❌ Bỏ dòng này vì route chỉ nhận POST --}}
    {{-- @method('PUT') --}}

    {{-- Thông tin blog --}}
    <div class="card mb-3">
        <div class="card-header fw-bold">Thông tin bài viết</div>
        <div class="card-body">
            {{-- Tiêu đề --}}
            <div class="mb-3">
                <label class="form-label">Tiêu đề bài viết <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control"
                       value="{{ old('title', $blog->title) }}" required>
            </div>

            {{-- Nội dung chi tiết --}}
            <div class="mb-3">
                <label class="form-label">Nội dung chi tiết <span class="text-danger">*</span></label>
                <textarea name="description" class="form-control" rows="6" required>{{ old('description', $blog->description) }}</textarea>
            </div>

            {{-- Tác giả + Ngày đăng --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tác giả</label>
                    <input type="text" name="author" class="form-control"
                           value="{{ old('author', $blog->author) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Ngày đăng</label>
                    <input type="date" name="postdate" class="form-control"
                           value="{{ old('postdate', \Carbon\Carbon::parse($blog->postdate)->format('Y-m-d')) }}">
                </div>
            </div>
        </div>
    </div>

    {{-- Ảnh bài viết --}}
    <div class="card mb-3">
        <div class="card-header fw-bold">Ảnh bài viết</div>
        <div class="card-body">
            {{-- Ảnh đại diện --}}
            <div class="mb-3">
                <label class="form-label">Ảnh đại diện (image)</label>
                <input type="file" name="image" class="form-control" accept="image/*" id="thumbnailInput">
                @if ($blog->image)
                    <div class="mt-2" id="thumbnailPreview">
                        <img src="{{ asset('/clients/assets/img/blog/' . $blog->image) }}"
                             alt="Ảnh đại diện"
                             style="width:150px;height:100px;object-fit:cover;border-radius:6px;border:1px solid #ddd;">
                    </div>
                @else
                    <div id="thumbnailPreview"></div>
                @endif
            </div>

            {{-- Ảnh chi tiết --}}
            <div class="mb-3">
                <label class="form-label">Ảnh chi tiết (detailimage)</label>
                <input type="file" name="detailimage" class="form-control" accept="image/*" id="detailInput">
                @if ($blog->detailimage)
                    <div class="mt-2" id="detailPreview">
                        <img src="{{ asset('/clients/assets/img/blog/' . $blog->detailimage) }}"
                             alt="Ảnh chi tiết"
                             style="width:150px;height:100px;object-fit:cover;border-radius:6px;border:1px solid #ddd;">
                    </div>
                @else
                    <div id="detailPreview"></div>
                @endif
            </div>
        </div>
    </div>

    {{-- Trạng thái hiển thị --}}
    <div class="card mb-3">
        <div class="card-header fw-bold">Cài đặt hiển thị</div>
        <div class="card-body">
            <label class="form-label">Trạng thái</label>
            <select name="isActive" class="form-control">
                <option value="1" {{ $blog->isActive ? 'selected' : '' }}>Hiển thị</option>
                <option value="0" {{ !$blog->isActive ? 'selected' : '' }}>Ẩn</option>
            </select>
        </div>
    </div>

    {{-- Nút thao tác --}}
    <div class="text-end">
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Quay lại</a>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>

</div>

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
                img.style.width = '150px';
                img.style.height = '100px';
                img.style.objectFit = 'cover';
                img.style.borderRadius = '6px';
                img.style.border = '1px solid #ddd';
                preview.appendChild(img);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.getElementById('thumbnailInput').addEventListener('change', () => previewImage('thumbnailInput', 'thumbnailPreview'));
    document.getElementById('detailInput').addEventListener('change', () => previewImage('detailInput', 'detailPreview'));
</script>
@endsection
