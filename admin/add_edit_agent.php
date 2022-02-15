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

		$('#retrieve').load('retrieve_agents.php');

	},1000);
</script>
<section class="content-header">
	<h1>
		Agents
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Agent</li>
	    <li class="active">Add / Edit</li>
	</ol>
</section>
<section class="content">
	<a class="btn btn-default" href="index.php?add_agent" ">
		<i class="fa fa-plus"></i>
		Add
	</a>
	<a class="btn btn-default" href="index.php?search_agents" ">
		<i class="fa fa-search"></i>
		Search
	</a>
	<a class="btn btn-default" href="../TCPDF/User/agentss.php" target="_blank">
		<i class="fa fa-print"></i>
		Print
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div id="retrieve">
					<?php include("retrieve_agents.php"); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	}

?>