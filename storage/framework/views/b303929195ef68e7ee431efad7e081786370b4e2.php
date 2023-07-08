
<?php $__env->startSection('content'); ?>
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
                <button class="btn btn-primary">Change</button>
                <a class="btn btn-danger" href="<?php echo e(route('home')); ?>">Back</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/user/password.blade.php ENDPATH**/ ?>