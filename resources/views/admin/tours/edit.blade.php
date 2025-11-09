@extends('admin.layouts.master')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-3">✏️ Sửa tour: {{ $tour->title }}</h4>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

       <form action="{{ route('admin.tours.update', $tour->tourId) }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Thông tin tour --}}
    <div class="card mb-3">
        <div class="card-header fw-bold">Thông tin tour</div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Tên tour <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control"
                       value="{{ old('title', $tour->title) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description', $tour->description) }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Giá người lớn</label>
                    <input type="number" name="priceAdult" class="form-control"
                           value="{{ old('priceAdult', $tour->priceAdult) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Giá trẻ em</label>
                    <input type="number" name="priceChild" class="form-control"
                           value="{{ old('priceChild', $tour->priceChild) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-4 mb-3">
                    <label class="form-label">Điểm đến</label>
                    <input type="text" name="destination" class="form-control"
                           value="{{ old('destination', $tour->destination) }}">
                </div>

                <div class="col-4 mb-3">
                    <label for="domain" class="form-label">Miền</label>
                    <select name="domain" id="domain" class="form-control">
                        <option value="b" {{ $tour->domain == 'b' ? 'selected' : '' }}>Miền Bắc</option>
                        <option value="t" {{ $tour->domain == 't' ? 'selected' : '' }}>Miền Trung</option>
                        <option value="n" {{ $tour->domain == 'n' ? 'selected' : '' }}>Miền Nam</option>
                    </select>
                </div>

                <div class="col-4 mb-3">
                    <label for="star" class="form-label">Đánh giá (sao)</label>
                    <select name="star" id="star" class="form-control">
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ $tour->star == $i ? 'selected' : '' }}>
                                {{ str_repeat('⭐', $i) }} {{ $i }} sao
                            </option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-4 mb-3">
                    <label class="form-label">Ngày khởi hành</label>
                    <input type="date" name="startDate" class="form-control"
                           value="{{ old('startDate', $tour->startDate) }}">
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label">Ngày kết thúc</label>
                    <input type="date" name="endDate" class="form-control"
                           value="{{ old('endDate', $tour->endDate) }}">
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label">Thời lượng tour</label>
                    <input type="text" name="time" class="form-control"
                           value="{{ old('time', $tour->time) }}" placeholder="VD: 3 ngày 2 đêm">
                </div>
            </div>
        </div>
    </div>

    {{-- Ảnh tour --}}
    <div class="card mb-3">
        <div class="card-header fw-bold">Ảnh tour hiện có</div>
        <div class="card-body">
            <div id="image-list">
                @foreach ($tour->images as $img)
                    <div class="image-box" id="image-{{ $img->imageId }}">
                        <img src="{{ asset('clients/assets/img/gallery-tour/' . $img->imageURL) }}" alt="Ảnh Tour">
                        <button type="button" class="delete-btn" onclick="deleteImage({{ $img->imageId }})">×</button>
                    </div>
                @endforeach
            </div>

            <hr>
            <label class="form-label mt-2">Thêm ảnh mới (tối thiểu 3 ảnh)</label>
            <input type="file" name="images[]" multiple class="form-control mb-3" accept="image/*" id="imageInput">
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
            @foreach ($tour->timelines as $timeline)
                <div class="timeline-item mb-3 border rounded p-3">
                    <label class="form-label">Tiêu đề</label>
                    <input type="text" name="timeline_title[]" class="form-control mb-2"
                           value="{{ $timeline->title }}">
                    <label class="form-label">Mô tả</label>
                    <textarea name="timeline_description[]" class="form-control" rows="2">{{ $timeline->description }}</textarea>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-end">
        <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary">Quay lại</a>
        <button type="submit" class="btn btn-primary">Cập nhật tour</button>
    </div>
</form>

    </div>
    <style>
        #image-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .image-box {
            position: relative;
            width: 120px;
            height: 90px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background: #f8f9fa;
            transition: 0.2s;
        }

        .image-box:hover {
            transform: scale(1.03);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Nút X */
        .image-box button.delete-btn {
            position: absolute;
            top: 4px;
            right: 4px;
            background-color: rgba(220, 53, 69, 0.9);
            /* đỏ nhạt trong suốt */
            border: none;
            color: white;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            font-size: 14px;
            cursor: pointer;
            opacity: 0.9;
            transition: 0.2s;
        }

        .image-box button.delete-btn:hover {
            opacity: 1;
            background-color: #dc3545;
            /* đỏ đậm khi hover */
        }
    </style>

    {{-- Script --}}
    <script>
        function deleteImage(imageId) {
            if (!confirm("Bạn có chắc chắn muốn xóa ảnh này không?")) return;

            fetch(`{{ url('admin/tours/delete-image') }}/${imageId}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Accept": "application/json"
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        const imageDiv = document.getElementById(`image-${imageId}`);
                        if (imageDiv) {
                            imageDiv.style.opacity = "0";
                            setTimeout(() => imageDiv.remove(), 300);
                        }
                    } else {
                        alert(data.message || "Không thể xóa ảnh!");
                    }
                })
                .catch(err => alert("Lỗi khi xóa ảnh!"));
        }

        document.getElementById('addTimeline').addEventListener('click', function() {
            const container = document.getElementById('timelineContainer');
            const item = document.createElement('div');
            item.classList.add('timeline-item', 'mb-3', 'border', 'rounded', 'p-3');
            item.innerHTML = `
        <label class="form-label">Tiêu đề</label>
        <input type="text" name="timeline_title[]" class="form-control mb-2">
        <label class="form-label">Mô tả</label>
        <textarea name="timeline_description[]" class="form-control" rows="2"></textarea>
    `;
            container.appendChild(item);
        });

        // Xem trước ảnh mới
        document.getElementById('imageInput').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            preview.innerHTML = '';
            Array.from(e.target.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = ev => {
                    const img = document.createElement('img');
                    img.src = ev.target.result;
                    img.classList.add('rounded');
                    img.style.width = '100px';
                    img.style.height = '80px';
                    img.style.objectFit = 'cover';
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection
