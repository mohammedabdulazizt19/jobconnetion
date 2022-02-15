<?php

	    	include("../include/db.php");

	    	if(!empty($_POST["check"])){

	    		$check = $_POST['check'];

	    		$applicant_id = $_POST['applicant_id'];

	    		foreach($check as $new_check){

	    			$run_add = mysqli_query($con,"insert into tbl_ (document_id,applicant_id,remarks,payment_status,document_remarks) values ('$new_check','$applicant_id','Not Yet Submitted','Unpaid','Not Checked')");

	    		}

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
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
							alert('Error Adding')
						</script>
					";

					echo "
						<script>
							window.open('edit_processing_applicant.php?id=$applicant_id','_self')
						</script>
					";

	    		}

	    	}else{

	    		$applicant_id = $_POST['applicant_id'];
	    		echo "
						<script>
							alert('Error Adding')
						</script>
					";

					echo "
						<script>
							window.open('edit_processing_applicant.php?id=$applicant_id','_self')
						</script>
					";
	    	}

	    	

	    ?>