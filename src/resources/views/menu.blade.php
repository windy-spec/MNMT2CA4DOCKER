<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Cà Phê</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary fw-bold"><i class="bi bi-cup-hot-fill"></i> QUẢN LÝ CAFE</h1>
            <a href="{{ route('menu.create') }}" class="btn btn-primary btn-lg shadow">
                <i class="bi bi-plus-circle"></i> Thêm món mới
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <strong>Tuyệt vời!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow border-0 rounded-4">
            <div class="card-body p-4">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên món</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col" class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                        <tr>
                            <td class="text-muted">#{{ $item->id }}</td>
                            <td class="fw-bold text-dark">{{ $item->name }}</td>
                            <td>
                                <span class="badge bg-success rounded-pill" style="font-size: 0.9rem">
                                    {{ number_format($item->price) }} đ
                                </span>
                            </td>
                            <td class="text-secondary">{{ $item->description ?? 'Chưa có mô tả' }}</td>
                            <td class="text-center">
                                <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-outline-warning btn-sm mx-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('menu.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn chắc chắn muốn xóa món này?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm mx-1">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($list) == 0)
                    <div class="text-center p-5">
                        <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-3">Chưa có món nào trong menu.</p>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="text-center mt-4 text-muted small">
            Project Laravel 12 on Docker &copy; 2025
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>