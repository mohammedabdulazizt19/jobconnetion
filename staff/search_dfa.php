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
	    <li class="active">Dashboard</li>
	    <li class="active">DFA Appointment</li>
	</ol>
</section>
<section class="content">
	<a href="index.php?waiting_applicants" class="btn btn-default">
	    <i class="fa fa-reply"></i>
		DFA Appointment
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">
						<i class="fa fa-users"></i>
						DFA Appointment
					</h3>
					<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover" id="waiting_applicants_table">
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
			</div>
		</div>
	</div>
</section>
<script>
	function myFunction() {
	    // Declare variables 
	    var input, filter, table, tr, td, i;
	    input = document.getElementById("myInput");
	    filter = input.value;
	    table = document.getElementById("waiting_applicants_table");
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