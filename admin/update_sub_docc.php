<?php

	    	include("../include/db.php");

	    								$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));


	    		$sub_id = $_POST['submitted_id'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$file_name = $_FILES['file_name']['name'];

	    		$temp_name = $_FILES['file_name']['tmp_name'];

	    		move_uploaded_file($temp_name, "../submitted_documents/$file_name");

	    		$update_docu = "update tbl_submitted_documents set file_name = '$file_name', remarks='Submitted', date_submit=now() where submitted_no = '$sub_id'";

	    		$run_update = mysqli_query($con,$update_docu);

	    		if($run_update){

	    			echo "
						<script>
							alert('Updated')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && id=$applicant_id && $real';
						</script>
					";

	    		}

	    	

	    ?>