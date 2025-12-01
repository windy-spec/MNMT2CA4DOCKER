@extends('layout')
@section('title', 'Quản Lý Menu')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-5">
        <div>
            <h2 class="fw-bold text-dark m-0 display-6">Danh Sách Món</h2>
            <p class="text-muted m-0">Quản lý tất cả đồ uống và món ăn tại quán.</p>
        </div>
        <a href="{{ route('menu.create') }}" class="btn-coffee shadow text-decoration-none">
            <i class="bi bi-plus-lg me-2"></i> THÊM MÓN MỚI
        </a>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-3 shadow-sm border-start border-4" style="border-color: var(--coffee-brown) !important;">
                <div class="text-uppercase text-muted small fw-bold">Tổng số món</div>
                <div class="fs-2 brand-font fw-bold text-dark">{{ count($list) }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-3 shadow-sm border-start border-4" style="border-color: var(--gold) !important;">
                <div class="text-uppercase text-muted small fw-bold">Đang kinh doanh</div>
                <div class="fs-2 brand-font fw-bold text-dark">{{ count($list) }}</div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm d-flex align-items-center mb-4 text-white" style="background: #4caf50;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-3 shadow-sm overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 text-secondary text-uppercase small border-0">Tên Món</th>
                    <th class="py-3 text-secondary text-uppercase small border-0">Giá Bán</th>
                    <th class="py-3 text-secondary text-uppercase small border-0">Mô Tả</th>
                    <th class="py-3 text-secondary text-uppercase small border-0 text-end pe-4">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                <tr>
                    <td class="ps-4 py-3">
                        <a href="{{ route('menu.show', $item->id) }}" class="fw-bold text-dark fs-5 brand-font text-decoration-none hover-underline">
                            {{ $item->name }}
                        </a>
                        <span class="badge bg-light text-secondary border fw-normal d-block mt-1" style="width: fit-content;">Đồ uống</span>
                    </td>
                    <td>
                        <span class="fw-bold brand-font text-dark fs-5">{{ number_format($item->price) }}</span>
                        <span class="text-muted small">đ</span>
                    </td>
                    <td class="text-muted small text-truncate" style="max-width: 250px;">
                        {{ $item->description }}
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-outline-secondary btn-sm border-0" title="Chỉnh sửa">
                            <i class="bi bi-pencil-square fs-5"></i>
                        </a>
                        <button class="btn btn-outline-danger btn-sm border-0" 
                                data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $item->id }}" title="Xóa">
                            <i class="bi bi-trash3 fs-5"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if(count($list) == 0)
            <div class="p-5 text-center text-muted">
                <i class="bi bi-cup-hot-fill fs-1 opacity-25 mb-3 d-block"></i>
                Menu chưa có món nào.
            </div>
        @endif
    </div>
@endsection