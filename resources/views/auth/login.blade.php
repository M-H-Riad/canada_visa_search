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
    <form method="POST" action="{{ route('login') }}">
    @csrf
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



  @if($errors->any())
      @foreach($errors->all() as $error)
          <script>
              iziToast.error({
                  title: '',
                  position:'topRight',
                  message: '{{$error}}',
              });
          </script>
      @endforeach

  @endif

  @if(session()->get('success'))
      <script>
          iziToast.success({
              title: '',
              position:'topRight',
              message: '{{session()->get('success')}}',
          });

      </script>

  @endif
  @if(session()->get('error'))
      <script>
          iziToast.success({
              title: '',
              position:'topRight',
              message: '{{session()->get('error')}}',
          });

      </script>

  @endif

</body>
</html>

