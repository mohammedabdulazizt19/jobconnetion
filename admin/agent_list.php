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

		$('#retrieve').load('retrieve_agent.php');

	},1000);
</script>
<section class="content-header">
	<h1>
		Agents
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Agent</li>
	    <li class="active">Agent List</li>
	</ol>
</section>
<section class="content">
	<a class="btn btn-default" href="index.php?search_agent" ">
		<i class="fa fa-search"></i>
		Search
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div id="retrieve">
					<?php include("retrieve_agent.php"); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	}

?>