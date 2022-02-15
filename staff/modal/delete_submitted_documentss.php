
<div class="modal fade" id="delete_submitted_documentss<?php echo $submitted_id; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title"><b>DELETE SUBMITTED DOCUMENT</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<?php

	              			$get_applicant = "select * from tbl_submitted_documents where submitted_no = '$submitted_id'";

	              			$run_get = mysqli_query($con,$get_applicant);

	              			$row_get = mysqli_fetch_array($run_get);

	              			$applicant_id = $row_get['applicant_id'];

	              			$remarks = $row_get['remarks'];
	              			
	              			$document_id = $row_get['document_id'];

	              			$get_docu = "select * from tbl_documents where document_id = '$document_id'";

	              			$run_docu = mysqli_query($con,$get_docu);

	              			$row_docu = mysqli_fetch_array($run_docu);

	              			$document_name = $row_docu['document_name'];

	              		?>
	    				<form class="form-horizontal" action="delete_sub_docc" method="post" enctype="multipart/form-data">
	    					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $applicant_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="submitted_id" class="form-control" value="<?php echo $submitted_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							<h3 class="text-center">Are you sure you want to remove <span style="color: red;"><?php echo $document_name; ?></span>&nbsp;?</h3><br>
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
	    
