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
	              					<form action="add_sub_docuu.php" method="post">
	              						<input type="hidden" name="applicant_id" value="<?php echo $e_id; ?>">
		              					<table class='table table-hover table-bordered ample2'>
											<thead>
										        <tr>
										            <th>#</th>
										            <th>Document Name</th> 
										            <th>Action</th>
										        </tr>
										    </thead>
										    <tbody>
										    	<?php

										    		$get_docu = "select * from tbl_documents";

										    		$run_docu = mysqli_query($con,$get_docu);

										    		$i = 0;

										    		while($row_docu = mysqli_fetch_array($run_docu)){

										    			$document_id = $row_docu['document_id'];

										    			$document_name = $row_docu['document_name'];

										    			$i++;

										    	?>
										    	<tr>
										    		<td><?php echo $i; ?></td>
										    		<td><?php echo $document_name; ?></td>
										    		<td>
										    			<input type="checkbox" name="check[]" value="<?php echo $document_id; ?>">
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
	    
