@extends('admin.layouts.master')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-3">🧭 Thêm tour mới</h4>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('admin.tours.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Thông tin cơ bản --}}
            <div class="card mb-3">
                <div class="card-header fw-bold">Thông tin tour</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Tên tour <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Giá người lớn</label>
                            <input type="number" name="priceAdult" class="form-control" value="{{ old('priceAdult') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Giá trẻ em</label>
                            <input type="number" name="priceChild" class="form-control" value="{{ old('priceChild') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 mb-3">
                            <label class="form-label">Điểm đến</label>
                            <input type="text" name="destination" class="form-control" value="{{ old('destination') }}">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="domain" class="form-label">Miền</label>
                            <select name="domain" id="domain" class="form-control">
                                <option value="Bắc">Miền Bắc</option>
                                <option value="Trung">Miền Trung</option>
                                <option value="Nam">Miền Nam</option>
                            </select>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="star" class="form-label">Đánh giá (sao)</label>
                            <select name="star" id="star" class="form-control">
                                <option value="1">⭐ 1 sao</option>
                                <option value="2">⭐⭐ 2 sao</option>
                                <option value="3">⭐⭐⭐ 3 sao</option>
                                <option value="4">⭐⭐⭐⭐ 4 sao</option>
                                <option value="5" selected>⭐⭐⭐⭐⭐ 5 sao</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 mb-3">
                            <label class="form-label">Ngày khởi hành</label>
                            <input type="date" name="startDate" class="form-control">
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label">Ngày kết thúc</label>
                            <input type="date" name="endDate" class="form-control">
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label">Thời lượng tour</label>
                            <input type="text" name="time" class="form-control" value="{{ old('time') }}"
                                placeholder="VD: 3 ngày 2 đêm">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Ảnh --}}
            <div class="card mb-3">
                <div class="card-header fw-bold">Ảnh tour</div>
                <div class="card-body">
                    <input type="file" name="images[]" multiple class="form-control mb-3" accept="image/*"
                        id="imageInput">
                    <div id="preview" class="d-flex flex-wrap gap-2"></div>
                </div>
            </div>
            {{-- Timeline --}}
            <div class="card mb-3">
                <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                    <span>Lịch trình (Timeline)</span>
                    <button type="button" id="addTimeline" class="btn btn-sm btn-success">+ Thêm dòng</button>
                </div>
                <div class="card-body" id="timelineContainer">
                    <div class="timeline-item mb-3 border rounded p-3">
                        <label class="form-label">Tiêu đề</label>
                        <input type="text" name="timeline_title[]" class="form-control mb-2">
                        <label class="form-label">Mô tả</label>
                        <textarea name="timeline_description[]" class="form-control" rows="2"></textarea>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Lưu tour</button>
            </div>
        </form>
    </div>

    {{-- Preview ảnh + thêm dòng timeline --}}
    <script>
        // Preview ảnh
        document.getElementById('imageInput').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            preview.innerHTML = '';
            for (let file of e.target.files) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const img = document.createElement('img');
                    img.src = event.target.result;
                    img.classList.add('border', 'rounded');
                    img.style.width = '100px';
                    img.style.height = '70px';
                    img.style.objectFit = 'cover';
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });

        // Thêm timeline
        document.getElementById('addTimeline').addEventListener('click', function() {
            const container = document.getElementById('timelineContainer');
            const newItem = document.createElement('div');
            newItem.classList.add('timeline-item', 'mb-3', 'border', 'rounded', 'p-3');
            newItem.innerHTML = `
            <label class="form-label">Tiêu đề</label>
            <input type="text" name="timeline_title[]" class="form-control mb-2">
            <label class="form-label">Mô tả</label>
            <textarea name="timeline_description[]" class="form-control" rows="2"></textarea>
            <button type="button" class="btn btn-danger btn-sm mt-2 removeTimeline">Xóa</button>
        `;
            container.appendChild(newItem);
        });

        // Xóa timeline
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('removeTimeline')) {
                e.target.closest('.timeline-item').remove();
            }
        });
    </script>
@endsection
