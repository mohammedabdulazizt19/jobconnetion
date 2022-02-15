<?php

	    	include("../include/db.php");


	    	if(empty($_POST['other'])){


	    		$date = $_POST['owwa_date'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$run_update = mysqli_query($con,"update tbl_applicants set owwa_sched = '$date' where applicant_id = '$applicant_id'");

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

	    	}else{

	    		$other = $_POST['other'];

	    		$applicant_idd = $_POST['applicant_id'];


	    		$run_updatee = mysqli_query($con,"update tbl_applicants set owwa_sched = '$other' where applicant_id = '$applicant_idd'");

	    		if($run_updatee){

	    			echo "
						<script>
							alert('Updated')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?id=$applicant_idd';
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
							window.location.href='edit_processing_applicant.php?id=$applicant_idd';
						</script>
					";

	    		}


	    	}

	    	

	    			
	    		
	    ?>