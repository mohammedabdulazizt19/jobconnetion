
<div class="modal fade" id="update_flights<?php echo $flight_number; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title text-center"><b>EDIT FLIGHT DETAILS</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<?php

	              			$get_flights = "select * from tbl_flights where flight_number = '$flight_number'";

	              			$run_get = mysqli_query($con,$get_flights);

	              			$row_get = mysqli_fetch_array($run_get);

	              			$applicant_id = $row_get['applicant_id'];

	              			$contact_person = $row_get['contact_person'];

	              			$contact_address = $row_get['contact_address'];
	              			
	              			$contact_number = $row_get['contact_number'];
	              			
	              			$details = $row_get['details'];
	              			
	              			$local = $row_get['local_agency'];
	              			
	              			$abroad = $row_get['abroad_agency'];

	              		?>
	              		<form class="form-horizontal" action="update_flight" method="post">
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
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Contact Person
								</label>
								<div class="col-md-6">
									<input type="text" name="contact_person" class="form-control" required value="<?php echo $contact_person; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Contact Address
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="3" required name="contact_address"><?php echo $contact_address; ?></textarea>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Contact Number
								</label>
								<div class="col-md-6">
									<input type="text" name="contact_number" class="form-control" onkeypress='return isNumericKey(event)' maxlength="15" required value="<?php echo $contact_number; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Flight Details
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="4" required name="details"><?php echo $details; ?></textarea>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Local Agency Information
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="4" required name="lagency"><?php echo $local; ?></textarea>
								</div>
							</div><!-- form-group Ends --><div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Abroad Agency Information
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="4" required name="aagency"><?php echo $abroad; ?></textarea>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									
								</label>
								<div class="col-md-6">
									<input type="submit" name="update" class="form-control btn btn-primary" value="Update">
								</div>
							</div><!-- form-group Ends -->
	    				</form>
	              	</div>
	            </div>
	            <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	    </div>
	    <script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>
	    
