<?php

	    	include("../include/db.php");

	    		$contact_person = mysqli_real_escape_string($con,$_POST['contact_person']);
	    		$contact_address = mysqli_real_escape_string($con,$_POST['contact_address']);
	    		$contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
	    		$details = mysqli_real_escape_string($con,$_POST['details']);
	    		$local = mysqli_real_escape_string($con,$_POST['lagency']);
	    		$abroad = mysqli_real_escape_string($con,$_POST['aagency']);
	    		$flight_number = mysqli_real_escape_string($con,$_POST['flight_number']);


	    			$run_update = mysqli_query($con,"update tbl_flights set contact_person = '$contact_person', contact_address = '$contact_address', contact_number='$contact_number', details = '$details', local_agency = '$local', abroad_agency = '$abroad' where flight_number = '$flight_number'");

	    		if($run_update){

	    			echo "
						<script>
							alert('Updated')
						</script>
					";

					echo "
						<script>
							window.open('add_from_waiting.php','_self')
						</script>
					";

	    		}else{

	    			echo "
						<script>
							alert('Error Updating Flight')
						</script>
					";

					echo "
						<script>
							window.open('add_from_waiting.php','_self')
						</script>
					";

	    		}
	    		
	    ?>