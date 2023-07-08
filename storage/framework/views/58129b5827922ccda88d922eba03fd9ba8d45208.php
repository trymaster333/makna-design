
<?php $__env->startSection('home'); ?>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setting</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?php if(session('success')): ?>
            <p class="alert alert-success"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="alert alert-danger"><?php echo e($err); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <form action="<?php echo e(route('password.action')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="old_password" />
                </div>
                <div class="mb-3">
                    <label>New Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password" />
                </div>
                <div class="mb-3">
                    <label>New Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password_confirmation" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/setting/password.blade.php ENDPATH**/ ?>