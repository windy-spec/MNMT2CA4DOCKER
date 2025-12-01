<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiệm Cà Phê Mơ Mộng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        /* CSS tuỳ chỉnh cho đẹp */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        /* Phần Hero (Ảnh bìa to) */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh; /* Full màn hình */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .btn-custom {
            background-color: #c0392b;
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            transition: 0.3s;
            border: none;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn-custom:hover {
            background-color: #e74c3c;
            transform: scale(1.05);
            color: white;
        }

        .section-padding { padding: 80px 0; }
        
        .icon-box {
            font-size: 3rem;
            color: #c0392b;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header class="hero-section">
        <div class="container">
            <h1 class="display-1 fw-bold mb-3">COFFEE HOUSE</h1>
            <p class="fs-4 mb-5">"Nơi hương vị đánh thức đam mê của bạn"</p>
            
            <a href="{{ route('menu.index') }}" class="btn btn-custom shadow-lg">
                <i class="bi bi-cup-straw"></i> Xem Menu Ngay
            </a>
        </div>
    </header>

    <section class="section-padding bg-light">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-4 text-uppercase fw-bold text-secondary">Câu chuyện của chúng tôi</h2>
                    <p class="lead text-muted">
                        Được rang xay từ những hạt cà phê thượng hạng nhất vùng cao nguyên. 
                        Chúng tôi không chỉ bán cà phê, chúng tôi bán những khoảnh khắc thư giãn tuyệt vời nhất trong ngày của bạn.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-flower1 icon-box"></i>
                            <h4>Hạt Cà Phê Sạch</h4>
                            <p class="text-muted">100% Organic, không hóa chất.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-cup-hot icon-box"></i>
                            <h4>Pha Chế Đỉnh Cao</h4>
                            <p class="text-muted">Barista chuyên nghiệp 5 năm kinh nghiệm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-heart-pulse icon-box"></i>
                            <h4>Không Gian Chill</h4>
                            <p class="text-muted">Yên tĩnh, wifi mạnh, nhạc hay.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 text-center">
        <div class="container">
            <p class="m-0">Địa chỉ: 123 Đường Laravel, Quận Docker, TP. Code</p>
            <small class="text-white-50">&copy; 2025 Coffee House Project</small>
        </div>
    </footer>

</body>
</html>