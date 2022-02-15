<?php

	    	include("../include/db.php");

	    		$flight_number = $_POST['flight_number'];

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
							window.open('add_from_waiting.php','_self')
						</script>
					";

	    		}

	    	

	    ?>