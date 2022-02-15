		<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
<!-- Content Header (Page header) -->
	    		<section class="content-header">
	      			<h1>
	        			Vouchers
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Vouchers</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-file-text-o"></i> Voucher Lists
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_voucher";

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
	                  						<th>Date Release</th>
	                  						<th>Pay To</th>
	                  						<th>Amount</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$i=0;

	                						$select_documents = "select * from tbl_voucher";

	                						$run_select = mysqli_query($con,$select_documents);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $voucher_id = $row['voucher_id'];
							                    $date = $row['date_release'];
							                    $payto = $row['pay_to'];
							                    $amount = $row['amount'];

							                    $i++;

           								 ?> 
	                					<tr> 
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $date; ?></td>
	                  						<td><?php echo $payto; ?></td>
	                  						<td><?php echo $amount; ?></td>
	                  						<td>
	                  							<a href="index.php?print_voucher=<?php echo $voucher_id; ?>" class="btn btn-default btn-small">
													<i class="fa fa-print"></i>
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