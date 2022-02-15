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

	if(isset($_GET['delete_waiting_applicant'])){

		$delete_id = $_GET['delete_waiting_applicant'];

		$get_applicant = "select * from tbl_applicants where applicant_id = '$delete_id' and status = '1'";

		$run_get = mysqli_query($con,$get_applicant);

		$row_delete = mysqli_fetch_array($run_get);

		$a_id = $row_delete['applicant_id'];

		$a_first = $row_delete['first_name'];
					
		$a_middle = $row_delete['middle_name'];
					
		$a_last = $row_delete['last_name'];

		$a_contact = $row_delete['contact_number'];

		$a_email = $row_delete['email_address'];

		$a_name = ucfirst($a_first) . " " . ucfirst($a_middle) . " " . ucfirst($a_last);

	}

?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Delete Applicant
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
					Delete Applicant
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form action="" method="post" class="form-horizontal">
	                <h3 class="text-center">Are you sure you want to delete <span style="color: red;"><?php echo $a_name; ?></span>&nbsp;?</h3><br>
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
							<a href="index.php?waiting_applicants" class="btn btn-danger form-control">
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

		$insert_delete = "insert into tbl_removed_applicant (full_name,contact_number,email_address,date_removed) values ('$a_name','$a_contact','$a_email',now())";

		$run_insert = mysqli_query($con,$insert_delete);

		$delete_appl = "delete from tbl_applicants where applicant_id = '$delete_id'";

		$run_delete = mysqli_query($con,$delete_appl);

		if($run_insert && $run_delete){

			echo "
                <script>
                    alert('Applicant Has Been Deleted')
                </script>
            ";

            echo "
				<script>
					window.open('index.php?waiting_applicants','_self')
				</script>
			";

		}else{

			echo "
                <script>
                    alert('Error Deleting Applicant')
                </script>
            ";

		}

	}

?>
<?php

	}

?>