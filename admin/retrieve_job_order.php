<?php

	include("../include/db.php");

?>
<div class="box-header">
	<h3 class="box-title">
		<i class="fa fa-users"></i>
		Job Orders
	</h3>
	<span>
		<a href="#" class="btn-sm btn-primary navbar-btn right">
			<?php

	            $total = "select * from tbl_jo";

	            $run_total = mysqli_query($con,$total);

	            $count_total = mysqli_num_rows($run_total);

	            echo $count_total;

	        ?>
		</a>
	</span>
</div>
<div class="box-body table-responsive no-padding">
	<table class="table table-hover">
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