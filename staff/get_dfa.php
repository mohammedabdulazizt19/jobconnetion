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
	        			DFA Appointment
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">DFA Appointment</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			
	    			
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<form class="form-horizontal" action="../PHPExcel/Examples/dfa_list.php" method="post">
	    				<div class="form-group">
	    					<label class="control-label col-md-3"></label>
	    				<div class="col-md-6">
                           <label class="control-label">Select Date</label>
                        </div>
	    				</div>
	    				
	    				<div class="form-group">
	    					<label class="col-md-3 control-label">
                            
                        </label>
	    				<div class="col-md-6">
                           <input type="date" name="dt" class="form-control">
                        </div>
	    				</div>
	    				<div class="form-group">
	    					<label class="col-md-3 control-label">
                            
                        </label>
	    				<div class="col-md-6">
                            <input type="submit" name="submit" value="Get Excel" class="btn btn-primary form-control">
                        </div>
	    				</div>
	    				
	    				
	    			</form>
	            				
	          				</div>
	          				<!-- /.box -->
	        			</div>
	      			</div>
	    		</section>
	    		<!-- /.content -->
	    		
<?php

				}

			?>