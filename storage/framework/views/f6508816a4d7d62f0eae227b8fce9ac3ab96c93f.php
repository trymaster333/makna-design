<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="icon" href="<?php echo e(url('images/favicon.png')); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(url('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <title><?php echo $__env->yieldContent('title', $title); ?></title>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="z-index: 15">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-sm"><a href="<?php echo e(route('home')); ?>"><?php echo e($about->judul); ?></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#konsep-desain">Konsep Desain</a></li>
                    <li><a class="nav-link scrollto" href="#daftar-proyek">Daftar Proyek</a></li>
                    <li><a class="nav-link scrollto " href="#more-services">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Paket Harga</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Review</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong><?php echo e($about->judul); ?></strong>. All Rights Reserved
                    </div>

                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#hero" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#konsep-desain" class="scrollto">Konsep Desain</a>
                        <a href="#pricing" class="scrollto">Paket Harga</a>
                        <a href="#daftar-proyek" class="scrollto">Daftar Proyek</a>
                        <a href="#more-services" class="scrollto">Portofolio</a>
                        <a href="#faq" class="scrollto">FAQ</a>
                        <a href="#contact" class="scrollto">Kontak</a>

                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(url('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(url('assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(url('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/vendor/php-email-form/validate.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script>
        feather.replace();
    </script>

</body>

</html><?php /**PATH C:\ProjectX\makna-design\resources\views/layout.blade.php ENDPATH**/ ?>