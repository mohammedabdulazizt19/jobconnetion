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

		$('#retrieve').load('retrieve_dfa.php');

	},1000);
</script>
<section class="content-header">
	<h1>
		Dashboard
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">DFA List</li>
	</ol>
</section>
<section class="content">
	<a class="btn btn-default" href="index.php?add_dfa" ">
		<i class="fa fa-search"></i>
		Add
	</a>
	<a class="btn btn-default" href="index.php?search_dfa" ">
		<i class="fa fa-search"></i>
		Search
	</a>

	<a class="btn btn-default" href="index.php?get_dfa">
		<i class="fa fa-print"></i>
		Get Excel
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div id="retrieve">
					<?php include("retrieve_dfa.php"); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	}

?>