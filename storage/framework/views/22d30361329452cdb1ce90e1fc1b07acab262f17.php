<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-box {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
  </style>
    <script src="
https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css
" rel="stylesheet">

</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>

    </form>
  </div>



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
  <?php if(session()->get('error')): ?>
      <script>
          iziToast.success({
              title: '',
              position:'topRight',
              message: '<?php echo e(session()->get('error')); ?>',
          });

      </script>

  <?php endif; ?>

</body>
</html>

<?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/auth/login.blade.php ENDPATH**/ ?>