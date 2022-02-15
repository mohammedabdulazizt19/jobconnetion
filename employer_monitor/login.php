<?php

	session_start();

	include("../include/db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page - YARAMAY Computer Maintenance Services</title>
	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  	<!-- iCheck -->
  	<link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	
	<div class="login-box" style="opacity: .9;">
	  	<div class="login-box-body">
	  		<div class="login-logo">
    			<a href="#"><img src="../images/logo-2.PNG"></a>
	  		</div>
	  		<!-- /.login-logo -->
	    	<p class="login-box-msg">
	    		<i class="fa fa-lock"></i>
	    		Authentication required. Please enter your email and password below to proceed.
	    	</p>

	    	<form action="" method="post">
	      		<div class="form-group has-feedback">
	        		<input type="text" class="form-control" name="email_address" placeholder="Email">
	        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
	      		</div>
	      		<div class="form-group has-feedback">
	        		<input type="password" class="form-control" name="employer_password" placeholder="Password">
	        		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      		</div>
	     		<div class="row">
	        		<div class="col-xs-6">
	          			<a href="../index.php" class="btn btn-danger pull-left"><i class="fa fa-sign-out"></i> Cancel</a>
	        		</div>
	        		<!-- /.col -->
	        		<div class="col-xs-6">
	          			<button type="submit" name="employer_login" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Login</button>
	        		</div>
	        		<!-- /.col -->
	      		</div>
	    	</form>

	    	<a href="#" class="pull-left">Forgot your password <i class="fa fa-question"></i></a><br><br>
	    	<p class="login-box-msg">
	    		Copyright <i class="fa fa-copyright"></i> 2018 YARAMAY Computer Maintenance Services <br>
	    		All Rights Reserved.
	    	</p>

	  	</div>
	  	<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

</body>
</html>
<?php

	if(isset($_POST['employer_login'])){

		$email_address = mysqli_real_escape_string($con,$_POST['email_address']);

		$employer_password = mysqli_real_escape_string($con,$_POST['employer_password']);

		$get_employer= "select * from tbl_employers where email_address='$email_address' AND password='$employer_password'";

		$run_employer = mysqli_query($con,$get_employer);

		$count = mysqli_num_rows($run_employer);

		if($count==1){

			$_SESSION['email_address']=$email_address;

			echo "
				<script>
					alert('You are Logged In')
				</script>
			";

			echo "
				<script>
					window.open('index.php','_self')
				</script>
			";

		}else{

			echo "
				<script>
					alert('Email or Password is Wrong')
				</script>
			";

		}

	}

?>