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
	        			Job Order
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Job Order</li>
	      			</ol>
	    		</section>
	    		<section class="content">
	    			<a href="index.php?job_order" class="btn btn-default">
	    				<i class="fa fa-reply"></i>
						Job Order
	    			</a>
	    			
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-users"></i> Job Orders
	              						
	    							</h3>
	    							<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	              					
	            				</div>
	            				<!-- /.box-header -->
	            				<div class="box-body table-responsive no-padding">
	<table class="table table-hover" id="job_table">
		<thead>
			<tr>
	            <th>#</th>
	            <th>Job Order Name</th>
	            <th>Contact Number</th>
	            <th>Email Address</th>
	            <th>Actions</th>
	        </tr>
		</thead>
		<tbody>
			<?php

				$i=0;

				$select_agent = "select * from tbl_jo";

	            $run_select = mysqli_query($con,$select_agent);

	            while($row_agent=mysqli_fetch_array($run_select)){

					$jo_no = $row_agent['jo_no'];
					$name = $row_agent['jo_name'];
					
					$contact_number = $row_agent['jo_contact'];
					$email_address = $row_agent['jo_email'];
					
					$i++;

			?>
			<tr>
	            <td><?php echo $i; ?></td>
	            <td><?php echo $name; ?></td>
	            <td><?php echo $contact_number; ?></td>
	            <td><?php echo $email_address; ?></td>
	            <td>
	                <a href="index.php?view_emp_applicants=<?php echo $jo_no; ?>" class="btn btn-default btn-small">
						View Applicants
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
	    table = document.getElementById("job_table");
	    tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
    		td = tr[i].getElementsByTagName("td")[1];
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