<div class="modal fade" id="add_flightss<?php echo $e_id; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title text-center"><b>ADD FLIGHTS</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<form class="form-horizontal" action="add_flightt.php" method="post">
	    					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $e_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Contact Person
								</label>
								<div class="col-md-6">
									<input type="text" name="contact_person" class="form-control" required>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Contact Address
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="3" required name="contact_address"></textarea>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Contact Number
								</label>
								<div class="col-md-6">
									<input type="text" name="contact_number" class="form-control" required onkeypress='return isNumericKey(event)' maxlength="15">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Flight Details
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="4" required name="details"></textarea>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									
								</label>
								<div class="col-md-6">
									<input type="submit" name="add" class="form-control btn btn-primary" value="Add">
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
	    
