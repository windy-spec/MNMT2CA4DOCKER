@extends('layout')
@section('title', $coffee->name)
@section('content')
<div class="bg-white shadow-lg rounded-4 overflow-hidden" style="min-height: 80vh;">
    <div class="row g-0 h-100">
        <div class="col-lg-6 position-relative" style="background: var(--coffee-deep); min-height: 400px;">
            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center text-white opacity-25">
                <i class="bi bi-cup-hot-fill" style="font-size: 10rem;"></i>
            </div>
            <div class="position-absolute bottom-0 start-0 p-5 text-white w-100">
                <span class="badge bg-warning text-dark mb-2 rounded-0">BEST SELLER</span>
                <h1 class="display-3 brand-font fw-bold">{{ $coffee->name }}</h1>
                <p class="opacity-75">ID Sản phẩm: #{{ $coffee->id }}</p>
            </div>
            <a href="{{ route('menu.index') }}" class="btn btn-light rounded-circle position-absolute top-0 start-0 m-4 shadow-lg" style="width: 50px; height: 50px; display: grid; place-items: center;">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>
        </div>
        <div class="col-lg-6 p-5 d-flex flex-column justify-content-center">
            <div class="py-4">
                <h3 class="brand-font fw-bold text-dark mb-4 border-bottom pb-2 d-inline-block">Chi Tiết Hương Vị</h3>
                <p class="text-secondary lead" style="line-height: 1.8;">
                    {{ $coffee->description ?? 'Một sự kết hợp hoàn hảo giữa những hạt cà phê Arabica thượng hạng và công thức rang xay độc quyền.' }}
                </p>
                <div class="row mt-5 g-3">
                    <div class="col-4"><div class="p-3 bg-light rounded text-center border"><i class="bi bi-droplet-half fs-3 text-warning"></i><div class="fw-bold mt-2">Đậm đà</div></div></div>
                    <div class="col-4"><div class="p-3 bg-light rounded text-center border"><i class="bi bi-cup-hot fs-3 text-danger"></i><div class="fw-bold mt-2">Nóng</div></div></div>
                    <div class="col-4"><div class="p-3 bg-light rounded text-center border"><i class="bi bi-clock-history fs-3 text-primary"></i><div class="fw-bold mt-2">5 phút</div></div></div>
                </div>
            </div>
            <div class="mt-auto pt-5 border-top d-flex align-items-center justify-content-between">
                <div>
                    <small class="text-uppercase text-muted fw-bold">Giá Niêm Yết</small>
                    <div class="fs-1 brand-font text-dark fw-bold">{{ number_format($coffee->price) }} <span class="fs-5 text-muted align-top">đ</span></div>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('menu.edit', $coffee->id) }}" class="btn btn-coffee btn-lg px-5 shadow-sm rounded-1">Sửa Món</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection