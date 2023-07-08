<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="icon" href="<?php echo e(url('images/favicon.png')); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login.css')); ?>">

    <title><?php echo $__env->yieldContent('title', $title); ?></title>
</head>

<body>

    <main class="form-signin text-center bg-gradient">
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
                <input type="text" class="form-control" id="username" type="username" name="username"
                    placeholder="Username" value="<?php echo e(old('username')); ?>" required />
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required />
                <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label class="remember-me">
                    <input type="checkbox" value="remember-me" name="remember"> Remember me
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/login.blade.php ENDPATH**/ ?>