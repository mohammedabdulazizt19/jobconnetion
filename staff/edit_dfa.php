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

				if(isset($_GET['edit_dfa'])){

					$edit_id = $_GET['edit_dfa'];

					$edit_d = "select * from tbl_dfa where dfa_id = '$edit_id'";

					$run_edit = mysqli_query($con,$edit_d);

					$row_edit = mysqli_fetch_array($run_edit);

					$e_name = $row_edit['namee'];
					
					$e_agent = $row_edit['agent'];
					
					$e_pay = $row_edit['payment'];

					
					
					$e_dfa = $row_edit['dfa'];
					
					$e_date = $row_edit['datee'];
					$e_time = $row_edit['timee'];
					$e_r = $row_edit['remarks'];
					
					
					

				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Edit Appointment
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
					Edit Appointment
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
					
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Applicant
						</label>
						<div class="col-md-6">
							<input type="text" name="applcnt" class="form-control" value="<?php echo $e_name; ?>" disabled>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Agent
						</label>
						<div class="col-md-6">
							<input type="text" name="agent" class="form-control" value="<?php echo $e_agent; ?>" disabled>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Payment Date
						</label>
						<div class="col-md-6">
							<input type="date" name="payment" class="form-control" value="<?php echo $e_pay; ?>">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							DFA
						</label>
						<div class="col-md-6">
							<input type="text" name="dfa" class="form-control" value="<?php echo $e_dfa; ?>">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Date
						</label>
						<div class="col-md-6">
							<input type="date" name="datee" class="form-control" value="<?php echo $e_date; ?>">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Time
						</label>
						<div class="col-md-6">
							<input type="text" name="timee" class="form-control" value="<?php echo $e_time; ?>">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Remarks
						</label>
						<div class="col-md-6">
							<input type="text" name="remarks" class="form-control" value="<?php echo $e_r; ?>">
						</div>
					</div><!-- form-group Ends -->
					
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="update" value="Update" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?dfa" class="btn btn-danger form-control">
								Cancel
							</a>
						</div>
					</div><!-- form-group Ends -->
				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>
<?php

	if(isset($_POST['update'])){

		$pay = $_POST['payment'];
		
		$dfa = $_POST['dfa'];
		
		$date = $_POST['datee'];

		
		
		$time = $_POST['timee'];
		
		$rem = $_POST['remarks'];
		
		

		$edit_agnt = "update tbl_dfa set dfa = '$dfa', datee = '$date', timee = '$time', payment = '$pay', remarks = '$rem' where dfa_id = '$edit_id'";

		$run_agnt = mysqli_query($con,$edit_agnt);

		if($run_agnt){

			echo "
				<script>
					alert('Appointment Has Been Updated')
				</script>
			";

			echo "
				<script>
					window.open('index.php?dfa','_self')
				</script>
			";


		}else{

					echo "
						<script>
							alert('Do Not Use Other Characters in Some Fields')
						</script>
					";

				}

	}

?>
<?php

				}

			?>