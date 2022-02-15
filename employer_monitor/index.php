<?php

	session_start();

	include("../include/db.php");

	if(!isset($_SESSION['email_address'])){

		echo "
			<script>
				window.open('login.php','_self')
			</script>
		";

	}else{

?>
<?php

	$employer_session = $_SESSION['email_address'];

	$get_employer = "select * from tbl_employers where email_address = '$employer_session'";

	$run_employer = mysqli_query($con,$get_employer);

	$row_employer = mysqli_fetch_array($run_employer);

	$employer_id = $row_employer['employer_id'];

	$employer_number = $row_employer['employer_number'];

	$employer_first = $row_employer['first_name'];

	$employer_last = $row_employer['last_name'];

	$employer_name = ucfirst($employer_first) . " " . ucfirst($employer_last);

	$employer_full = $row_employer['full_name'];

	$employer_image = $row_employer['image'];

	$employer_contact = $row_employer['contact_number'];

	$employer_company = $row_employer['company_name'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>YARAMAY Computer Maintenance Services</title>
		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
	    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
	    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
	    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
	  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	  	<script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
	  		<header class="main-header">
	    		<!-- Logo -->
	    		<a href="index" class="logo">
	      			<!-- mini logo for sidebar mini 50x50 pixels -->
	      			<span class="logo-mini">YCMS</span>
	      			<!-- logo for regular state and mobile devices -->
	      			<span class="logo-lg"><b>YARAMAY</b></span>
	    		</a>
	    		<!-- Header Navbar: style can be found in header.less -->
	    		<nav class="navbar navbar-static-top">
	      			<!-- Sidebar toggle button-->
	      			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	        			<span class="sr-only">Toggle navigation</span>
	      			</a>
	      			<div class="navbar-custom-menu">
	        			<ul class="nav navbar-nav">
	          				<!-- Messages: style can be found in dropdown.less-->
	          				
	          				<!-- Notifications: style can be found in dropdown.less -->
	          			
	          				<!-- User Account: style can be found in dropdown.less -->
	          				<li class="dropdown user user-menu">
	            				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              					<img src="../account_images/download.png" class="user-image" alt="User Image">
	              					<span class="hidden-xs"><?php echo $employer_full; ?></span>
	           					</a> 
	            				<ul class="dropdown-menu">
	              					<!-- User image -->
	              					<li class="user-header">
	                					<img src="../account_images/download.png" class="img-circle" alt="User Image">
	                					<p>
	                 						<?php echo $employer_full; ?>
	                  						<small><?php echo $employer_company; ?></small>
	                					</p>
	              					</li>
	              					<!-- Menu Footer-->
	              					<li class="user-footer">
	                					<div class="pull-right">
	                  						<a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
	               	 					</div>
	              					</li>
	            				</ul>
	          				</li>
	          				   
	        			</ul>
	      			</div>
	    		</nav>
	  		</header>
	  		<!-- Left side column. contains the logo and sidebar -->
	  		<!-- sidebar starts -->
	  		<?php

	  			include("sidebar.php");

	  		?>
	  		<!-- sidebar ends -->
	  		<!-- Content Wrapper. Contains page content -->
	  		<div class="content-wrapper">
	    	<?php

	    		
                if(isset($_GET['employees'])){
                    include("employees.php");
                }

                if(isset($_GET['profile'])){
                    include("profile.php");
                }

                if(isset($_GET['delete_processs'])){
                    include("delete_processs.php");
                }
                

	    	?>
	  		</div>
	  		<!-- /.content-wrapper -->
	  		<footer class="main-footer">	
	    		<strong>Copyright &copy; 2018 <a href="#">YARAMAY Computer Maintenance Services</a>.</strong> All Rights Reserved
	  		</footer>
	  		<!-- Add the sidebar's background. This div must be placed
	       immediately after the control sidebar -->
	  		<div class="control-sidebar-bg"></div>
		</div>
		<!-- ./wrapper -->
		
	<!-- FastClick -->
	<script src="../bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="../dist/js/adminlte.min.js"></script>
	<!-- Sparkline -->
	<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap  -->
	<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll -->
	<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ChartJS -->
	<script src="../bower_components/Chart.js/Chart.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="../dist/js/pages/dashboard2.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../dist/js/demo.js"></script>
	<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
<?php

	}

?>