@extends('layout')
@section('title', 'Tạo Mới')
@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="bg-white p-5 rounded-3 shadow-lg" style="width: 100%; max-width: 500px; border-top: 5px solid var(--coffee-brown);">
        <div class="text-center mb-5">
            <h2 class="brand-font fw-bold text-dark display-6">Món Mới</h2>
            <div class="d-flex justify-content-center align-items-center gap-2">
                <div style="height: 1px; width: 30px; background: #ccc;"></div><i class="bi bi-cup-hot-fill text-muted"></i><div style="height: 1px; width: 30px; background: #ccc;"></div>
            </div>
        </div>
        <form action="{{ route('menu.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="form-label text-uppercase text-secondary small fw-bold">Tên hiển thị</label>
                <input type="text" name="name" class="form-control form-control-vintage" placeholder="VD: Espresso" required>
            </div>
            <div class="mb-4">
                <label class="form-label text-uppercase text-secondary small fw-bold">Giá tiền (VNĐ)</label>
                <input type="number" name="price" class="form-control form-control-vintage brand-font fw-bold fs-5" placeholder="0" required>
            </div>
            <div class="mb-4">
                <label class="form-label text-uppercase text-secondary small fw-bold">Mô tả</label>
                <textarea name="description" class="form-control form-control-vintage" rows="3"></textarea>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn-coffee py-3">LƯU VÀO MENU</button>
                <a href="{{ route('menu.index') }}" class="text-center text-muted mt-3 text-decoration-none small">Quay lại danh sách</a>
            </div>
        </form>
    </div>
</div>
@endsection