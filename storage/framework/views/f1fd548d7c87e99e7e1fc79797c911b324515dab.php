<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow"
    style="background-color: #293241; z-index: 500;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Makna Design</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="form-control-dark w-100"></div>
    <div class="navbar-nav d-none d-md-block">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="<?php echo e(route('logout')); ?>"><span data-feather="power"></span> Sign out</a>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'about') ? 'active' : ''); ?>"
                            href="<?php echo e(route('about')); ?>">
                            <span data-feather="info"></span>
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'kontak') ? 'active' : ''); ?>"
                            href="<?php echo e(route('kontak')); ?>">
                            <span data-feather="phone"></span>
                            Kontak
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'portofolio') ? 'active' : ''); ?>"
                            href=" <?php echo e(route('portofolio')); ?>">
                            <span data-feather="file"></span>
                            Portofolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'daftar-proyek') ? 'active' : ''); ?>"
                            href=" <?php echo e(route('daftar-proyek')); ?>">
                            <span data-feather="list"></span>
                            Daftar Proyek
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'konsep-desain') ? 'active' : ''); ?>"
                            href=" <?php echo e(route('konsep-desain')); ?>">
                            <span data-feather="grid"></span>
                            Konsep Desain
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'review') ? 'active' : ''); ?>"
                            href="<?php echo e(route('review')); ?>">
                            <span data-feather="star"></span>
                            Review
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'paket-harga') ? 'active' : ''); ?>"
                            href="<?php echo e(route('paket-harga')); ?>">
                            <span data-feather="shopping-cart"></span>
                            Paket Harga
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'faq') ? 'active' : ''); ?>"
                            href="<?php echo e(route('faq')); ?>">
                            <span data-feather="help-circle"></span>
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->segment(2) == 'setting') ? 'active' : ''); ?>"
                            href="<?php echo e(route('setting')); ?>">
                            <span data-feather="settings"></span>
                            Setting
                        </a>
                    </li>
                    <li class="nav-item d-md-none d-sm-block">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>">
                            <span data-feather="log-out"></span>
                            Logout
                        </a>
                    </li>
                </ul>

            </div>
        </nav>



    </div>
</div><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>