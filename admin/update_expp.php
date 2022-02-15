<?php

	    	include("../include/db.php");

	    		$sub_id = $_POST['submitted_id'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$payment_status = $_POST['payment_status'];

	    		$document_remarks = $_POST['document_remarks'];

	    		$update_docu = "update tbl_submitted_documents set payment_status = '$payment_status', document_remarks = '$document_remarks' where submitted_no = '$sub_id'";

	    		$run_update = mysqli_query($con,$update_docu);

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

	    		}

	    	

	    ?>