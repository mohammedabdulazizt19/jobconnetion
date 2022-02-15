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
	        			Dashboard
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Schedules</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			<a href="index.php?add_schedule" class="btn btn-default">
	    				<i class="fa fa-plus"></i>
						Add
	    			</a>
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-calendar-times-o"></i> Schedules 
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="index.php?schedules"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_schedules";

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
	                  						<th>Title</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$i=0;

	                						$select_documents = "select * from tbl_schedules";

	                						$run_select = mysqli_query($con,$select_documents);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $id = $row['id'];
							                    $title = $row['title'];

							                    $i++;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $title; ?></td>
	                  						<td>
	                  							<a href="index.php?edit_schedule=<?php echo $id; ?>" class="btn btn-default btn-small">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="index.php?delete_schedule=<?php echo $id; ?>" class="btn btn-default btn-small">
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