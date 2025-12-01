<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Coffee Legend | Taste of Luxury</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-gold: #d4af37; /* Màu vàng sang trọng */
            --dark-bg: #0f0f0f;      /* Màu đen sâu */
            --text-gray: #b3b3b3;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-bg);
            color: white;
            overflow-x: hidden; /* Ẩn thanh cuộn ngang */
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        /* --- 1. HERO SECTION & PARALLAX --- */
        .hero-section {
            /* Ảnh nền chất lượng cao */
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(15,15,15,1)), 
                        url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
            height: 100vh;
            background-attachment: fixed; /* Tạo hiệu ứng Parallax (ảnh đứng yên khi cuộn) */
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-title {
            font-size: 5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #fff, var(--primary-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* --- 2. LUXURY BUTTON --- */
        .btn-luxury {
            border: 2px solid var(--primary-gold);
            color: var(--primary-gold);
            padding: 15px 50px;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: transparent;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-luxury::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 0%; height: 100%;
            background-color: var(--primary-gold);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn-luxury:hover {
            color: #000;
            box-shadow: 0 0 20px var(--primary-gold);
        }

        .btn-luxury:hover::before {
            width: 100%;
        }

        /* --- 3. GLASSMORPHISM CARDS --- */
        .glass-card {
            background: rgba(255, 255, 255, 0.05); /* Trong suốt 5% */
            backdrop-filter: blur(10px); /* Làm mờ hậu cảnh */
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            transition: transform 0.3s, border-color 0.3s;
            height: 100%;
        }

        .glass-card:hover {
            transform: translateY(-15px);
            border-color: var(--primary-gold);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .icon-gold {
            font-size: 3.5rem;
            color: var(--primary-gold);
            margin-bottom: 20px;
        }

        /* --- 4. DECORATION --- */
        .divider {
            width: 100px;
            height: 3px;
            background-color: var(--primary-gold);
            margin: 20px auto;
        }

        .img-hover-zoom {
            overflow: hidden;
            border-radius: 20px;
        }

        .img-hover-zoom img {
            transition: transform 0.5s ease;
        }

        .img-hover-zoom:hover img {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <header class="hero-section">
        <div class="container text-center" data-aos="zoom-in" data-aos-duration="1500">
            <p class="text-uppercase text-white-50 letter-spacing-3 mb-3">Est. 2025 • Premium Quality</p>
            <h1 class="hero-title mb-4">THE COFFEE LEGEND</h1>
            <p class="lead text-white mb-5" style="max-width: 600px; margin: 0 auto;">
                Không chỉ là cà phê, đó là nghệ thuật của sự thưởng thức. Đánh thức mọi giác quan của bạn trong từng giọt đắng.
            </p>
            <a href="{{ route('menu.index') }}" class="btn btn-luxury rounded-pill">
                Khám Phá Menu
            </a>
        </div>
        
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 text-white animate-bounce">
            <i class="bi bi-chevron-down fs-2"></i>
        </div>
    </header>

    <section class="py-5" style="background-color: #141414;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img-hover-zoom shadow-lg">
                        <img src="https://www.gracepaintingcrafts.com/cdn/shop/files/1_13_3a2a3233-c9b4-4de9-8d86-85335d3934ee_1200x1200.jpg?v=1762396409" class="img-fluid" alt="Coffee Art">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="1000">
                    <h5 class="text-uppercase text-warning ls-2">Về chúng tôi</h5>
                    <h2 class="display-4 text-white mb-3">Từ Hạt Đến Tách</h2>
                    <div class="divider ms-0"></div>
                    <p class="text-secondary fs-5">
                        Chúng tôi tin rằng một tách cà phê ngon bắt đầu từ sự tôn trọng. Tôn trọng người nông dân, tôn trọng hạt cà phê và tôn trọng chính vị giác của bạn.
                    </p>
                    <p class="text-secondary">
                        Tại đây, mỗi Barista là một nghệ sĩ. Không gian tĩnh lặng, nhạc Jazz nhẹ nhàng và hương thơm Arabica thoang thoảng sẽ đưa bạn rời xa khói bụi thành phố.
                    </p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h3 class="text-warning">15+</h3>
                            <p class="text-white-50">Năm kinh nghiệm</p>
                        </div>
                        <div class="col-6">
                            <h3 class="text-warning">100%</h3>
                            <p class="text-white-50">Organic Coffee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-black">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-warning text-uppercase">Tại sao chọn chúng tôi?</h5>
                <h2 class="display-4 text-white">Trải Nghiệm Đỉnh Cao</h2>
                <div class="divider"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center">
                        <i class="bi bi-gem icon-gold"></i>
                        <h3 class="text-white mb-3">Chất Lượng Vàng</h3>
                        <p class="text-secondary">
                            Tuyển chọn những hạt cà phê đạt chuẩn Specialty từ những vùng trồng nổi tiếng nhất thế giới.
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center">
                        <i class="bi bi-cup-hot-fill icon-gold"></i>
                        <h3 class="text-white mb-3">Rang Xay Tại Chỗ</h3>
                        <p class="text-secondary">
                            Hệ thống máy rang hiện đại giúp giữ trọn vẹn hương vị tươi mới nhất cho từng ly cà phê.
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center">
                        <i class="bi bi-wifi icon-gold"></i>
                        <h3 class="text-white mb-3">Không Gian Co-working</h3>
                        <p class="text-secondary">
                            Wifi tốc độ cao, ổ điện từng bàn và không gian yên tĩnh tuyệt đối cho công việc sáng tạo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') center/cover fixed; position: relative;">
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.7);"></div>
        <div class="container text-center position-relative py-5" data-aos="zoom-in">
            <h2 class="display-3 text-white fw-bold mb-4">Bạn Đã Sẵn Sàng?</h2>
            <p class="fs-4 text-white-50 mb-5">Hãy đến và cảm nhận sự khác biệt ngay hôm nay.</p>
            <a href="{{ route('menu.index') }}" class="btn btn-luxury bg-black rounded-pill px-5">
                ĐẶT BÀN NGAY
            </a>
        </div>
    </section>

    <footer class="bg-black text-white pt-5 pb-3 border-top border-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h3 class="text-warning" style="font-family: 'Playfair Display'">The Legend</h3>
                    <p class="text-secondary mt-3">Đánh thức đam mê, khơi nguồn sáng tạo.</p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="text-white mb-3">Giờ Mở Cửa</h5>
                    <p class="text-secondary m-0">Thứ 2 - Thứ 6: 07:00 - 22:00</p>
                    <p class="text-secondary m-0">Cuối tuần: 08:00 - 23:00</p>
                </div>
                <div class="col-md-4 mb-4 text-end">
                    <h5 class="text-white mb-3">Liên Hệ</h5>
                    <div class="d-flex gap-3 justify-content-end">
                        <a href="#" class="text-secondary fs-4"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-secondary fs-4"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-secondary fs-4"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-secondary small">
                &copy; 2025 The Coffee Legend. Designed by Laravel & Docker.
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Chỉ chạy animation 1 lần khi cuộn xuống
            offset: 100, // Cách mép dưới 100px thì bắt đầu chạy
        });
    </script>
</body>
</html>