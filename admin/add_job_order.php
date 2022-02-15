<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Add Job Order
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-plus fa-fw"></i>
					Add Job Order
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Name
						</label>
						<div class="col-md-6">
							<input type="text" name="jo_name" class="form-control" required>
						</div>
					</div><!-- form-group Ends -->
					
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Contact Number
						</label>
						<div class="col-md-6">
							<input type="text" name="contact_number" class="form-control" onkeypress='return isNumericKey(event)' maxlength="15" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Username
						</label>
						<div class="col-md-6">
							<input type="text" name="email_address" class="form-control" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Password
						</label>
						<div class="col-md-6">
							<input type="text" name="password" class="form-control" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Insert Job Order" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?job_order" class="btn btn-danger form-control">
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

	if(isset($_POST['submit'])){

		$name = $_POST['jo_name'];
		

		$contact_number = $_POST['contact_number'];
		
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];

				$insert_agent = "insert into tbl_jo (jo_name,jo_contact,jo_email,jo_password) values ('$name','$contact_number','$email_address','$password')";

				$run_agent = mysqli_query($con,$insert_agent);

				if($run_agent){

					echo "
						<script>
							alert('New Job Order Has Been Inserted')
						</script>
					";

					echo "
						<script>
							window.open('index.php?job_order','_self')
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