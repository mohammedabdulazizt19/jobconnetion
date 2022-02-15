<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
			<?php

			$jScript = md5(rand(1,9));
			 $newScript = md5(rand(1,9));
			 $Script = md5(rand(1,9));
			 $getUpdate = md5(rand(1,9));
		   	 $getDelete = md5(rand(1,9));

				if(isset($_GET['delete_money'])){

					$delete_id = $_GET['delete_money'];

					$get_exp = "select * from tbl_money where money_id = '$delete_id'";

					$run_get = mysqli_query($con,$get_exp);

					$row_delete = mysqli_fetch_array($run_get);


					$e_name = $row_delete['title'];
					$id = $row_delete['jo_no'];

				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Delete Money
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-trash-o fa-fw"></i>
					Delete Money
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form action="" method="post" class="form-horizontal">
	                       		<h3 class="text-center">Are you sure you want to delete <span style="color: red;"><?php echo $e_name; ?></span>&nbsp;?</h3><br>
	                       		<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<input type="submit" name="delete" value="Delete" class="btn btn-primary form-control">
									</div>
								</div><!-- form-group Ends -->
								<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view_expnse=<?php echo $Script; ?> && job_order_money=<?php echo $id; ?> && getView=<?php echo $getUpdate; ?>" class="btn btn-danger form-control">
											Cancel
										</a>
									</div>
								</div><!-- form-group Ends -->
	              			</form>
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php

	if(isset($_POST['delete'])){

		$delete_doc = "delete from tbl_money where money_id = '$delete_id'";

		$run_delete = mysqli_query($con,$delete_doc);

		if($run_delete){

			echo "
				<script>
					alert('Money Has Been Deleted')
				</script>
			";

			echo "
				<script>
					window.open('index.php?jScript=$jScript && newScript=$newScript && view_expnse=$Script && job_order_money=$id && getView=$getUpdate','_self')
				</script>
			";

		}

	}

?>
<?php

				}

			?>