<?php

	session_start();

	include("../include/db.php");

	if(!isset($_SESSION['email_address'])){

		echo "
			<script>
				window.open('../login.php','_self')
			</script>
		";

	}else{

?>
<?php

	$staff_session = $_SESSION['email_address'];

	$get_staff = "select * from tbl_accounts where email_address = '$staff_session'";

	$run_staff = mysqli_query($con,$get_staff);

	$row_staff = mysqli_fetch_array($run_staff);

	$account_id = $row_staff['account_id'];

	$first_name = $row_staff['first_name'];
	
	$middle_name = $row_staff['middle_name'];
	
	$last_name = $row_staff['last_name'];

	$staff_name = ucfirst($first_name) . " " . ucfirst($middle_name[0]) . " " . ucfirst($last_name);

	$image = $row_staff['image'];

	$job = $row_staff['job'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>The Job Connections International Manpower Services, Inc.</title>
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
	      			<span class="logo-mini">JCIM</span>
	      			<!-- logo for regular state and mobile devices -->
	      			<span class="logo-lg"><b>JOB CONNECTIONS</b></span>
	    		</a>
	    		<!-- Header Navbar: style can be found in header.less -->
	    		<nav class="navbar navbar-static-top">
	      			<!-- Sidebar toggle button-->
	      			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	        			<span class="sr-only">Toggle navigation</span>
	      			</a>
	      			<div class="navbar-custom-menu">
	        			<ul class="nav navbar-nav">
	          				
	          				
	          				<!-- User Account: style can be found in dropdown.less -->
	          				<li class="dropdown user user-menu">
	            				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              					<img src="../account_images/download.png" class="user-image" alt="User Image">
	              					<span class="hidden-xs"><?php echo $staff_name; ?></span>
	           					</a> 
	            				<ul class="dropdown-menu">
	              					<!-- User image -->
	              					<li class="user-header">
	                					<img src="../account_images/download.png" class="img-circle" alt="User Image">
	                					<p>
	                 						<?php echo $staff_name; ?>
	                  						<small><?php echo $job; ?></small>
	                					</p>
	              					</li>
	              					<!-- Menu Footer-->
	              					<li class="user-footer">
	                					<div class="pull-right">
	                  						<a href="../logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
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

	    		
                if(isset($_GET['waiting_applicants'])){
                    include("waiting_applicants.php");
                }
                if(isset($_GET['search_waiting_applicants'])){
                    include("search_waiting_applicants.php");
                }
                if(isset($_GET['add_waiting_applicants'])){
                    include("add_waiting_applicants.php");
                }
                if(isset($_GET['edit_waiting_applicant'])){
                    include("edit_waiting_applicant.php");
                }
                if(isset($_GET['delete_waiting_applicant'])){
                    include("delete_waiting_applicant.php");
                }
                if(isset($_GET['processing_applicants'])){
                    include("processing_applicants.php");
                }
                if(isset($_GET['add_processing_applicants'])){
                    include("add_processing_applicants.php");
                }
                if(isset($_GET['search_processing_applicants'])){
                    include("search_processing_applicants.php");
                }
                if(isset($_GET['delete_processing_applicant'])){
                    include("delete_processing_applicant.php");
                }
                if(isset($_GET['employer'])){
                    include("employer.php");
                }
                if(isset($_GET['add_employer'])){
                    include("add_employer.php");
                }
                if(isset($_GET['edit_employer'])){
                    include("edit_employer.php");
                }
                if(isset($_GET['delete_employer'])){
                    include("delete_employer.php");
                }
                if(isset($_GET['search_employer'])){
                    include("search_employer.php");
                }
                if(isset($_GET['documents'])){
                    include("documents.php");
                }
                if(isset($_GET['edit_document'])){
                    include("edit_document.php");
                }
                 if(isset($_GET['delete_document'])){
                    include("delete_document.php");
                }
                if(isset($_GET['add_document'])){
                    include("add_document.php");
                }
                if(isset($_GET['agent_list'])){
                    include("agent_list.php");
                }
                if(isset($_GET['add_edit_agent'])){
                    include("add_edit_agent.php");
                }
                if(isset($_GET['add_agent'])){
                    include("add_agent.php");
                }
                if(isset($_GET['edit_agent'])){
                    include("edit_agent.php");
                }

                if(isset($_GET['delete_agent'])){
                    include("delete_agent.php");
                }
                if(isset($_GET['search_agents'])){
                    include("search_agents.php");
                }
                if(isset($_GET['search_agent'])){
                    include("search_agent.php");
                }
                if(isset($_GET['view_applcnt'])){
                    include("view_applcnt.php");
                }
                if(isset($_GET['view_expense'])){
                    include("view_expense.php");
                }
                if(isset($_GET['add_exp'])){
                    include("add_exp.php");
                }
                if(isset($_GET['edit_exp'])){
                    include("edit_exp.php");
                }
                if(isset($_GET['delete_exp'])){
                    include("delete_exp.php");
                }
                if(isset($_GET['staffs'])){
                    include("staffs.php");
                }
                if(isset($_GET['add_staff'])){
                    include("add_staff.php");
                }
                if(isset($_GET['edit_staff'])){
                    include("edit_staff.php");
                }
                if(isset($_GET['delete_staff'])){
                    include("delete_staff.php");
                }
                if(isset($_GET['deduct_exp'])){
                    include("deduct_exp.php");
                }
                if(isset($_GET['voucher'])){
                    include("voucher.php");
                }
                if(isset($_GET['voucher_list'])){
                    include("voucher_list.php");
                }
                if(isset($_GET['print_voucher'])){
                    include("print_voucher.php");
                }
                if(isset($_GET['profile'])){
                    include("profile.php");
                }
                if(isset($_GET['job_order'])){
                    include("job_order.php");
                }
                if(isset($_GET['search_job_order'])){
                    include("search_job_order.php");
                }
                if(isset($_GET['add_job_order'])){
                    include("add_job_order.php");
                }
                 if(isset($_GET['view_emp_applicants'])){
                    include("view_emp_applicants.php");
                }
                 if(isset($_GET['schedules'])){
                    include("schedules.php");
                }
                if(isset($_GET['add_schedule'])){
                    include("add_schedule.php");
                }
                if(isset($_GET['edit_schedule'])){
                    include("edit_schedule.php");
                }
                if(isset($_GET['delete_schedule'])){
                    include("delete_schedule.php");
                }
                if(isset($_GET['search_job_applicant'])){
                    include("search_job_applicant.php");
                }
                
                
	    	?>
	  		</div>
	  		<!-- /.content-wrapper -->
	  		<footer class="main-footer">	
	    		<strong>Copyright &copy; <?php date_default_timezone_set("Asia/Manila");
                                            $year_now = date("Y");
                                            echo "$year_now"; ?> <a href="#">The Job Connections International Manpower Services, Inc.</a></strong> All Rights Reserved
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