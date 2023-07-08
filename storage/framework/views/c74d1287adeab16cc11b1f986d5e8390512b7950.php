
<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->check()): ?>
<p>Welcome <b><?php echo e(Auth::user()->name); ?></b></p>
<a class="btn btn-primary" href="<?php echo e(route('password')); ?>">Change Password</a>
<a class="btn btn-danger" href="<?php echo e(route('logout')); ?>">Logout</a>
<?php endif; ?>
<?php if(auth()->guard()->guest()): ?>
<a class="btn btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
<a class="btn btn-info" href="<?php echo e(route('register')); ?>">Register</a>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/user/dashboard.blade.php ENDPATH**/ ?>