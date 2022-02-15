<?php

	    	include("../include/db.php");

	    		$contact_person = $_POST['contact_person'];
	    		
	    		$contact_address = $_POST['contact_address'];
	    		
	    		$contact_number = $_POST['contact_number'];
	    		
	    		$details = $_POST['details'];

	    		$applicant_id = $_POST['applicant_id'];

	    			$run_add = mysqli_query($con,"insert into tbl_flights (applicant_id,contact_person,contact_address,contact_number,details) values ('$applicant_id','$contact_person','$contact_address','$contact_number','$details')");

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_process.php?id=$applicant_id';
						</script>
					";

	    		}else{

	    			echo "
						<script>
							alert('Do Not Use Invalid Characters in Some Fields')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_process.php?id=$applicant_id';
						</script>
					";

	    		}
	    		
	    ?>