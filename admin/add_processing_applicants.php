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
				Dashboard / Add Applicant
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-plus fa-fw"></i>
					Add Applicant
				</h3><!-- panel-title Ends -->
			</div>
			<div class="panel-body">
				<form action="" method="post" class="form-horizontal">
					<div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position1">
                                Position 1
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position1" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)' required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position2">
                                Position 2
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="position2" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)'>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position3">
                                Position 3
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position3" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)'>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">
                                First Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="first_name" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)' required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="middle_name">
                                Middle Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="middle_name" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)'>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">
                                Last Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)' required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="age">
                                Age
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="age" required onkeypress='return isNumericKey(event)' maxlength="2" minlength="2">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="gender">
                                Gender
                            </label>
                            <div class="col-sm-8">
                                <select name="gender" class="form-control">
                                    <option name="gender" value="Male">
                                        Male
                                    </option>
                                    <option name="gender" value="Female">
                                        Female
                                    </option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="contact_number">
                                Contact Number
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="contact_number" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email_address">
                                Email Address
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email_address" maxlength="150" minlength="5" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="address">
                                Address
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" rows="4" maxlength="200" minlength="5" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_place">
                                Birth Place
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="birth_place" rows="3" maxlength="200" minlength="5" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_date">
                                Birth Date
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="birth_date" required>
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="civil_status">
                                Civil Status
                            </label>
                            <div class="col-sm-8">
                                <select name="civil_status" class="form-control">
                                    <option name="civil_status" value="Single">
                                        Single
                                    </option>
                                    <option name="civil_status" value="Married">
                                        Married
                                    </option>
                                    <option name="civil_status" value="Divorced">
                                        Divorced
                                    </option>
                                    <option name="civil_status" value="Widowed">
                                        Widowed
                                    </option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="height">
                                Height
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="height" minlength="2" maxlength="10" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="weight">
                                Weight
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="weight" minlength="2" maxlength="10" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="blood_type">
                                Blood Type
                            </label>
                            <div class="col-sm-8">
                                <select name="blood_type" class="form-control">
                                    <option name="blood_type" value="A+">
                                        A+
                                    </option>
                                    <option name="blood_type" value="A-">
                                        A-
                                    </option>
                                    <option name="blood_type" value="B+">
                                        B+
                                    </option>
                                    <option name="blood_type" value="B-">
                                        B-
                                    </option>
                                    <option name="blood_type" value="AB+">
                                        AB+
                                    </option>
                                    <option name="blood_type" value="AB-">
                                        AB-
                                    </option>
                                    <option name="blood_type" value="O+">
                                        O+
                                    </option>
                                    <option name="blood_type" value="O-">
                                        O-
                                    </option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="religion">
                                Religion
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="religion" minlength="2" maxlength="70">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="language_spoken">
                                Language Spoken
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="language_spoken" minlength="3" maxlength="200" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="father_name">
                                Father Name
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="father_name" minlength="3" maxlength="210">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="mother_name">
                                Mother Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mother_name" minlength="3" maxlength="210">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="passport_number">
                                Passport Number
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="passport_number" maxlength="9" minlength="9" required>
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="date_issue">
                                Date Issue
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_issue" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="place_issue">
                                Place Issue
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="place_issue" rows="4" maxlength="200" minlength="5" required></textarea>
                            </div>  
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                    	<div class="form-group">
                            <label class="control-label col-sm-4" for="employer">
                                Employer
                            </label>
                            <div class="col-sm-6">
                                <select name="employer" class="form-control">
                                	<?php

                                	$get_employer = "select * from tbl_employers";

                                	$run_employer = mysqli_query($con,$get_employer);

                                	while($row_employer = mysqli_fetch_array($run_employer)){

                                		$employer_id = $row_employer['employer_id'];
                                		
                                		$company_name = $row_employer['company_name'];

                                		$full_name = $row_employer['full_name'];

                                		$option = $company_name . " - " . $full_name;

                                	?>
                                	<option name="employer" value="<?php echo $employer_id; ?>">
                                		<?php echo $option; ?>
                                	</option>
                                	<?php

                                		}

                                	?>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user"></i> Submit
                        </button>
                        <a href="index.php?processing_applicants" class="btn btn-danger">
                        	Cancel
                        </a>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

     function isAlphaKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return true;

        return false;
    }

</script>
<?php

	if(isset($_POST['submit'])){

		$position1 = mysqli_real_escape_string($con,$_POST['position1']);
        $position2 = mysqli_real_escape_string($con,$_POST['position2']);
        $position3 = mysqli_real_escape_string($con,$_POST['position3']);
        $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
        $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
        $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
        $age = mysqli_real_escape_string($con,$_POST['age']);
        $gender = mysqli_real_escape_string($con,$_POST['gender']);
        $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
        $email_address = mysqli_real_escape_string($con,$_POST['email_address']);
        $address = mysqli_real_escape_string($con,$_POST['address']);
        $birth_place = mysqli_real_escape_string($con,$_POST['birth_place']);
        $birth_date = mysqli_real_escape_string($con,$_POST['birth_date']);
        $civil_status = mysqli_real_escape_string($con,$_POST['civil_status']);
        $height = mysqli_real_escape_string($con,$_POST['height']);
        $weight = mysqli_real_escape_string($con,$_POST['weight']);
        $blood_type = mysqli_real_escape_string($con,$_POST['blood_type']);
        $religion = mysqli_real_escape_string($con,$_POST['religion']);
        $language_spoken = mysqli_real_escape_string($con,$_POST['language_spoken']);
        $father_name = mysqli_real_escape_string($con,$_POST['father_name']);
        $mother_name = mysqli_real_escape_string($con,$_POST['mother_name']);
        $passport_number = mysqli_real_escape_string($con,$_POST['passport_number']);
        $date_issue = mysqli_real_escape_string($con,$_POST['date_issue']);
        $place_issue = mysqli_real_escape_string($con,$_POST['place_issue']);
      
        $employer = mysqli_real_escape_string($con,$_POST['employer']);
        function random_code($length = 5){
                                          
            $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

            $shuffled = substr( str_shuffle( $str ), 0, $length );

                return $shuffled;
                                                        
        }    

        $applicant_code = random_code(14);

        $insert_applicant = "insert into tbl_applicants (applicant_code,position1,position2,position3,position_desired,first_name,middle_name,last_name,age,gender,contact_number,email_address,address,birth_place,birth_date,civil_status,height,weight,blood_type,religion,language_spoken,father_name,mother_name,passport_number,date_issue,place_issue,employer_id,agent_id,created_by,date_created,date_hired,date_arrival,date_signed,owwa_sched,biometric_sched,cv_sent,status_abroad,visa_number,remarks,status) values ('$applicant_code','$position1','$position2','$position3','','$first_name','$middle_name','$last_name','$age','$gender','$contact_number','$email_address','$address','$birth_place','$birth_date','$civil_status','$height','$weight','$blood_type','$religion','$language_spoken','$father_name','$mother_name','$passport_number','$date_issue','$place_issue','$employer','','$staff_name',now(),'0000-00-00','0000-00-00','0000-00-00','','','','','','','2')";


        $run_applicant = mysqli_query($con,$insert_applicant);

        if($run_applicant){

        	echo "
                <script>
                    alert('Applicant Successfully Added')
                </script>
            ";

            echo "
                <script>
                    window.open('index.php?processing_applicants','_self')
                </script>
            ";

        }else{

        	echo "
                <script>
                    alert('Error Adding Applicant')
                </script>
            ";

        }

	}

?>
<?php

	}

?>