
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
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <img src="<?php echo e(url('storage/'.$data->cover)); ?>" class="img-fluid mx-auto d-block" alt="...">
      <div class="row"><?php echo $data->deskripsi; ?></div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/portofolio-details.blade.php ENDPATH**/ ?>