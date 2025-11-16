<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تطبيق MVC - الصفحة الرئيسية</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #66eabcff 0%, #4ba27eff 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon points="0,1000 1000,0 1000,1000" fill="rgba(255,255,255,0.05)"/></svg>');
            background-size: cover;
        }

        .feature-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #66eabcff 0%, #4ba27eff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
        }

        .stats-section {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 80px 0;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            background: linear-gradient(135deg, #66eabcff 0%, #4ba27eff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .testimonial-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #66eaaaff;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #66eabcff 0%, #4ba27eff 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
            color: white;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<?php include"includes/navbar.php" ?>

<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold mb-4">ابدأ رحلتك الرقمية معنا</h1>
                <p class="lead mb-4">نقدم حلولاً تقنية مبتكرة تساعدك على تحقيق أهدافك وتطوير أعمالك في العالم الرقمي</p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-light btn-lg px-4 py-2 rounded-pill fw-semibold">ابدأ الآن</a>
                    <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill fw-semibold">المزيد</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="assets/images/team-docs.png" style="width: auto;" >

            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="fw-bold display-5 mb-3">لماذا تختارنا؟</h2>
                <p class="text-muted lead">نقدم مميزات استثنائية تجعلنا الخيار الأمثل لك</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="fw-bold">أداء متميز</h4>
                        <p class="text-muted">أنظمة سريعة ومستقرة توفر تجربة مستخدم فائقة</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="fw-bold">حماية متكاملة</h4>
                        <p class="text-muted">أنظمة أمان متقدمة تحمي بياناتك وتضمن خصوصيتك</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="fw-bold">دعم فني 24/7</h4>
                        <p class="text-muted">فريق دعم فني متاح على مدار الساعة لمساعدتك</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-number">500+</div>
                <p class="text-light">مشروع مكتمل</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-number">250+</div>
                <p class="text-light">عميل سعيد</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-number">99%</div>
                <p class="text-light">رضا العملاء</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-number">24/7</div>
                <p class="text-light">دعم فني</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                     alt="About Us" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold display-6 mb-4">من نحن</h2>
                <p class="lead mb-4">شركة رائدة في مجال التكنولوجيا نقدم حلولاً مبتكرة تساعد عملائنا على النمو والازدهار في العصر الرقمي.</p>
                <p class="mb-4">بفريق من الخبراء والمطورين المتميزين، نعمل على تقديم أفضل الحلول التقنية التي تلبي احتياجاتك وتتجاوز توقعاتك.</p>
                <a href="#" class="btn-gradient">تعرف علينا أكثر</a>
            </div>
        </div>
    </div>
</div>

<?php include"includes/footer.php"?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>