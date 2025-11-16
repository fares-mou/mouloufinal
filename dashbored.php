<?php
if(isset($_SESSION['user'])) {
    header("Location: auth/login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - تطبيقي</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>



<div class="d-flex">
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                    <i class="fas fa-tachometer-alt me-2"></i> لوحة التحكم
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">
                    <i class="fas fa-box me-2"></i> إدارة المنتجات
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-users me-2"></i> إدارة المستخدمين
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-cog me-2"></i> الإعدادات
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="auth/logout.php">
                    <i class="fas fa-sign-out-alt me-2"></i> تسجيل الخروج
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content w-100">
        <div class="container-fluid">
            <h1 class="mb-4">لوحة التحكم</h1>

            <div class="row mb-5">
                <div class="col-md-3 mb-4">
                    <div class="card dashboard-card bg-primary text-white text-center p-3">
                        <h3>150</h3>
                        <p>إجمالي المنتجات</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card dashboard-card bg-success text-white text-center p-3">
                        <h3>350</h3>
                        <p>الطلبات الجديدة</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card dashboard-card bg-info text-white text-center p-3">
                        <h3>120</h3>
                        <p>المستخدمون النشطون</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card dashboard-card bg-warning text-white text-center p-3">
                        <h3>5,250</h3>
                        <p>dzd إجمالي المبيعات</p>
                    </div>
                </div>
            </div>

            <div class="card dashboard-card mb-4">
                <div class="card-header bg-transparent">
                    <h5 class="card-title mb-0">أحدث المنتجات</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>اسم المنتج</th>
                                    <th>السعر</th>
                                    <th>الحالة</th>
                                    <th>الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>منتج تجريبي 1</td>
                                    <td>150 dzd</td>
                                    <td><span class="badge bg-success">نشط</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">تعديل</button>
                                        <button class="btn btn-sm btn-danger">حذف</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>منتج تجريبي 2</td>
                                    <td>200 dzd</td>
                                    <td><span class="badge bg-success">نشط</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">تعديل</button>
                                        <button class="btn btn-sm btn-danger">حذف</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>منتج تجريبي 3</td>
                                    <td>99 dzd</td>
                                    <td><span class="badge bg-warning">متوقف</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">تعديل</button>
                                        <button class="btn btn-sm btn-danger">حذف</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card dashboard-card h-100">
                        <div class="card-header bg-transparent">
                            <h5 class="card-title mb-0">مبيعات الشهر</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center py-4">
                                <i class="fas fa-chart-bar fa-3x text-primary mb-3"></i>
                                <p>رسم بياني يظهر هنا</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card dashboard-card h-100">
                        <div class="card-header bg-transparent">
                            <h5 class="card-title mb-0">أكثر المنتجات مبيعاً</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center py-4">
                                <i class="fas fa-chart-pie fa-3x text-success mb-3"></i>
                                <p>رسم بياني دائري يظهر هنا</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>