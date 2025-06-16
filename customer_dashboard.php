<?php
session_start();
if (!isset($_SESSION['customer_id'])) {
    header("Location: customer_login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Customer Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Preloader -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="logo">
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header>
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="#"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="#">Dashboard</a></li>
                                        <li><a href="request_loan.php">Request Loan</a></li>
                                        <li><a href="my_payment.php">My Payments</a></li>
                                        <li><a href="view_loan_requests.php">Loan Requests</a></li>
                                        <li><a href="customer_logout.php">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a class="btn header-btn">Welcome, <?= htmlspecialchars($_SESSION['customer_name']) ?></a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<div class="hero-area2 slider-height2 hero-overly2 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Customer Dashboard</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Dashboard Cards -->
<section class="services-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Request Loan -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service text-center mb-30">
                    <div class="service-icon">
                        <span class="ti-write"></span>
                    </div>
                    <div class="service-cap">
                        <h5><a href="request_loan.php">Request Loan</a></h5>
                        <p>Submit a new loan request instantly.</p>
                        <a href="request_loan.php" class="btn btn-primary mt-3">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- My Payments -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service text-center mb-30">
                    <div class="service-icon">
                        <span class="ti-money"></span>
                    </div>
                    <div class="service-cap">
                        <h5><a href="my_payment.php">My Payments</a></h5>
                        <p>View all your payment history and receipts.</p>
                        <a href="my_payment.php" class="btn btn-success mt-3">View Payments</a>
                    </div>
                </div>
            </div>

            <!-- Loan Requests -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service text-center mb-30">
                    <div class="service-icon">
                        <span class="ti-clipboard"></span>
                    </div>
                    <div class="service-cap">
                        <h5><a href="view_loan_requests.php">My Loan Requests</a></h5>
                        <p>Track your active and past loan requests.</p>
                        <a href="view_loan_requests.php" class="btn btn-warning mt-3">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-wrappr">
        <div class="container text-center py-4">
            <p class="text-muted mb-0">&copy; <?= date("Y") ?> Loan Management System. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
