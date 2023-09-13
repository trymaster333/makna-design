
<?php $__env->startSection('home'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

    </div>
    <div class="row">
        <div class="col-4 col-lg-4">
            <div class="card shadow">
                <div class="row g-0 align-items-center">
                    <div class="col"><span class="bi bi-book display-2"></span></div>
                    <div class="col md-2">PORTOFOLIIO</div>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4">
            <div class="card shadow">
                <div class="row g-0 align-items-center">
                    <div class="col"><span class="bi bi-price display-2"></span></div>
                    <div class="col md-2">PAKET HARGA</div>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4">
            <div class="card shadow">
                <div class="row g-0 align-items-center mx-auto">
                    <div class="col"><span class="bi bi-star display-2"></span></div>
                    <div class="col md-2 h2">REVIEW</div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>