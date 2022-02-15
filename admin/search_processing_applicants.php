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
		Processing Applicants
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Dashboard</li>
	    <li class="active">Processing Applicants</li>
	</ol>
</section>
<section class="content">
	<a href="index.php?processing_applicants" class="btn btn-default">
	    <i class="fa fa-reply"></i>
		Processing Applicant
	</a>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">
						<i class="fa fa-users"></i>
						Processing List
					</h3>
					<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover" id="processing_applicants_table">
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
									$date_created = $row_applicant['date_hired'];
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
					            <td><?php echo $date_created; ?></td>
					            <td>
					                <a href="edit_processing_applicant.php?id=<?php echo $applicant_id; ?>" class="btn btn-default btn-small">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="index.php?delete_processing_applicant=<?php echo $applicant_id; ?>" class="btn btn-default btn-small">
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
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
	function myFunction() {
	    // Declare variables 
	    var input, filter, table, tr, td, i;
	    input = document.getElementById("myInput");
	    filter = input.value;
	    table = document.getElementById("processing_applicants_table");
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