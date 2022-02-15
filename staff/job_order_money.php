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

			 $jScript = md5(rand(1,9));
			 $newScript = md5(rand(1,9));
			 $Script = md5(rand(1,9));
			 $getUpdate = md5(rand(1,9));
		   	 $getDelete = md5(rand(1,9));
		   	 $getRetrieve = md5(rand(1,9));

				if(isset($_GET['job_order_money'])){

					$retriv_id = $_GET['job_order_money'];

					$retriv = "select * from tbl_jo where jo_no = '$retriv_id'";

					$run_retriv = mysqli_query($con,$retriv);

					$row_retriv = mysqli_fetch_array($run_retriv);

					$name = $row_retriv['jo_name'];

				}

			?>
<section class="content-header">
	<h1>
		Money Given
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Job Order</li>
	    <li class="active">Money Given</li>
	</ol>
</section> 
<section class="content">
	<a class="btn btn-default" href="index.php?job_order">
		<i class="fa fa-reply"></i>
		Back
	</a>
	<a class="btn btn-default" href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && add_expp=<?php echo $Script; ?> && add_money=<?php echo $retriv_id; ?> && getAdd=<?php echo $getUpdate; ?>">
		<i class="fa fa-plus"></i>
		Add Given Money
	</a>
	<a class="btn btn-default" href="../PHPExcel/Examples/jo_money.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view=<?php echo $Script; ?> && retrieve=<?php echo $retriv_id; ?> && getView=<?php echo $getRetrieve; ?>">
		<i class="fa fa-print"></i>
		Get Excel
	</a>
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-user"></i> <?php echo $name; ?>
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_money where jo_no = '$retriv_id'";

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
	                  						<th>Description</th>
	                  						<th>Amount</th>
	                  						<th>Date</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$i=0;
	                						$total = 0;

	                						$select_app = "select * from tbl_money where jo_no = '$retriv_id'";

	                						$run_select = mysqli_query($con,$select_app);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $exp_id = $row['money_id'];
							                    $title = $row['title'];
							                    $amount = $row['amount'];
							                    $date = $row['start_date'];
							                    $i++;
							                    $total+= $amount;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $title; ?></td>
	                  						<td><?php echo $amount; ?></td>
	                  						<td><?php echo $date; ?></td>
	                  						<td>
	                  							<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && edit_mony=<?php echo $Script; ?> && edit_money=<?php echo $exp_id; ?> && getEdit=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && delete_mony=<?php echo $Script; ?> && delete_money=<?php echo $exp_id; ?> && getDelete=<?php echo $getDelete; ?>" class="btn btn-default btn-small">
													<i class="fa fa-remove"></i>
												</a>
	                  						</td>
	                					</tr>
	                					<?php

	                						}

	                					?>
	                					</tbody>
	                					<tfoot>
									            	<tr>
									            		<th colspan='3'>
									            			
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