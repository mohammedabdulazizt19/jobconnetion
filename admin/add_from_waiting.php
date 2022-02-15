<?php

	include("../include/db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
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
<style type="text/css">
	.error{
		color: red;
	}
</style>
<body class="hold-transition sidebar-mini">
	<div class="wrapper"><!-- wrapper Starts -->
		<section class="content"><!-- content Starts -->
			<div class="row"><!-- row Starts -->
				<div class="col-lg-12"><!-- col-lg-12 Starts -->
					<div class="box box-success"><!-- box box-success Starts -->
						<div class="panel panel-default"><!-- panel panel-default Starts -->
							<div class="panel-heading"><!-- panel-heading Starts -->
								<h3 class="panel-title"><!-- panel-title Starts -->
									<i class="fa fa-briefcase fa-fw"></i>
									Processing List
								</h3><!-- panel-title Ends -->
							</div><!-- panel-heading Ends -->
							<div class="panel-body"><!-- panel-body Starts -->
								<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
									<div class="col-md-12"><!-- col-md-12 Starts -->
										<div class="form-group"><!-- form-group Starts -->
											<label class="col-md-3 control-label">
												Applicant Name <span class="error">&nbsp;*</span>
											</label>
											<div class="col-md-5">
												<select name="applicant_name" id="select_applicant" class="form-control">
													<option disabled selected>
														Select Applicant
													</option>
													<?php

								                        $get_app = "select * from tbl_applicants where status = '1'";

								                        $run_app = mysqli_query($con,$get_app);

														while($row_app = mysqli_fetch_array($run_app)){

																$app_id = $row_app['applicant_id'];
																$fname = $row_app['first_name'];
								                                $mname = $row_app['middle_name'];
								                                $lname = $row_app['last_name'];
								                                $name = ucfirst($fname) . " " . ucfirst($mname[0]) . ". " . ucfirst($lname);
																
													?>
													<option name="applicant_name" value="<?php echo $app_id; ?>">
														<?php echo $name; ?>
													</option>
													<?php

														}

													?>
												</select>
											</div>
										</div><!-- form-group Ends -->
									</div><!-- col-md-12 Ends -->
									<div class="col-md-12"><!-- col-md-12 Starts -->
										<div class="form-group"><!-- form-group Starts -->
											<input type="hidden" name="hidden_data" id="hidden_data" class="form-control">
										</div><!-- form-group Ends -->
									</div><!-- col-md-12 Ends -->
								</form><!-- form-horizontal Ends -->
								<div id="tago"><!-- tago starts -->
                      

								</div><!-- tago ends -->
							</div><!-- panel-body Ends -->
						</div><!-- panel panel-default Ends -->
					</div><!-- box box-success Ends -->
				</div><!-- col-lg-12 Ends -->
			</div><!-- row Ends -->
		</section><!-- content Ends -->
	</div><!-- wrapper Ends -->
 
	<script>
	$(document).ready(function(){

	    load_data();
	    
	    function load_data(query='')
	    {
	        $.ajax({
	            url:"fetch_data.php",
	            method:"POST",
	            data:{query:query},
	            success:function(data)
	            {
	                $('#tago').html(data);
	            }
	        })
	    }

	    $('#select_applicant').change(function(){
	        $('#hidden_data').val($('#select_applicant').val());
	        var query = $('#hidden_data').val();
	        load_data(query);
	    });
	    
	});
	</script>
	
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
	<script>
		$(function () {
		    $('#ample1').DataTable()
		    $('#ample2').DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : false,
		      'info'        : true,
		      'autoWidth'   : true
		    })
		})
	</script>
</body>
</html>