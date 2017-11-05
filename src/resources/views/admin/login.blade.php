<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('vendor/assets/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('vendor/assets/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('vendor/assets/css/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .error {
         color:red;
         font-weight: normal;
      }
      .has-feedback label~.form-control-feedback {
         top:0;
      }
    </style>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="javascript:;" title="Admin"><b>Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <form action="{{asset('admin/login')}}" method="post" autocomplete="off" id="login">
          {!! csrf_field() !!}
          <input style="display:none">
          <input type="password" style="display:none">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" value="{{old('email')}}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if($errors->has('email'))
                <p class="error">{{ $errors->first('email') }}</p>
            @endif
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if($errors->has('password'))
                <p class="error">{{ $errors->first('password') }}</p>
            @endif
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('vendor/assets/js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('vendor/assets/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendor/assets/js/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <!-- jquery validate -->
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script>
      $(function () {
         $('#login').validate ({
            rules: {
               email: {
                 required: true,
                 email: true,
               },
               password: {
                 required :true,
                 minlength: 6
               }
            },
            submitHandle: function (form) {
               form.submit();
            }
         });
      });
    </script>
  </body>
</html>
