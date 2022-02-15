	<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
<script type="text/javascript">
	setInterval(function(){

		$('#retrieve').load('retrieve_employer.php');

	},1000);
</script>
	    		<section class="content-header">
	      			<h1>
	        			Employer
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Employer</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			<a href="index.php?add_employer" class="btn btn-default">
	    				<i class="fa fa-plus"></i>
						Add
	    			</a>
	    			<a href="index.php?search_employer" class="btn btn-default">
	    				<i class="fa fa-search"></i>
						Search
	    			</a>
					<a class="btn btn-default" href="../TCPDF/User/employers.php" target="_blank">
						<i class="fa fa-print"></i>
						Print
					</a>
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div id="retrieve">
									<?php include("retrieve_employer.php"); ?>
								</div>
	          				</div>
	          				<!-- /.box -->
	        			</div>
	      			</div>
	    		</section>
	    		<!-- /.content -->
	    		<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<?php

				}

			?>