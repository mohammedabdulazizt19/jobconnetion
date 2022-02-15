<?php

	    	include("../include/db.php");


	    	


	    		$visa = $_POST['visa'];
	    		
	    		$applicant_id = $_POST['applicant_id'];

	    		$run_update = mysqli_query($con,"update tbl_applicants set visa_number = '$visa' where applicant_id = '$applicant_id'");

	    		if($run_update){

	    			echo "
						<script>
							alert('Updated')
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
							alert('Error Updating')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?id=$applicant_id';
						</script>
					";

	    		}

	    	
	    	

	    			
	    		
	    ?>