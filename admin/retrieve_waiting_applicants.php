<?php

	include("../include/db.php");

?>
<div class="box-header">
	<h3 class="box-title">
		<i class="fa fa-users"></i>
		Waiting Applicants
	</h3>
	<span>
		<a href="index?waiting_applicants" class="btn-sm btn-primary navbar-btn right">
			<?php

	            $total = "select * from tbl_applicants where status = '1'";

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
	            <th>Applicant Name</th>
	            <th>Address</th>
	            <th>Birth Date</th>
	            <th>Contact Number</th>
	            <th>Email Address</th>
	            <th>Created By</th>
	            <th>Date Created</th>
	            <th>Actions</th>
	        </tr>
		</thead>
		<tbody>
			<?php

			$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

				$i=0;

				$select_applicant = "select * from tbl_applicants where status = '1'";

	            $run_select = mysqli_query($con,$select_applicant);

	            while($row_applicant=mysqli_fetch_array($run_select)){

					$applicant_id = $row_applicant['applicant_id'];
					$first_name = $row_applicant['first_name'];
					$last_name = $row_applicant['last_name'];
					$address = $row_applicant['address'];
					$birth_date = $row_applicant['birth_date'];
					$contact_number = $row_applicant['contact_number'];
					$email_address = $row_applicant['email_address'];
					$creator = $row_applicant['created_by'];
					$date_created = $row_applicant['date_created'];
					$name = $first_name . " " . $last_name;
					$i++;

			?>
			<tr>
	            <td><?php echo $i; ?></td>
	            <td><?php echo $name; ?></td>
	            <td><?php echo $address; ?></td>
	            <td><?php echo $birth_date; ?></td>
	            <td><?php echo $contact_number; ?></td>
	            <td><?php echo $email_address; ?></td>
	            <td><?php echo $creator; ?></td>
	            <td><?php echo $date_created; ?></td>
	            <td>
	                <a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && edit_waiting_applicant=<?php echo $applicant_id; ?> && <?php echo $real; ?>" class="btn btn-default btn-small">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && delete_waiting_applicant=<?php echo $applicant_id; ?> && <?php echo $real; ?>" class="btn btn-default btn-small">
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