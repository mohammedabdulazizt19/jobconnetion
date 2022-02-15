<?php

	include("../include/db.php");

	$connect = new PDO("mysql:host=localhost;dbname=db_ycmsoms", "root", "avila");

	if($_POST['query'] != ''){

		$search_array = explode(",", $_POST["query"]);

		$search_text = "'" . implode("', '", $search_array) . "'";

		$query = "select * from tbl_applicants where status = '1' and applicant_id in (".$search_text.") ";

	}else{

		$query = "";

		echo "
			<form class='form-horizontal' action='' method='post'><!-- form-horizontal Starts -->
				<div class='col-md-6'><!-- col-md-6 Starts -->
                    <div class='form-group'>
                        <label class='control-label col-sm-4'>
                            Applicant Code <span class='error'>&nbsp;*</span>
                        </label>
                        <div class='col-sm-8'>
                            <input type='text' class='form-control' name='applicant_code' disabled>
                        </div>  
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-sm-4'>
                            Address <span class='error'>&nbsp;*</span>
                        </label>
                        <div class='col-sm-8'>
                            <textarea class='form-control' name='address' rows='2' disabled></textarea>
                        </div>  
                    </div>
                </div><!-- col-md-6 Ends -->
                <div class='col-md-6'><!-- col-md-6 Starts -->
                    <div class='form-group'>
                        <label class='control-label col-sm-4'>
                            Employer <span class='error'>&nbsp;*</span>
                        </label>
                        <div class='col-sm-8'>
                            <select class='form-control' name='employer'>
                            	<option name='employer'>
                            		Select Employer
                            	</option>
                            </select>
                        </div>  
                    </div>
                </div><!-- col-md-6 Ends -->
                <br>
                <div class='col-md-12'><!-- col-md-12 Starts -->
                	<ul class='nav nav-tabs'><!-- nav nav-tabs Starts -->
    					<li class='active'>
        					<a href='' id='btn1'  data-toggle='tab'>
            					<i class='fa fa-user'></i> <span>Applicant Information</span>
        					</a>
    					</li>
    					<li class=''>
        					<a href='' id='btn2' data-toggle='tab'>
            					<i class='fa fa-bullhorn'></i> <span>Status Report</span>
        					</a>
    					</li>
   	 					<li class=''>
      						<a href='' id='btn4' data-toggle='tab'>
          						<i class='fa fa-fighter-jet'></i> <span>Flight Details</span>
      						</a>
   	 					</li>
  					</ul><!-- nav nav-tabs Ends -->
  					<br>
                </div><!-- col-md-12 Ends -->
                <section class='content-header'><!-- content-header Starts -->
                	<div id='applicant_info'><!-- applicant_info Starts -->
	                	<div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Position Desired <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='position_desired'>
		                            	<option name='position_desired'>
		                            		Select Position
		                            	</option>
		                            </select>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Contact Number <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='contact_number' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Gender <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='gender'>
		                            	<option name='gender'>
		                            		Select Gender
		                            	</option>
		                            </select>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Language Spoken <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='language_spoken' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Date of Birth <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='date' class='form-control' name='date_birth' disabled>
		                        </div>  
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Place of Birth <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <textarea class='form-control' name='place_birth' rows='3' disabled></textarea>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Email Address <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='email' class='form-control' name='email_address' disabled>
		                        </div>  
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Father Name
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='father_name' disabled>
		                        </div>  
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Mother Name
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='mother_name' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Height & Weight <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-4'>
		                            <input type='text' class='form-control' name='height' disabled>
		                        </div>
		                        <div class='col-sm-4'>
		                            <input type='text' class='form-control' name='weight' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Blood Type <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='blood_type'>
		                            	<option name='blood_type'>
		                            		Select Blood Type
		                            	</option>
		                            </select>
		                        </div>
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Civil Status <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='civil_status'>
		                            	<option name='civil_status'>
		                            		Select Civil Status
		                            	</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Religion <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='religion' disabled>
		                        </div>
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Passport Number <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                             <input type='text' class='form-control' name='passport_number' disabled>
		                        </div>
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Place Issue <span class='error'>&nbsp;*</span>
		                        </label>
		                        <div class='col-sm-8'>
		                            <textarea class='form-control' name='place_issue' rows='3' disabled></textarea>
		                        </div>
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-12'><!-- col-md-12 Starts -->
		                    <div class='form-group'>
		                        <div class='col-xs-6'>
	          						<a href='index.php?processing_applicants' class='btn btn-default pull-left'><i class='fa fa-close'></i> Close</a>
	        					</div>
		                    </div>
		                </div><!-- col-md-12 Ends -->
		    </form><!-- form-horizontal Ends -->
	                </div><!-- applicant_info Ends -->
	        		<div id='status_info' style='display: none;'>
			        	<div class='col-md-12'>
				        	<button class='btn btn-default' type='button' data-toggle='modal' data-target='#add_document'>
								<i class='fa fa-plus'></i>
								Add Document
							</button>
							<button class='btn btn-default' type='button'>
								<i class='fa fa-refresh'></i>
								Refresh
							</button>
							<div class='row'><!-- row Starts -->
								<div class='box box-success'><!--box box-success Starts -->
									<div class='box-header'><!-- box-header Starts -->
										<h3 class='box-title'>
											<i class='fa fa-book'></i> Submitted Documents
											<span>
												<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
													0
												</a><!-- btn btn-primary navbar-btn right Ends -->
											</span>
										</h3>
									</div><!-- box-header Ends -->
									<div class='box-body table-responsive no-padding'><!-- box-body table-responsive no-padding Starts -->
										<table class='table table-hover ample2'>
											<thead>
								                <tr>
								                  	<th>#</th>
								                  	<th>Document Name</th> 
								                  	<th>File Name</th>
								                  	<th>Remarks</th>
								                  	<th>Date Submitted</th>
								                  	<th>Actions</th>
								                </tr>
								            </thead>
								            <tbody>
								            	<tr>
								            		<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td>
								                  		
								                  	</td>
								            	</tr>
								            </tbody>
										</table>
									</div><!-- box-body table-responsive no-padding Ends -->
								</div><!--box box-success Ends -->
							</div><!-- row Ends -->
				        </div>
			        </div>
			        <div id='expences' style='display: none;'>
				        <div class='col-md-12'>
							<div class='row'><!-- row Starts -->
								<div class='box box-success'><!--box box-success Starts -->
									<div class='box-header'><!-- box-header Starts -->
										<h3 class='box-title'>
											<i class='fa fa-book'></i> Expenses
											<span>
												<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
													0
												</a><!-- btn btn-primary navbar-btn right Ends -->
											</span>
										</h3>
									</div><!-- box-header Ends -->
									<div class='box-body table-responsive no-padding'><!-- box-body table-responsive no-padding Starts -->
										<table class='table table-hover ample2'>
											<thead>
								                <tr>
								                  	<th>#</th>
								                  	<th>Document Name</th> 
								                  	<th>Amount</th>
								                  	<th>Payment Status</th>
								                  	<th>Remarks</th>
								                  	<th>Actions</th>
								                </tr>
								            </thead>
								            <tbody>
								            	<tr>
								            		<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td>
								                  		
								                  	</td>
								            	</tr>
								            </tbody>
								            <tfoot>
								            	<tr>
								            		<th colspan='5'>
								            			
								            		</th>
								            		<th>
								            			<i class='fa fa-money'></i> Total Amount 
								            		</th>
								            		<th>
								            			0
								            		</th>
								            	</tr>
								            </tfoot>
										</table>
									</div><!-- box-body table-responsive no-padding Ends -->
								</div><!--box box-success Ends -->
							</div><!-- row Ends -->
				        </div>
			        </div>
			        <div id='flight' style='display: none;'>
				        <div class='col-md-12'>
							<div class='row'><!-- row Starts -->
								<div class='box box-success'><!--box box-success Starts -->
									<div class='box-header'><!-- box-header Starts -->
										<h3 class='box-title'>
											<i class='fa fa-fighter-jet'></i> Flight Details
											<span>
												<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
													0
												</a><!-- btn btn-primary navbar-btn right Ends -->
											</span>
										</h3>
									</div><!-- box-header Ends -->
									<div class='box-body table-responsive no-padding'><!-- box-body table-responsive no-padding Starts -->
										<table class='table table-hover ample2'>
											<thead>
								                <tr>
								                  	<th>#</th>
								                  	<th>Contact Person</th> 
								                  	<th>Contact Address</th>
								                  	<th>Contact Number</th>
								                  	<th>Actions</th>
								                </tr>
								            </thead>
								            <tbody>
								            	<tr>
								            		<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td></td>
								                  	<td>
								                  		
								                  	</td>
								            	</tr>
								            </tbody>
										</table>
									</div><!-- box-body table-responsive no-padding Ends -->
								</div><!--box box-success Ends -->
							</div><!-- row Ends -->
				        </div>
			        </div>
                </section><!-- content-header Starts -->
		";

	}

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$total_row = $statement->rowCount();

	$output = '';

	if($total_row > 0){

		foreach($result as $row){

			$applicantid = $row['applicant_id'];

			$applicant_code = $row['applicant_code'];
			
			$address = $row['address'];
			
			$employer_id = $row['employer_id'];
			
			$contact_number = $row['contact_number'];
			
			$gender = $row['gender'];
			
			$language_spoken = $row['language_spoken'];
			
			$date_birth = $row['birth_date'];
			
			$place_birth = $row['birth_place'];
			
			$email_address = $row['email_address'];
			
			$father_name = $row['father_name'];
			
			$mother_name = $row['mother_name'];
			
			$height = $row['height'];
			
			$weight = $row['weight'];
			
			$blood_type = $row['blood_type'];
			
			$civil_status = $row['civil_status'];
			
			$religion = $row['religion'];
			
			$passport_number = $row['passport_number'];
			
			$place_issue = $row['place_issue'];
			
			$get_emp = "select * from tbl_employers where employer_id = '$employer_id'";
			
			$run_emp = $connect->prepare($get_emp);

			$run_emp->execute();

            $row_emp = $run_emp->fetchAll();

            $total_emp = $run_emp->rowCount();

            if($total_emp > 0){

            	foreach($row_emp as $row_empp){

            		$company = $row_empp['company_name'];

		            $full_n = $row_empp['full_name'];

		            $option = $company . " - " . $full_n;

            	}

            }else{
            	$option = 'Select Employer';
            }

			$output .= "
				<form class='form-horizontal' action='add_processing_applcnt.php' method='post'><!-- form-horizontal Starts -->
					<div class='col-md-6'><!-- col-md-6 Starts -->
	                    <div class='form-group'>
	                        <label class='control-label col-sm-4'>
	                            Applicant Code <span class='error'>&nbsp;*</span>
	                        </label>
	                        <div class='col-sm-8'>
	                        	<input type='hidden' class='form-control' name='applicant_identify' value='$applicantid'>
	                            <input type='text' class='form-control' name='applicant_code' value='$applicant_code' disabled>
	                        </div>  
	                    </div>
	                    <div class='form-group'>
	                        <label class='control-label col-sm-4'>
	                            Address <span class='error'>&nbsp;*</span>
	                        </label>
	                        <div class='col-sm-8'>
	                            <textarea class='form-control' name='address' rows='2' required>$address</textarea>
	                        </div>  
	                    </div>
	                </div><!-- col-md-6 Ends -->
	                <div class='col-md-6'><!-- col-md-6 Starts -->
	                    <div class='form-group'>
	                        <label class='control-label col-sm-4'>
	                            Employer <span class='error'>&nbsp;*</span>
	                        </label>
	                        <div class='col-sm-8'>
	                            <select class='form-control' name='employer'>
	                            	<option name='employer' value='$employer_id' hidden>
	                            		$option
	                            	</option>
	                            	";

	                            	$get_employer = "select * from tbl_employers";

	                            	$run_employer = mysqli_query($con,$get_employer);

	                            	while($row_employer = mysqli_fetch_array($run_employer)){

	                            		$employerid = $row_employer['employer_id'];
	                            		$name_company = $row_employer['company_name'];
	                            		$name_full = $row_employer['full_name'];
	                            		$option_employer = $name_company . " - " . $name_full;

	                            	$output .= "
	                            		<option name='employer' value='$employerid'>
	                            			$option_employer
	                            		</option>
	                            	";
	                            	}
	                            	$output .= "
	                            </select>
	                        </div>  
	                    </div>
	                </div><!-- col-md-6 Ends -->
	                <br>
	                <div class='col-md-12'><!-- col-md-12 Starts -->
	                	<ul class='nav nav-tabs'><!-- nav nav-tabs Starts -->
	    					<li class='active'>
	        					<a href='' id='btn1'  data-toggle='tab'>
	            					<i class='fa fa-user'></i> <span>Applicant Information</span>
	        					</a>
	    					</li>
	    					<li class=''>
	        					<a href='' id='btn2' data-toggle='tab'>
	            					<i class='fa fa-bullhorn'></i> <span>Status Report</span>
	        					</a>
	    					</li>
	   	 					<li class=''>
	      						<a href='' id='btn4' data-toggle='tab'>
	          						<i class='fa fa-fighter-jet'></i> <span>Flight Details</span>
	      						</a>
	   	 					</li>
	  					</ul><!-- nav nav-tabs Ends -->
	  					<br>
	                </div><!-- col-md-12 Ends -->
	                <section class='content-header'><!-- content-header Starts -->
	                	<div id='applicant_info'><!-- applicant_info Starts -->
		                	<div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Position Desired <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <select class='form-control' name='position_desired'>
			                            	";

			                            	$get_position = "select * from tbl_applicants where applicant_code = '$applicant_code'";

			                            	$run_position = mysqli_query($con,$get_position);

			                            	while($row_position = mysqli_fetch_array($run_position)){

                                                $po1 = $row_position['position1'];
                                                $po2 = $row_position['position2'];
                                                $po3 = $row_position['position3'];

                                                $output .= "
		                                            <option name='position_desired' value='$po1'>
		                                                $po1
		                                            </option>
		                                            <option name='position_desired' value='$po2'>
		                                                $po2
		                                            </option>
		                                            <option name='position_desired' value='$po3'>
		                                                $po3
		                                            </option>
                                            	";
                                            }
			                            	$output .= "
			                            </select>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Contact Number <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='contact_number' onkeypress='return isNumericKey(event)' maxlength='15' value='$contact_number' required>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Gender <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <select class='form-control' name='gender'>
			                            	<option name='gender' value='$gender' hidden>
			                            		$gender
			                            	</option>
			                            	<option name='gender' value='Male'>
			                            		Male
			                            	</option>
			                            	<option name='gender' value='Female'>
			                            		Female
			                            	</option>
			                            </select>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Language Spoken <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='language_spoken' value='$language_spoken' required>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Date of Birth <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='date' class='form-control' name='date_birth' value='$date_birth' required>
			                        </div>  
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Place of Birth <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <textarea class='form-control' name='place_birth' rows='3' required>$place_birth</textarea>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Email Address <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='email' class='form-control' name='email_address' value='$email_address' required>
			                        </div>  
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Father Name
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='father_name' value='$father_name'>
			                        </div>  
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Mother Name
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='mother_name' value='$mother_name'>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Height & Weight <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-4'>
			                            <input type='text' class='form-control' name='height' value='$height' required>
			                        </div>
			                        <div class='col-sm-4'>
			                            <input type='text' class='form-control' name='weight' value='$weight' required>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Blood Type <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-4'>
			                            <select class='form-control' name='blood_type'>
			                            	<option name='blood_type' value='$blood_type' hidden>
			                            		$blood_type
			                            	</option>
			                            	<option name='blood_type' value='A+'>
			                            		A+
			                            	</option>
			                            	<option name='blood_type' value='A-'>
			                            		A-
			                            	</option>
			                            	<option name='blood_type' value='B+'>
			                            		B+
			                            	</option>
			                            	<option name='blood_type' value='B-'>
			                            		B-
			                            	</option>
			                            	<option name='blood_type' value='AB+'>
			                            		AB+
			                            	</option>
			                            	<option name='blood_type' value='AB-'>
			                            		AB-
			                            	</option>
			                            	<option name='blood_type' value='O+'>
			                            		O+
			                            	</option>
			                            	<option name='blood_type' value='O-'>
			                            		O-
			                            	</option>
			                            </select>
			                        </div>
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Civil Status <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <select class='form-control' name='civil_status'>
			                            	<option name='civil_status' value='$civil_status' hidden>
			                            		$civil_status
			                            	</option>
			                            	<option name='civil_status' value='Single'>
			                            		Single
			                            	</option>
			                            	<option name='civil_status' value='Married'>
			                            		Married
			                            	</option>
			                            	<option name='civil_status' value='Divorced'>
			                            		Divorced
			                            	</option>
			                            	<option name='civil_status' value='Widowed'>
			                            		Widowed
			                            	</option>
			                            </select>
			                        </div>
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Religion <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='religion' value='$religion' required>
			                        </div>
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Passport Number <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                             <input type='text' class='form-control' name='passport_number' value='$passport_number' maxlength='9' minlength='9' required>
			                        </div>
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Place Issue <span class='error'>&nbsp;*</span>
			                        </label>
			                        <div class='col-sm-8'>
			                            <textarea class='form-control' name='place_issue' rows='3' required>$place_issue</textarea>
			                        </div>
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-12'><!-- col-md-12 Starts -->
			                    <div class='form-group'>
			                        <div class='col-xs-6'>
		          						<button type='submit' name='save' class='btn btn-success pull-left'><i class='fa fa-file'></i> Save</button>
		          						<a href='index.php?processing_applicants' class='btn btn-default pull-left'><i class='fa fa-close'></i> Close</a>
		        					</div>
			                    </div>
			                </div><!-- col-md-12 Ends -->
		        </form><!-- form-horizontal Ends -->
		         		</div><!-- applicant_info Ends -->
		         		<div id='status_info' style='display: none;'><!-- status_info Starts -->
				        	<div class='col-md-12'>
					        	<button class='btn btn-default' type='button' data-toggle='modal' data-target='#add_submitted_documents$applicantid'>
									<i class='fa fa-plus'></i>
									Add Document
								</button>
								<button class='btn btn-default' type='button'>
									<i class='fa fa-refresh'></i>
									Refresh
								</button>
								";

									            	include("modal/add_submitted_documents.php");

									            $output .= "
								<div class='row'><!-- row Starts -->
									<div class='box box-success'><!--box box-success Starts -->
										<div class='box-header'><!-- box-header Starts -->
											<h3 class='box-title'>
												<i class='fa fa-book'></i> Submitted Documents
												<span>
													<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
														";

															$get_submitted = "select * from tbl_submitted_documents where applicant_id = '$applicantid'";

															$run_submitted = mysqli_query($con,$get_submitted);

															$total_submitted = mysqli_num_rows($run_submitted);

														$output .= "
														$total_submitted
													</a><!-- btn btn-primary navbar-btn right Ends -->
												</span>
											</h3>
										</div><!-- box-header Ends -->
										<div class='box-body table-responsive no-padding'><!-- box-body table-responsive no-padding Starts -->
											<table class='table table-hover ample2'>
												<thead>
									                <tr>
									                  	<th>#</th>
									                  	<th>Document Name</th> 
									                  	<th>File Name</th>
									                  	<th>Remarks</th>
									                  	<th>Date Submitted</th>
									                  	<th>Actions</th>
									                </tr>
									            </thead>
									            <tbody>
									            ";

									            	$i = 0;

									            	$get_submitted_documents = "select * from tbl_submitted_documents where applicant_id = '$applicantid'";

									            	$run_submitted_documents = mysqli_query($con,$get_submitted_documents);

									            	while($row_submitted = mysqli_fetch_array($run_submitted_documents)){

									            		$app_id = $row_submitted['applicant_id'];
									            		
									            		$submitted_id = $row_submitted['submitted_no'];

									            		$document_id = $row_submitted['document_id'];
									            		
									            		$file_name = $row_submitted['file_name'];
									            		
									            		$remarks = $row_submitted['remarks'];
									            		
									            		$date_submitted = $row_submitted['date_submit'];

									            		$get_docu = "select * from tbl_documents where document_id = '$document_id'";

									            		$run_docu = mysqli_query($con,$get_docu);

									            		$row_docu = mysqli_fetch_array($run_docu);

									            		$document_name = $row_docu['document_name'];

									            		$amount = $row_docu['amount'];

									            		$i++;

									            $output .= "
									            	<tr>
									            		<td>$i</td>
									                  	<td>$document_name</td>
									                  	<td>$file_name</td>
									                  	<td>$remarks</td>
									                  	<td>$date_submitted</td>
									                  	<td>
									                  		<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#update_submitted_documents$submitted_id'>
	                  											<i class='fa fa-pencil'></i>
	                  										</button>
	                  										<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#delete_submitted_documents$submitted_id'>
	                  											<i class='fa fa-trash-o'></i>
	                  										</button>
									                  	</td>
									            	</tr>
									            	";

									            	include("modal/update_submitted_documents.php");

									            $output .= "
									            ";

									            	include("modal/delete_submitted_documents.php");

									            $output .= "
									            	";

									            	}

									            $output .= "
									            </tbody>
											</table>
										</div><!-- box-body table-responsive no-padding Ends -->
									</div><!--box box-success Ends -->
								</div><!-- row Ends -->
					        </div>
				        </div><!-- status_info Ends -->
				        <div id='expences' style='display: none;'><!-- expences Starts -->
					        <div class='col-md-12'>
								<div class='row'><!-- row Starts -->
									<div class='box box-success'><!--box box-success Starts -->
										<div class='box-header'><!-- box-header Starts -->
											<h3 class='box-title'>
												<i class='fa fa-book'></i> Expenses
												<span>
													<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
														";

															$get_submitted_expences = "select * from tbl_submitted_documents where applicant_id = '$applicantid'";

															$run_submitted_expences = mysqli_query($con,$get_submitted_expences);

															$total_submitted_expences = mysqli_num_rows($run_submitted_expences);

														$output .= "
														$total_submitted_expences
													</a><!-- btn btn-primary navbar-btn right Ends -->
												</span>
											</h3>
										</div><!-- box-header Ends -->
										<div class='box-body table-responsive no-padding'><!-- box-body table-responsive no-padding Starts -->
											<table class='table table-hover ample2'>
												<thead>
									                <tr>
									                  	<th>#</th>
									                  	<th>Document Name</th> 
									                  	<th>Amount</th>
									                  	<th>Payment Status</th>
									                  	<th>Remarks</th>
									                  	<th>Actions</th>
									                </tr>
									            </thead>
									            <tbody>
									            ";

									            	$j = 0;

									            	$total = 0;

									            	$get_submitted_documents_e = "select * from tbl_submitted_documents where applicant_id = '$applicantid'";

									            	$run_submitted_documents_e = mysqli_query($con,$get_submitted_documents_e);

									            	while($row_submitted_e = mysqli_fetch_array($run_submitted_documents_e)){

									            		$app_idd = $row_submitted_e['applicant_id'];
									            		
									            		$submitted_idd = $row_submitted_e['submitted_no'];

									            		$document_idd = $row_submitted_e['document_id'];
									            		
									            		$payment_status = $row_submitted_e['payment_status'];
									            		
									            		$document_remarks = $row_submitted_e['document_remarks'];

									            		$get_docu_e = "select * from tbl_documents where document_id = '$document_idd'";

									            		$run_docu_e = mysqli_query($con,$get_docu_e);

									            		$row_docu_e = mysqli_fetch_array($run_docu_e);

									            		$document_namee = $row_docu_e['document_name'];

									            		$amountt = $row_docu_e['amount'];

									            		$j++;

									            		$total+= $amountt;

									            $output .= "
									            	<tr>
									            		<td>$j</td>
									                  	<td>$document_namee</td>
									                  	<td>$amountt</td>
									                  	<td>$payment_status</td>
									                  	<td>$document_remarks</td>
									                  	<td>
									                  		<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#update_expences$submitted_idd'>
	                  											<i class='fa fa-pencil'></i>
	                  										</button>
									                  	</td>
									            	</tr>
									            	";

									            	include("modal/update_expences.php");

									            $output .= "
									            	";

									            	}

									            $output .= "
									            </tbody>
									            <tfoot>
									            	<tr>
									            		<th colspan='5'>
									            			
									            		</th>
									            		<th>
									            			<i class='fa fa-money'></i> Total Amount 
									            		</th>
									            		<th>
									            			$total
									            		</th>
									            	</tr>
									            </tfoot>
											</table>
										</div><!-- box-body table-responsive no-padding Ends -->
									</div><!--box box-success Ends -->
								</div><!-- row Ends -->
					        </div>
				        </div><!-- expences Ends -->
				        <div id='flight' style='display: none;'>
					        <div class='col-md-12'>
						        <button class='btn btn-default' type='button' data-toggle='modal' data-target='#add_flights$applicantid'>
										<i class='fa fa-plus'></i>
										Add Flights
									</button>
									<button class='btn btn-default' type='button'>
										<i class='fa fa-refresh'></i>
										Refresh
									</button>
									";

										            	include("modal/add_flights.php");

										            $output .= "
								<div class='row'><!-- row Starts -->
									<div class='box box-success'><!--box box-success Starts -->
										<div class='box-header'><!-- box-header Starts -->
											<h3 class='box-title'>
												<i class='fa fa-fighter-jet'></i> Flight Details
												<span>
													<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
														";

															$get_flight = "select * from tbl_flights where applicant_id = '$applicantid'";

															$run_flight = mysqli_query($con,$get_flight);

															$total_flight = mysqli_num_rows($run_flight);

														$output .= "
														$total_flight
													</a><!-- btn btn-primary navbar-btn right Ends -->
												</span>
											</h3>
										</div><!-- box-header Ends -->
										<div class='box-body table-responsive no-padding'><!-- box-body table-responsive no-padding Starts -->
											<table class='table table-hover ample2'>
												<thead>
									                <tr>
									                  	<th>#</th>
									                  	<th>Contact Person</th> 
									                  	<th>Contact Address</th>
									                  	<th>Contact Number</th>
									                  	<th>Actions</th>
									                </tr>
									            </thead>
									            <tbody>
									            ";

									            	$k = 0;

									            	$get_flights_e = "select * from tbl_flights where applicant_id = '$applicantid'";

									            	$run_flights_e = mysqli_query($con,$get_flights_e);

									            	while($row_flights_e = mysqli_fetch_array($run_flights_e)){

									            		$app_iddd = $row_flights_e['applicant_id'];

									            		$flight_number = $row_flights_e['flight_number'];
									            		
									            		$contact_p = $row_flights_e['contact_person'];
									            		
									            		$contact_a = $row_flights_e['contact_address'];
									            		
									            		$contact_n = $row_flights_e['contact_number'];

									            		$k++;

									            $output .= "
									            	<tr>
									            		<td>$k</td>
									                  	<td>$contact_p</td>
									                  	<td>$contact_a</td>
									                  	<td>$contact_n</td>
									                  	<td>
									                  		<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#update_flights$flight_number'>
	                  											<i class='fa fa-pencil'></i>
	                  										</button>
	                  										<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#delete_flights$flight_number'>
	                  											<i class='fa fa-trash-o'></i>
	                  										</button>
									                  	</td>
									            	</tr>
									            	";

									            	include("modal/update_flights.php");

									            $output .= "
									            ";

									            	include("modal/delete_flights.php");

									            $output .= "
									            	";

									            	}

									            $output .= "
									            </tbody>
											</table>
										</div><!-- box-body table-responsive no-padding Ends -->
									</div><!--box box-success Ends -->
								</div><!-- row Ends -->
					        </div>
				        </div>
	                </section><!-- content-header Starts -->
			";

		}

	}

	echo $output;

?>
<script src="js/jq.js"></script>
<script>

	$(document).ready(function(){

		$('#btn1').on('click', function(){

			$("#applicant_info").show();

			$("#status_info").hide();

			$("#expences").hide();

			$("#flight").hide();

		});
	});

	$(document).ready(function(){

		$('#btn2').on('click', function(){

			$("#status_info").show();

			$("#applicant_info").hide();

			$("#expences").hide();

			$("#flight").hide();

		});
	});

	$(document).ready(function(){

		$('#btn3').on('click', function(){

			$("#expences").show();

			$("#applicant_info").hide();

			$("#status_info").hide();

			$("#flight").hide();

		});
	});

	$(document).ready(function(){

		$('#btn4').on('click', function(){

			$("#flight").show();

			$("#applicant_info").hide();

			$("#status_info").hide();

			$("#expences").hide();

		});
	});

</script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>

<script>
  	$(function () {
    $('#ample1').DataTable()
    $('.ample2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
  	})
	</script>