<?php

	    	include("../include/db.php");

	    		$sub_id = $_POST['dn'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$file_name = $_FILES['file_name']['name'];

	    		$temp_name = $_FILES['file_name']['tmp_name'];

	    		move_uploaded_file($temp_name, "../submitted_documents/$file_name");

	    		$run_add_docc = mysqli_query($con,"insert into tbl_submitted_documents (document_id,applicant_id,remarks,payment_status,document_remarks,file_name,date_submit) values ('$sub_id','$applicant_id','Submitted','Unpaid','Not Checked','$file_name',now())");

	    		if($run_add_docc){

	    			echo "
						<script>
							alert('Added')
						</script>
					";

					echo "
						<script>
							window.location.href='add_from_waiting.php';
						</script>
					";

	    		
	    		}

	    	

	    ?>