
<div class="modal fade" id="edit_c<?php echo $e_id; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title text-center"><b>EDIT</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<?php

	              			$get_flights = "select * from tbl_applicants where applicant_id = '$e_id'";

	              			$run_get = mysqli_query($con,$get_flights);

	              			$row_get = mysqli_fetch_array($run_get);

	              			$applicant_id = $row_get['applicant_id'];

	              			$signed = $row_get['date_signed'];
	              			$arrival = $row_get['date_arrival'];

	              		?>
	              		<form class="form-horizontal" action="edit_cc" method="post">
	    					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $applicant_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Date Signed
								</label>
								<div class="col-md-6">
									<input type="date" name="signed" class="form-control" value="<?php echo $signed; ?>"> 
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Date Arrival
								</label>
								<div class="col-md-6">
									<input type="date" name="arrival" class="form-control" value="<?php echo $arrival; ?>">
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
	    
