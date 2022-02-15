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
		Waiting Applicants
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Dashboard</li>
	    <li class="active">Waiting Applicants</li>
	</ol>
</section>
<section class="content">
	<a href="index.php?waiting_applicants" class="btn btn-default">
	    <i class="fa fa-reply"></i>
		Waiting Applicant
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">
						<i class="fa fa-users"></i>
						Waiting Applicants
					</h3>
					<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover" id="waiting_applicants_table">
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
					                <a href="index.php?edit_waiting_applicant=<?php echo $applicant_id; ?>" class="btn btn-default btn-small">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="index.php?delete_waiting_applicant=<?php echo $applicant_id; ?>" class="btn btn-default btn-small">
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