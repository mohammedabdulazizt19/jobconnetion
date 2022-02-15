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

				if(isset($_GET['delete_agent'])){

					$delete_id = $_GET['delete_agent'];

					$get_agent = "select * from tbl_agents where agent_id = '$delete_id'";

					$run_get = mysqli_query($con,$get_agent);

					$row_delete = mysqli_fetch_array($run_get);

					

					$e_fname = $row_delete['first_name'];
					$e_mname = $row_delete['middle_name'];
					$e_lname = $row_delete['last_name'];
					$e_contact = $row_delete['contact_number'];
					$e_email = $row_delete['email_address'];

					$name = ucfirst($e_fname) . " " . ucfirst($e_mname) . " " . ucfirst($e_lname);

				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Delete Agent
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
					Delete Agent
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form action="" method="post" class="form-horizontal">
	                       		<h3 class="text-center">Are you sure you want to delete <span style="color: red;"><?php echo $name; ?></span>&nbsp;?</h3><br>
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
										<a href="index.php?add_edit_agent" class="btn btn-danger form-control">
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

		$insert_delete = "insert into tbl_removed_agent (full_name,contact_number,email_address,date_removed) values ('$name','$e_contact','$e_email',now())";

		$run_insert = mysqli_query($con,$insert_delete);

		$delete_emp = "delete from tbl_agents where agent_id = '$delete_id'";

		$run_delete = mysqli_query($con,$delete_emp);

		if($run_insert && $run_delete){

			echo "
                <script>
                    alert('Agent Has Been Deleted')
                </script>
            ";

            echo "
				<script>
					window.open('index.php?add_edit_agent','_self')
				</script>
			";

		}else{

			echo "
                <script>
                    alert('Error Deleting Agent')
                </script>
            ";

		}

		

	}

?>
<?php

				}

			?>