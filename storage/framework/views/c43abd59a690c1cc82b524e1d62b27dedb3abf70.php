
<?php $__env->startSection('content'); ?>
<style>
    .modal {
        z-index: 20;
    }

    .modal-backdrop {
        z-index: 19;
    }

    body {
        font-family: 'Roboto', Arial, sans-serif
    }

    .none {
        display: none
    }

    /* Input Field CSS */
    .datainput {
        position: relative;
        margin: 5px 0 20px
    }

    .datainput p {
        font-size: 12px;
        background: #eee;
        display: inline-block;
        padding: 5px 15px;
        border-radius: .5rem
    }

    .whatsapp-form textarea {
        min-height: 120px
    }

    .datainput select {
        padding: 12px 0;
        color: #555;
        font-size: 14px;
        width: 100%;
        border: 0;
        border-bottom: 1px solid #ddd;
        outline: none;
        background: #fff
    }

    .datainput input,
    .datainput textarea {
        font-size: 15px;
        padding: 15px 0;
        display: block;
        width: 100%;
        border: none;
        border-bottom: 1px solid #ddd
    }

    .datainput input:focus,
    .datainput textarea:focus {
        outline: none
    }

    .datainput label {
        color: #999;
        font-size: 14px;
        font-weight: 400;
        position: absolute;
        pointer-events: none;
        left: 0;
        top: 18px;
        transition: .2s ease all
    }

    .datainput input:focus~label,
    .datainput input:valid~label,
    .datainput textarea:focus~label,
    .datainput textarea:valid~label {
        top: -10px;
        font-size: 14px;
        color: #21a51f
    }

    #notif-license span {
        font-size: 40px
    }

    #notif-license {
        display: none;
        position: fixed
    }

    .bar {
        position: relative;
        display: block;
        width: 100%
    }

    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #21a51f;
        transition: .2s ease all
    }

    .bar:before {
        left: 50%
    }

    .bar:after {
        right: 50%
    }

    .datainput input:focus~.bar:before,
    .datainput input:focus~.bar:after,
    .datainput textarea:focus~.bar:before,
    .datainput textarea:focus~.bar:after {
        width: 50%
    }

    .indigox {
        background: #3f51b5
    }

    .orangex {
        background: #ff9800
    }

    .pinkx {
        background: #e91e63
    }

    .bluex {
        background: #2196F3
    }

    .purplex {
        background: #9c27b0
    }

    .redx {
        background: #F44336
    }

    .greenx {
        background: #4CAF50
    }

    .highlight {
        position: absolute;
        height: 50%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: .5
    }

    .datainput input:focus~.highlight,
    .datainput textarea:focus~.highlight {
        animation: inputHighlighter .3s ease
    }

    .datainput input:focus~label,
    .datainput input:valid~label,
    .datainput textarea:focus~label,
    .datainput textarea:valid~label {
        top: -10px;
        font-size: 13px;
        color: #21a51f
    }

    /* Default Whatsapp Form CSS by www.idblanter.com */
    form.whatsapp-form {
        box-shadow: 0 1px 6px rgba(32, 33, 36, .28);
        border-radius: .5rem;
        padding: 20px;
        box-sizing: border-box;
        color: #444;
        font-size: 14px;
        line-height: 1.5;
    }

    .whatsapp-form a.send_form {
        color: #fff;
        background: #21a51f;
        text-decoration: none;
        display: inline-block;
        padding: 10px 25px;
        border-radius: .3rem;
        font-weight: 700;
        letter-spacing: .5px;
        font-size: 15px;
    }

    #text-info span {
        display: block;
        padding: 10px 15px;
        text-align: center;
        font-weight: 700;
        margin: 15px 0;
        border-radius: .5rem;
    }

    #text-info span.yes {
        background: #c6ffc5;
        color: #0ea904;
    }

    #text-info span.no {
        background: #ffc5c5;
        color: #ce0404;
    }

    .whatsapp-form {
        width: 100%;
        max-width: 700px;
        margin: 0 auto;
        box-sizing: border-box;
    }
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $about->slogan; ?></h2>
                <div data-aos="fade-up" data-aos-delay="800">

                    <a href="#myModal" data-bs-toggle="modal" role="button" class="btn-get-started scrollto">Dapatkan
                        Penawaran Terbaik <i class="bi bi-arrow-right"></i></a>
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

    <!-- ======= About Us Section ======= -->
    <section id="konsep-desain" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Konsep Desain</h2>
                <p>Konsep Desain Yang Kami Tawarkan</p>
            </div>

            <div class="row text-center">
                <?php $__currentLoopData = $konsep_desain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-3" data-aos="fade-up">
                        <div class="card">
                            <img src="<?php echo e(url('storage/'.$item->cover)); ?>" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo e($item->judul); ?></h5>
                                
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="daftar-proyek" class="about" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Daftar Proyek</h2>
                <p>Proyek Yang Kami Kerjakan</p>
            </div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item col-sm-2">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home">Projek Sekarang</a>
                </li>
                <li class="nav-item col-sm-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Projek Lalu</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="home">
                    <?php $__empty_1 = true; $__currentLoopData = $projek_sekarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card text-center my-2">
                        <div class="card-header">
                            <h5 class="card-title"><?php echo e($item->judul); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="calendar"></i><?php echo e($item->tanggal); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="dollar-sign"></i><?php echo e($item->anggaran); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="home"></i><?php echo e($item->luas_tanah."m2(LT) / ".$item->luas_bangunan."m2(LB)"); ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="map-pin"></i><?php echo e($item->lokasi); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="home"></i><?php echo e($item->tipe); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="home"></i><?php echo e($item->jenis); ?></p>
                                </div>
                            </div>
                            
                            </p>
                            <div class="text-left">
                                <a href="<?php echo e(route('home.daftar-proyek', $item->id)); ?>" class="btn btn-light">Detail Proyek</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No data</p>
                    <?php endif; ?>

                </div>
                <div class="tab-pane container fade" id="menu1">
                    <?php $__empty_1 = true; $__currentLoopData = $projek_lalu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card text-center my-2">
                        <div class="card-header">
                            <h5 class="card-title"><?php echo e($item->judul); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="calendar"></i><?php echo e($item->tanggal); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="dollar-sign"></i><?php echo e($item->anggaran); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="home"></i><?php echo e($item->luas_tanah."m2(LT) / ".$item->luas_bangunan."m2(LB)"); ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="map-pin"></i><?php echo e($item->lokasi); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="home"></i><?php echo e($item->tipe); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="card-text"><i data-feather="home"></i><?php echo e($item->jenis); ?></p>
                                </div>
                            </div>
                            
                            </p>
                            <div class="text-left">
                                <a href="<?php echo e(route('home.daftar-proyek', $item->id)); ?>" class="btn btn-light">Detail Proyek</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No data</p>
                    <?php endif; ?>
                </div>
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
                    <div class="card" data-background-image="<?php echo e(url('storage/'.$item->cover)); ?>"
                        style="background-color: gray;" data-aos="fade-up" data-aos-delay="100">
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

    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Paket Harga</h2>
                <p>Proyek Yang Kami Tawarkan</p>
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
<script type="text/javascript">
    const initialiseStyleBackgroundIntersectionObserver = () => {
  const lazyBackgrounds = Array.from(document.querySelectorAll('[data-background-image]'));

  if (lazyBackgrounds.length === 0) {
    return;
  }

  let lazyBackgroundObserver;

  const loadBackgroundIfElementOnScreen = (entry) => {
    if (entry.isIntersecting) {
      entry.target.style.backgroundImage = `url('${entry.target.dataset.backgroundImage}')`;
      lazyBackgroundObserver.unobserve(entry.target);
    }
  };

  const observeElementVisibility = (lazyBackground) => {
    lazyBackgroundObserver.observe(lazyBackground);
  };

  const setBackground = (element) => {
    element.style.backgroundImage = `url('${entry.target.dataset.backgroundImage}')`;
  };

  if (typeof window.IntersectionObserver === 'function') {
    lazyBackgroundObserver = new IntersectionObserver((entries) => {
      entries.forEach(loadBackgroundIfElementOnScreen);
    });
    lazyBackgrounds.forEach(observeElementVisibility);
  } else {
    lazyBackgrounds.forEach(setBackground);
  }
};

if (typeof document.readyState === 'string' && document.readyState === 'complete') {
  initialiseStyleBackgroundIntersectionObserver();
} else {
  document.addEventListener('DOMContentLoaded', initialiseStyleBackgroundIntersectionObserver, true);
}
</script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxH2s2VPtigbYWPLoyYXM9klbxJn8OVKY&libraries=places&region=ID&language=id-ID&callback=initMap">
</script>

<!-- MODAL SEND WA -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="q1">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Jawab pertanyaan berikut.</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="whatsapp-form">
                    <div class="datainput">
                        <input class="validate" id="wa_name" name="name" required="" type="text" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Nama Kamu</label>
                    </div>
                    <div class="datainput">
                        <input class="validate" id="wa_email" name="email" required="" type="email" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Alamat Email</label>
                    </div>
                    <div class="datainput">
                        <input class="validate" id="nomor_hp" name="nomor_hp" required="" type="number" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Nomor HP</label>
                    </div>

                    <label class="text-success">Kebutuhan Anda</label>
                    <div class="datainput">
                        <select id="tipe_kebutuhan">
                            <option hidden='hidden' selected='selected' value=''>Pilih Kebutuhan Jasa</option>
                            <option value="Desain & Bangun">Desain & Bangun</option>
                            <option value="Desain Saja">Desain Saja</option>
                            <option value="Bangun Saja">Bangun Saja</option>
                        </select>
                    </div>
                    <label class="text-success">Tipe Kebutuhan Anda</label>
                    <div class="datainput">
                        <select id="tipe_bangunan">
                            <option hidden='hidden' selected='selected' value=''>Pilih Tipe Kebutuhan</option>
                            <option value="Bangun Baru">Bangun Baru</option>
                            <option value="Renovasi">Renovasi</option>
                        </select>
                    </div>
                    <label class="text-success">Tipe Bangunan</label>
                    <div class="datainput">
                        <select id="tipe_bangunan2">
                            <option hidden='hidden' selected='selected' value=''>Pilih Tipe Bangunan</option>
                            <option value="Rumah">Rumah</option>
                            <option value="Apartemen">Apartemen</option>
                            <option value="Kantor">Kantor</option>
                            <option value=">Restaurant">Restaurant</option>
                            <option value="ReKomersil/Retailnovasi">Komersil/Retail</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    
                    <label class="text-success mb-2">Gambaran Style</label>
                    <div class="row">
                        <div class="col-md-3 mb-5">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input style" id="ck1a" name="gambar[]"
                                    value="Industrial">
                                Industrial
                                <label class="custom-control-label" for="ck1a">
                                    <img src="<?php echo e(asset('images/industrial.jpg')); ?>" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input style" id="ck1b" name="gambar[]"
                                    value="Minimalis">
                                Minimalis
                                <label class="custom-control-label" for="ck1b">
                                    <img src="<?php echo e(asset('images/minimalis.jpg')); ?>" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input style" id="ck1c" name="gambar[]"
                                    value="Kontemporer">Kontemporer
                                <label class="custom-control-label" for="ck1c">
                                    <img src="<?php echo e(asset('images/kontemporer.jpg')); ?>" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input style" id="ck1d" name="gambar[]"
                                    value="Tropis">Tropis
                                <label class="custom-control-label" for="ck1d">
                                    <img src="<?php echo e(asset('images/tropis.jpg')); ?>" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="datainput">
                        <input class="validate" id="luas_tanah" name="luas_tanah" type="number">
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Luas Yang Akan Dibangun (m2)</label>
                    </div>
                    <label class="text-success">Kisaran Budget</label>
                    <div class="datainput">
                        <select id="budget">
                            <option hidden='hidden' selected='selected' value=''>Pilih Kisaran Budget Anda</option>
                            <option value="Rendah (dibawah 10 juta)">Rendah (dibawah 10 juta)</option>
                            <option value="Standar (10 juta - 100 juta)">Standar (10 juta - 100 juta)</option>
                            <option value="Premium (100 Juta - 1 Milyar)">Premium (100 Juta - 1 Milyar)</option>
                            <option value="Mewah (diatas 1 Milyar)">Mewah (diatas 1 Milyar)</option>
                        </select>
                    </div>
                    <div class="datainput">
                        <input id="lokasi" name="lokasi" type="text" async defer />

                        <label>Lokasi</label>
                    </div>
                    <div class="datainput">
                        <textarea id='keterangan' placeholder='' maxlength='5000' row='1' required=""></textarea>
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Keterangan</label>
                    </div>
                    <a class="send_form" href="javascript:void" type="submit" title="Send to Whatsapp">Send to
                        Whatsapp</a>
                    <div id="text-info"></div>
                </form>
            </div>

        </div>
    </div>
</div>



<script type="text/javascript">
    function initialize() {
                    var input = document.getElementById('lokasi');
                    var options = {
                        types: ['geocode'],
                        componentRestrictions: { country: 'ID' } // Ganti 'ID' dengan kode negara yang Anda inginkan (contoh: 'US' untuk Amerika Serikat)
                        
                    };
            
                    var autocomplete = new google.maps.places.Autocomplete(input, options);
            
                }
            
                google.maps.event.addDomListener(window, 'load', initialize);
                $(document).on('click','.send_form', function(){
var input_blanter = document.getElementById('wa_email');

/* Whatsapp Settings */
var walink = 'https://web.whatsapp.com/send',
    phone = '6281245427080',
    // phone = '6285393954104',
    walink2 = 'Halo saya ingin memesan jasa desain dari *Makna Design* berikut kebutuhan saya:',
    text_yes = 'Terkirim.',
    text_no = 'Isi semua Formulir lalu klik Send.';

/* Smartphone Support */
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
var walink = 'whatsapp://send';
}

if("" != input_blanter.value){

 /* Call Input Form */
var input_tipe_kebutuhan = $("#tipe_kebutuhan :selected").val(),
input_tipe_bangunan = $("#tipe_bangunan :selected").val(),
input_tipe_bangunan2 = $("#tipe_bangunan2 :selected").val(),
    input_name1 = $("#wa_name").val(),
    input_email1 = $("#wa_email").val(),
    input_nomor_hp = $("#nomor_hp").val(),
    input_url1 = $("#wa_url").val(),
    input_textarea1 = $("#keterangan").val(),
    lokasi = $("#lokasi").val(),
    budget = $("#budget :selected").val(),
    input_luas = $("#luas_tanah").val();

var checkedValues = $('input:checkbox:checked').map(function() {
    return this.value;
}).get();
    

/* Final Whatsapp URL */
var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
    '*Nama* : ' + input_name1 + '%0A%0A' +
    '*Alamat Email* : ' + input_email1 + '%0A%0A' +
    '*Nomor HP* : ' + input_nomor_hp + '%0A%0A' +
    '*Kebutuhan Jasa* : ' + input_tipe_kebutuhan + '%0A%0A' +
    '*Tipe Kebutuhan* : ' + input_tipe_bangunan + '%0A%0A' +
    '*Tipe Bangunan* : ' + input_tipe_bangunan2 + '%0A%0A' +
    '*Style* : ' + checkedValues + '%0A%0A' +
    '*Luas yang akan dibangun* : ' + input_luas + 'm2%0A%0A' +
    '*Kisaran Budget* : ' + budget + '%0A%0A' +
    '*Lokasi* : ' + lokasi + '%0A%0A' +
    '*Keterangan* : ' + input_textarea1 + '%0A%0A';

/* Whatsapp Window Open */
window.open(blanter_whatsapp,'_blank');
document.getElementById("text-info").innerHTML = '<span class="yes">'+text_yes+'</span>';
} else {
document.getElementById("text-info").innerHTML = '<span class="no">'+text_no+'</span>';
}
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/home.blade.php ENDPATH**/ ?>