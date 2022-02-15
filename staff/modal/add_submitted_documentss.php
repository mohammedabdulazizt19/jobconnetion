<div class="modal fade" id="add_submitted_documentss<?php echo $e_id; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title pull-left"><i class="fa fa-plus"></i>&nbsp;<b>ADD DOCUMENTS</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<div class="row">
	              			<div class="box box-success">
	              				<div class="box-header">
	              					<h3 class="box-title">
	              						<i class="fa fa-book"></i>Document List
	              						<span>
	              							<a href="#" class="btn-sm btn-success navbar-btn right">
	              								<?php

	              									$get_documents = "select * from tbl_documents";

	              									$run_documents = mysqli_query($con,$get_documents);

	              									$total_documents = mysqli_num_rows($run_documents);

	              									echo $total_documents;

	              								?>
	              							</a>
	              						</span>
	              					</h3>
	              				</div>
	              				<div class="box-body table-responsive no-padding">
	              					<form action="add_sub_docuu.php" method="post" class="form-horizontal" enctype="multipart/form-data">
		              					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $e_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Document Name
								</label>
								<div class="col-md-6">
									<select name="dn" class="form-control">
                                	<?php

                                	$get_agent = "select * from tbl_documents";

                                	$run_agent = mysqli_query($con,$get_agent);

                                	while($row_agent = mysqli_fetch_array($run_agent)){

                                		$doc_id = $row_agent['document_id'];
                                		$doc_name = $row_agent['document_name'];
                                		
                                	?>
                                	<option name="dn" value="<?php echo $doc_id; ?>">
                                		<?php echo $doc_name; ?>
                                	</option>
                                	<?php

                                		}

                                	?>
                                </select>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									File
								</label>
								<div class="col-md-6">
									<input type="file" name="file_name" class="form-control" required>
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									
								</label>
								<div class="col-md-6">
									<input type="submit" name="add" class="form-control btn btn-primary" value="Insert">
								</div>
							</div><!-- form-group Ends -->
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
	    
