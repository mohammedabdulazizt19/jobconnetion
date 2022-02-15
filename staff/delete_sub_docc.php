<?php

	    	include("../include/db.php");

	    		$sub_id = $_POST['submitted_id'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$delete_docu = "delete from tbl_submitted_documents where submitted_no = '$sub_id'";

	    		$run_delete = mysqli_query($con,$delete_docu);

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