<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa món</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="card shadow-lg border-0 rounded-4" style="width: 500px;">
        <div class="card-header bg-warning text-dark text-center py-3 rounded-top-4">
            <h4 class="m-0">Chỉnh Sửa Món</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('menu.update', $coffee->id) }}" method="POST">
                @csrf 
                @method('PUT') <div class="mb-3">
                    <label class="form-label fw-bold">Tên món</label>
                    <input type="text" name="name" class="form-control" value="{{ $coffee->name }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Giá tiền (VNĐ)</label>
                    <input type="number" name="price" class="form-control" value="{{ $coffee->price }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Mô tả</label>
                    <textarea name="description" class="form-control" rows="3">{{ $coffee->description }}</textarea>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-warning btn-lg">Cập nhật</button>
                    <a href="{{ route('menu.index') }}" class="btn btn-outline-secondary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>