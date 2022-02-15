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

				if(isset($_GET['add_exp'])){

					$retriv_id = $_GET['add_exp'];
				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Add Expense
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
					Add Expense
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Description
						</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Amount
						</label>
						<div class="col-md-6">
							<input type="number" name="amount" class="form-control" required>
						</div>
					</div><!-- form-group Ends -->
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Insert Expense" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?view_expense=<?php echo $retriv_id; ?>" class="btn btn-danger form-control">
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

		$title = $_POST['title'];
		
		$amount = $_POST['amount'];
		
		
$insert_exp = "insert into tbl_expences (applicant_id,title,amount,last_amount,deducted_amount,start_date) values ('$retriv_id','$title','$amount','0','0',now())";
				

				$run_exp = mysqli_query($con,$insert_exp);

				if($run_exp){

					echo "
						<script>
							alert('New Expence Has Been Inserted')
						</script>
					";

					echo "
						<script>
							window.open('index.php?view_expense=$retriv_id','_self')
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