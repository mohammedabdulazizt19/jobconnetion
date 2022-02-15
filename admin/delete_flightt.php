<?php

	    	include("../include/db.php");

	    		$flight_number = $_POST['flight_number'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$delete_flight = "delete from tbl_flights where flight_number = '$flight_number'";

	    		$run_delete = mysqli_query($con,$delete_flight);

	    		if($run_delete){

	    			echo "
						<script>
							alert('Deleted')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?id=$applicant_id';
						</script>
					";

	    		}

	    	

	    ?>