<?php

	    	include("../include/db.php");

	    		$contact_person = mysqli_real_escape_string($con,$_POST['contact_person']);
	    		$contact_address = mysqli_real_escape_string($con,$_POST['contact_address']);
	    		$contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
	    		$details = mysqli_real_escape_string($con,$_POST['details']);
	    		$local = mysqli_real_escape_string($con,$_POST['lagency']);
	    		$abroad = mysqli_real_escape_string($con,$_POST['aagency']);
	    		$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_id']);

	    			$run_add = mysqli_query($con,"insert into tbl_flights (applicant_id,contact_person,contact_address,contact_number,details,local_agency,abroad_agency) values ('$applicant_id','$contact_person','$contact_address','$contact_number','$details','$local','$abroad')");

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?id=$applicant_id';
						</script>
					";

	    		}else{

	    			echo "
						<script>
							alert('Error Adding Flight')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processiing_applicant.php?id=$applicant_id';
						</script>
					";

	    		}
	    		
	    ?>