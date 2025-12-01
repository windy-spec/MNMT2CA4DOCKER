<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm món mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="card shadow-lg border-0 rounded-4" style="width: 500px;">
        <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
            <h4 class="m-0">Thêm Món Mới</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('menu.store') }}" method="POST">
                @csrf <div class="mb-3">
                    <label class="form-label fw-bold">Tên món</label>
                    <input type="text" name="name" class="form-control" placeholder="Ví dụ: Cà phê sữa" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Giá tiền (VNĐ)</label>
                    <input type="number" name="price" class="form-control" placeholder="Ví dụ: 25000" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Mô tả</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Mô tả ngắn về món..."></textarea>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Lưu lại</button>
                    <a href="{{ route('menu.index') }}" class="btn btn-outline-secondary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>