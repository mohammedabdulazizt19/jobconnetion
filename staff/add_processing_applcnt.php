<?php

	    	include("../include/db.php");

	    	

	    	

	    		$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_identify']);
            $position_desired = mysqli_real_escape_string($con,$_POST['position_desired']);
            $employer = mysqli_real_escape_string($con,$_POST['employer']);
            
            $gender = mysqli_real_escape_string($con,$_POST['gender']);
            $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $email_address = mysqli_real_escape_string($con,$_POST['email_address']);
            $address = mysqli_real_escape_string($con,$_POST['address']);
            $place_birth = mysqli_real_escape_string($con,$_POST['place_birth']);
            $date_birth = mysqli_real_escape_string($con,$_POST['date_birth']);
            $civil_status = mysqli_real_escape_string($con,$_POST['civil_status']);
            $height = mysqli_real_escape_string($con,$_POST['height']);
            $weight = mysqli_real_escape_string($con,$_POST['weight']);
            $blood_type = mysqli_real_escape_string($con,$_POST['blood_type']);
            $religion = mysqli_real_escape_string($con,$_POST['religion']);
            $language_spoken = mysqli_real_escape_string($con,$_POST['language_spoken']);
            $father_name = mysqli_real_escape_string($con,$_POST['father_name']);
            $mother_name = mysqli_real_escape_string($con,$_POST['mother_name']);
            $passport_number = mysqli_real_escape_string($con,$_POST['passport_number']);
        
            $place_issue = mysqli_real_escape_string($con,$_POST['place_issue']);

	    		$add_process = "update tbl_applicants set address = '$address', position_desired = '$position_desired', contact_number = '$contact_number' , gender = '$gender', language_spoken = '$language_spoken', birth_date = '$date_birth', birth_place = '$place_birth', email_address = '$email_address', father_name = '$father_name', mother_name = '$mother_name', height = '$height', weight = '$weight', blood_type = '$blood_type', civil_status = '$civil_status', religion = '$religion', passport_number = '$passport_number', place_issue = '$place_issue', employer_id = '$employer', status = '2', date_hired = now() where applicant_id = '$applicant_id'";

	    		$run_add = mysqli_query($con,$add_process);

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
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
							alert(Error Adding Applicant')
						</script>
					";

					echo "
						<script>
							window.open('add_from_waiting.php','_self')
						</script>
					";

	    		}

	    	

	    ?>