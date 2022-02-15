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

				Dashboard / Insert Employer

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

					Insert Employer

				</h3><!-- panel-title Ends -->

			</div><!-- panel-heading Ends -->

			<div class="panel-body"><!-- panel-body Starts -->

				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Employer ID Number <br> رقم هوية صاحب العمل

						</label>

						<div class="col-md-6">

							<input type="text" name="employer_number" class="form-control" required>

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							National ID <br> رقم الهوية الوطنية

						</label>

						<div class="col-md-6">

							<input type="text" name="national_id" class="form-control" required>

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							First Name

						</label>

						<div class="col-md-6">

							<input type="text" name="first_name" class="form-control" required>

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Middle Name

						</label>

						<div class="col-md-6">

							<input type="text" name="middle_name" class="form-control">

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Last Name

						</label>

						<div class="col-md-6">

							<input type="text" name="last_name" class="form-control" required>

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							الاسم العربي

						</label>

						<div class="col-md-6">

							<input type="text" name="arabic_name" class="form-control" >

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Contact Number <br> رقم الاتصال

						</label>

						<div class="col-md-6">

							<input type="text" name="contact_number" class="form-control" onkeypress='return isNumericKey(event)' maxlength="15" required>

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Username <br> اسم المستخدم

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

							<input type="password" name="password" class="form-control" required>

						</div>

					</div><!-- form-group Ends -->

					

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Company Name <br> اسم الشركة

						</label>

						<div class="col-md-6">

							<input type="text" name="company_name" class="form-control" required>

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Company Address <br> عنوان الشركة

						</label>

						<div class="col-md-6">

							<textarea class="form-control" rows="4" required name="company_address"></textarea>

						</div>

					</div><!-- form-group Ends -->

					

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							

						</label>

						<div class="col-md-6">

							<input type="submit" name="submit" value="Insert Employer" class="btn btn-primary form-control">

						</div>

					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							

						</label>

						<div class="col-md-6">

							<a href="index.php?employer" class="btn btn-danger form-control">

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



		$employer_number = $_POST['employer_number'];



		$national_id = $_POST['national_id'];



		



		$first_name = $_POST['first_name'];

		

		$middle_name = $_POST['middle_name'];

		

		$last_name = $_POST['last_name'];



		$arabic_name = $_POST['arabic_name'];

		

		$contact_number = $_POST['contact_number'];

		

		$email_address = $_POST['email_address'];

		$password = $_POST['password'];



	

		

		$company_name = $_POST['company_name'];



		



		$company_address = $_POST['company_address'];



		



		$full_name = ucfirst($first_name) . " " . ucfirst($middle_name) . " " .ucfirst($last_name);



		

				$insert_employer = "insert into tbl_employers (employer_number,jo_no,national_id,first_name,middle_name,last_name,full_name,arabic_name,contact_number,email_address,password,image,company_name,company_address,created_by,date_created) values ('$employer_number','','$national_id','$first_name','$middle_name','$last_name','$full_name','$arabic_name','$contact_number','$email_address','$password','','$company_name','$company_address','$staff_name',now())";

				$run_employer = mysqli_query($con,$insert_employer);



				if($run_employer){



					echo "

						<script>

							alert('New Employer Has Been Inserted')

						</script>

					";



					echo "

						<script>

							window.open('index.php?employer','_self')

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