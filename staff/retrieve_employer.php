								<?php

										include("../include/db.php");

								?>
								<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-briefcase"></i> Employers 
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="index.php?employer"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_employers";

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
	              					<table class="table table-hover">
	              						<thead>
	                					<tr>
	                  						<th hidden>#</th>
	                  						<th>Employer Number</th>
	                  						<th>Employer Name</th>
	                  						<th>Contact Number</th>
	                  						<th>Email Address</th>
	                  						<th>Created By</th>
	                  						<th>Date Created</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                					$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	                						$select_employer = "select * from tbl_employers";

	                						$run_select = mysqli_query($con,$select_employer);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $employer_id = $row['employer_id'];
							                    $employer_number = $row['employer_number'];
							                    $first_name = $row['first_name'];
							                    $middle_name = $row['middle_name'];
							                    $last_name = $row['last_name'];
							                    $name = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);
							                    $contact = $row['contact_number'];
							                    $email = $row['email_address'];
							                    $created_by = $row['created_by'];
							                    $date_created = $row['date_created'];

           								 ?> 
	                					<tr>
	                  						<td hidden><?php echo $employer_id; ?></td>
	                  						<td><?php echo $employer_number; ?></td>
	                  						<td><?php echo $name; ?></td>
	                  						<td><?php echo $contact; ?></td>
	                  						<td><?php echo $email; ?></td>
	                  						<td><?php echo $created_by; ?></td>
	                  						<td><?php echo $date_created; ?></td>
	                  						<td>
	                  							<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && edit_employer=<?php echo $employer_id; ?> && <?php echo $real; ?>" class="btn btn-default btn-small">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && delete_employer=<?php echo $employer_id; ?> && <?php echo $real; ?>" class="btn btn-default btn-small">
													<i class="fa fa-remove"></i>
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