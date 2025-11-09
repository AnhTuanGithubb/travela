@extends('admin.layouts.master')

@section('title', 'Quản lý Tour')

@section('content')

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách Tour</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">
                        + Thêm Tour mới
                    </a>
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

                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="50">ID</th>
                                <th>Tên Tour</th>
                                <th width="180">Hình ảnh</th>
                                <th width="250">Lịch trình</th>
                                <th>Giá NL</th>
                                <th>Giá TE</th>
                                <th>Điểm đến</th>
                                <th>Miền</th>
                                <th width="160">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tours as $tour)
                                <tr>
                                    <td>{{ $tour->tourId }}</td>
                                    <td>
                                        <strong>{{ $tour->title }}</strong><br>
                                        <small class="text-muted">
                                            {{ Str::limit($tour->description, 80) }}
                                        </small>
                                    </td>

                                    <!-- 🖼️ Hình ảnh -->
                                    {{-- 🖼️ Ảnh Tour --}}
                                    <td>
                                        @if ($tour->images && $tour->images->count() > 0)
                                            <div class="d-flex flex-wrap gap-2 toggle-container"
                                                id="gallery-{{ $tour->tourId }}">
                                                @foreach ($tour->images as $index => $img)
                                                    <div
                                                        class="position-relative toggle-item {{ $index >= 1 ? 'd-none' : '' }}">
                                                        <img src="{{ asset('clients/assets/img/gallery-tour/' . $img->imageURL) }}"
                                                            alt="Ảnh Tour" width="80" height="60"
                                                            onerror="this.src='{{ asset('images/no-image.png') }}'"
                                                            style="object-fit: cover; border-radius: 6px; border: 1px solid #ddd;">
                                                    </div>
                                                @endforeach
                                            </div>

                                            @if ($tour->images->count() > 1)
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-primary mt-2 toggle-btn"
                                                    data-target="gallery-{{ $tour->tourId }}">
                                                    + Xem thêm ảnh
                                                </button>
                                            @endif
                                        @else
                                            <span class="text-muted fst-italic">Chưa có ảnh</span>
                                        @endif
                                    </td>

                                    {{-- ⏰ Timeline --}}
                                    <td>
                                        @if ($tour->timelines && $tour->timelines->count() > 0)
                                            <ul class="mb-0 ps-3 toggle-container" id="timeline-{{ $tour->tourId }}">
                                                @foreach ($tour->timelines as $index => $tl)
                                                    <li class="toggle-item {{ $index >= 1 ? 'd-none' : '' }}">
                                                        <strong>{{ $tl->title }}</strong><br>
                                                        <small
                                                            class="text-muted">{{ Str::limit($tl->description, 60) }}</small>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            @if ($tour->timelines->count() > 1)
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary mt-2 toggle-btn"
                                                    data-target="timeline-{{ $tour->tourId }}">
                                                    + Xem thêm lịch trình
                                                </button>
                                            @endif
                                        @else
                                            <span class="text-muted fst-italic">Chưa có timeline</span>
                                        @endif
                                    </td>


                                    <td>{{ number_format($tour->priceAdult, 0, ',', '.') }} đ</td>
                                    <td>{{ number_format($tour->priceChild, 0, ',', '.') }} đ</td>
                                    <td>{{ $tour->destination }}</td>
                                    <td>
                                        @switch($tour->domain)
                                            @case('b')
                                                Miền Bắc
                                            @break

                                            @case('t')
                                                Miền Trung
                                            @break

                                            @default
                                                Miền Nam
                                        @endswitch
                                    </td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('admin.tours.edit', $tour->tourId) }}"
                                                class="btn btn-warning btn-sm d-flex align-items-center justify-content-center"
                                                style="min-width: 70px; margin-right: 8px;">
                                                <i class="fas fa-edit me-1"></i> Sửa
                                            </a>

                                            <form action="{{ route('admin.tours.delete', $tour->tourId) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger btn-sm d-flex align-items-center justify-content-center"
                                                    style="min-width: 70px;"
                                                    onclick="return confirm('Bạn có chắc muốn xóa tour này không?')">
                                                    <i class="fas fa-trash me-1"></i> Xóa
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted">Chưa có tour nào được thêm.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    @endsection

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.toggle-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const targetId = this.dataset.target;
                        const container = document.getElementById(targetId);
                        if (!container) return;

                        const hiddenItems = container.querySelectorAll('.toggle-item.d-none');
                        const isHidden = hiddenItems.length > 0;

                        if (isHidden) {
                            // Hiện toàn bộ
                            container.querySelectorAll('.toggle-item').forEach(item => item.classList
                                .remove('d-none'));
                            if (this.textContent.includes('ảnh'))
                                this.textContent = '- Thu gọn ảnh';
                            else
                                this.textContent = '- Thu gọn lịch trình';
                        } else {
                            // Ẩn bớt, chỉ giữ 1 phần tử đầu
                            container.querySelectorAll('.toggle-item').forEach((item, index) => {
                                if (index >= 1) item.classList.add('d-none');
                            });
                            if (this.textContent.includes('ảnh'))
                                this.textContent = '+ Xem thêm ảnh';
                            else
                                this.textContent = '+ Xem thêm lịch trình';
                        }
                    });
                });
            });
        </script>
    @endpush
