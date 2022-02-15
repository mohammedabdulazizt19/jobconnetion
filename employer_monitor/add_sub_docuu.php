<?php

	    	include("../include/db.php");

	    		$check = $_POST['check'];

	    		$applicant_id = $_POST['applicant_id'];

	    		foreach($check as $new_check){

	    			$run_add = mysqli_query($con,"insert into tbl_submitted_documents (document_id,applicant_id,remarks,payment_status,document_remarks) values ('$new_check','$applicant_id','Not Yet Submitted','Unpaid','Not Checked')");

	    		}

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

	    		}

	    	

	    ?>