		<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('login.php','_self')
						</script>
					";

				}else{

			?>
<!-- Content Header (Page header) -->
	    		<section class="content-header">
	      			<h1>
	        			Employees
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Employees</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-users"></i> Employees 
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="index.php?employees"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_applicants where status = '2' and employer_id = '$employer_id'";

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
	                  						<th>Employee Name</th>
	                  						<th>Code Number</th>
	                  						<th>Created By</th>
	                  						<th>Date Created</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$select_applicant = "select * from tbl_applicants where status = '2' and employer_id = '$employer_id'";

	                						$run_select = mysqli_query($con,$select_applicant);

	                						$i = 0;

	                						while($row_applicant=mysqli_fetch_array($run_select)){

							                    $applicant_id = $row_applicant['applicant_id'];
							                    $applicant_code = $row_applicant['applicant_code'];
							                    $first_name = $row_applicant['first_name'];
							                    $last_name = $row_applicant['last_name'];
							                    $address = $row_applicant['address'];
							                    $birth_date = $row_applicant['birth_date'];
							                    $contact_number = $row_applicant['contact_number'];
							                    $email_address = $row_applicant['email_address'];
							                    $creator = $row_applicant['created_by'];
							                    $date_created = $row_applicant['date_created'];
							                    $name = $first_name . " " . $last_name;

							                    $i++;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $name; ?></td>
	                  						<td><?php echo $applicant_code; ?></td>
	                  						<td><?php echo $creator; ?></td>
	                  						<td><?php echo $date_created; ?></td>
	                  						<td>
	                  							<a href="edit_process.php?id=<?php echo $applicant_id; ?>" class="btn btn-default btn-small">
													View
												</a>
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
	    		<!-- /.content -->
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
	<?php

				}

			?>
