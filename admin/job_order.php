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

		$('#retrieve').load('retrieve_job_order.php');

	},1000);
</script>
<section class="content-header">
	<h1>
		Job Order
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Job Order</li>
	    
	</ol>
</section>
<section class="content">
	<a class="btn btn-default" href="index.php?add_job_order" ">
		<i class="fa fa-plus"></i>
		Add
	</a>
	<a class="btn btn-default" href="index.php?search_job_order" ">
		<i class="fa fa-search"></i>
		Search
	</a>
	<a class="btn btn-default" href="../TCPDF/User/job_orders.php" target="_blank">
		<i class="fa fa-print"></i>
		Print
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div id="retrieve">
					<?php include("retrieve_job_order.php"); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	}

?>