<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Member | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-image: url('login-bg.jpg');">
<div class="login-box"  style="text-align: center;">
  <div class="login-logo">
    <!--<a href="#">-->
        <img src="https://spatto.co/assets/images/spatto-logo.png" style="width: 200px;margin-left: auto;margin-right: auto; margin-top:20px;">
    
    <!--<b>Spatto</b>Services-->
    <!--</a>-->
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    

    
		<font color="red">
			<?php
			if(@$_GET['msg']!="") { echo @$_GET['msg']."<br><br>";}
			?>
		</font>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              
            </label>
          </div>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
    

    
    <!-- /.social-auth-links -->


    <a href="signup.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
  <h1 style="font-size: 52px;color: #fe6600;font-weight: 900;margin-top: 50px;">
      <span class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">??????????????? <br> ????????????????????????</span><br></h1>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
