@extends('layout')
@section('title', 'Quản Lý Menu')
@section('content')

    <h1>Chiều thứ Hai - Ca 3</h1>
    <div class="row align-items-end mb-4">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark m-0" style="letter-spacing: -0.5px;">Thực Đơn</h2>
            <p class="text-muted small mt-1 mb-0">Quản lý danh sách món ăn & đồ uống</p>
        </div>
        
        <div class="col-md-6 d-flex justify-content-md-end gap-5 mt-3 mt-md-0">
            <div>
                <span class="d-block text-muted text-uppercase fw-bold" style="font-size: 0.65rem; letter-spacing: 1px;">Tổng món</span>
                <span class="fs-4 fw-bold" style="color: var(--coffee-brown);">{{ count($list) }}</span>
            </div>
            <div>
                <span class="d-block text-muted text-uppercase fw-bold" style="font-size: 0.65rem; letter-spacing: 1px;">Đang bán</span>
                <span class="fs-4 fw-bold text-dark">{{ count($list) }}</span>
            </div>
        </div>
    </div>

    <div class="card-minimal p-2 mb-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <div class="d-flex gap-2 w-100 w-md-auto">
            <div class="input-group" style="min-width: 280px;">
                <span class="input-group-text bg-light border-0 ps-3"><i class="bi bi-search text-muted small"></i></span>
                <input type="text" class="form-control bg-light border-0 shadow-none small" placeholder="Tìm kiếm món ăn...">
            </div>
            <select class="form-select border-0 bg-light shadow-none" style="width: 140px; cursor: pointer; font-size: 0.9rem;">
                <option selected>Tất cả</option>
                <option value="1">Đồ uống</option>
                <option value="2">Bánh ngọt</option>
            </select>
        </div>

        <a href="{{ route('menu.create') }}" class="btn-coffee shadow-sm text-decoration-none d-flex align-items-center gap-2" style="padding: 0.5rem 1rem; font-size: 0.9rem;">
            <i class="bi bi-plus-lg"></i> <span>Thêm món</span>
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm d-flex align-items-center mb-4 py-2 px-3 rounded-3" style="font-size: 0.9rem;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card-minimal overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 text-secondary text-uppercase fw-bold border-0" style="font-size: 0.7rem; letter-spacing: 1px;">Tên Món</th>
                    <th class="py-3 text-secondary text-uppercase fw-bold border-0" style="font-size: 0.7rem; letter-spacing: 1px;">Giá Bán</th>
                    <th class="py-3 text-secondary text-uppercase fw-bold border-0" style="font-size: 0.7rem; letter-spacing: 1px;">Danh mục</th>
                    <th class="py-3 text-secondary text-uppercase fw-bold border-0 text-end pe-4" style="font-size: 0.7rem; letter-spacing: 1px;">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                <tr>
                    <td class="ps-4 py-3 border-bottom-0">
                        <div class="d-flex align-items-center">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3 text-secondary" style="width: 38px; height: 38px;">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                            <div>
                                <a href="{{ route('menu.show', $item->id) }}" class="fw-bold text-dark text-decoration-none d-block" style="font-size: 0.95rem;">
                                    {{ $item->name }}
                                </a>
                                <small class="text-muted text-truncate d-block" style="max-width: 250px; font-size: 0.8rem;">
                                    {{ $item->description }}
                                </small>
                            </div>
                        </div>
                    </td>
                    <td class="border-bottom-0">
                        <span class="fw-bold" style="color: var(--coffee-brown);">{{ number_format($item->price) }}</span> 
                        <span class="text-muted small" style="font-size: 0.75rem;">đ</span>
                    </td>
                    <td class="border-bottom-0">
                        <span class="badge bg-light text-dark border fw-normal px-2 py-1" style="font-size: 0.75rem;">Đồ uống</span>
                    </td>
                    <td class="text-end pe-4 border-bottom-0">
                        <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-link text-secondary p-1" title="Sửa"><i class="bi bi-pencil"></i></a>
                        <button class="btn btn-link text-secondary p-1 hover-danger" 
                                data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $item->id }}" title="Xóa">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(count($list) == 0)
            <div class="p-5 text-center">
                <div class="mb-3 text-light"><i class="bi bi-cup-hot-fill" style="font-size: 4rem; opacity: 0.2;"></i></div>
                <h6 class="text-muted fw-normal">Menu chưa có món nào</h6>
                <p class="text-muted small">Hãy thêm món mới để bắt đầu kinh doanh.</p>
            </div>
        @endif
    </div>
@endsection