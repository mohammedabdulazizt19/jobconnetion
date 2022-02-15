<?php

	include("../include/db.php");

?>
<?php

	                $applicant_id = $_REQUEST["id"];
	    
	    			$applicant_id;       

                    $edit_applicant = "select * from tbl_applicants where applicant_id = '$applicant_id' and status = '2'";

                    $run_edit = mysqli_query($con,$edit_applicant);

                    $row_edit = mysqli_fetch_assoc($run_edit);

                    $e_id = $row_edit['applicant_id'];
                    
                    $e_applicant_code = $row_edit['applicant_code'];

                    $e_position1 = $row_edit['position1'];
                    
                    $e_position2 = $row_edit['position2'];
                    
                    $e_position3 = $row_edit['position3'];

                    $e_position4 = $row_edit['position_desired'];
                    
                    $e_first = $row_edit['first_name'];
                    
                    $e_middle = $row_edit['middle_name'];
                    
                    $e_last = $row_edit['last_name'];

                    $e_full = ucfirst($e_first) . " " . ucfirst($e_middle) . " " . ucfirst($e_last);
                    
                    $e_age = $row_edit['age'];
                    
                    $e_gender = $row_edit['gender'];
                    
                    $e_contact = $row_edit['contact_number'];
                    
                    $e_email = $row_edit['email_address'];
                    
                    $e_address = $row_edit['address'];
                    
                    $e_bplace = $row_edit['birth_place'];
                    
                    $e_bdate = $row_edit['birth_date'];
                    
                    $e_civil = $row_edit['civil_status'];
                    
                    $e_height = $row_edit['height'];
                    
                    $e_weight = $row_edit['weight'];
                    
                    $e_blood = $row_edit['blood_type'];
                    
                    $e_religion = $row_edit['religion'];
                    
                    $e_language = $row_edit['language_spoken'];
                    
                    $e_father = $row_edit['father_name'];
                    
                    $e_mother = $row_edit['mother_name'];
                    
                    $e_passnumber = $row_edit['passport_number'];
                    
                    $e_dissue = $row_edit['date_issue'];
                    
                    $e_pissue = $row_edit['place_issue'];
                    
                    $e_employerid = $row_edit['employer_id'];

                    $get_emp = "select * from tbl_employers where employer_id = '$e_employerid'";

                    $run_emp = mysqli_query($con,$get_emp);

                    $row_emp = mysqli_fetch_array($run_emp);

                    $company = $row_emp['company_name'];

                    $full_n = $row_emp['full_name'];
                    
                     $jo = $row_emp['jo_no'];

                    $emp_contact = $row_emp['contact_number'];

                    $emp_address = $row_emp['company_address'];

                    $edit_option = $company . " - " . $full_n;
                    
                    $get_empp = "select * from tbl_jo where jo_no = '$jo'";

                    $run_empp = mysqli_query($con,$get_empp);

                    $row_empp = mysqli_fetch_array($run_empp);

                    $jo_name = $row_empp['jo_name'];


            ?>
<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
     <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	<script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.error{
		color: red;
	}
</style>
<body class="hold-transition sidebar-mini">
	<div class="wrapper"><!-- wrapper Starts -->
		<section class="content"><!-- content Starts -->
			<div class="row"><!-- row Starts -->
				<div class="col-lg-12"><!-- col-lg-12 Starts -->
					<div class="box box-success"><!-- box box-success Starts -->
						<div class="panel panel-default"><!-- panel panel-default Starts -->
							<div class="panel-heading"><!-- panel-heading Starts -->
								<h3 class="panel-title"><!-- panel-title Starts -->
									<i class="fa fa-briefcase fa-fw"></i>
									Processing List
								</h3><!-- panel-title Ends -->
							</div><!-- panel-heading Ends -->
							<div class="panel-body"><!-- panel-body Starts -->
								<form class='form-horizontal' action='' method='post'><!-- form-horizontal Starts -->
									<div class="col-md-6"><!-- col-md-12 Starts -->
										<div class="form-group"><!-- form-group Starts -->
											<label class="col-md-4 control-label">
												Applicant Name <span class="error">&nbsp;*</span>
											</label>
											<div class="col-md-8">
												<input type="text" name="applicant_name" class="form-control" value="<?php echo $e_full; ?>" disabled>
											</div>
										</div><!-- form-group Ends -->
									</div><!-- col-md-12 Ends -->
									<div class="col-md-6"><!-- col-md-12 Starts -->
										<div class='form-group'>
					                        <label class='control-label col-sm-4'>
					                            Applicant Code <span class='error'>&nbsp;*</span>
					                        </label>
					                        <div class='col-sm-8'>
					                        	<input type='hidden' class='form-control' name='applicant_identify' value="<?php echo $e_id; ?>">
					                            <input type='text' class='form-control' name='applicant_code' value="<?php echo $e_applicant_code; ?>" disabled>
					                        </div>  
					                    </div>
									</div><!-- col-md-12 Ends -->
									<div class='col-md-6'><!-- col-md-6 Starts -->
					                    <div class='form-group'>
					                        <label class='control-label col-sm-4'>
					                            Position Selected <span class='error'>&nbsp;*</span>
					                        </label>
					                        <div class='col-sm-8'>
					                        	<input type='text' class='form-control' name='pos_selected' value="<?php echo $e_position4; ?>" disabled>
					                        </div>  
					                    </div>
					                    <div class='form-group'>
					                        <label class='control-label col-sm-4'>
					                            Address <span class='error'>&nbsp;*</span>
					                        </label>
					                        <div class='col-sm-8'>
					                            <textarea class='form-control' name='address' rows='2' required><?php echo $e_address; ?></textarea>
					                        </div>  
					                    </div>
					                </div><!-- col-md-6 Ends -->
					                <div class='col-md-6'><!-- col-md-6 Starts -->
					                    <div class='form-group'>
					                        <label class='control-label col-sm-4'>
					                            Employer <span class='error'>&nbsp;*</span>
					                        </label>
					                        <div class='col-sm-8'>
					                            <select class='form-control' name='employer' id='select_employer'>
					                            	<option name='employer' value="<?php echo $e_employerid; ?>" hidden>
					                            		<?php echo $edit_option; ?>
					                            	</option>
					                            	<?php

					                            	$get_employer = "select * from tbl_employers";

					                            	$run_employer = mysqli_query($con,$get_employer);

					                            	while($row_employer = mysqli_fetch_array($run_employer)){

					                            		$employerid = $row_employer['employer_id'];
					                            		$name_company = $row_employer['company_name'];
					                            		$name_full = $row_employer['full_name'];
					                            		$option_employer = $name_company . " - " . $name_full;

					                            	?>
					                            		<option name='employer' value="<?php echo $employerid; ?>">
					                            			<?php echo $option_employer; ?>
					                            		</option>
					                            	<?php
					                            	}
					                            	?>
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
					      						<a href='' id='btn3'  data-toggle='tab'>
					          						<i class='fa fa-money'></i> <span>Expenses Report</span>
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
							                            			<option name='position_desired' value="<?php echo $e_position4; ?>" hidden>
						                                                <?php echo $e_position4; ?>
						                                            </option>
						                                            <option name='position_desired' value="<?php echo $e_position1; ?>">
						                                                <?php echo $e_position1; ?>
						                                            </option>
						                                            <option name='position_desired' value="<?php echo $e_position2; ?>">
						                                              	<?php echo $e_position2; ?>
						                                            </option>
						                                            <option name='position_desired' value="<?php echo $e_position3; ?>">
						                                                <?php echo $e_position3; ?>
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
							                            <input type='text' class='form-control' name='contact_number' value="<?php echo $e_contact; ?>" required onkeypress='return isNumericKey(event)' maxlength='15'>
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
							                            	<option name='gender' value="<?php echo $e_gender; ?>" hidden>
							                            		<?php echo $e_gender; ?>
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
							                            <input type='text' class='form-control' name='language_spoken' value="<?php echo $e_language; ?>" required>
							                        </div>  
							                    </div>
							                </div><!-- col-md-6 Ends -->
							                <div class='col-md-6'><!-- col-md-6 Starts -->
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Date of Birth <span class='error'>&nbsp;*</span>
							                        </label>
							                        <div class='col-sm-8'>
							                            <input type='date' class='form-control' name='date_birth' value="<?php echo $e_bdate; ?>" required>
							                        </div>  
							                    </div>
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Place of Birth <span class='error'>&nbsp;*</span>
							                        </label>
							                        <div class='col-sm-8'>
							                            <textarea class='form-control' name='place_birth' rows='3' required><?php echo $e_bplace; ?></textarea>
							                        </div>  
							                    </div>
							                </div><!-- col-md-6 Ends -->
							                <div class='col-md-6'><!-- col-md-6 Starts -->
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Email Address <span class='error'>&nbsp;*</span>
							                        </label>
							                        <div class='col-sm-8'>
							                            <input type='email' class='form-control' name='email_address' value="<?php echo $e_email; ?>" required>
							                        </div>  
							                    </div>
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Father Name
							                        </label>
							                        <div class='col-sm-8'>
							                            <input type='text' class='form-control' name='father_name' value="<?php echo $e_father; ?>">
							                        </div>  
							                    </div>
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Mother Name
							                        </label>
							                        <div class='col-sm-8'>
							                            <input type='text' class='form-control' name='mother_name' value="<?php echo $e_mother; ?>">
							                        </div>  
							                    </div>
							                </div><!-- col-md-6 Ends -->
							                <div class='col-md-6'><!-- col-md-6 Starts -->
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Height & Weight <span class='error'>&nbsp;*</span>
							                        </label>
							                        <div class='col-sm-4'>
							                            <input type='text' class='form-control' name='height' value="<?php echo $e_height; ?>" required>
							                        </div>
							                        <div class='col-sm-4'>
							                            <input type='text' class='form-control' name='weight' value="<?php echo $e_weight; ?>" required>
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
							                            	<option name='blood_type' value="<?php echo $e_blood; ?>" hidden>
							                            		<?php echo $e_blood; ?>
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
							                            	<option name='civil_status' value="<?php echo $e_civil; ?>" hidden>
							                            		<?php echo $e_civil; ?>
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
							                            <input type='text' class='form-control' name='religion' value="<?php echo $e_religion; ?>" required>
							                        </div>
							                    </div>
							                </div><!-- col-md-6 Ends -->
							                <div class='col-md-6'><!-- col-md-6 Starts -->
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Passport Number <span class='error'>&nbsp;*</span>
							                        </label>
							                        <div class='col-sm-8'>
							                             <input type='text' class='form-control' name='passport_number' value="<?php echo $e_passnumber; ?>" required maxlength='9' minlength='9'>
							                        </div>
							                    </div>
							                    <div class='form-group'>
							                        <label class='control-label col-sm-4'>
							                            Place Issue <span class='error'>&nbsp;*</span>
							                        </label>
							                        <div class='col-sm-8'>
							                            <textarea class='form-control' name='place_issue' rows='3' required><?php echo $e_pissue; ?></textarea>
							                        </div>
							                    </div>
							                </div><!-- col-md-6 Ends -->
							                <div class='col-md-12'><!-- col-md-12 Starts -->
							                    <div class='form-group'>
							                        <div class='col-xs-6'>
						          						<button type="submit" name="save" class='btn btn-success pull-left'><i class='fa fa-file'></i> Save</button>
						          						<a href='index.php?processing_applicants' class='btn btn-default pull-left'><i class='fa fa-close'></i> Close</a>
						        					</div>
							                    </div>
							                </div><!-- col-md-12 Ends -->
							    </form><!-- form-horizontal Ends -->
					                	</div><!-- applicant_info Ends -->
					                	<div id='status_info' style='display: none;'><!-- status_info Starts -->
								        	<div class='col-md-12'>
									        	<button class='btn btn-default' type='button' data-toggle='modal' data-target='#add_submitted_documentss<?php echo $e_id; ?>'>
													<i class='fa fa-plus'></i>
													Add Document
												</button>
												<button class='btn btn-default' type='button'>
													<i class='fa fa-refresh'></i>
													Refresh
												</button>
												<?php

													            	include("modal/add_submitted_documentss.php");

													            ?> 
												<div class='row'><!-- row Starts -->
													<div class='box box-success'><!--box box-success Starts -->
														<div class='box-header'><!-- box-header Starts -->
															<h3 class='box-title'>
																<i class='fa fa-book'></i> Submitted Documents
																<span>
																	<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
																		<?php

																			$get_submitted = "select * from tbl_submitted_documents where applicant_id = '$e_id'";

																			$run_submitted = mysqli_query($con,$get_submitted);

																			$total_submitted = mysqli_num_rows($run_submitted);

																		?>
																		<?php echo $total_submitted; ?>
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
													            <?php

													            	$i = 0;

													            	$get_submitted_documents = "select * from tbl_submitted_documents where applicant_id = '$e_id'";

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

													            ?>
													            	<tr>
													            		<td><?php echo $i; ?></td>
													            		<td><?php echo $document_name; ?></td>
													            		<td><a download="../submitted_documents/<?php echo $file_name; ?>" href="../submitted_documents/<?php echo $file_name; ?>"><?php echo $file_name; ?></a></td>
													                  	<td><?php echo $remarks; ?></td>
													                  	<td><?php echo $date_submitted; ?></td>
													                  	<td>
													                  		<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#update_submitted_documentss<?php echo $submitted_id; ?>'>
					                  											<i class='fa fa-pencil'></i>
					                  										</button>
					                  										<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#delete_submitted_documentss<?php echo $submitted_id; ?>'>
					                  											<i class='fa fa-trash-o'></i>
					                  										</button>
													                  	</td>
													            	</tr>
													            	<?php

													            	include("modal/update_submitted_documentss.php");

													           ?>
													            <?php

													            	include("modal/delete_submitted_documentss.php");

													            ?>
													            	<?php

													            	}

													            ?>
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
																		<?php

																			$get_submitted_expences = "select * from tbl_submitted_documents where applicant_id = '$e_id'";

																			$run_submitted_expences = mysqli_query($con,$get_submitted_expences);

																			$total_submitted_expences = mysqli_num_rows($run_submitted_expences);

																		?>
																		<?php echo $total_submitted_expences; ?>
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
													            <?php

													            	$j = 0;

													            	$total = 0;

													            	$get_submitted_documents_e = "select * from tbl_submitted_documents where applicant_id = '$e_id'";

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

													            ?>
													            	<tr>
													            		<td><?php echo $j; ?></td>
													                  	<td><?php echo $document_namee; ?></td>
													                  	<td><?php echo $amountt; ?></td>
													                  	<td><?php echo $payment_status; ?></td>
													                  	<td><?php echo $document_remarks; ?></td>
													                  	<td>
													                  		<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#update_expencess<?php echo $submitted_idd; ?>'>
					                  											<i class='fa fa-pencil'></i>
					                  										</button>
													                  	</td>
													            	</tr>
													            	<?php

													            	include("modal/update_expencess.php");

													            ?>
													            	<?php

													            	}

													           ?>
													            </tbody>
													            <tfoot>
													            	<tr>
													            		<th colspan='5'>
													            			
													            		</th>
													            		<th>
													            			<i class='fa fa-money'></i> Total Amount 
													            		</th>
													            		<th>
													            			<?php echo $total; ?>
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
										        <button class='btn btn-default' type='button' data-toggle='modal' data-target='#add_flightss<?php echo $e_id; ?>'>
														<i class='fa fa-plus'></i>
														Add Flights
													</button>
													<button class='btn btn-default' type='button'>
														<i class='fa fa-refresh'></i>
														Refresh
													</button>
													<?php

														            	include("modal/add_flightss.php");

														            ?>
												<div class='row'><!-- row Starts -->
													<div class='box box-success'><!--box box-success Starts -->
														<div class='box-header'><!-- box-header Starts -->
															<h3 class='box-title'>
																<i class='fa fa-fighter-jet'></i> Flight Details
																<span>
																	<a class='btn-sm btn-success navbar-btn right' href='#''><!-- btn btn-primary navbar-btn right Starts -->
																		<?php

																			$get_flight = "select * from tbl_flights where applicant_id = '$e_id'";

																			$run_flight = mysqli_query($con,$get_flight);

																			$total_flight = mysqli_num_rows($run_flight);

																		?>
																		<?php echo $total_flight; ?>
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
													            <?php

													            	$k = 0;

													            	$get_flights_e = "select * from tbl_flights where applicant_id = '$e_id'";

													            	$run_flights_e = mysqli_query($con,$get_flights_e);

													            	while($row_flights_e = mysqli_fetch_array($run_flights_e)){

													            		$app_iddd = $row_flights_e['applicant_id'];

													            		$flight_number = $row_flights_e['flight_number'];
													            		
													            		$contact_p = $row_flights_e['contact_person'];
													            		
													            		$contact_a = $row_flights_e['contact_address'];
													            		
													            		$contact_n = $row_flights_e['contact_number'];

													            		$k++;

													            ?>
													            	<tr>
													            		<td><?php echo $k; ?></td>
													                  	<td><?php echo $contact_p; ?></td>
													                  	<td><?php echo $contact_a; ?></td>
													                  	<td><?php echo $contact_n; ?></td>
													                  	<td>
													                  		<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#update_flightss<?php echo $flight_number; ?>'>
					                  											<i class='fa fa-pencil'></i>
					                  										</button>
					                  										<button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#delete_flightss<?php echo $flight_number; ?>'>
					                  											<i class='fa fa-trash-o'></i>
					                  										</button>
													                  	</td>
													            	</tr>
													            	<?php

													            	include("modal/update_flightss.php");

													            ?>
													            <?php

													            	include("modal/delete_flightss.php");

													            ?>
													            	<?php

													            	}

													           ?>
													            </tbody>
															</table>
														</div><!-- box-body table-responsive no-padding Ends -->
													</div><!--box box-success Ends -->
												</div><!-- row Ends -->
									        </div>
								        </div>
								        <div id='sched' style='display: none;'>
								        	<?php

																			$get_owwa = "select * from tbl_applicants where applicant_id = '$e_id'";

																			$run_get_owwa = mysqli_query($con,$get_owwa);

														                    $row_owwa = mysqli_fetch_assoc($run_get_owwa);

														                    $owwa = $row_edit['owwa_sched'];
														                    $bio = $row_edit['biometric_sched'];
														                    $signed = $row_edit['date_signed'];
														                    $arrival = $row_edit['date_arrival'];
														                    $visa = $row_edit['visa_number'];
														                    $remarks = $row_edit['remarks'];

																		?>
											        <div class='col-md-12'><!-- col-md-6 Starts -->
									                    <div class='form-group'>
									                        <label class='control-label col-sm-4'>
									                            OWWA Schedule :
									                        </label>
									                        <div class='col-sm-8'>
									                            <input type="text" name="owwa" value="<?php echo $owwa; ?>" disabled>
									                           <button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#edit_owwa<?php echo $e_id; ?>'>
					                  											Edit
					                  							</button>
					                  							<?php

													            	include("modal/edit_owwa.php");

													            ?>
									                        </div>  
									                    </div>
									                </div><!-- col-md-6 Ends -->
									                <div class='col-md-12'><!-- col-md-6 Starts -->
									                    <div class='form-group'>
									                        <label class='control-label col-sm-4'>
									                            Biometric Schedule :
									                        </label>
									                        <div class='col-sm-8'>
									                            <input type="text" name="bio" value="<?php echo $bio; ?>" disabled>
									                           <button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#edit_bio<?php echo $e_id; ?>'>
					                  											Edit
					                  							</button>
													            <?php

													            	include("modal/edit_bio.php");

													            ?>
									                        </div>  
									                    </div>
									                </div><!-- col-md-6 Ends -->
									                <div class='col-md-12'><!-- col-md-6 Starts -->
									                    <div class='form-group'>
									                        <label class='control-label col-sm-4'>
									                            Date Signed
									                        </label>
									                        <div class='col-sm-8'>
									                            <input type="text" name="signed" value="<?php echo $signed; ?>" disabled>
									                           
									                        </div>  
									                    </div>
									                </div><!-- col-md-6 Ends -->
									                <div class='col-md-12'><!-- col-md-6 Starts -->
									                    <div class='form-group'>
									                        <label class='control-label col-sm-4'>
									                            Date Arrival
									                        </label>
									                        <div class='col-sm-8'>
									                            <input type="text" name="arrival" value="<?php echo $arrival; ?>" disabled>
									                            <button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#edit_c<?php echo $e_id; ?>'>
					                  											Edit
					                  							</button>
													            <?php

													            	include("modal/edit_c.php");

													            ?>
									                        </div>  
									                    </div>
									                </div><!-- col-md-6 Ends -->
									                <div class='col-md-12'><!-- col-md-6 Starts -->
									                    <div class='form-group'>
									                        <label class='control-label col-sm-4'>
									                            Visa Number :
									                        </label>
									                        <div class='col-sm-8'>
									                            <input type="text" name="visa" value="<?php echo $visa; ?>" disabled>
									                           <button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#edit_visa<?php echo $e_id; ?>'>
					                  											Edit
					                  							</button>
													            <?php

													            	include("modal/edit_visa.php");

													            ?>
									                        </div>  
									                    </div>
									                </div><!-- col-md-6 Ends -->
									                <div class='col-md-12'><!-- col-md-6 Starts -->
									                    <div class='form-group'>
									                        <label class='control-label col-sm-4'>
									                            Remarks :
									                        </label>
									                        <div class='col-sm-8'>
									                        	<textarea name="remarks" cols="22" rows="3" disabled><?php echo $remarks; ?></textarea>
									                           <button class='btn btn-default btn-small' type='button' data-toggle='modal' data-target='#edit_r<?php echo $e_id; ?>'>
					                  											Edit
					                  							</button>
													            <?php

													            	include("modal/edit_r.php");

													            ?>
									                        </div>  
									                    </div>
									                </div><!-- col-md-6 Ends -->
								        </div>
					                </section><!-- content-header Ends -->
							</div><!-- panel-body Ends -->
						</div><!-- panel panel-default Ends -->
					</div><!-- box box-success Ends -->
				</div><!-- col-lg-12 Ends -->
			</div><!-- row Ends -->
		</section><!-- content Ends -->
	</div><!-- wrapper Ends -->
	<script>
	$(document).ready(function(){

	    load_data();
	    
	    function load_data(query='')
	    {
	        $.ajax({
	            url:"fetch_emp.php",
	            method:"POST",
	            data:{query:query},
	            success:function(data)
	            {
	                $('#tago').html(data);
	            }
	        })
	    }

	    $('#select_employer').change(function(){
	        $('#hidden_data').val($('#select_employer').val());
	        var query = $('#hidden_data').val();
	        load_data(query);
	    });
	    
	});
	</script>
	
	<script src="../bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="../dist/js/adminlte.min.js"></script>
	<!-- Sparkline -->
	<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap  -->
	<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll -->
	<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ChartJS -->
	<script src="../bower_components/Chart.js/Chart.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="../dist/js/pages/dashboard2.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../dist/js/demo.js"></script>
		<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script>
		  	$(function () {
		    $('#ample1').DataTable()
		    $('#ample2').DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : false,
		      'info'        : true,
		      'autoWidth'   : true
		    })
		  	})
		</script>
		<script src="../js/jq.js"></script>

<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>

<script>

	$(document).ready(function(){

		$('#btn1').on('click', function(){

			$("#applicant_info").show();

			$("#status_info").hide();

			$("#expences").hide();

			$("#flight").hide();

			$("#sched").hide();

		});
	});

	$(document).ready(function(){

		$('#btn2').on('click', function(){

			$("#status_info").show();

			$("#applicant_info").hide();

			$("#expences").hide();

			$("#flight").hide();

			$("#sched").hide();

		});
	});

	$(document).ready(function(){

		$('#btn3').on('click', function(){

			$("#expences").show();

			$("#applicant_info").hide();

			$("#status_info").hide();

			$("#flight").hide();

			$("#sched").hide();

		});
	});

	$(document).ready(function(){

		$('#btn4').on('click', function(){

			$("#flight").show();

			$("#applicant_info").hide();

			$("#status_info").hide();

			$("#expences").hide();

			$("#sched").hide();

		});
	});

	$(document).ready(function(){

		$('#btn5').on('click', function(){

			$("#sched").show();

			$("#applicant_info").hide();

			$("#status_info").hide();

			$("#expences").hide();

			$("#flight").hide();

		});
	});

</script>
</body>
</html>
<?php

	if(isset($_POST['save'])){

$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_identify']);
            $position_desired = mysqli_real_escape_string($con,$_POST['position_desired']);
            $employer = mysqli_real_escape_string($con,$_POST['employer']);
            
            $gender = mysqli_real_escape_string($con,$_POST['gender']);
            $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $email_address = mysqli_real_escape_string($con,$_POST['email_address']);
            $address = mysqli_real_escape_string($con,$_POST['address']);
            $place_birth = mysqli_real_escape_string($con,$_POST['place_birth']);
            $date_birth = mysqli_real_escape_string($con,$_POST['date_birth']);
            $civil_status = mysqli_real_escape_string($con,$_POST['civil_status']);
            $height = mysqli_real_escape_string($con,$_POST['height']);
            $weight = mysqli_real_escape_string($con,$_POST['weight']);
            $blood_type = mysqli_real_escape_string($con,$_POST['blood_type']);
            $religion = mysqli_real_escape_string($con,$_POST['religion']);
            $language_spoken = mysqli_real_escape_string($con,$_POST['language_spoken']);
            $father_name = mysqli_real_escape_string($con,$_POST['father_name']);
            $mother_name = mysqli_real_escape_string($con,$_POST['mother_name']);
            $passport_number = mysqli_real_escape_string($con,$_POST['passport_number']);
        
            $place_issue = mysqli_real_escape_string($con,$_POST['place_issue']);

		

	    		$add_process = "update tbl_applicants set address = '$address', position_desired = '$position_desired', contact_number = '$contact_number' , gender = '$gender', language_spoken = '$language_spoken', birth_date = '$date_birth', birth_place = '$place_birth', email_address = '$email_address', father_name = '$father_name', mother_name = '$mother_name', height = '$height', weight = '$weight', blood_type = '$blood_type', civil_status = '$civil_status', religion = '$religion', passport_number = '$passport_number', place_issue = '$place_issue', employer_id = '$employer' where applicant_id = '$applicant_id'";

	    		$run_add = mysqli_query($con,$add_process);

	    		if($run_add){

	    			echo "
						<script>
							alert('Updated')
						</script>
					";

					echo "
						<script>
							window.open('index.php?processing_applicants','_self')
						</script>
					";

	    		}else{

	    			echo "
						<script>
							alert('Error Updating')
						</script>
					";

	    		}

	}

?>