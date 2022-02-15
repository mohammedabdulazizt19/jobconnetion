<?php

	if(!isset($_SESSION['email_address'])){

		echo "
			<script>
				window.open('../login.php','_self')
			</script>
		";

	}else{

?>
<section class="content-header">
	      			<h1>
	        			Dashboard
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Employer</li>
	      			</ol>
	    		</section>
	    		<section class="content">
	    			<a href="index.php?employer" class="btn btn-default">
	    				<i class="fa fa-reply"></i>
						Employer
	    			</a>
	    			
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-briefcase"></i> Employers 
	              						
	    							</h3>
	    							<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	              					
	            				</div>
	            				<!-- /.box-header -->
	            				<div class="box-body table-responsive no-padding">
	              					<table class="table table-hover" id="employer_table">
	              						<thead>
	                					<tr>
	                  						<th hidden>#</th>
	                  						<th>Employer Number</th>
	                  						<th>Employer Name</th>
	                  						<th>Contact Number</th>
	                  						<th>Email Address</th>
	                  						<th>Created By</th>
	                  						<th>Date Created</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$select_employer = "select * from tbl_employers";

	                						$run_select = mysqli_query($con,$select_employer);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $employer_id = $row['employer_id'];
							                    $employer_number = $row['employer_number'];
							                    $first_name = $row['first_name'];
							                    $middle_name = $row['middle_name'];
							                    $last_name = $row['last_name'];
							                    $name = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);
							                    $contact = $row['contact_number'];
							                    $email = $row['email_address'];
							                    $created_by = $row['created_by'];
							                    $date_created = $row['date_created'];

           								 ?> 
	                					<tr>
	                  						<td hidden><?php echo $employer_id; ?></td>
	                  						<td><?php echo $employer_number; ?></td>
	                  						<td><?php echo $name; ?></td>
	                  						<td><?php echo $contact; ?></td>
	                  						<td><?php echo $email; ?></td>
	                  						<td><?php echo $created_by; ?></td>
	                  						<td><?php echo $date_created; ?></td>
	                  						<td>
	                  							<a href="index.php?edit_employer=<?php echo $employer_id; ?>" class="btn btn-default btn-small">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="index.php?delete_employer=<?php echo $employer_id; ?>" class="btn btn-default btn-small">
													<i class="fa fa-remove"></i>
												</a>
	                  						</td>
	                					</tr>
	                					<?php

	                						}

	                					?>
	                					</tbody>
	              					</table>
	            				</div>
	          				</div>
	          				<!-- /.box -->
	        			</div>
	      			</div>
	    		</section>
	    		<script>
	function myFunction() {
	    // Declare variables 
	    var input, filter, table, tr, td, i;
	    input = document.getElementById("myInput");
	    filter = input.value;
	    table = document.getElementById("employer_table");
	    tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
    		td = tr[i].getElementsByTagName("td")[2];
    		if (td) {
      			if (td.innerHTML.indexOf(filter) > -1) {
        			tr[i].style.display = "";
      			} else {
        			tr[i].style.display = "none";
      			}
    		} 
  		}
	}
</script>
<?php

	}

?>