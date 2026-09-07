<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap"
        rel="stylesheet">

    <!-- App CSS (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-glass">
    <div class="container">
        <a class="navbar-brand text-dark" href="/">kanyarat</a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <i class="bi bi-list fs-1 text-dark"></i>
        </button>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">หน้าแรก</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">เกี่ยวกับ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">บทความ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/student/1">นักศึกษา</a></li>
                    <li class="nav-item"><a class="nav-link" href="/claim">แจ้งเคลม</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="eyebrow"><i class="bi bi-braces"></i> 01-406-093-203 | 3(2-2-5)</div>
            <h1>โปรเจกต์คอร์ส <span>Laravel</span></h1>
            <p>รวมฟีเจอร์ทั้งหมดที่พัฒนาไว้ในคอร์สนี้ ตั้งแต่ระบบจัดการบทความ ค้นหาประวัตินักศึกษา
                ไปจนถึงระบบฟอร์มแจ้งเคลมสินค้าที่ใช้งานได้จริง</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#features" class="btn btn-primary-custom btn-custom">เริ่มต้นใช้งาน <i
                        class="bi bi-arrow-right ms-1"></i></a>
                <a href="/about" class="btn btn-outline-custom btn-custom">เกี่ยวกับผู้พัฒนา</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container py-5" id="features">
        <div class="section-label">All Features in Project</div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-3">
                <a href="/about" class="feature-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <h3>เกี่ยวกับ</h3>
                    <p>แสดงข้อมูลทั่วไปเกี่ยวกับเว็บไซต์ วัตถุประสงค์ของการจัดทำ และข้อมูลของผู้พัฒนาโปรเจกต์นี้</p>
                    <span class="feature-arrow">เข้าดูหน้าเว็บ <i class="bi bi-arrow-right-short"></i></span>
                </a>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-3">
                <a href="/blog" class="feature-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-journal-richtext"></i>
                    </div>
                    <h3>ระบบบทความ</h3>
                    <p>ดึงข้อมูลบทความจำลอง 100 รายการจากฐานข้อมูล Database พร้อมระบบแบ่งหน้า (Pagination)</p>
                    <span class="feature-arrow">เข้าดูหน้าเว็บ <i class="bi bi-arrow-right-short"></i></span>
                </a>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-3">
                <a href="/student/1" class="feature-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-person-vcard"></i>
                    </div>
                    <h3>ประวัตินักศึกษา</h3>
                    <p>ระบบค้นหาและแสดงประวัตินักศึกษาตามรหัส ID ผ่านการใช้งาน Dynamic Route ของ Laravel</p>
                    <span class="feature-arrow">เข้าดูหน้าเว็บ <i class="bi bi-arrow-right-short"></i></span>
                </a>
            </div>

            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-3">
                <a href="/claim" class="feature-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>แจ้งเคลมสินค้า</h3>
                    <p>ระบบฟอร์มรับแจ้งปัญหาและเคลมสินค้าชำรุด พร้อมระบบ Validation ตรวจสอบความถูกต้องของข้อมูล</p>
                    <span class="feature-arrow">เข้าดูหน้าเว็บ <i class="bi bi-arrow-right-short"></i></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="d-flex justify-content-center gap-3 mb-3">
                <a href="#" class="text-muted fs-5"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-muted fs-5"><i class="bi bi-github"></i></a>
                <a href="#" class="text-muted fs-5"><i class="bi bi-envelope"></i></a>
            </div>
            <p class="footer-text mb-0">© 2026 My Website — Laravel Course Project.<br> Built with Laravel & Bootstrap
                5.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
