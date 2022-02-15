<?php

	include("../include/db.php");

?>
<div class="box-header">
	<h3 class="box-title">
		<i class="fa fa-users"></i>
		Agents
	</h3>
	<span>
		<a href="index?agent_list" class="btn-sm btn-primary navbar-btn right">
			<?php

	            $total = "select * from tbl_agents";

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
	            <th>Agent Name</th>
	            <th>Contact Number</th>
	            <th>Email Address</th>
	            <th>Actions</th>
	        </tr>
		</thead>
		<tbody>
			<?php

				$i=0;

				$select_agent = "select * from tbl_agents";

	            $run_select = mysqli_query($con,$select_agent);

	            while($row_agent=mysqli_fetch_array($run_select)){

					$agent_id = $row_agent['agent_id'];
					$first_name = $row_agent['first_name'];
					$middle_name = $row_agent['middle_name'];
					$last_name = $row_agent['last_name'];
					$contact_number = $row_agent['contact_number'];
					$email_address = $row_agent['email_address'];
					$name = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);
					$i++;

			?>
			<tr>
	            <td><?php echo $i; ?></td>
	            <td><?php echo $name; ?></td>
	            <td><?php echo $contact_number; ?></td>
	            <td><?php echo $email_address; ?></td>
	            <td>
	               <a href="index.php?edit_agent=<?php echo $agent_id; ?>" class="btn btn-default btn-small">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="index.php?delete_agent=<?php echo $agent_id; ?>" class="btn btn-default btn-small">
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