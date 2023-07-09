
<?php $__env->startSection('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $about->slogan; ?></h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#pricing" class="btn-get-started scrollto">Mulai <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img d-none d-md-block" data-aos="fade-left"
                data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img d-block d-sm-block d-md-none" data-aos="fade-left"
                data-aos-delay="200">
                <img src="<?php echo e(asset('images/logomakna.png')); ?>" class="img-fluid animated" alt="" style="width:50%;">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Tentang kami</p>
            </div>

            <div class="row content">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        <?php echo $about->deskripsi; ?>

                    </p>

                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Paket Harga</h2>
                <p>Paket yang kami tawarkan</p>
            </div>

            <div class="row">
                <?php $__currentLoopData = $paket_harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12 col-md-12 mb-5">
                    <div class="box recommended" data-aos="zoom-in-right" data-aos-delay="200">
                        <h3><?php echo e($item->judul); ?></h3>
                        <h4>Rp. <?php echo number_format($item->harga,0,',','.'); ?><span><?php echo e($item->satuan); ?></span></h4>
                        <?php echo $item->deskripsi; ?>

                        <div class="btn-wrap">
                            <a href="#contact" class="btn-buy">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section><!-- End Pricing Section -->


    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Portofolio</h2>
                <p>Hasil kerja kami</p>
            </div>
            <div class="row">
                <?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 d-flex align-items-stretch mb-5">
                    <div class="card" style="background-image: url('<?php echo e(url('storage/'.$item->cover)); ?>');"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="<?php echo e(route('home.portofolio', $item->id)); ?>"><?php echo e($item->judul); ?></a></h5>
                            <p class="card-text"><?php echo e(\Illuminate\Support\Str::limit($item->deskripsi, 60,
                                $end='...')); ?></p>
                            <div class="read-more"><a href="<?php echo e(route('home.portofolio', $item->id)); ?>"><i
                                        class="bi bi-arrow-right"></i> Lanjut Baca</a></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section><!-- End More Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Review</h2>
                <p>Apa kata mereka?</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php echo e(url('storage/'.$item->foto)); ?>" class="testimonial-img" alt="">
                                <h3><?php echo e($item->nama_client); ?></h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?php echo $item->review; ?>

                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>FAQ</h2>
                <p>Sering ditanya</p>
            </div>
            <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4><?php echo $item->pertanyaan; ?></h4>
                </div>
                <div class="col-lg-7">
                    <?php echo $item->jawaban; ?>

                </div>
            </div><!-- End F.A.Q Item-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi kami</p>
            </div>

            <div class="row justify-content-md-center">
                <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-auto mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a target="_blank" href="<?php echo e($item->link); ?>" style="text-decoration: none;">
                        <div class="contact-about">
                            <div class="d-flex aligns-items-center justify-content-center">
                                <img src="<?php echo e(url('storage/'.$item->icon)); ?>" style="width: 50px;" alt="">
                                <h4 class="align-middle"><?php echo e($item->kontak); ?></h4>
                            </div>


                        </div>
                    </a>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/home.blade.php ENDPATH**/ ?>