@extends('layout')
@section('title', 'Cập Nhật Món')
@section('content')
<div class="row g-0 bg-white shadow-sm rounded-4 overflow-hidden" style="min-height: 80vh;">
    <div class="col-md-5 d-none d-md-flex flex-column justify-content-center p-5 text-white" style="background: var(--coffee-deep);">
        <h1 class="display-4 brand-font fw-bold mb-4">Cập Nhật<br>Thông Tin</h1>
        <p class="text-white-50 mb-5">Điều chỉnh giá cả và mô tả cho món ăn.<br>Hãy đảm bảo thông tin chính xác trước khi lưu.</p>
        <div class="mt-auto">
            <small class="text-uppercase text-white-50 small tracking-widest">Đang sửa món:</small>
            <div class="fs-2 brand-font text-warning mt-1">{{ $coffee->name }}</div>
        </div>
    </div>
    <div class="col-md-7 d-flex align-items-center justify-content-center p-5">
        <div class="w-100" style="max-width: 500px;">
            <form action="{{ route('menu.update', $coffee->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-4">
                    <label class="form-label text-uppercase text-secondary small fw-bold">Tên món</label>
                    <input type="text" name="name" class="form-control form-control-vintage fs-5 fw-bold" value="{{ $coffee->name }}" required>
                </div>
                <div class="mb-4">
                    <label class="form-label text-uppercase text-secondary small fw-bold">Giá bán (VNĐ)</label>
                    <input type="number" name="price" class="form-control form-control-vintage brand-font fw-bold fs-5 text-dark" value="{{ $coffee->price }}" required>
                </div>
                <div class="mb-5">
                    <label class="form-label text-uppercase text-secondary small fw-bold">Mô tả</label>
                    <textarea name="description" class="form-control form-control-vintage" rows="5">{{ $coffee->description }}</textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('menu.index') }}" class="text-secondary text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Quay lại</a>
                    <button type="submit" class="btn-coffee shadow-sm px-4"><i class="bi bi-check2 me-2"></i> CẬP NHẬT</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection