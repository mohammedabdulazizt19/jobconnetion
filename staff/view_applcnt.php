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

				if(isset($_GET['view_applcnt'])){

					$retriv_id = $_GET['view_applcnt'];

					$retriv = "select * from tbl_agents where agent_id = '$retriv_id'";

					$run_retriv = mysqli_query($con,$retriv);

					$row_retriv = mysqli_fetch_array($run_retriv);

					$frst = $row_retriv['first_name'];
					$mdl = $row_retriv['middle_name'];
					$lst = $row_retriv['last_name'];

					$name = ucfirst($frst) . " " . ucfirst($mdl) . " " . ucfirst($lst);

					

				}

			?>
<section class="content-header">
	<h1>
		Agents
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Agent</li>
	    <li class="active">View Applicant</li>
	</ol>
</section>
<section class="content">
	<a class="btn btn-default" href="index.php?agent_list" ">
		<i class="fa fa-reply"></i>
		Agents
	</a>
	<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-user"></i> <?php echo $name; ?>
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_applicants where agent_id = '$retriv_id'";

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
	                  						<th>Applicant Name</th>
	                  						<th>Contact Number</th>
	                  						<th>Email Address</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$i=0;

	                						$select_app = "select * from tbl_applicants where agent_id = '$retriv_id'";

	                						$run_select = mysqli_query($con,$select_app);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $applicant_id = $row['applicant_id'];
							                    $fname = $row['first_name'];
							                    $mname = $row['middle_name'];
							                    $lname = $row['last_name'];
							                    $contact = $row['contact_number'];
							                    $email = $row['email_address'];
							                    $app_name = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);

							                    $i++;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $app_name; ?></td>
	                  						<td><?php echo $contact; ?></td>
	                  						<td><?php echo $email; ?></td>
	                  						<td>
	                  							<a href="index.php?view_expense=<?php echo $applicant_id; ?>" class="btn btn-default btn-small">
													View Expenses
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
<?php

	}

?>