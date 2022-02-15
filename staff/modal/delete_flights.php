
<div class="modal fade" id="delete_flights<?php echo $flight_number; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title"><b>DELETE FLIGHT DETAILS</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<?php

	              			$get_flight = "select * from tbl_flights where flight_number = '$flight_number'";

	              			$run_get = mysqli_query($con,$get_flight);

	              			$row_get = mysqli_fetch_array($run_get);

	              			$applicant_id = $row_get['applicant_id'];
	              			
	              			$flight_number = $row_get['flight_number'];

	              			$contact_p = $row_get['contact_person'];
	              			
	              			$contact_a = $row_get['contact_address'];
	              			
	              			$contact_n = $row_get['contact_number'];
	              			
	              			$details = $row_get['details'];

	              		?>
	    				<form class="form-horizontal" action="delete_flight" method="post" enctype="multipart/form-data">
	    					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $applicant_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="flight_number" class="form-control" value="<?php echo $flight_number; ?>">
								</div>
							</div><!-- form-group Ends -->
							<h3 class="text-center">Are you sure you want to remove <br><span style="color: red;">Contact Person :&nbsp;<?php echo $contact_p; ?><br>
							Contact Address :&nbsp;<?php echo $contact_a; ?><br>
							Contact Number :&nbsp;<?php echo $contact_n; ?><br>
							Details :&nbsp;<?php echo $details; ?><br>
							</span>&nbsp;?</h3><br>
	                       		<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<input type="submit" name="delete" value="Delete" class="btn btn-primary form-control">
									</div>
								</div><!-- form-group Ends -->
	    				</form>
	              	</div>
	            </div>
	            <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	    </div>
	    
