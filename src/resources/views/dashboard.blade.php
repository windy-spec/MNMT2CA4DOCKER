@extends('layout')
@section('title', 'Tổng Quan')
@section('content')
    <h2 class="fw-bold brand-font mb-4 text-dark">Tổng Quan Quán</h2>
    
    <div class="row g-4 mb-5">
        @foreach(['Doanh Thu' => '15.2M', 'Đơn Hàng' => '124', 'Khách Mới' => '45', 'Đánh Giá' => '4.9⭐'] as $label => $val)
        <div class="col-md-3">
            <div class="bg-white p-4 shadow-sm border-bottom border-4 rounded-3" style="border-color: var(--coffee-brown) !important;">
                <div class="text-secondary small text-uppercase fw-bold">{{ $label }}</div>
                <div class="fs-2 brand-font fw-bold mt-1 text-dark">{{ $val }}</div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="bg-white p-5 shadow-sm rounded-3 text-center">
        <h3 class="brand-font text-muted opacity-50">Biểu đồ đang cập nhật...</h3>
    </div>
@endsection