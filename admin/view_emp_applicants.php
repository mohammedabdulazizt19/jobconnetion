<?php

	if(!isset($_SESSION['email_address'])){

		echo "
			<script>
				window.open('../login.php','_self')
			</script>
		";

	}else{

?>
<?php

				if(isset($_GET['view_emp_applicants'])){

					$retriv_id = $_GET['view_emp_applicants'];

					$retriv = "select * from tbl_employers where jo_no = '$retriv_id'";
					$retriv_jo = "select * from tbl_jo where jo_no = '$retriv_id'";

					$run_retriv_jo = mysqli_query($con,$retriv_jo);

					$row_retriv_jo = mysqli_fetch_array($run_retriv_jo);

					$jo_name = $row_retriv_jo['jo_name'];

					$run_retriv = mysqli_query($con,$retriv);

					$row_retriv = mysqli_fetch_array($run_retriv);

					$employer_id = $row_retriv['employer_id'];
					$full_name = $row_retriv['full_name'];
					$company = $row_retriv['company_name'];

					$retriv2 = "select * from tbl_applicants where employer_id = '$employer_id' and status = 2";

					$run_retriv2 = mysqli_query($con,$retriv2);

					$row_retriv2 = mysqli_fetch_array($run_retriv2);
					$first_name = $row_retriv2['first_name'];
					$middle_name = $row_retriv2['middle_name'];
					$last_name = $row_retriv2['last_name'];
				

					$full = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);
					

				}
 
			?>
<section class="content-header">
	<h1>
		Job Order
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Job Order</li>
	  
	</ol>
</section>
<section class="content">
	<form action="../PHPExcel/Examples/job_order.php" method="post">
	<a class="btn btn-default" href="index.php?job_order" ">
		<i class="fa fa-reply"></i>
		Job Order
	</a>
	<a class="btn btn-default" href="index.php?search_job_applicant=<?php echo $retriv_id; ?>" ">
		<i class="fa fa-search"></i>
		Search
	</a>
	<input type="hidden" name="aydi" value="<?php echo $retriv_id; ?>">
	<input type="submit" name="submit" class="btn btn-default" value="Print">
	
	</form>
	<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-user"></i> <?php echo $jo_name; ?>
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_applicants where employer_id = '$employer_id' and status = 2";

	            								$run_total = mysqli_query($con,$total);

	            								$count_total = mysqli_num_rows($run_total);

	            								echo $count_total;

	            								?>
	        								</a><!-- btn btn-primary navbar-btn right Ends -->
	        							</span>
	    							</h3>
	              					
	            				</div>
	            				<!-- /.box-header -->
	            				<div class="box-body table-responsive no-padding">
	              					<table class="table table-hover" id="ample2">
	              						<thead>
	                					<tr>
	                  						<th>#</th>
	                  						<th>Employer</th>
	                  						<th>Company</th>
	                  						<th>Applicant</th>
	                  						<th>Date Hired</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$i=0;

	                						$select_app = "select * from tbl_applicants where employer_id = '$employer_id' and status = 2";

	                						$run_select = mysqli_query($con,$select_app);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $applicant_id = $row['applicant_id'];
							                    $emp_id = $row['employer_id'];
							                    $fname = $row['first_name'];
							                    $mname = $row['middle_name'];
							                    $lname = $row['last_name'];
	$hired = $row['date_hired'];
							                    $emp = "select * from tbl_employers where employer_id = '$emp_id'";
					

					$run_emp = mysqli_query($con,$emp);

					$row_emp = mysqli_fetch_array($run_emp);

					$full_names = $row_retriv['full_name'];
					$companys = $row_retriv['company_name'];
							                   
							                    $app_name = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);

							                    $i++;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $full_names; ?></td>
	                  						<td><?php echo $companys; ?></td>
	                  						<td><?php echo $app_name; ?></td>
	                  						<td>
	                  							<?php echo $hired; ?>
	                  						</td>
	                					</tr>
	                					<?php

	                						}

	                					?>
	                					</tbody>
	              					</table>
	            				</div>
	            				<!-- /.box-body -->
	          				</div>
	          				<!-- /.box -->
	        			</div>
	      			</div>
</section>
<?php

	}

?>