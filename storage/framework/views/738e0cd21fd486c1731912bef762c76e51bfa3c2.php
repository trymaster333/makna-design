
<?php $__env->startSection('home'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                Logo
                <img src="https://placehold.co/200x200" class="rounded mx-auto d-block img-fluid" alt="logo">
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="slogan" class="form-label">Slogan</label>
                            <textarea class="form-control" id="slogan" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Perusahaan</label>
                            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/about.blade.php ENDPATH**/ ?>