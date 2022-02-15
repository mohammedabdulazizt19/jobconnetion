<?php

	    	include("../include/db.php");

	    		$sub_id = $_POST['submitted_id'];

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
							window.open('add_from_waiting.php','_self')
						</script>
					";

	    		}

	    	

	    ?>