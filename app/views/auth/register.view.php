<html>
<?php
$request=\App\Core\Session::get('request');
$error=$request['errors'];
$fields=$request['fields'];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Open Source | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php asset('css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php asset('css/font-awesome.min.css')?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php asset('css/ionicons.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php asset('css/AdminLTE.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php asset('js/plugins/iCheck/square/blue.css')?>">

</head>
<body class="hold-transition login-page" style="background: url('../../../public/img/loginback.jpg') no-repeat;background-size: cover ">
<div class="register-box">
    <div class="register-logo">
        <a href="/">
            <img src="<?php asset('img/logo.png')?>" alt="" width="100px"><br>
            <b>Inform</b>Me
        </a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="/register">
            <?php csrf_field()?>
            <div class="form-group has-feedback <?= isset($errors['name']) ? ' has-error' : '' ?>">
                <input type="text" class="form-control" placeholder="Full name" name="name" value="<?= $fields['name'] ?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?php if(count($errors)>0):?>
                    <span class="help-block">
                        <strong><?= $errors['name'] ?></strong>
                </span>
                <?php endif;?>
            </div>
            <div class="form-group has-feedback <?= isset($errors['email']) ? ' has-error' : '' ?>">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $fields['email'] ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php if(count($errors)>0):?>
                    <span class="help-block">
                        <strong><?= $errors['email'] ?></strong>
                </span>
                <?php endif;?>
            </div>
            <div class="form-group has-feedback<?= isset($errors['password']) ? ' has-error' : '' ?>">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if(count($errors)>0):?>
                    <span class="help-block">
                        <strong><?= $errors['password'] ?></strong>
                </span>
                <?php endif;?>
            </div>
            <div class="form-group has-feedback <?= isset($errors['confirm']) ? ' has-error' : '' ?>">
                <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                <?php if(count($errors)>0):?>
                    <span class="help-block">
                        <strong><?= $errors['confirm'] ?></strong>
                </span>
                <?php endif;?>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                Google+</a>
        </div>

        <a href="/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>

<!-- jQuery 2.2.0 -->
<script src="<?php asset('js/jquery-3.1.1.min.js')?>"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php asset('js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php asset('js/plugins/iCheck/icheck.min.js')?>"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
