
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login.css')); ?>">
<main class="form-signin text-center">
    <form action="<?php echo e(route('login.action')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <img class="mb-4" src="<?php echo e(URL::asset('/images/logo.png')); ?>" alt="" width="150" height="150">
        <h1 class="h3 mb-3 fw-normal">Admin Login</h1>
        <?php if(session('success')): ?>
        <p class="alert alert-success"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($err); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div class="form-floating">
            <input type="text" class="form-control" id="username" type="username" name="username" placeholder="Username"
                value="<?php echo e(old('username')); ?>" required />
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
            <label for="password">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label class="remember-me">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
</main>
<script>
    const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
   
  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  // toggle the eye icon
  this.classList.toggle('fa-eye');
  this.classList.toggle('fa-eye-slash');
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/user/login.blade.php ENDPATH**/ ?>