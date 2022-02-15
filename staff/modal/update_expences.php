
<div class="modal fade" id="update_expences<?php echo $submitted_idd; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title"><b>UPDATE SUBMITTED DOCUMENT</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<?php

	              			$get_applicant = "select * from tbl_submitted_documents where submitted_no = '$submitted_idd'";

	              			$run_get = mysqli_query($con,$get_applicant);

	              			$row_get = mysqli_fetch_array($run_get);

	              			$applicant_id = $row_get['applicant_id'];

	              			$document_remarks = $row_get['document_remarks'];

	              			$payment_status = $row_get['payment_status'];
	              			
	              			$document_id = $row_get['document_id'];

	              			$get_docu = "select * from tbl_documents where document_id = '$document_id'";

	              			$run_docu = mysqli_query($con,$get_docu);

	              			$row_docu = mysqli_fetch_array($run_docu);

	              			$document_name = $row_docu['document_name'];

	              			$amount = $row_docu['amount'];

	              		?>
	    				<form class="form-horizontal" action="update_exp" method="post">
	    					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $applicant_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="submitted_id" class="form-control" value="<?php echo $submitted_idd; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Document Name
								</label>
								<div class="col-md-6">
									<input type="text" name="document_name" class="form-control" value="<?php echo $document_name; ?>" required disabled>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Amount
								</label>
								<div class="col-md-6">
									<input type="text" name="amount" class="form-control" value="<?php echo $amount; ?>" required disabled>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Payment Status
								</label>
								<div class="col-md-6">
									<select name="payment_status" class="form-control">
										<option name="payment_status" value="Unpaid" <?php if($payment_status == "Unpaid") { echo "selected"; } ?> >
											Unpaid
										</option>
										<option name="payment_status" value="Paid" <?php if($payment_status == "Paid") { echo "selected"; } ?> >
											Paid
										</option>
									</select>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Remarks
								</label>
								<div class="col-md-6">
									<select name="document_remarks" class="form-control">
										<option name="document_remarks" value="Not Checked" <?php if($document_remarks == "Not Checked") { echo "selected"; } ?> >
											Not Checked
										</option>
										<option name="document_remarks" value="Checked" <?php if($document_remarks == "Checked") { echo "selected"; } ?> >
											Checked
										</option>
									</select>
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
	    
