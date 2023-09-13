
<?php $__env->startSection('content'); ?>


<!-- ======= Header ======= -->
<!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo $data->judul; ?></h2>
                <ol>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Daftar Proyek</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="calendar"></i><?php echo e($data->tanggal); ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="dollar-sign"></i><?php echo e($data->anggaran); ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="home"></i><?php echo e($data->luas_tanah."m2(LT) /
                                ".$data->luas_bangunan."m2(LB)"); ?></p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="map-pin"></i><?php echo e($data->lokasi); ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="home"></i><?php echo e($data->tipe); ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="home"></i><?php echo e($data->jenis); ?></p>
                        </div>
                    </div>

                    </p>

                </div>
            </div>
            <div class="row mt-4">
                <b>Keterangan :</b>
                <br>
                <?php echo $data->keterangan; ?>

            </div>
            <div class="row mt-4">
                <b>Data Penunjang :</b>
                <br>
                <?php if($data->nama_file!=null): ?>
                <a href="<?php echo e(url('storage/'.$data->data_penunjang)); ?>">
                    <?php echo e($data->nama_file); ?>

                </a>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/daftar-proyek.blade.php ENDPATH**/ ?>