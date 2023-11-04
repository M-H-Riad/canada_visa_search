<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('/')); ?>asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('/')); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo e(asset('/')); ?>asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo e(asset('/')); ?>asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo e(asset('/')); ?>asset/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo e(asset('/')); ?>asset/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo e(asset('/')); ?>asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo e(asset('/')); ?>asset/vendor/simple-datatables/style.css" rel="stylesheet">
    <script src="
https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css
" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('/')); ?>asset/css/style.css" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main id="main" class="main">

    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="margin-bottom: 20px;">
    <div class="copyright">
      &copy; Copyright <strong><span>Metafore Technology Ltd.</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('/')); ?>asset/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/quill/quill.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>asset/vendor/php-email-form/validate.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

  <?php echo $__env->yieldContent('script'); ?>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('/')); ?>asset/js/main.js"></script>

  <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <script>
              iziToast.error({
                  title: '',
                  position:'topRight',
                  message: '<?php echo e($error); ?>',
              });
          </script>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php endif; ?>

  <?php if(session()->get('success')): ?>
      <script>
          iziToast.success({
              title: '',
              position:'topRight',
              message: '<?php echo e(session()->get('success')); ?>',
          });

      </script>

  <?php endif; ?>


</body>

</html>
<?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/layouts/admin.blade.php ENDPATH**/ ?>