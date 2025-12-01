<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Coffee House')</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --font-heading: 'Josefin Sans', sans-serif;
            --font-body: 'Open Sans', sans-serif;
            
            --coffee-deep: #2c1e1a;   /* Nâu đen */
            --coffee-brown: #5d4037;  /* Nâu đất */
            --cream: #fdfbf7;         /* Trắng kem */
            --gold: #c5a47e;          /* Vàng điểm nhấn */
        }

        body {
            font-family: var(--font-body);
            color: #555;
            background-color: #f5f5f5;
        }

        h1, h2, h3, h4, h5, .brand-font { font-family: var(--font-heading); }

        /* Sidebar */
        .sidebar {
            width: 260px; height: 100vh; position: fixed; top: 0; left: 0;
            background: var(--coffee-deep); color: #fff; padding: 40px 25px;
            z-index: 1000; box-shadow: 4px 0 20px rgba(0,0,0,0.1);
        }
        .main-content { margin-left: 260px; padding: 40px; min-height: 100vh; }

        .nav-link-custom {
            color: rgba(255,255,255,0.6); padding: 12px 0; display: flex; align-items: center;
            text-decoration: none; transition: 0.3s; font-family: var(--font-heading); font-size: 1.1rem;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        .nav-link-custom:hover, .nav-link-custom.active { color: var(--gold); padding-left: 10px; }
        .nav-link-custom i { margin-right: 15px; font-size: 1.2rem; }

        /* Form & Button */
        .form-control-vintage {
            border: 1px solid #ddd; background: #fff; padding: 12px 15px; border-radius: 4px;
        }
        .form-control-vintage:focus {
            border-color: var(--coffee-brown); box-shadow: 0 0 0 3px rgba(93, 64, 55, 0.1);
        }
        .btn-coffee {
            background: var(--coffee-brown); color: #fff; border: none; padding: 10px 25px;
            font-family: var(--font-heading); font-weight: 600; letter-spacing: 1px;
            border-radius: 4px; transition: 0.3s;
        }
        .btn-coffee:hover { background: var(--coffee-deep); color: #fff; transform: translateY(-2px); }

        /* Modal */
        .modal-content { border: none; border-radius: 12px; }

        @media (max-width: 992px) {
            .sidebar { width: 70px; padding: 20px 10px; text-align: center; }
            .sidebar span, .brand-text { display: none; }
            .main-content { margin-left: 70px; padding: 20px; }
            .nav-link-custom i { margin: 0; font-size: 1.5rem; }
            .nav-link-custom:hover { padding-left: 0; }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar d-flex flex-column">
        <div class="mb-5 brand-text">
            <small class="text-uppercase text-white-50 small tracking-widest">Management</small>
            <h2 class="text-white fw-bold m-0" style="letter-spacing: -1px;">Coffee<span style="color: var(--gold)">Hub.</span></h2>
        </div>
        
        <nav class="flex-grow-1">
            <a href="{{ route('dashboard') }}" class="nav-link-custom {{ Request::is('/') ? 'active' : '' }}">
                <i class="bi bi-grid"></i> <span>Tổng Quan</span>
            </a>
            <a href="{{ route('menu.index') }}" class="nav-link-custom {{ Request::is('menu*') ? 'active' : '' }}">
                <i class="bi bi-cup-hot"></i> <span>Thực Đơn</span>
            </a>
            <a href="{{ route('orders') }}" class="nav-link-custom {{ Request::is('orders') ? 'active' : '' }}">
                <i class="bi bi-receipt"></i> <span>Đơn Hàng</span>
            </a>
            <a href="{{ route('revenue') }}" class="nav-link-custom {{ Request::is('revenue') ? 'active' : '' }}">
                <i class="bi bi-bar-chart"></i> <span>Doanh Thu</span>
            </a>
            <a href="{{ route('settings') }}" class="nav-link-custom {{ Request::is('settings') ? 'active' : '' }}">
                <i class="bi bi-gear"></i> <span>Cài Đặt</span>
            </a>
        </nav>

        <div class="mt-auto d-flex align-items-center pt-4 border-top border-secondary border-opacity-25 brand-text">
            <div class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold" style="width:40px; height:40px;">A</div>
            <div>
                <div class="text-white fw-bold small">Admin User</div>
                <div class="text-white-50" style="font-size: 0.75rem;">Manager</div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Modal Xóa -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg border-0 rounded-4">
                <div class="modal-body p-5 text-center">
                    <div class="mb-3 text-secondary opacity-50"><i class="bi bi-trash3 fs-1"></i></div>
                    <h3 class="brand-font fw-bold text-dark">Xác nhận xóa món?</h3>
                    <p class="text-muted small">Dữ liệu sẽ không thể khôi phục sau khi xóa.</p>
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Hủy bỏ</button>
                        <form id="deleteForm" method="POST" action="">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4">Đồng ý xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');
            const form = document.getElementById('deleteForm');
            form.action = '/menu/' + id; 
        });
    </script>
</body>
</html>