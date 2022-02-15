<?php

	    	include("../include/db.php");

	    		$contact_person = $_POST['contact_person'];
	    		
	    		$contact_address = $_POST['contact_address'];
	    		
	    		$contact_number = $_POST['contact_number'];

	    		$applicant_id = $_POST['applicant_id'];
	    		
	    		$details = $_POST['details'];

	    		$flight_number = $_POST['flight_number'];

	    			$run_update = mysqli_query($con,"update tbl_flights set contact_person = '$contact_person', contact_address = '$contact_address', contact_number='$contact_number', details = '$details' where flight_number = '$flight_number'");

	    		if($run_update){

	    			echo "
						<script>
							alert('Updated')
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