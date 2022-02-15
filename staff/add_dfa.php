<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i>
				Dashboard / Add DFA Appointment
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-plus fa-fw"></i>
					Add DFA Appointment
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Applicant
						</label>
						<div class="col-md-6">
							<select name="applcnt" class="form-control">
                                	<?php

                                	$get_agent = "select * from tbl_applicants order by last_name";

                                	$run_agent = mysqli_query($con,$get_agent);

                                	while($row_agent = mysqli_fetch_array($run_agent)){

                                		$applicant_id = $row_agent['applicant_id'];
                                		$fname = $row_agent['first_name'];
                                		$lname = $row_agent['last_name'];
                                		$name = ucfirst($lname) . ", " . ucfirst($fname);
                                		
                                	?>
                                	<option name="applcnt" value="<?php echo $applicant_id; ?>">
                                		<?php echo $name; ?>
                                	</option>
                                	<?php

                                		}

                                	?>
                                </select>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Payment Date
						</label>
						<div class="col-md-6">
							<input type="date" name="payment" class="form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							DFA
						</label>
						<div class="col-md-6">
							<input type="text" name="dfa" class="form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Date
						</label>
						<div class="col-md-6">
							<input type="date" name="datee" class="form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Time
						</label>
						<div class="col-md-6">
							<input type="text" name="timee" class="form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Remarks
						</label>
						<div class="col-md-6">
							<input type="text" name="remarks" class="form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Add" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?dfa" class="btn btn-danger form-control">
								Cancel
							</a>
						</div>
					</div><!-- form-group Ends -->
				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>
<?php

	if(isset($_POST['submit'])){

		$applcnt = $_POST['applcnt'];
		
		$payment = $_POST['payment'];
		
		$dfa = $_POST['dfa'];

		$datee = $_POST['datee'];
		
		$timee = $_POST['timee'];
		$remarks = $_POST['remarks'];

		$a = "select * from tbl_applicants where applicant_id = '$applcnt'";
		$b = mysqli_query($con,$a);
		$c = mysqli_fetch_array($b);

		$d = $c['last_name'];
		$e = $c['first_name'];
		
		$f = ucfirst($d) . ", " . ucfirst($e);
		$g = $c['agent_id'];
		$j = "select * from tbl_agents where agent_id = '$g'";
		$h = mysqli_query($con,$j);
		$i = mysqli_fetch_array($h);

		$k = $i['last_name'];
		$l = $i['first_name'];
		$m = ucfirst($k) . ", " . ucfirst($l);


				$insert_agent = "insert into tbl_dfa (namee,agent,dfa,datee,timee,payment,remarks) values ('$f','$m','$dfa','$datee','$timee','$payment','$remarks')";

				$run_agent = mysqli_query($con,$insert_agent);

				if($run_agent){

					echo "
						<script>
							alert('New Appointment Has Been Inserted')
						</script>
					";

					echo "
						<script>
							window.open('index.php?dfa','_self')
						</script>
					";

				}else{

					echo "
						<script>
							alert('Do Not Use Other Characters in Some Fields')
						</script>
					";

				}

		
	}

?>
<?php

				}

			?>