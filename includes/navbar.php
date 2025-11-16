<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3 text-primary" href="index.php">
            <i class="fas fa-hospital me-2"></i>تطبيقي
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="index.php">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">الخدمات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">المشاريع</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">عن الشركة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">اتصل بنا</a>
                </li>
                <?php if(isset($_SESSION['user_id'])): ?>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="auth/logout.php">تسجيل خروج</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="auth/login.php">تسجيل دخول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="auth/register.php">إنشاء حساب</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>