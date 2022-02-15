<?php

	if(!isset($_SESSION['email_address'])){

		echo "
			<script>
				window.open('login.php','_self')
			</script>
		";

	}else{

?>
<?php

	if(isset($_GET['profile'])){

		$edit_id = $_GET['profile'];

		$get_admin = "select * from tbl_employers where employer_id ='$edit_id'";

		$run_admin = mysqli_query($con,$get_admin);

		$row_admin = mysqli_fetch_array($run_admin);

		$employer_id = $row_admin['employer_id'];
		$employer_number = $row_admin['employer_number'];
		$national = $row_admin['national_id'];
		
		$first_name = $row_admin['first_name'];
		$middle_name = $row_admin['middle_name'];
		$last_name = $row_admin['last_name'];
		$arabic_name = $row_admin['arabic_name'];
		$employer_image = $row_admin['image'];
		$contact_number = $row_admin['contact_number'];
		$email_address = $row_admin['email_address'];
		$password = $row_admin['password'];
		$company_name = $row_admin['company_name'];
		$company_address = $row_admin['company_address'];

	}

?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i>
				Dashboard / Edit Profile
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
					Edit Profile
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<div class="form-group"><!-- form-group Starts -->
							<label class="col-md-3 control-label">
								Employer Number <br>
							رقم هوية صاحب العمل
							</label>
							<div class="col-md-6"><!-- col-md-6 Starts -->
								<input type="text" name="employer_number" class="form-control" required value="<?php echo $employer_number; ?>">
							</div><!-- col-md-6 Ends -->
						</div><!-- form-group Ends -->
						<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							National ID <br>
							رقم الهوية الوطنية
						</label>
						<div class="col-md-6">
							<input type="text" name="national_id" class="form-control" value="<?php echo $national; ?>">
						</div>
					</div><!-- form-group Ends -->
						<label class="col-md-3 control-label">
							First Name
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="first_name" class="form-control" required value="<?php echo $first_name; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Middle Name
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="middle_name" class="form-control" required value="<?php echo $middle_name; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Last Name
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="last_name" class="form-control" required value="<?php echo $last_name; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							الاسم العربي
						</label>
						<div class="col-md-6">
							<input type="text" name="arabic_name" class="form-control" value="<?php echo $arabic_name; ?>">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Contact Number  <br>
							رقم الاتصال
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="contact_number" class="form-control" onkeypress='return isNumericKey(event)' maxlength="15" required value="<?php echo $contact_number; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Username <br>
						    اسم المستخدم
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="email_address" class="form-control" required value="<?php echo $email_address; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Password
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="password" class="form-control" required value="<?php echo $password; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Company Name <br>
							اسم الشركة
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="text" name="company_name" class="form-control" required value="<?php echo $company_name; ?>">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Company Address <br>
							عنوان الشركة
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<textarea class="form-control" name="company_address" rows="4" required><?php echo $company_address; ?></textarea>
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6"><!-- col-md-6 Starts -->
							<input type="submit" name="update" value="Update" class="btn btn-primary form-control">
						</div><!-- col-md-6 Ends -->
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php" class="btn btn-danger form-control">
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

		$employer_number = $_POST['employer_number'];
		
		$national_id = $_POST['national_id'];
		
		$arabic_name = $_POST['arabic_name'];

		$first_name = $_POST['first_name'];
		
		$middle_name = $_POST['middle_name'];
		
		$last_name = $_POST['last_name'];
		
		$contact_number = $_POST['contact_number'];
		
		$email_address = $_POST['email_address'];
		
		$password = $_POST['password'];
		
		$company_name = $_POST['company_name'];

		$company_address = $_POST['company_address'];

		$full_name = ucfirst($first_name) . " " . ucfirst($middle_name) . " " .ucfirst($last_name);

		$edit_emp = "update tbl_employers set employer_number = '$employer_number', national_id = '$national_id', first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', arabic_name = '$arabic_name', full_name = '$full_name', image = '', contact_number = '$contact_number', email_address = '$email_address',password = '$password', company_name = '$company_name',company_address = '$company_address' where employer_id = '$edit_id'";

		$run_admin = mysqli_query($con,$edit_emp);

		if($run_admin){

			echo "
				<script>
					alert('Profile Has Been Updated Successfully and Login Again')
				</script>
			";

			echo "
				<script>
					window.open('login.php','_self')
				</script>
			";

			session_destroy();

		}

	}

?>
<?php

	}

?>