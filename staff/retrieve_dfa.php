<?php

	include("../include/db.php");

?>
<div class="box-header">
	<h3 class="box-title">
		<i class="fa fa-users"></i>
		Appointment List
	</h3>
	<span>
		<a href="#" class="btn-sm btn-primary navbar-btn right">
			<?php

	            $total = "select * from tbl_dfa";

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
	            <th>Agent</th>
	            <th>DFA</th>
	            <th>Date</th>
	            <th>Time</th>
	            <th>Actions</th>
	        </tr>
		</thead>
		<tbody>
			<?php

			$jScript = md5(rand(1,9));
			 $newScript = md5(rand(1,9));
			 $Script = md5(rand(1,9));
			 $getUpdate = md5(rand(1,9));

				$i=0;

				$select_agent = "select * from tbl_dfa";

	            $run_select = mysqli_query($con,$select_agent);

	            while($row_agent=mysqli_fetch_array($run_select)){

					$dfa_id = $row_agent['dfa_id'];
					$name = $row_agent['namee'];
					$agent = $row_agent['agent'];
					$dfa = $row_agent['dfa'];
					$date = $row_agent['datee'];
					$time = $row_agent['timee'];
					$i++;

			?>
			<tr>
	            <td><?php echo $i; ?></td>
	            <td><?php echo $name; ?></td>
	            <td><?php echo $agent; ?></td>
	            <td><?php echo $dfa; ?></td>
	            <td><?php echo $date; ?></td>
	            <td><?php echo $time; ?></td>
	            <td>
	                <a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view=<?php echo $Script; ?> && edit_dfa=<?php echo $dfa_id; ?> && getView=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
						Edit
					</a>
					<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && remove=<?php echo $Script; ?> && delete_dfa=<?php echo $dfa_id; ?> && getView=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
						Delete
					</a>
	            </td>
	        </tr>
	        <?php

	            }

	        ?>
		</tbody>
	</table>
</div>