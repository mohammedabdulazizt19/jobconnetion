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

		$('#retrieve').load('retrieve_processing_applicants.php');

	},1000);
</script>
<section class="content-header">
	<h1>
		Processing Applicants
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Dashboard</li>
	    <li class="active">Processing Applicants</li>
	</ol>
</section>
<section class="content">
	<a href="index.php?add_processing_applicants" class="btn btn-default">
	    <i class="fa fa-plus"></i>
		Add
	</a>
	<a href="add_from_waiting.php" class="btn btn-default">
	    <i class="fa fa-plus"></i>
		Waiting Applicants
	</a>
	<a class="btn btn-default" href="index.php?search_processing_applicants" ">
		<i class="fa fa-search"></i>
		Search
	</a>
	<a class="btn btn-default" href="../TCPDF/User/processing_applicants.php" target="_blank">
		<i class="fa fa-print"></i>
		Print
	</a>
	<a class="btn btn-default" href="../PHPExcel/Examples/processing.php">
		<i class="fa fa-print"></i>
		Get Excel
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div id="retrieve">
					<?php include("retrieve_processing_applicants.php"); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<?php

	}

?>