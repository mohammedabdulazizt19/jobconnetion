<?php

	include("../include/db.php");

	$connect = new PDO("mysql:host=localhost;dbname=db_lmbwsi", "db_lmbwsi", "db_lmbwsi2018");

	if($_POST['query'] != ''){

		$search_array = explode(",", $_POST["query"]);

		$search_text = "'" . implode("', '", $search_array) . "'";

		$query = "select * from tbl_employer where employer_id in (".$search_text.") ";

	}else{

		$query = "";

		echo "
			<div class='form-group'>
				<label class='control-label col-sm-4'>
					Contact Number <span class='error'>&nbsp;*</span>
				</label>
				<div class='col-sm-8'>
					<input type='number' class='form-control' name='emp_contact' value='' disabled>
				</div>  
			</div>
			<div class='form-group'>
				<label class='control-label col-sm-4'>
					Company Address <span class='error'>&nbsp;*</span>
				</label>
				<div class='col-sm-8'>
					<textarea rows='4' class='form-control' disabled></textarea>
				</div>  
			</div>
		";

	}

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$total_row = $statement->rowCount();

	$output = '';

	if($total_row > 0){

		foreach($result as $row){

			$contact_emp = $row['contact_number'];

			$add_emp = $row['company_address'];

			$output .= "

				<div class='form-group'>
					<label class='control-label col-sm-4'>
						Contact Number <span class='error'>&nbsp;*</span>
					</label>
					<div class='col-sm-8'>
						<input type='number' class='form-control' name='emp_contact' value='$contact_emp' disabled>
					</div>  
				</div>
				<div class='form-group'>
					<label class='control-label col-sm-4'>
						Company Address <span class='error'>&nbsp;*</span>
					</label>
					<div class='col-sm-8'>
						<textarea rows='4' class='form-control' disabled>$add_emp</textarea>
					</div>  
				</div>

				";

		}

	}

	echo $output;

?>