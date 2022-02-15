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

				if(isset($_GET['edit_schedule'])){

					$edit_id = $_GET['edit_schedule'];

					$edit_document = "select * from tbl_schedules where id = '$edit_id'";

					$run_edit = mysqli_query($con,$edit_document);

					$row_edit = mysqli_fetch_array($run_edit);

					$e_id = $row_edit['id'];
					
					$e_title = $row_edit['title'];

				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Edit Schedule
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-pencil fa-fw"></i>
					Edit Schedule
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Title
						</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" required value="<?php echo $e_title; ?>">
						</div>
					</div><!-- form-group Ends -->
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="update" value="Update Schedule" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?schedules" class="btn btn-danger form-control">
								Cancel
							</a>
						</div>
					</div><!-- form-group Ends -->
				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php

	if(isset($_POST['update'])){

		$title = $_POST['title'];

		$edit_doc = "update tbl_schedules set title = '$title' where id = '$e_id'";

		$run_documents = mysqli_query($con,$edit_doc);

		if($run_documents){

			echo "
				<script>
					alert('Schedule Has Been Updated')
				</script>
			";

			echo "
				<script>
					window.open('index.php?schedules','_self')
				</script>
			";


		}else{

					echo "
						<script>
							alert('Error Updating')
						</script>
					";

				}

	}

?>
<?php

				}

			?>