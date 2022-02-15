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
		Agents
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Agent</li>
	    <li class="active">Add / Edit</li>
	</ol>
</section>
<section class="content">
	<a class="btn btn-default" href="index.php?add_edit_agent" ">
		<i class="fa fa-reply"></i>
		Agents
	</a>
	
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
	<h3 class="box-title">
		<i class="fa fa-users"></i>
		Agents
	</h3>
	<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
</div>
<div class="box-body table-responsive no-padding">
	<table class="table table-hover" id="agent_table">
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
	    table = document.getElementById("agent_table");
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