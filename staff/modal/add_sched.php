
<div class="modal fade" id="add_sched<?php echo $e_id; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title pull-left"><i class="fa fa-plus"></i>&nbsp;<b>ADD SCHEDULE</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<div class="row">
	              			<div class="box box-success">
	              				<div class="box-header">
	              					<h3 class="box-title">
	              						<i class="fa fa-book"></i>Schedules
	              						<span>
	              							<a href="#" class="btn-sm btn-success navbar-btn right">
	              								<?php

	              									$get_documents = "select * from tbl_schedules";

	              									$run_documents = mysqli_query($con,$get_documents);

	              									$total_documents = mysqli_num_rows($run_documents);

	              									echo $total_documents;

	              								?>
	              							</a>
	              						</span>
	              					</h3>
	              				</div>
	              				<div class="box-body table-responsive no-padding">
	              					<form action="add_schedd" method="post">
	              						<input type="hidden" name="applicant_id" value="<?php echo $e_id; ?>">
		              					<table class='table table-hover table-bordered ample2'>
											<thead>
										        <tr>
										            <th>#</th>
										            <th>Schedule</th> 
										            <th>Action</th>
										        </tr>
										    </thead>
										    <tbody>
										    	<?php

										    		$get_docu = "select * from tbl_schedules";

										    		$run_docu = mysqli_query($con,$get_docu);

										    		$i = 0;

										    		while($row_docu = mysqli_fetch_array($run_docu)){

										    			$id = $row_docu['id'];

										    			$title = $row_docu['title'];

										    			$i++;

										    	?>
										    	<tr>
										    		<td><?php echo $i; ?></td>
										    		<td><?php echo $title; ?></td>
										    		<td>
										    			<input type="checkbox" name="check[]" value="<?php echo $id; ?>">
										    		</td>
										    	</tr>
										    	<?php

										    		}

										    	?>
										    </tbody>
										    <tfoot>
										    	<tr>
										    		<td></td>
										    		<td></td>
										    		<td><button type="submit" name="add" class="btn btn-primary form-control"><i class="fa fa-plus"></i>&nbsp;Add</button></td>
										    	</tr>
										    </tfoot>
										</table>
									</form>
	              				</div>
	              			</div>
	              		</div>
	              	</div>
	            </div>
	            <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	    </div>
	    
