<?php

	include("../include/db.php");

?>
<div class="box-header">
	<h3 class="box-title">
		<i class="fa fa-users"></i>
		Processing List
	</h3>
	<span>
		<a href="index.php?processing_applicants" class="btn-sm btn-primary navbar-btn right">
			<?php

	            $total = "select * from tbl_applicants where status = '2'";

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
	            <th>Code Number</th>
	            <th>Employer Name</th>
	            <th>Created By</th>
	            <th>Date Hired</th>
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

				$select_applicant = "select * from tbl_applicants where status = '2'";

	            $run_select = mysqli_query($con,$select_applicant);

	            while($row_applicant=mysqli_fetch_array($run_select)){

					$applicant_id = $row_applicant['applicant_id'];
					$applicant_code = $row_applicant['applicant_code'];
					$first_name = $row_applicant['first_name'];
					$last_name = $row_applicant['last_name'];
					$employer_id = $row_applicant['employer_id'];
					$creator = $row_applicant['created_by'];
					$date_hired = $row_applicant['date_hired'];
					$name = $first_name . " " . $last_name;
					$get_employer = "select * from tbl_employers where employer_id = '$employer_id'";
					$run_employer = mysqli_query($con,$get_employer);
					$row_employer = mysqli_fetch_array($run_employer);
					$full_name = $row_employer['full_name'];
					$i++;

			?>
			<tr>
	            <td><?php echo $i; ?></td>
	            <td><?php echo $name; ?></td>
	            <td><?php echo $applicant_code; ?></td>
	            <td><?php echo $full_name; ?></td>
	            <td><?php echo $creator; ?></td>
	            <td><?php echo $date_hired; ?></td>
	            <td>
	                <a href="edit_processing_applicant.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && id=<?php echo $applicant_id; ?> && <?php echo $real; ?>" class="btn btn-default btn-small">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && delete_processing_applicant=<?php echo $applicant_id; ?> && <?php echo $real; ?>" class="btn btn-default btn-small">
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