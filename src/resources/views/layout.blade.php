<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Coffee Manager')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --coffee-brown: #6F4E37;
            --coffee-dark: #3b2f2f;
            --coffee-light: #fdfbf7;
            --gold: #C5A059;
            --text-grey: #6c757d;
            --border-color: rgba(0,0,0,0.05);
        }

        body { 
            background-color: #f8f9fa; 
            font-family: 'Inter', sans-serif; 
            color: #2c3e50;
        }
        
        /* --- MINIMAL NAVBAR --- */
        .navbar-minimal {
            background: white;
            border-bottom: 1px solid var(--border-color);
            padding: 0.8rem 2rem;
        }
        .nav-link {
            color: var(--text-grey) !important;
            font-weight: 500;
            font-size: 0.95rem;
            transition: 0.3s;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
        }
        .nav-link:hover, .nav-link.active {
            background-color: var(--coffee-light);
            color: var(--coffee-brown) !important;
        }

        /* --- CUSTOM BUTTONS --- */
        .btn-coffee {
            background-color: var(--coffee-brown);
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-coffee:hover { 
            background-color: var(--coffee-dark); 
            color: white; 
            transform: translateY(-1px); 
            box-shadow: 0 4px 12px rgba(111, 78, 55, 0.2);
        }

        /* --- GENERAL UTILS --- */
        .card-minimal {
            border: none;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.03);
        }
        
        .form-control-minimal {
            background-color: #f8f9fa;
            border: 1px solid transparent;
            padding: 0.6rem 1rem;
        }
        .form-control-minimal:focus {
            background-color: white;
            border-color: var(--coffee-brown);
            box-shadow: none;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-minimal sticky-top mb-5">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#" style="color: var(--coffee-brown);">
                <i class="bi bi-cup-hot-fill fs-4"></i>
                <span style="letter-spacing: -0.5px;">COFFEE<span style="color: var(--gold)">HUB</span></span>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-1">
                    <li class="nav-item"><a class="nav-link" href="#">Tổng quan</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('menu.index') }}">Thực đơn</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Đơn hàng</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kho</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Báo cáo</a></li>
                </ul>
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=6F4E37&color=fff" class="rounded-circle me-2 shadow-sm" width="36" height="36">
                        <div class="d-none d-md-block text-start">
                            <small class="d-block fw-bold text-dark" style="font-size: 0.8rem; line-height: 1.2;">Admin</small>
                            <small class="d-block text-muted" style="font-size: 0.7rem;">Manager</small>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm mt-3 rounded-3">
                        <li><a class="dropdown-item small py-2" href="#">Cài đặt</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item small text-danger py-2" href="#">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid px-lg-5 pb-5">
        @yield('content')
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="modal-body p-4 text-center">
                    <div class="mb-3 text-danger bg-danger bg-opacity-10 p-3 rounded-circle d-inline-block">
                        <i class="bi bi-trash3 fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Xóa món này?</h5>
                    <p class="text-muted small mb-4">Hành động này không thể hoàn tác.</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <button type="button" class="btn btn-light btn-sm px-3 rounded-3 fw-medium" data-bs-dismiss="modal">Hủy</button>
                        <form id="deleteForm" method="POST" action="">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm px-3 rounded-3 fw-medium">Đồng ý</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script xử lý Modal Xóa
        const deleteModal = document.getElementById('deleteModal');
        if (deleteModal) {
            deleteModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                const form = document.getElementById('deleteForm');
                form.action = '/menu/' + id; 
            });
        }
    </script>
</body>
</html>