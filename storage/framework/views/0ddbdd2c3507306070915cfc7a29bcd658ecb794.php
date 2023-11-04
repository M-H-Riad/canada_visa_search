<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="<?php echo e(url('/dashboard')); ?>" class="logo d-flex align-items-center">
            <img src="<?php echo e(asset('/')); ?>assets/img/logo.png" alt="">
            <span class="d-none d-md-block">Visa Processing</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?php echo e(asset('/')); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e(auth()->user()->name); ?></span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?php echo e(auth()->user()->name); ?> </h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" onclick="event.preventDefault(); this.closest('form').submit();"><?php echo e(__('Log Out')); ?></button>
                            
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?php echo e(url('/home')); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#dis-officer" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Basic Informaion</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dis-officer" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(route('information.index')); ?>">
                        <i class="bi bi-circle"></i><span>Data List</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('status.index')); ?>">
                        <i class="bi bi-circle"></i><span>Status List</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->





    </ul>

</aside><!-- End Sidebar-->
<?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>